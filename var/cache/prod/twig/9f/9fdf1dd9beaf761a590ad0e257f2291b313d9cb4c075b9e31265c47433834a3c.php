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

/* ShopBundle:Cart:orderForm.html.twig */
class __TwigTemplate_253c01b612998945aa94b23d762708bb2f77fba8e4a33199159e258d659eea73 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'page_content' => [$this, 'block_page_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Shop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ShopBundle:Cart:orderForm.html.twig"));

        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), [0 => "bootstrap_3_horizontal_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@Shop/layout.html.twig", "ShopBundle:Cart:orderForm.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("orderform.orderform", [], "ShopBundle"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 9
        echo "<h2 class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("orderform.orderform", [], "ShopBundle"), "html", null, true);
        echo "</h2>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1\">
            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'errors');
        echo "
            <div class=\"form-group\">
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("orderform.name", [], "ShopBundle")) ? [] : ["label" => $_label_]));
        echo "
                <div class=\"col-sm-10\">
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), 'widget');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("orderform.email", [], "ShopBundle")) ? [] : ["label" => $_label_]));
        echo "
                <div class=\"col-sm-10\">
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), 'widget');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "phone", [], "any", false, false, false, 28), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("orderform.phone", [], "ShopBundle")) ? [] : ["label" => $_label_]));
        echo "
                <div class=\"col-sm-10\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "phone", [], "any", false, false, false, 30), 'widget');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "address", [], "any", false, false, false, 34), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("orderform.address", [], "ShopBundle")) ? [] : ["label" => $_label_]));
        echo "
                <div class=\"col-sm-10\">
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "address", [], "any", false, false, false, 36), 'widget');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "comment", [], "any", false, false, false, 40), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("orderform.yourcomment", [], "ShopBundle")) ? [] : ["label" => $_label_]));
        echo "
                <div class=\"col-sm-10\">
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "comment", [], "any", false, false, false, 42), 'widget');
        echo "
                </div>
            </div>
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'rest');
        echo "
            <div class=\"form-group\">
                <div class=\"col-sm-offset-2 col-sm-10 text-right\">
                    <button type=\"submit\" class=\"btn btn-success\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("orderform.submit", [], "ShopBundle"), "html", null, true);
        echo "</button>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"well col-sm-offset-2 col-sm-10 text-right\">
                    ";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("orderform.totalsumis", [], "ShopBundle"), "html", null, true);
        echo " <span id=\"totalsum\"></span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("currency", [], "ShopBundle"), "html", null, true);
        echo "
                </div>
            </div>
            ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form_start');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function () {
            //total sum from navbar cart
            var totalSum = \$('#cart-sum').html();
            \$('#totalsum').html(totalSum);
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:Cart:orderForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 62,  186 => 61,  175 => 56,  167 => 53,  159 => 48,  153 => 45,  147 => 42,  142 => 40,  135 => 36,  130 => 34,  123 => 30,  118 => 28,  111 => 24,  106 => 22,  99 => 18,  94 => 16,  89 => 14,  85 => 13,  77 => 9,  70 => 8,  57 => 6,  49 => 1,  47 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Shop/layout.html.twig' %}
{% trans_default_domain 'ShopBundle' %}

{% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}

{% block title %}{{ 'orderform.orderform'|trans }}{% endblock title %}

{% block page_content -%}
    <h2 class=\"text-center\">{{ 'orderform.orderform'|trans }}</h2>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1\">
            {{ form_start(form) }}
            {{ form_errors(form) }}
            <div class=\"form-group\">
                {{ form_label(form.name, 'orderform.name'|trans) }}
                <div class=\"col-sm-10\">
                    {{ form_widget(form.name) }}
                </div>
            </div>
            <div class=\"form-group\">
                {{ form_label(form.email, 'orderform.email'|trans) }}
                <div class=\"col-sm-10\">
                    {{ form_widget(form.email) }}
                </div>
            </div>
            <div class=\"form-group\">
                {{ form_label(form.phone, 'orderform.phone'|trans) }}
                <div class=\"col-sm-10\">
                    {{ form_widget(form.phone) }}
                </div>
            </div>
            <div class=\"form-group\">
                {{ form_label(form.address, 'orderform.address'|trans) }}
                <div class=\"col-sm-10\">
                    {{ form_widget(form.address) }}
                </div>
            </div>
            <div class=\"form-group\">
                {{ form_label(form.comment, 'orderform.yourcomment'|trans) }}
                <div class=\"col-sm-10\">
                    {{ form_widget(form.comment) }}
                </div>
            </div>
            {{ form_rest(form) }}
            <div class=\"form-group\">
                <div class=\"col-sm-offset-2 col-sm-10 text-right\">
                    <button type=\"submit\" class=\"btn btn-success\">{{ 'orderform.submit'|trans }}</button>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"well col-sm-offset-2 col-sm-10 text-right\">
                    {{ 'orderform.totalsumis'|trans }} <span id=\"totalsum\"></span>{{ 'currency'|trans }}
                </div>
            </div>
            {{ form_start(form) }}
        </div>
    </div>
{% endblock page_content %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$(function () {
            //total sum from navbar cart
            var totalSum = \$('#cart-sum').html();
            \$('#totalsum').html(totalSum);
        });
    </script>
{% endblock javascripts %}
", "ShopBundle:Cart:orderForm.html.twig", "D:\\laragon\\www\\qassima\\src\\Eshop\\ShopBundle/Resources/views/Cart/orderForm.html.twig");
    }
}
