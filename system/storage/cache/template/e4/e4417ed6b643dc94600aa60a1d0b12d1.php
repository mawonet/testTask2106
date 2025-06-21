<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/module/retailcrm.twig */
class __TwigTemplate_d70b47fee2211973207aaf6e8bfc51ee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo " ";
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                ";
        // line 6
        if (($context["export_file"] ?? null)) {
            // line 7
            echo "                    <button type=\"button\" id=\"export\" data-toggle=\"tooltip\" title=\"";
            echo ($context["text_button_export"] ?? null);
            echo "\" class=\"btn btn-success\"><i class=\"fa fa-download\"></i></button>
                ";
        }
        // line 9
        echo "                <button type=\"button\" id=\"icml\" data-toggle=\"tooltip\" title=\"";
        echo ($context["text_button_catalog"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-file-text-o\"></i></button>
                <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 10
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 11
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo " ";
        echo ($context["module_version"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 21
        if (($context["error_warning"] ?? null)) {
            // line 22
            echo "            <div class=\"alert alert-danger\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 24
            echo ($context["error_warning"] ?? null);
            echo "
            </div>
        ";
        }
        // line 27
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", true, true, false, 27)) {
            // line 28
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                ";
            // line 30
            echo ($context["text_notice"] ?? null);
            echo "
                <a href=\"";
            // line 31
            echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", false, false, false, 31);
            echo "/admin/settings#t-main\">";
            echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", false, false, false, 31);
            echo "/admin/settings#t-main</a>
            </div>
        ";
        }
        // line 34
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-body\">
                <form action=\"";
        // line 36
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 38
        echo ($context["general_tab_text"] ?? null);
        echo "</a></li>
                        ";
        // line 39
        if ((((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", true, true, false, 39) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", false, false, false, 39)) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", true, true, false, 39)) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", false, false, false, 39))) {
            // line 40
            echo "                            <li><a href=\"#tab-references\" data-toggle=\"tab\">";
            echo ($context["references_tab_text"] ?? null);
            echo "</a></li>
                            <li><a href=\"#tab-collector\" data-toggle=\"tab\">";
            // line 41
            echo ($context["collector_tab_text"] ?? null);
            echo "</a></li>
                            <li><a href=\"#tab-consultant\" data-toggle=\"tab\">";
            // line 42
            echo ($context["consultant_tab_text"] ?? null);
            echo "</a></li>
                            <li><a href=\"#tab-custom_fields\" data-toggle=\"tab\"> ";
            // line 43
            echo ($context["custom_fields_tab_text"] ?? null);
            echo " </a></li>
                            <li><a href=\"#tab-logs\" data-toggle=\"tab\">";
            // line 44
            echo ($context["logs_tab_text"] ?? null);
            echo "</a></li>
                        ";
        }
        // line 46
        echo "                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab-general\">
                            <input type=\"hidden\" name=\"module_retailcrm_status\" value=\"1\">
                            <fieldset>
                                <legend>";
        // line 51
        echo ($context["retailcrm_base_settings"] ?? null);
        echo "</legend>
                                <div class=\"form-group retailcrm_unit\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_url\">";
        // line 53
        echo ($context["retailcrm_url"] ?? null);
        echo "</label>
                                    <div class=\"col-lg-4 col-md-6 col-sm-10\">
                                        <input class=\"form-control\" id=\"retailcrm_url\" type=\"text\" name=\"module_retailcrm_url\" value=\"";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", true, true, false, 55)) {
            echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", false, false, false, 55);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group retailcrm_unit retailcrm_disable_border\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_apikey\">";
        // line 59
        echo ($context["retailcrm_apikey"] ?? null);
        echo "</label>
                                    <div class=\"col-lg-4 col-md-6 col-sm-10\">
                                        <input class=\"form-control\" id=\"retailcrm_apikey\" type=\"text\" name=\"module_retailcrm_apikey\" value=\"";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", true, true, false, 61)) {
            echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", false, false, false, 61);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group retailcrm_unit\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_corporate_enabled\">";
        // line 65
        echo ($context["corporate_enabled_label"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_corporate_enabled\" value=\"1\"
                                                    ";
        // line 69
        if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_corporate_enabled", [], "any", true, true, false, 69) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_corporate_enabled", [], "any", false, false, false, 69) == 1))) {
            // line 70
            echo "                                                        checked
                                                    ";
        }
        // line 71
        echo " />
                                            ";
        // line 72
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_corporate_enabled\" value=\"0\"
                                                    ";
        // line 76
        if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_corporate_enabled", [], "any", true, true, false, 76) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_corporate_enabled", [], "any", false, false, false, 76) == 0))) {
            // line 77
            echo "                                                        checked
                                                    ";
        }
        // line 78
        echo " />
                                            ";
        // line 79
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 85
        echo ($context["retailcrm_countries_settings"] ?? null);
        echo "</legend>
                                <div class=\"form-group retailcrm_unit\">
                                    <label class=\"col-sm-2 control-label\"></label>
                                    <div class=\"col-lg-4 col-md-6 col-sm-10\">
                                        <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                                            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 91
            echo "                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input type=\"checkbox\" name=\"module_retailcrm_country[]\" value=\"";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 93);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_country", [], "any", true, true, false, 93) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 93), twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_country", [], "any", false, false, false, 93)))) {
                echo " ";
                echo "checked";
                echo " ";
            }
            echo "\">
                                                        ";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 94);
            echo "
                                                    </label>
                                                </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 103
        echo ($context["icml_settings"] ?? null);
        echo "</legend>
                                <div class=\"form-group retailcrm_unit retailcrm_disable_border\">
                                    <label class=\"col-sm-2 control-label question-mark\" for=\"module_retailcrm_icml_service_enabled\" title=\"";
        // line 105
        echo ($context["icml_service_description"] ?? null);
        echo "\">";
        echo ($context["icml_service_enabled_label"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_icml_service_enabled\" value=\"1\"
                                                    ";
        // line 109
        if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_icml_service_enabled", [], "any", true, true, false, 109) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_icml_service_enabled", [], "any", false, false, false, 109) == 1))) {
            // line 110
            echo "                                                        checked
                                                    ";
        }
        // line 111
        echo " />
                                            ";
        // line 112
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_icml_service_enabled\" value=\"0\"
                                                    ";
        // line 116
        if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_icml_service_enabled", [], "any", true, true, false, 116) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_icml_service_enabled", [], "any", false, false, false, 116) == 0))) {
            // line 117
            echo "                                                        checked
                                                    ";
        }
        // line 118
        echo " />
                                            ";
        // line 119
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                                <div class=\"form-group retailcrm_unit retailcrm_disable_border\">
                                    <label class=\"col-sm-2 control-label\">";
        // line 124
        echo ($context["text_currency_label"] ?? null);
        echo "</label>
                                    <div class=\"col-md-4 col-sm-10\">
                                        <select id=\"module_retailcrm_currency\" name=\"module_retailcrm_currency\" class=\"form-control\">
                                            ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 128
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "status", [], "any", false, false, false, 128) == 1)) {
                // line 129
                echo "                                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 129);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_currency", [], "any", true, true, false, 129) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_currency", [], "any", false, false, false, 129) == twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 129)))) {
                    echo " selected=\"selected\" ";
                }
                echo ">
                                                        ";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 130);
                echo "
                                                    </option>
                                                ";
            }
            // line 133
            echo "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group retailcrm_unit retailcrm_disable_border\">
                                    <label class=\"col-sm-2 control-label\">";
        // line 138
        echo ($context["text_lenght_label"] ?? null);
        echo "</label>
                                    <div class=\"col-md-4 col-sm-10\">
                                        <select id=\"module_retailcrm_lenght\" name=\"module_retailcrm_lenght\" class=\"form-control\">
                                            ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lenghts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lenght"]) {
            // line 142
            echo "                                                <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["lenght"], "length_class_id", [], "any", false, false, false, 142);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_lenght", [], "any", true, true, false, 142) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_lenght", [], "any", false, false, false, 142) == twig_get_attribute($this->env, $this->source, $context["lenght"], "length_class_id", [], "any", false, false, false, 142)))) {
                echo " selected=\"selected\" ";
            }
            echo ">
                                                    ";
            // line 143
            echo twig_get_attribute($this->env, $this->source, $context["lenght"], "title", [], "any", false, false, false, 143);
            echo "
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lenght'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
        // line 151
        echo ($context["status_changes"] ?? null);
        echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_status_changes\">";
        // line 153
        echo ($context["text_status_changes"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_retailcrm_status_changes\" value=\"1\"
                                            ";
        // line 157
        if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status_changes", [], "any", true, true, false, 157) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status_changes", [], "any", false, false, false, 157) == 1))) {
            // line 158
            echo "                                                checked
                                            ";
        }
        // line 159
        echo " />
                                        ";
        // line 160
        echo ($context["text_yes"] ?? null);
        echo "
                                    </label>
                                    <label class=\"radio-inline\">
                                        <input type=\"radio\" name=\"module_retailcrm_status_changes\" value=\"0\"
                                        ";
        // line 164
        if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status_changes", [], "any", true, true, false, 164) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status_changes", [], "any", false, false, false, 164) == 0))) {
            // line 165
            echo "                                            checked
                                        ";
        }
        // line 166
        echo " />
                                        ";
        // line 167
        echo ($context["text_no"] ?? null);
        echo "
                                    </label>
                                  </div>
                                </div>
                            </fieldset>
                            ";
        // line 172
        if ((((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", true, true, false, 172) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_apikey", [], "any", false, false, false, 172)) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", true, true, false, 172)) && twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_url", [], "any", false, false, false, 172))) {
            // line 173
            echo "                            ";
            if (twig_length_filter($this->env, ($context["retailcrm_errors"] ?? null))) {
                // line 174
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["retailcrm_errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["retailcrm_error"]) {
                    // line 175
                    echo "                                <div class=\"warning\">";
                    echo $context["retailcrm_error"];
                    echo "</div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['retailcrm_error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 177
                echo "                            ";
            } else {
                // line 178
                echo "                            <fieldset>
                                <legend>";
                // line 179
                echo ($context["retailcrm_upload_order"] ?? null);
                echo "</legend>
                                <div class=\"form-group retailcrm_unit\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 181
                echo ($context["text_button_export_order"] ?? null);
                echo " № </label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-3 col-md-6 col-sm-6\">
                                                <input type=\"text\" name=\"order_id\" class=\"form-control\">
                                            </div>
                                            <div class=\"col-lg-3 col-md-4 col-sm-6\">
                                                <button type=\"button\" id=\"export_order\" data-toggle=\"tooltip\" title=\"";
                // line 188
                echo ($context["text_button_export_order"] ?? null);
                echo "\" class=\"btn btn-success\"><i class=\"fa fa-download\"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
                // line 195
                echo ($context["special_price_settings"] ?? null);
                echo "</legend>
                                <div class=\"form-group retailcrm_unit\">
                                    ";
                // line 197
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["customerGroups"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["customerGroup"]) {
                    // line 198
                    echo "                                        ";
                    $context["cud"] = twig_get_attribute($this->env, $this->source, $context["customerGroup"], "customer_group_id", [], "any", false, false, false, 198);
                    // line 199
                    echo "                                        <div class=\"row retailcrm_unit\">
                                            <label class=\"col-sm-2 control-label\" for=\"opencart_customer_group_";
                    // line 200
                    echo ($context["cud"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customerGroup"], "name", [], "any", false, false, false, 200);
                    echo "</label>
                                            <div class=\"col-md-4 col-sm-10\">
                                                <select id=\"module_retailcrm_special_";
                    // line 202
                    echo ($context["cud"] ?? null);
                    echo "\" name=\"module_retailcrm_special_";
                    echo ($context["cud"] ?? null);
                    echo "\" class=\"form-control\">
                                                    <option value=\"\" ";
                    // line 203
                    if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), ("module_retailcrm_special_" . ($context["cud"] ?? null)), [], "array", true, true, false, 203) || twig_test_empty((($__internal_compile_0 = ($context["saved_settings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[("module_retailcrm_special_" . ($context["cud"] ?? null))] ?? null) : null)))) {
                        echo "selected";
                    }
                    echo ">---</option>
                                                    ";
                    // line 204
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["priceTypes"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["priceType"]) {
                        // line 205
                        echo "                                                        ";
                        if (((twig_get_attribute($this->env, $this->source, $context["priceType"], "active", [], "any", false, false, false, 205) == true) && (twig_get_attribute($this->env, $this->source, $context["priceType"], "default", [], "any", false, false, false, 205) == false))) {
                            // line 206
                            echo "                                                            <option value =\"";
                            echo twig_get_attribute($this->env, $this->source, $context["priceType"], "code", [], "any", false, false, false, 206);
                            echo "\" ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), ("module_retailcrm_special_" . ($context["cud"] ?? null)), [], "array", true, true, false, 206) && (twig_get_attribute($this->env, $this->source, $context["priceType"], "code", [], "any", false, false, false, 206) == (($__internal_compile_1 = ($context["saved_settings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[("module_retailcrm_special_" . ($context["cud"] ?? null))] ?? null) : null)))) {
                                echo " selected=\"selected\" ";
                            }
                            echo ">
                                                                ";
                            // line 207
                            echo twig_get_attribute($this->env, $this->source, $context["priceType"], "name", [], "any", false, false, false, 207);
                            echo "
                                                            </option>
                                                        ";
                        }
                        // line 210
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['priceType'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 211
                    echo "                                                </select>
                                            </div>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customerGroup'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 215
                echo "                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
                // line 218
                echo ($context["order_number"] ?? null);
                echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" class=\"col-sm-2 control-label\" for=\"module_retailcrm_order_number\">";
                // line 220
                echo ($context["text_order_number"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_order_number\" value=\"1\"
                                                ";
                // line 224
                if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_order_number", [], "any", true, true, false, 224) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_order_number", [], "any", false, false, false, 224) == 1))) {
                    // line 225
                    echo "                                                    checked
                                                ";
                }
                // line 226
                echo " />
                                            ";
                // line 227
                echo ($context["text_yes"] ?? null);
                echo "
                                        </label>
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_order_number\" value=\"0\"
                                                ";
                // line 231
                if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_order_number", [], "any", true, true, false, 231) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_order_number", [], "any", false, false, false, 231) == 0))) {
                    // line 232
                    echo "                                                    checked
                                                ";
                }
                // line 233
                echo " />
                                            ";
                // line 234
                echo ($context["text_no"] ?? null);
                echo "
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
                // line 240
                echo ($context["summ_around"] ?? null);
                echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" class=\"col-sm-2 control-label\" for=\"module_retailcrm_summ_around\">";
                // line 242
                echo ($context["text_summ_around"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_summ_around\" value=\"1\"
                                                    ";
                // line 246
                if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_summ_around", [], "any", true, true, false, 246) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_summ_around", [], "any", false, false, false, 246) == 1))) {
                    // line 247
                    echo "                                                        checked
                                                    ";
                }
                // line 248
                echo " />
                                            ";
                // line 249
                echo ($context["text_yes"] ?? null);
                echo "
                                        </label>
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_summ_around\" value=\"0\"
                                                    ";
                // line 253
                if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_summ_around", [], "any", true, true, false, 253) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_summ_around", [], "any", false, false, false, 253) == 0))) {
                    // line 254
                    echo "                                                        checked
                                                    ";
                }
                // line 255
                echo " />
                                            ";
                // line 256
                echo ($context["text_no"] ?? null);
                echo "
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
                // line 262
                echo ($context["stock_upload"] ?? null);
                echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" class=\"col-sm-2 control-label\" for=\"module_retailcrm_stock_upload\">";
                // line 264
                echo ($context["text_stock_upload"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_stock_upload\" value=\"2\"
                                                    ";
                // line 268
                if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_stock_upload", [], "any", true, true, false, 268) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_stock_upload", [], "any", false, false, false, 268) == 2))) {
                    // line 269
                    echo "                                                        checked
                                                    ";
                }
                // line 270
                echo " />
                                            ";
                // line 271
                echo ($context["stock_from_crm"] ?? null);
                echo "
                                        </label>
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_stock_upload\" value=\"1\"
                                                    ";
                // line 275
                if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_stock_upload", [], "any", true, true, false, 275) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_stock_upload", [], "any", false, false, false, 275) == 1))) {
                    // line 276
                    echo "                                                        checked
                                                    ";
                }
                // line 277
                echo " />
                                            ";
                // line 278
                echo ($context["stock_from_cms"] ?? null);
                echo "
                                        </label>
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_stock_upload\" value=\"0\"
                                                    ";
                // line 282
                if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_stock_upload", [], "any", true, true, false, 282) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_stock_upload", [], "any", false, false, false, 282) == 0))) {
                    // line 283
                    echo "                                                        checked
                                                    ";
                }
                // line 284
                echo " />
                                            ";
                // line 285
                echo ($context["stock_not_upload"] ?? null);
                echo "
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                                <fieldset>
                                    ";
                // line 291
                if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_stock_upload", [], "any", true, true, false, 291) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_stock_upload", [], "any", false, false, false, 291) == 1))) {
                    // line 292
                    echo "                                        <legend>";
                    echo ($context["store_select"] ?? null);
                    echo "</legend>
                                        <div class=\"form-group retailcrm_unit\">
                                                <div class=\"row retailcrm_unit\">
                                                    <label class=\"col-sm-2 control-label\" class=\"col-sm-2 control-label\" for=\"module_retailcrm_store_select\">";
                    // line 295
                    echo ($context["text_store"] ?? null);
                    echo "</label>
                                                    <div class=\"col-md-4 col-sm-10\">
                                                        <select id=\"module_retailcrm_store_select\" name=\"module_retailcrm_store_select\" class=\"form-control\">
                                                            ";
                    // line 298
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["crmStocks"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["crmStock"]) {
                        // line 299
                        echo "                                                                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["crmStock"], "active", [], "any", false, false, false, 299) == true)) {
                            // line 300
                            echo "                                                                    <option value =\"";
                            echo twig_get_attribute($this->env, $this->source, $context["crmStock"], "code", [], "any", false, false, false, 300);
                            echo "\" ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_store_select", [], "any", true, true, false, 300) && (twig_get_attribute($this->env, $this->source, $context["crmStock"], "code", [], "any", false, false, false, 300) == twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_store_select", [], "any", false, false, false, 300)))) {
                                echo " selected=\"selected\" ";
                            }
                            echo ">
                                                                        ";
                            // line 301
                            echo twig_get_attribute($this->env, $this->source, $context["crmStock"], "name", [], "any", false, false, false, 301);
                            echo "
                                                                    </option>
                                                                ";
                        }
                        // line 304
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crmStock'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 305
                    echo "                                                        </select>
                                                    </div>
                                                </div>
                                        </div>
                                    ";
                }
                // line 310
                echo "                            </fieldset>
                            <fieldset>
                                <legend>";
                // line 312
                echo ($context["text_retailcrm_discount"] ?? null);
                echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"label_discount\">";
                // line 314
                echo ($context["text_retailcrm_label_discount"] ?? null);
                echo "</label>
                                    <div class=\"col-lg-4 col-md-6 col-sm-10\">
                                        <input name=\"module_retailcrm_label_discount\" id=\"label_discount\" class=\"form-control\" value=\"";
                // line 316
                if (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_label_discount", [], "any", true, true, false, 316)) {
                    echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_label_discount", [], "any", false, false, false, 316);
                } else {
                    echo ($context["default_retailcrm_label_discount"] ?? null);
                }
                echo "\">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>";
                // line 321
                echo ($context["sum_payment"] ?? null);
                echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_sum_payment\">";
                // line 323
                echo ($context["text_sum_payment"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_sum_payment\" value=\"1\"
                                                    ";
                // line 327
                if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_sum_payment", [], "any", true, true, false, 327) && (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_sum_payment", [], "any", false, false, false, 327) == 1))) {
                    // line 328
                    echo "                                                        checked
                                                    ";
                }
                // line 329
                echo " >
                                            ";
                // line 330
                echo ($context["text_yes"] ?? null);
                echo "
                                        </label>
                                        <label class=\"control-label radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_sum_payment\" value=\"0\"
                                                    ";
                // line 334
                if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_sum_payment", [], "any", true, true, false, 334) || (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_sum_payment", [], "any", false, false, false, 334) == 0))) {
                    // line 335
                    echo "                                                        checked
                                                    ";
                }
                // line 336
                echo " >
                                            ";
                // line 337
                echo ($context["text_no"] ?? null);
                echo "
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-references\">
                            <fieldset>
                                <legend>";
                // line 345
                echo ($context["retailcrm_dict_settings"] ?? null);
                echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\"> ";
                // line 347
                echo ($context["retailcrm_dict_delivery"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"row\">
                                            ";
                // line 350
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["delivery"] ?? null), "opencart", [], "any", false, false, false, 350))) {
                    // line 351
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["delivery"] ?? null), "opencart", [], "any", false, false, false, 351));
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        // line 352
                        echo "                                                    <div class=\"col-sm-12\" style=\"margin-bottom:10px;\">
                                                        <div class=\"pm\">";
                        // line 353
                        echo (twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 353) . ":");
                        echo "</div>
                                                        ";
                        // line 354
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["value"]);
                        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                            // line 355
                            echo "                                                            ";
                            if (($context["key"] != "title")) {
                                // line 356
                                echo "                                                                <div class=\"form-group retailcrm_unit\">
                                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                                        <select id=\"retailcrm_delivery_";
                                // line 358
                                echo twig_get_attribute($this->env, $this->source, $context["val"], "code", [], "any", false, false, false, 358);
                                echo "\" name=\"module_retailcrm_delivery[";
                                echo twig_get_attribute($this->env, $this->source, $context["val"], "code", [], "any", false, false, false, 358);
                                echo "]\" class=\"form-control\">
                                                                            ";
                                // line 359
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["delivery"] ?? null), "retailcrm", [], "any", false, false, false, 359));
                                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                                    // line 360
                                    echo "                                                                                <option value=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 360);
                                    echo "\" ";
                                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_delivery", [], "any", false, true, false, 360), $context["key"], [], "array", true, true, false, 360) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 360) == (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_delivery", [], "any", false, false, false, 360)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["key"]] ?? null) : null)))) {
                                        echo " selected=\"selected\" ";
                                    }
                                    echo ">
                                                                                    ";
                                    // line 361
                                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 361);
                                    echo "
                                                                                </option>
                                                                            ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 364
                                echo "                                                                        </select>
                                                                    </div>
                                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                                        <label class=\"control-label\" for=\"retailcrm_pm_";
                                // line 367
                                echo twig_get_attribute($this->env, $this->source, $context["val"], "code", [], "any", false, false, false, 367);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["val"], "title", [], "any", false, false, false, 367);
                                echo "</label>
                                                                    </div>
                                                                </div>
                                                            ";
                            }
                            // line 371
                            echo "                                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 372
                        echo "                                                    </div>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 374
                    echo "                                            ";
                } else {
                    // line 375
                    echo "                                                <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                                    ";
                    // line 377
                    echo ($context["text_error_delivery"] ?? null);
                    echo "
                                                </div>
                                            ";
                }
                // line 380
                echo "                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 384
                echo ($context["retailcrm_dict_status"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        ";
                // line 386
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "opencart", [], "any", false, false, false, 386));
                foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                    // line 387
                    echo "                                            ";
                    $context["uid"] = twig_get_attribute($this->env, $this->source, $context["status"], "order_status_id", [], "any", false, false, false, 387);
                    // line 388
                    echo "                                            <div class=\"row retailcrm_unit\">
                                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                    <select id=\"retailcrm_status_";
                    // line 390
                    echo ($context["uid"] ?? null);
                    echo "\" name=\"module_retailcrm_status[";
                    echo twig_get_attribute($this->env, $this->source, $context["status"], "order_status_id", [], "any", false, false, false, 390);
                    echo "]\" class=\"form-control\">
                                                        ";
                    // line 391
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "retailcrm", [], "any", false, false, false, 391));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 392
                        echo "                                                            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 392);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status", [], "any", false, true, false, 392), ($context["uid"] ?? null), [], "array", true, true, false, 392) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 392) == (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_status", [], "any", false, false, false, 392)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[($context["uid"] ?? null)] ?? null) : null)))) {
                            echo " selected=\"selected\" ";
                        }
                        echo ">
                                                                ";
                        // line 393
                        echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 393);
                        echo "
                                                            </option>
                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 396
                    echo "                                                    </select>
                                                </div>
                                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                    <label class=\"control-label\" for=\"retailcrm_status_";
                    // line 399
                    echo twig_get_attribute($this->env, $this->source, $context["status"], "order_status_id", [], "any", false, false, false, 399);
                    echo " \">";
                    echo twig_get_attribute($this->env, $this->source, $context["status"], "name", [], "any", false, false, false, 399);
                    echo "</label>
                                                </div>
                                            </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 403
                echo "                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 406
                echo ($context["retailcrm_dict_payment"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        ";
                // line 408
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["payments"] ?? null), "opencart", [], "any", false, false, false, 408));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 409
                    echo "                                            <div class=\"row retailcrm_unit\">
                                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                    <select id=\"retailcrm_payment_";
                    // line 411
                    echo $context["key"];
                    echo "\" name=\"module_retailcrm_payment[";
                    echo $context["key"];
                    echo "]\" class=\"form-control\">
                                                        ";
                    // line 412
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["payments"] ?? null), "retailcrm", [], "any", false, false, false, 412));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 413
                        echo "                                                            <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 413);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_payment", [], "any", false, true, false, 413), $context["key"], [], "array", true, true, false, 413) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 413) == (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_payment", [], "any", false, false, false, 413)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["key"]] ?? null) : null)))) {
                            echo " selected=\"selected\" ";
                        }
                        echo ">
                                                                ";
                        // line 414
                        echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 414);
                        echo "
                                                            </option>
                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 417
                    echo "                                                    </select>
                                                </div>
                                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                    <label class=\"control-label\" for=\"retailcrm_payment_";
                    // line 420
                    echo $context["key"];
                    echo "\">";
                    echo $context["value"];
                    echo "</label>
                                                </div>
                                            </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 424
                echo "                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 427
                echo ($context["retailcrm_dict_default"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"row\">
                                            <div class=\"retailcrm_unit col-sm-12\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                        <select id=\"module_retailcrm_default_payment\" name=\"module_retailcrm_default_payment\" class=\"form-control\">
                                                            ";
                // line 434
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["payments"] ?? null), "opencart", [], "any", false, false, false, 434));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 435
                    echo "                                                                <option value=\"";
                    echo $context["k"];
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_default_payment", [], "any", true, true, false, 435) && ($context["k"] == twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_default_payment", [], "any", false, false, false, 435)))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">
                                                                    ";
                    // line 436
                    echo $context["v"];
                    echo "
                                                                </option>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 439
                echo "                                                        </select>
                                                    </div>
                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                        <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_default_payment\">";
                // line 442
                echo ($context["text_payment"] ?? null);
                echo "</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"retailcrm_unit col-sm-12\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                        <select id=\"module_retailcrm_default_shipping\" name=\"module_retailcrm_default_shipping\" class=\"form-control\">
                                                            ";
                // line 450
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["delivery"] ?? null), "opencart", [], "any", false, false, false, 450));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 451
                    echo "                                                                <optgroup label=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["value"], "title", [], "any", false, false, false, 451);
                    echo "\">
                                                                    ";
                    // line 452
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["value"]);
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 453
                        echo "                                                                        ";
                        if (($context["k"] != "title")) {
                            // line 454
                            echo "                                                                            <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 454);
                            echo "\" ";
                            if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_default_shipping", [], "any", true, true, false, 454) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 454) == twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_default_shipping", [], "any", false, false, false, 454)))) {
                                echo " selected=\"selected\" ";
                            }
                            echo ">
                                                                                ";
                            // line 455
                            echo twig_get_attribute($this->env, $this->source, $context["v"], "title", [], "any", false, false, false, 455);
                            echo "
                                                                            </option>
                                                                        ";
                        }
                        // line 458
                        echo "                                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 459
                    echo "                                                                </optgroup>
                                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 461
                echo "                                                        </select>
                                                    </div>
                                                    <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                        <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_default_shipping\">";
                // line 464
                echo ($context["text_shipping"] ?? null);
                echo "</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\">";
                // line 472
                echo ($context["retailcrm_missing_status"] ?? null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <div class=\"row\">
                                            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                                <select id=\"retailcrm_missing_status\" name=\"module_retailcrm_missing_status\" class=\"form-control\">
                                                    <option></option>
                                                    ";
                // line 478
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["statuses"] ?? null), "retailcrm", [], "any", false, false, false, 478));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    // line 479
                    echo "                                                        <option value=\"";
                    echo $context["k"];
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_missing_status", [], "any", true, true, false, 479) && ($context["k"] == twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_missing_status", [], "any", false, false, false, 479)))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">
                                                            ";
                    // line 480
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 480);
                    echo "
                                                        </option>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 483
                echo "                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            ";
            }
            // line 490
            echo "                            ";
        }
        // line 491
        echo "                        </div>
                        <div class=\"tab-pane\" id=\"tab-collector\">
                            <fieldset>
                                <legend>";
        // line 494
        echo ($context["daemon_collector"] ?? null);
        echo "</legend>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_collector_active\" class=\"col-md-4\">";
        // line 496
        echo ($context["text_collector_activity"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector_active\" value=\"1\" ";
        // line 499
        if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector_active", [], "any", true, true, false, 499) && (twig_get_attribute($this->env, $this->source,         // line 500
($context["saved_settings"] ?? null), "module_retailcrm_collector_active", [], "any", false, false, false, 500) == 1))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 501
        echo ">
                                            ";
        // line 502
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector_active\" value=\"0\" ";
        // line 505
        if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector_active", [], "any", false, false, false, 505) || (twig_get_attribute($this->env, $this->source,         // line 506
($context["saved_settings"] ?? null), "module_retailcrm_collector_active", [], "any", false, false, false, 506) == 0))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 507
        echo ">
                                            ";
        // line 508
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_collector\" class=\"col-md-4\">";
        // line 513
        echo ($context["collector_site_key"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-4\">
                                        <input class=\"form-control\" id=\"retailcrm_collector_site_key\" type=\"text\" name=\"module_retailcrm_collector[site_key]\" value=\"";
        // line 515
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 515), "site_key", [], "any", true, true, false, 515)) {
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 515), "site_key", [], "any", false, false, false, 515);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_collector\" class=\"col-md-4\">";
        // line 519
        echo ($context["text_collector_form_capture"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector[form_capture]\" value=\"1\" ";
        // line 522
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 522), "form_capture", [], "any", true, true, false, 522) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 523
($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 523), "form_capture", [], "any", false, false, false, 523) == 1))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 524
        echo ">
                                            ";
        // line 525
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector[form_capture]\" value=\"0\" ";
        // line 528
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 528), "form_capture", [], "any", true, true, false, 528) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 529
($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 529), "form_capture", [], "any", false, false, false, 529) == 0))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 530
        echo ">
                                            ";
        // line 531
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_collector\" class=\"col-md-4\">";
        // line 536
        echo ($context["text_collector_period"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-2\">
                                        <input class=\"form-control\" id=\"module_retailcrm_collector_period\" type=\"text\" name=\"module_retailcrm_collector[period]\" value=\"";
        // line 538
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 538), "period", [], "any", true, true, false, 538)) {
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 538), "period", [], "any", false, false, false, 538);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_collector\" class=\"col-md-4\">";
        // line 542
        echo ($context["text_label_promo"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-4\">
                                        <input class=\"form-control\" id=\"module_retailcrm_collector[]\" type=\"text\" name=\"module_retailcrm_collector[label_promo]\" value=\"";
        // line 544
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 544), "label_promo", [], "any", true, true, false, 544)) {
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 544), "label_promo", [], "any", false, false, false, 544);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_collector\" class=\"col-md-4\">";
        // line 548
        echo ($context["text_label_send"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-4\">
                                        <input class=\"form-control\" id=\"module_retailcrm_collector_label_send\" type=\"text\" name=\"module_retailcrm_collector[label_send]\" value=\"";
        // line 550
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 550), "label_send", [], "any", true, true, false, 550)) {
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 550), "label_send", [], "any", false, false, false, 550);
        }
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"module_retailcrm_collector\" class=\"col-md-4\">";
        // line 554
        echo ($context["collector_custom_text"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector[custom_form]\" value=\"1\" ";
        // line 557
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 557), "custom_form", [], "any", true, true, false, 557) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 558
($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 558), "custom_form", [], "any", false, false, false, 558) == 1))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 559
        echo ">
                                            ";
        // line 560
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_collector[custom_form]\" value=\"0\" ";
        // line 563
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 563), "custom_form", [], "any", true, true, false, 563) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 564
($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 564), "custom_form", [], "any", false, false, false, 564) == 0))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 565
        echo ">
                                            ";
        // line 566
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                                ";
        // line 570
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collectorFields"] ?? null));
        foreach ($context['_seq'] as $context["field"] => $context["label"]) {
            // line 571
            echo "                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"retailcrm_collector\">";
            // line 572
            echo $context["label"];
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"row\">
                                                <div class=\"col-md-4 col-sm-6\">
                                                    <input class=\"form-control\" id=\"module_retailcrm_collector\" type=\"text\" name=\"module_retailcrm_collector[custom][";
            // line 576
            echo $context["field"];
            echo "]\" value=\"";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, true, false, 576), "custom", [], "any", false, true, false, 576), $context["field"], [], "array", true, true, false, 576)) {
                echo " ";
                echo (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 576), "custom", [], "any", false, false, false, 576)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["field"]] ?? null) : null);
                echo " ";
            }
            echo "\">
                                                </div>
                                                <div class=\"col-md-8 col-sm-6\" style=\"margin-top: 8px;\">
                                                    <input input style=\"margin-top: 0; vertical-align: middle;\" type=\"checkbox\"  name=\"module_retailcrm_collector[require][";
            // line 579
            echo $context["field"];
            echo "_require]\" value=\"1\" ";
            if ((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_collector", [], "any", false, false, false, 579), "require", [], "any", false, false, false, 579)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[($context["field"] . "_require")] ?? null) : null)) {
                echo " checked ";
            }
            echo ">
                                                    <label style=\"margin-bottom: 0; vertical-align: middle; margin-left: 5px;\" for=\"retailcrm_collector\">";
            // line 580
            echo ($context["text_require"] ?? null);
            echo "</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 586
        echo "                            </fieldset>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-consultant\">
                            <legend>";
        // line 589
        echo ($context["consultant_tab_text"] ?? null);
        echo "</legend>
                            <fieldset>
                                ";
        // line 592
        echo "                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-code\">";
        // line 593
        echo ($context["entry_code"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <textarea name=\"module_retailcrm_online_consultant_code\" rows=\"5\" placeholder=\"";
        // line 595
        echo ($context["entry_code"] ?? null);
        echo "\" id=\"retailcrm_entry_code\" class=\"form-control\">
                                        ";
        // line 596
        if (twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_code", [], "any", true, true, false, 596)) {
            // line 597
            echo "                                            ";
            echo twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_code", [], "any", false, false, false, 597);
        }
        // line 598
        echo "                                        </textarea>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"retailcrm_online_consultant_active\" class=\"col-md-4\">";
        // line 602
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_online_consultant_active\" value=\"1\" ";
        // line 605
        if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_active", [], "any", true, true, false, 605) && (twig_get_attribute($this->env, $this->source,         // line 606
($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_active", [], "any", false, false, false, 606) == 1))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 607
        echo ">
                                            ";
        // line 608
        echo ($context["text_yes"] ?? null);
        echo "
                                        </label>
                                        <label class=\"control-label\" class=\"radio-inline\">
                                            <input type=\"radio\" name=\"module_retailcrm_online_consultant_active\" value=\"0\" ";
        // line 611
        if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_active", [], "any", false, false, false, 611) || (twig_get_attribute($this->env, $this->source,         // line 612
($context["saved_settings"] ?? null), "module_retailcrm_online_consultant_active", [], "any", false, false, false, 612) == 0))) {
            echo " ";
            echo "checked";
            echo "
                                            ";
        }
        // line 613
        echo ">
                                            ";
        // line 614
        echo ($context["text_no"] ?? null);
        echo "
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-custom_fields\">
                            <fieldset>
                                <legend>";
        // line 622
        echo ($context["retailcrm_dict_custom_fields"] ?? null);
        echo "</legend>
                                ";
        // line 623
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "retailcrm", [], "any", false, false, false, 623)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "opencart", [], "any", false, false, false, 623)))) {
            // line 624
            echo "                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"retailcrm_custom_field_active\">";
            // line 625
            echo ($context["text_custom_field_activity"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_retailcrm_custom_field_active\" value=\"1\" ";
            // line 628
            if ((twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field_active", [], "any", true, true, false, 628) && (twig_get_attribute($this->env, $this->source,             // line 629
($context["saved_settings"] ?? null), "module_retailcrm_custom_field_active", [], "any", false, false, false, 629) == 1))) {
                // line 630
                echo "                                                    checked ";
            }
            echo " >
                                                ";
            // line 631
            echo ($context["text_yes"] ?? null);
            echo "
                                            </label>
                                            <label class=\"radio-inline\">
                                                <input type=\"radio\" name=\"module_retailcrm_custom_field_active\" value=\"0\" ";
            // line 634
            if (( !twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field_active", [], "any", true, true, false, 634) || (twig_get_attribute($this->env, $this->source,             // line 635
($context["saved_settings"] ?? null), "module_retailcrm_custom_field_active", [], "any", false, false, false, 635) == 0))) {
                // line 636
                echo "                                                    checked ";
            }
            echo " >
                                                ";
            // line 637
            echo ($context["text_no"] ?? null);
            echo "
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
            // line 642
            echo ($context["text_customers_custom_fields"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"row\">
                                                ";
            // line 645
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "opencart", [], "any", false, false, false, 645));
            foreach ($context['_seq'] as $context["_key"] => $context["customField"]) {
                // line 646
                echo "                                                    <div class=\"col-sm-12\" style=\"margin-bottom:5px;\">
                                                        <div class=\"row\">
                                                            ";
                // line 648
                $context["fid"] = ("c_" . twig_get_attribute($this->env, $this->source, $context["customField"], "custom_field_id", [], "any", false, false, false, 648));
                // line 649
                echo "                                                            <div class=\"col-sm-4\">
                                                                <select class=\"form-control\" id=\"module_retailcrm_custom_field_";
                // line 650
                echo ($context["fid"] ?? null);
                echo "\" name=\"module_retailcrm_custom_field[";
                echo ($context["fid"] ?? null);
                echo "]\" >
                                                                    ";
                // line 651
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "retailcrm", [], "any", false, false, false, 651), "customers", [], "any", false, false, false, 651));
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 652
                    echo "                                                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 652);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field", [], "any", false, true, false, 652), ($context["fid"] ?? null), [], "array", true, true, false, 652) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 652) == (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field", [], "any", false, false, false, 652)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[($context["fid"] ?? null)] ?? null) : null)))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">
                                                                            ";
                    // line 653
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 653);
                    echo "
                                                                        </option>
                                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 656
                echo "                                                                </select>
                                                            </div>
                                                            <label style=\"padding-top: 9px;\" for=\"module_retailcrm_custom_field_";
                // line 658
                echo ($context["fid"] ?? null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 658);
                echo "</label>
                                                        </div>
                                                    </div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 662
            echo "                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\">";
            // line 666
            echo ($context["text_orders_custom_fields"] ?? null);
            echo "</label>
                                        <div class=\"col-sm-10\">
                                            <div class=\"row\">
                                                ";
            // line 669
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "opencart", [], "any", false, false, false, 669));
            foreach ($context['_seq'] as $context["_key"] => $context["customField"]) {
                // line 670
                echo "                                                    <div class=\"col-sm-12\" style=\"margin-bottom:5px;\">
                                                        <div class=\"row\">
                                                            ";
                // line 672
                $context["fid"] = ("o_" . twig_get_attribute($this->env, $this->source, $context["customField"], "custom_field_id", [], "any", false, false, false, 672));
                // line 673
                echo "                                                            <div class=\"col-sm-4\">
                                                                <select class=\"form-control\" id=\"module_retailcrm_custom_field_";
                // line 674
                echo ($context["fid"] ?? null);
                echo "\" name=\"module_retailcrm_custom_field[";
                echo ($context["fid"] ?? null);
                echo "]\" >
                                                                    ";
                // line 675
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "retailcrm", [], "any", false, false, false, 675), "orders", [], "any", false, false, false, 675));
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 676
                    echo "                                                                        <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 676);
                    echo "\" ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field", [], "any", false, true, false, 676), ($context["fid"] ?? null), [], "array", true, true, false, 676) && (twig_get_attribute($this->env, $this->source, $context["v"], "code", [], "any", false, false, false, 676) == (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["saved_settings"] ?? null), "module_retailcrm_custom_field", [], "any", false, false, false, 676)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[($context["fid"] ?? null)] ?? null) : null)))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">
                                                                            ";
                    // line 677
                    echo twig_get_attribute($this->env, $this->source, $context["v"], "name", [], "any", false, false, false, 677);
                    echo "
                                                                        </option>
                                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 680
                echo "                                                                </select>
                                                            </div>
                                                            <label style=\"padding-top: 9px;\" for=\"module_retailcrm_custom_field_";
                // line 682
                echo ($context["fid"] ?? null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customField"], "name", [], "any", false, false, false, 682);
                echo "</label>
                                                        </div>
                                                    </div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 686
            echo "                                            </div>
                                        </div>
                                    </div>
                                ";
        } elseif ((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 689
($context["customFields"] ?? null), "retailcrm", [], "any", false, false, false, 689)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["customFields"] ?? null), "opencart", [], "any", false, false, false, 689)))) {
            // line 690
            echo "                                    <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                        ";
            // line 692
            echo ($context["text_error_custom_field"] ?? null);
            echo "
                                    </div>
                                ";
        } elseif (twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 694
($context["customFields"] ?? null), "retailcrm", [], "any", false, false, false, 694))) {
            // line 695
            echo "                                    <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                        ";
            // line 697
            echo ($context["text_error_cf_retailcrm"] ?? null);
            echo "
                                    </div>
                                ";
        } elseif (twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 699
($context["customFields"] ?? null), "opencart", [], "any", false, false, false, 699))) {
            // line 700
            echo "                                    <div class=\"alert alert-info\"><i class=\"fa fa-exclamation-circle\"></i>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                        ";
            // line 702
            echo ($context["text_error_cf_opencart"] ?? null);
            echo "
                                    </div>
                                ";
        }
        // line 705
        echo "                            </fieldset>
                        </div>
                        <div class=\"tab-pane\" id=\"tab-logs\">
                            <fieldset style=\"margin-bottom: 30px;\">
                                <legend>Retailcrm API error log</legend>
                                <div class=\"retailcrm_unit\">
                                    <a onclick=\"confirm('";
        // line 711
        echo ($context["text_confirm_log"] ?? null);
        echo "') ? location.href='";
        echo ($context["clear_retailcrm"] ?? null);
        echo "' : false;\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_clear"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i></a>
                                </div>
                                ";
        // line 713
        if (twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "retailcrm_log", [], "any", true, true, false, 713)) {
            // line 714
            echo "                                    <div class=\"row\">
                                        <div class=\"col-sm-12\">
                                            <textarea wrap=\"off\" rows=\"15\" readonly class=\"form-control\">";
            // line 716
            echo twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "retailcrm_log", [], "any", false, false, false, 716);
            echo "</textarea>
                                        </div>
                                    </div>
                                ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 719
($context["logs"] ?? null), "retailcrm_error", [], "any", true, true, false, 719)) {
            // line 720
            echo "                                    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "retailcrm_error", [], "any", false, false, false, 720);
            echo "
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                    </div>
                                ";
        }
        // line 724
        echo "                            </fieldset>
                            <fieldset>
                                <legend>Opencart API error log</legend>
                                <div class=\"retailcrm_unit\">
                                    <a onclick=\"confirm('";
        // line 728
        echo ($context["text_confirm_log"] ?? null);
        echo "') ? location.href='";
        echo ($context["clear_opencart"] ?? null);
        echo "' : false;\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_clear"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-eraser\"></i></a>
                                </div>
                                ";
        // line 730
        if (twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "oc_api_log", [], "any", true, true, false, 730)) {
            // line 731
            echo "                                    <div class=\"row\">
                                        <div class=\"col-sm-12\">
                                            <textarea wrap=\"off\" rows=\"15\" readonly class=\"form-control\">";
            // line 733
            echo twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "oc_api_log", [], "any", false, false, false, 733);
            echo "</textarea>
                                        </div>
                                    </div>
                                ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 736
($context["logs"] ?? null), "oc_error", [], "any", true, true, false, 736)) {
            // line 737
            echo "                                    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, ($context["logs"] ?? null), "oc_error", [], "any", false, false, false, 737);
            echo "
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                    </div>
                                ";
        }
        // line 741
        echo "                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 749
        echo ($context["footer"] ?? null);
        echo "

<script type=\"text/javascript\">
    var token = '";
        // line 752
        echo ($context["user_token"] ?? null);
        echo "';
    \$('#icml').on('click', function() {
        \$.ajax({
            url: '";
        // line 755
        echo ($context["catalog"] ?? null);
        echo "' + 'admin/index.php?route=extension/module/retailcrm/icml&user_token=' + token,
            beforeSend: function() {
                \$('#icml').button('loading');
            },
            complete: function() {
                \$('.alert-success').remove();
                \$('#content > .container-fluid').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 761
        echo ($context["text_success_catalog"] ?? null);
        echo "</div>');
                \$('#icml').button('reset');
            },
            error: function(){
                alert('error');
            }
        });
    });

    \$('#export').on('click', function() {
        \$.ajax({
            url: '";
        // line 772
        echo ($context["catalog"] ?? null);
        echo "' + 'admin/index.php?route=extension/module/retailcrm/export&user_token=' + token,
            beforeSend: function() {
                \$('#export').button('loading');
            },
            complete: function() {
                \$('.alert-success').remove();
                \$('#content > .container-fluid').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 778
        echo ($context["text_success_export"] ?? null);
        echo "</div>');
                \$('#export').button('reset');
            },
            error: function(){
                alert('error');
            }
        });
    });

    \$('#export_order').on('click', function() {
        var order_id = \$('input[name=\\'order_id\\']').val();
        if (order_id && order_id > 0) {
            \$.ajax({
                url: '";
        // line 791
        echo ($context["catalog"] ?? null);
        echo "' + 'admin/index.php?route=extension/module/retailcrm/exportOrder&user_token=' + token + '&order_id=' + order_id,
                beforeSend: function() {
                    \$('#export_order').button('loading');
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                },
                success: function(data, textStatus, jqXHR) {
                    response = JSON.parse(jqXHR['responseText']);

                    if (response['status_code'] == '400') {
                        \$('.alert-danger').remove();
                        \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
        // line 803
        echo ($context["text_error_order"] ?? null);
        echo "' + response['error_msg'] + '</div>');
                        \$('#export_order').button('reset');
                    } else {
                        \$('.alert-success').remove();
                        \$('#content > .container-fluid').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i>";
        // line 807
        echo ($context["text_success_export_order"] ?? null);
        echo "</div>');
                        \$('#export_order').button('reset');
                        \$('input[name=\\'order_id\\']').val('');
                    }
                }
            });
        } else {
            \$('.alert-danger').remove();
            \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 815
        echo ($context["text_error_order_id"] ?? null);
        echo "</div>');
            \$('#export_order').button('reset');
        }
    });
</script>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "extension/module/retailcrm.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1962 => 815,  1951 => 807,  1944 => 803,  1929 => 791,  1913 => 778,  1904 => 772,  1890 => 761,  1881 => 755,  1875 => 752,  1869 => 749,  1859 => 741,  1851 => 737,  1849 => 736,  1843 => 733,  1839 => 731,  1837 => 730,  1828 => 728,  1822 => 724,  1814 => 720,  1812 => 719,  1806 => 716,  1802 => 714,  1800 => 713,  1791 => 711,  1783 => 705,  1777 => 702,  1773 => 700,  1771 => 699,  1766 => 697,  1762 => 695,  1760 => 694,  1755 => 692,  1751 => 690,  1749 => 689,  1744 => 686,  1732 => 682,  1728 => 680,  1719 => 677,  1710 => 676,  1706 => 675,  1700 => 674,  1697 => 673,  1695 => 672,  1691 => 670,  1687 => 669,  1681 => 666,  1675 => 662,  1663 => 658,  1659 => 656,  1650 => 653,  1641 => 652,  1637 => 651,  1631 => 650,  1628 => 649,  1626 => 648,  1622 => 646,  1618 => 645,  1612 => 642,  1604 => 637,  1599 => 636,  1597 => 635,  1596 => 634,  1590 => 631,  1585 => 630,  1583 => 629,  1582 => 628,  1576 => 625,  1573 => 624,  1571 => 623,  1567 => 622,  1556 => 614,  1553 => 613,  1546 => 612,  1545 => 611,  1539 => 608,  1536 => 607,  1529 => 606,  1528 => 605,  1522 => 602,  1516 => 598,  1512 => 597,  1510 => 596,  1506 => 595,  1501 => 593,  1498 => 592,  1493 => 589,  1488 => 586,  1476 => 580,  1468 => 579,  1456 => 576,  1449 => 572,  1446 => 571,  1442 => 570,  1435 => 566,  1432 => 565,  1425 => 564,  1424 => 563,  1418 => 560,  1415 => 559,  1408 => 558,  1407 => 557,  1401 => 554,  1392 => 550,  1387 => 548,  1378 => 544,  1373 => 542,  1364 => 538,  1359 => 536,  1351 => 531,  1348 => 530,  1341 => 529,  1340 => 528,  1334 => 525,  1331 => 524,  1324 => 523,  1323 => 522,  1317 => 519,  1308 => 515,  1303 => 513,  1295 => 508,  1292 => 507,  1285 => 506,  1284 => 505,  1278 => 502,  1275 => 501,  1268 => 500,  1267 => 499,  1261 => 496,  1256 => 494,  1251 => 491,  1248 => 490,  1239 => 483,  1230 => 480,  1221 => 479,  1217 => 478,  1208 => 472,  1197 => 464,  1192 => 461,  1185 => 459,  1179 => 458,  1173 => 455,  1164 => 454,  1161 => 453,  1157 => 452,  1152 => 451,  1148 => 450,  1137 => 442,  1132 => 439,  1123 => 436,  1114 => 435,  1110 => 434,  1100 => 427,  1095 => 424,  1083 => 420,  1078 => 417,  1069 => 414,  1060 => 413,  1056 => 412,  1050 => 411,  1046 => 409,  1042 => 408,  1037 => 406,  1032 => 403,  1020 => 399,  1015 => 396,  1006 => 393,  997 => 392,  993 => 391,  987 => 390,  983 => 388,  980 => 387,  976 => 386,  971 => 384,  965 => 380,  959 => 377,  955 => 375,  952 => 374,  945 => 372,  939 => 371,  930 => 367,  925 => 364,  916 => 361,  907 => 360,  903 => 359,  897 => 358,  893 => 356,  890 => 355,  886 => 354,  882 => 353,  879 => 352,  874 => 351,  872 => 350,  866 => 347,  861 => 345,  850 => 337,  847 => 336,  843 => 335,  841 => 334,  834 => 330,  831 => 329,  827 => 328,  825 => 327,  818 => 323,  813 => 321,  801 => 316,  796 => 314,  791 => 312,  787 => 310,  780 => 305,  774 => 304,  768 => 301,  759 => 300,  756 => 299,  752 => 298,  746 => 295,  739 => 292,  737 => 291,  728 => 285,  725 => 284,  721 => 283,  719 => 282,  712 => 278,  709 => 277,  705 => 276,  703 => 275,  696 => 271,  693 => 270,  689 => 269,  687 => 268,  680 => 264,  675 => 262,  666 => 256,  663 => 255,  659 => 254,  657 => 253,  650 => 249,  647 => 248,  643 => 247,  641 => 246,  634 => 242,  629 => 240,  620 => 234,  617 => 233,  613 => 232,  611 => 231,  604 => 227,  601 => 226,  597 => 225,  595 => 224,  588 => 220,  583 => 218,  578 => 215,  569 => 211,  563 => 210,  557 => 207,  548 => 206,  545 => 205,  541 => 204,  535 => 203,  529 => 202,  522 => 200,  519 => 199,  516 => 198,  512 => 197,  507 => 195,  497 => 188,  487 => 181,  482 => 179,  479 => 178,  476 => 177,  467 => 175,  462 => 174,  459 => 173,  457 => 172,  449 => 167,  446 => 166,  442 => 165,  440 => 164,  433 => 160,  430 => 159,  426 => 158,  424 => 157,  417 => 153,  412 => 151,  405 => 146,  396 => 143,  387 => 142,  383 => 141,  377 => 138,  371 => 134,  365 => 133,  359 => 130,  350 => 129,  347 => 128,  343 => 127,  337 => 124,  329 => 119,  326 => 118,  322 => 117,  320 => 116,  313 => 112,  310 => 111,  306 => 110,  304 => 109,  295 => 105,  290 => 103,  283 => 98,  273 => 94,  263 => 93,  259 => 91,  255 => 90,  247 => 85,  238 => 79,  235 => 78,  231 => 77,  229 => 76,  222 => 72,  219 => 71,  215 => 70,  213 => 69,  206 => 65,  197 => 61,  192 => 59,  183 => 55,  178 => 53,  173 => 51,  166 => 46,  161 => 44,  157 => 43,  153 => 42,  149 => 41,  144 => 40,  142 => 39,  138 => 38,  133 => 36,  129 => 34,  121 => 31,  117 => 30,  113 => 28,  110 => 27,  104 => 24,  100 => 22,  98 => 21,  92 => 17,  81 => 15,  77 => 14,  70 => 12,  64 => 11,  60 => 10,  55 => 9,  49 => 7,  47 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/retailcrm.twig", "");
    }
}
