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

/* AdminBundle:Category:edit.html.twig */
class __TwigTemplate_54c6c4f6c4f66430711ead7a02490e96ee524618c09cad55a60faaba74756ce9 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AdminBundle:Category:edit.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 2, $this->source); })()), [0 => "bootstrap_3_horizontal_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@Admin/adminLayout.html.twig", "AdminBundle:Category:edit.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category edit"), "html", null, true);
        echo "</h3>

    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "session", [], "any", false, false, false, 13), "flashbag", [], "any", false, false, false, 13), "get", [0 => "notice"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "        <div class=\"alert alert-success\" role=\"alert\">
            ";
            // line 15
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "product-name"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "summernote"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 33, $this->source); })()), "file", [], "any", false, false, false, 33), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Image")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 35, $this->source); })()), "file", [], "any", false, false, false, 35), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 39, $this->source); })()), "metaKeys", [], "any", false, false, false, 39), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta keys")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 41, $this->source); })()), "metaKeys", [], "any", false, false, false, 41), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 45, $this->source); })()), "metaDescription", [], "any", false, false, false, 45), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta description")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 47, $this->source); })()), "metaDescription", [], "any", false, false, false, 47), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"></label>
        <div class=\"col-sm-10\">
            <a href=\"#\" class=\"btn btn-default generate-slug\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("generate slug"), "html", null, true);
        echo "</a>
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 57, $this->source); })()), "slug", [], "any", false, false, false, 57), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Slug")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 59, $this->source); })()), "slug", [], "any", false, false, false, 59), 'errors');
        echo "
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 60, $this->source); })()), "slug", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "product-slug"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"></label>
        <div class=\"col-sm-10\">
            <input type=\"submit\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
        echo "\" class=\"btn btn-warning\"/>
        </div>
    </div>
    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 69, $this->source); })()), 'rest');
        echo "
    ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 70, $this->source); })()), 'form_end');
        echo "

    <div class=\"col-md-5 col-md-offset-2 \">
        <ul class=\"list-group\">
            <li class=\"list-group-item\">
                <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category");
        echo "\">
                    ";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to the list"), "html", null, true);
        echo "
                </a>
            </li>
            <li class=\"list-group-item\">
                ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 80, $this->source); })()), 'form_start', ["attr" => ["class" => "bootbox-submit-confirm"]]);
        echo "
                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 81, $this->source); })()), 'widget');
        echo "
                <input type=\"submit\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
        echo "\" class=\"btn btn-danger\"/>
                ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 83, $this->source); })()), 'form_end');
        echo "
            </li>
        </ul>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/speakingurl.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 92
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
        // line 113
        $this->loadTemplate("@Admin/Partials/initSummernote.js.twig", "AdminBundle:Category:edit.html.twig", 113)->display(twig_array_merge($context, ["height" => 300]));
        // line 114
        echo "    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Category:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 114,  299 => 113,  275 => 92,  271 => 91,  266 => 90,  259 => 89,  247 => 83,  243 => 82,  239 => 81,  235 => 80,  228 => 76,  224 => 75,  216 => 70,  212 => 69,  206 => 66,  197 => 60,  193 => 59,  188 => 57,  181 => 53,  172 => 47,  167 => 45,  160 => 41,  155 => 39,  148 => 35,  143 => 33,  136 => 29,  131 => 27,  124 => 23,  119 => 21,  114 => 19,  111 => 18,  102 => 15,  99 => 14,  95 => 13,  89 => 11,  82 => 10,  73 => 7,  69 => 6,  64 => 5,  57 => 4,  49 => 1,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Admin/adminLayout.html.twig' %}
{% form_theme edit_form 'bootstrap_3_horizontal_layout.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('assets/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/summernote.css') }}\" rel=\"stylesheet\">
{% endblock stylesheets %}

{% block page_content -%}
    <h3>{{ 'Category edit'|trans }}</h3>

    {% for flashMessage in app.session.flashbag.get('notice') %}
        <div class=\"alert alert-success\" role=\"alert\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    {{ form_start(edit_form) }}
    <div class=\"form-group\">
        {{ form_label(edit_form.name, 'Name'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(edit_form.name, {'attr': {'class': 'product-name'}}) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.description, 'Description'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(edit_form.description, {'attr': {'class': 'summernote'}}) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.file, 'Image'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(edit_form.file) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.metaKeys, 'Meta keys'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(edit_form.metaKeys) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.metaDescription, 'Meta description'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(edit_form.metaDescription) }}
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"></label>
        <div class=\"col-sm-10\">
            <a href=\"#\" class=\"btn btn-default generate-slug\">{{ 'generate slug'|trans }}</a>
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.slug, 'Slug'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_errors(edit_form.slug) }}
            {{ form_widget(edit_form.slug, {'attr': {'class': 'product-slug'}}) }}
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"></label>
        <div class=\"col-sm-10\">
            <input type=\"submit\" value=\"{{ 'Edit'|trans }}\" class=\"btn btn-warning\"/>
        </div>
    </div>
    {{ form_rest(edit_form) }}
    {{ form_end(edit_form) }}

    <div class=\"col-md-5 col-md-offset-2 \">
        <ul class=\"list-group\">
            <li class=\"list-group-item\">
                <a href=\"{{ path('admin_category') }}\">
                    {{ 'Back to the list'|trans }}
                </a>
            </li>
            <li class=\"list-group-item\">
                {{ form_start(delete_form, { 'attr': {'class': 'bootbox-submit-confirm'} }) }}
                {{ form_widget(delete_form) }}
                <input type=\"submit\" value=\"{{ 'Delete'|trans }}\" class=\"btn btn-danger\"/>
                {{ form_end(delete_form) }}
            </li>
        </ul>
    </div>
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
", "AdminBundle:Category:edit.html.twig", "C:\\laragon\\www\\qassiima\\src\\Eshop\\AdminBundle/Resources/views/Category/edit.html.twig");
    }
}
