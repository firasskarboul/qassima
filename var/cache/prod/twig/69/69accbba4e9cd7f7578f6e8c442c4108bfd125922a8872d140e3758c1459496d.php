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

/* AdminBundle:Category:new.html.twig */
class __TwigTemplate_8a5f293f15fbd8186eeda5070cdf91d1fe0a08ff2778dd2158225186e85e2546 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AdminBundle:Category:new.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "bootstrap_3_horizontal_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@Admin/adminLayout.html.twig", "AdminBundle:Category:new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/summernote.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 11
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category creation"), "html", null, true);
        echo "</h3>

    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "product-name"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "summernote"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "file", [], "any", false, false, false, 27), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Image")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "file", [], "any", false, false, false, 29), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "metaKeys", [], "any", false, false, false, 33), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta keys")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "metaKeys", [], "any", false, false, false, 35), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "metaDescription", [], "any", false, false, false, 39), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta description")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "metaDescription", [], "any", false, false, false, 41), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"></label>
        <div class=\"col-sm-10\">
            <a href=\"#\" class=\"btn btn-default generate-slug\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("generate slug"), "html", null, true);
        echo "</a>
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "slug", [], "any", false, false, false, 51), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Slug")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "slug", [], "any", false, false, false, 53), 'errors');
        echo "
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "slug", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "product-slug"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"></label>
        <div class=\"col-sm-10\">
            <input type=\"submit\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create"), "html", null, true);
        echo "\" class=\"btn btn-success\"/>
        </div>
    </div>
    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'rest');
        echo "
    ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_end');
        echo "

    <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category");
        echo "\">
        ";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to the list"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/speakingurl.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/summernote.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            \$('.generate-slug').on('click', function (e) {
                e.preventDefault();
                //get field value
                var productName = \$('.product-name').val();
                var slugInut = \$('.product-slug');
                var nameToSlug = productName;

                //generate slug
                var slug = getSlug(nameToSlug, {
                    custom: {
                        '%': ' percent '
                    },
                    uric: true
                });
                //record to slug input
                slugInut.val(slug);
            });
        });
        ";
        // line 95
        $this->loadTemplate("@Admin/Partials/initSummernote.js.twig", "AdminBundle:Category:new.html.twig", 95)->display(twig_array_merge($context, ["height" => 300]));
        // line 96
        echo "    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Category:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 96,  256 => 95,  232 => 74,  228 => 73,  223 => 72,  216 => 71,  206 => 67,  202 => 66,  197 => 64,  193 => 63,  187 => 60,  178 => 54,  174 => 53,  169 => 51,  162 => 47,  153 => 41,  148 => 39,  141 => 35,  136 => 33,  129 => 29,  124 => 27,  117 => 23,  112 => 21,  105 => 17,  100 => 15,  95 => 13,  89 => 11,  82 => 10,  73 => 7,  69 => 6,  64 => 5,  57 => 4,  49 => 1,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Admin/adminLayout.html.twig' %}
{% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('assets/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/summernote.css') }}\" rel=\"stylesheet\">
{% endblock stylesheets %}

{% block page_content -%}
    <h3>{{ 'Category creation'|trans }}</h3>

    {{ form_start(form) }}
    <div class=\"form-group\">
        {{ form_label(form.name, 'Name'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.name, {'attr': {'class': 'product-name'}}) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(form.description, 'Description'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.description, {'attr': {'class': 'summernote'}}) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(form.file, 'Image'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.file) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(form.metaKeys, 'Meta keys'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.metaKeys) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(form.metaDescription, 'Meta description'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.metaDescription) }}
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"></label>
        <div class=\"col-sm-10\">
            <a href=\"#\" class=\"btn btn-default generate-slug\">{{ 'generate slug'|trans }}</a>
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(form.slug, 'Slug'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_errors(form.slug) }}
            {{ form_widget(form.slug, {'attr': {'class': 'product-slug'}}) }}
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"></label>
        <div class=\"col-sm-10\">
            <input type=\"submit\" value=\"{{ 'Create'|trans }}\" class=\"btn btn-success\"/>
        </div>
    </div>
    {{ form_rest(form) }}
    {{ form_end(form) }}

    <a href=\"{{ path('admin_category') }}\">
        {{ 'Back to the list'|trans }}
    </a>
{% endblock page_content %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/speakingurl.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/summernote.min.js') }}\"></script>
    <script>
        \$(document).ready(function () {
            \$('.generate-slug').on('click', function (e) {
                e.preventDefault();
                //get field value
                var productName = \$('.product-name').val();
                var slugInut = \$('.product-slug');
                var nameToSlug = productName;

                //generate slug
                var slug = getSlug(nameToSlug, {
                    custom: {
                        '%': ' percent '
                    },
                    uric: true
                });
                //record to slug input
                slugInut.val(slug);
            });
        });
        {% include '@Admin/Partials/initSummernote.js.twig' with {'height': 300} %}
    </script>
{% endblock javascripts %}
", "AdminBundle:Category:new.html.twig", "C:\\laragon\\www\\qassiima\\src\\Eshop\\AdminBundle/Resources/views/Category/new.html.twig");
    }
}
