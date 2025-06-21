<?php

//ini_set('display_errors', 0);
error_reporting(0);


$opencart_path = realpath(dirname(__FILE__) . '/../');
require_once $opencart_path . '/config.php';
require_once DIR_SYSTEM . 'startup.php';

$registry = new Registry();
$loader = new Loader($registry);
$registry->set('load', $loader);

$config = new Config();
$registry->set('config', $config);

$db = new DB(DB_DRIVER, DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$registry->set('db', $db);

$request = new Request();
$registry->set('request', $request);

$response = new Response();
$registry->set('response', $response);

$event = new Event($registry);
$registry->set('event', $event);

$log = new Log('cron.log');
$registry->set('log', $log);

$config->load('default');
$config->load('catalog');
$config->load('admin');


$customerModel = $registry->get('model_customer_customer');


$sql = "SELECT * FROM " . DB_PREFIX . "customer c";
$query = $db->query($sql);


$url = 'https://mawonet.retailcrm.ru/api/v5/customers/history';
$apiKey = 'Tagwz9WWvsLJPoTCyQgYQugmB1XRhyfW';

$curlSession = curl_init();
curl_setopt($curlSession, CURLOPT_URL, $url . '?apiKey=' . $apiKey);
curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

$jsonData = json_decode(curl_exec($curlSession), true);
curl_close($curlSession);


$customers = [];

foreach ($jsonData['history'] as $result) {
    if ($result['source'] == 'code') {
        continue;
    }

    $sql = "SELECT DISTINCT COUNT(*) as total FROM " . DB_PREFIX . "customer WHERE email = '" . $result['customer']['email'] . "'";
    $isExist = $db->query($sql)->rows;
    if ($isExist[0]['total'] == 0) {
        $db->query("INSERT INTO " . DB_PREFIX . "customer SET customer_group_id = '" . 1 . "', firstname = '" . $result['customer']['firstName'] . "', lastname = '" . $result['customer']['lastName'] . "', email = '" . $result['customer']['email'] . "', telephone = '" .  $result['customer']['phones'][0]['number'] . "', custom_field = '" .json_encode(array()) . "', newsletter = '" . 0 . "', salt = '" . $db->escape($salt = token(9)) . "', password = '" . $db->escape(sha1($salt . sha1($salt . 'test'))) . "', status = '" . 1 . "', safe = '" . 0 . "', date_added = NOW()");
    }

}

