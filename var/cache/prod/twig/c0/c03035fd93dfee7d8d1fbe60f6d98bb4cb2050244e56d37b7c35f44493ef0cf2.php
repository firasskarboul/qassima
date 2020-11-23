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

/* AdminBundle:Settings:index.html.twig */
class __TwigTemplate_c6a1b258898851d045048a25831c5f83e55746a9e3b310a76c980da7319e0edf extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_content' => [$this, 'block_page_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Admin/adminLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AdminBundle:Settings:index.html.twig"));

        $this->parent = $this->loadTemplate("@Admin/adminLayout.html.twig", "AdminBundle:Settings:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Settings list"), "html", null, true);
        echo "</h3>
    <table class=\"records_list table table-striped\">
        <tbody>
        <tr> 
            <th class=\"col-md-10\">
                ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show empty categories"), "html", null, true);
        echo "
            </th>
            <td data-setting=\"show_empty_categories\" class=\"col-md-2\">
                <input type=\"checkbox\" class=\"checkbox pull-left\"
                       ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 13, $this->source); })()), "showEmptyCategories", [], "any", false, false, false, 13)) {
            echo "checked";
        }
        echo ">
                &nbsp;
                <button type=\"button\" class=\"btn save-btn\" style=\"display: none\">
                    <span class=\"glyphicon glyphicon-floppy-disk\"></span>
                </button>
            </td>
        </tr>
        <tr>
            <th>
                ";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show empty manufacturers"), "html", null, true);
        echo "
            </th>
            <td data-setting=\"show_empty_manufacturers\">
                <input type=\"checkbox\" class=\"checkbox pull-left\"
                       ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 26, $this->source); })()), "showEmptyManufacturers", [], "any", false, false, false, 26)) {
            echo "checked";
        }
        echo ">
                &nbsp;
                <button type=\"button\" class=\"btn save-btn\" style=\"display: none\">
                    <span class=\"glyphicon glyphicon-floppy-disk\"></span>
                </button>
            </td>
        </tr>
        </tbody>
    </table>
 <div>  ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show empty manufacturers"), "html", null, true);
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function () {
            \$(\".checkbox\").change(function (e) {
                e.preventDefault();
                //show save button
                \$(this).parent().parent().find(\".save-btn\").show();
            });

            \$(\".save-btn\").on(\"click\", function (e) {
                e.preventDefault();
                var saveButton = \$(this);
                var checkbox = \$(this).parent().find('.checkbox');
                var setting = \$(this).parent().data('setting');
                var newValueInt = 0;
                if (checkbox.is(\":checked\")) {
                    newValueInt = 1;
                }

                \$.ajax({
                    type: 'post',
                    url: '";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_settings_edit");
        echo "',
                    data: {
                        editing_setting: setting,
                        new_value: newValueInt
                    },
                    async: false,
                    success: function (data) {
                        if (data.success === true) {
                            saveButton.hide();
                        }
                    },
                    error: function () {
                    }
                });
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Settings:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 59,  127 => 38,  120 => 37,  111 => 35,  97 => 26,  90 => 22,  76 => 13,  69 => 9,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Admin/adminLayout.html.twig' %}

{% block page_content -%}
    <h3>{{ 'Settings list'|trans }}</h3>
    <table class=\"records_list table table-striped\">
        <tbody>
        <tr> 
            <th class=\"col-md-10\">
                {{ 'Show empty categories'|trans }}
            </th>
            <td data-setting=\"show_empty_categories\" class=\"col-md-2\">
                <input type=\"checkbox\" class=\"checkbox pull-left\"
                       {% if settings.showEmptyCategories %}checked{% endif %}>
                &nbsp;
                <button type=\"button\" class=\"btn save-btn\" style=\"display: none\">
                    <span class=\"glyphicon glyphicon-floppy-disk\"></span>
                </button>
            </td>
        </tr>
        <tr>
            <th>
                {{ 'Show empty manufacturers'|trans }}
            </th>
            <td data-setting=\"show_empty_manufacturers\">
                <input type=\"checkbox\" class=\"checkbox pull-left\"
                       {% if settings.showEmptyManufacturers %}checked{% endif %}>
                &nbsp;
                <button type=\"button\" class=\"btn save-btn\" style=\"display: none\">
                    <span class=\"glyphicon glyphicon-floppy-disk\"></span>
                </button>
            </td>
        </tr>
        </tbody>
    </table>
 <div>  {{ 'Show empty manufacturers'|trans }}</div>
{% endblock page_content %}
{% block javascripts %}
    {{ parent() }}
    <script>
        \$(function () {
            \$(\".checkbox\").change(function (e) {
                e.preventDefault();
                //show save button
                \$(this).parent().parent().find(\".save-btn\").show();
            });

            \$(\".save-btn\").on(\"click\", function (e) {
                e.preventDefault();
                var saveButton = \$(this);
                var checkbox = \$(this).parent().find('.checkbox');
                var setting = \$(this).parent().data('setting');
                var newValueInt = 0;
                if (checkbox.is(\":checked\")) {
                    newValueInt = 1;
                }

                \$.ajax({
                    type: 'post',
                    url: '{{ path('admin_settings_edit') }}',
                    data: {
                        editing_setting: setting,
                        new_value: newValueInt
                    },
                    async: false,
                    success: function (data) {
                        if (data.success === true) {
                            saveButton.hide();
                        }
                    },
                    error: function () {
                    }
                });
            });
        });
    </script>
{% endblock javascripts %}
", "AdminBundle:Settings:index.html.twig", "C:\\laragon\\www\\qassiima\\src\\Eshop\\AdminBundle/Resources/views/Settings/index.html.twig");
    }
}
