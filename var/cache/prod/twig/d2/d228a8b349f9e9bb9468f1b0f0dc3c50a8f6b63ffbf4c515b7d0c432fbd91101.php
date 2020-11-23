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

/* AdminBundle:Product:index.html.twig */
class __TwigTemplate_28fc75fdbd5d28381d17c776a00b58315f5c2340f710da649f82a5361cf80246 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AdminBundle:Product:index.html.twig"));

        // line 2
        $context["FEATURED"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("featured");
        // line 3
        $context["NOT_FEATURED"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("not featured");
        // line 1
        $this->parent = $this->loadTemplate("@Admin/adminLayout.html.twig", "AdminBundle:Product:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fancybox/jquery.fancybox.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\"
          type=\"text/css\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products list"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Administration panel"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 16
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products list"), "html", null, true);
        echo "</h3>
    <div class=\"row\">
        <div class=\"col-md-6 pull-left\">
            <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_new");
        echo "\">
                <span class=\"glyphicon glyphicon-plus\"></span>
                ";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create new Product"), "html", null, true);
        echo "
            </a>
        </div>
        <div class=\"col-md-6 pull-right\">
            <form class=\"form-inline pull-right\" action=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product");
        echo "\" method=\"get\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" name=\"search_words\"
                           placeholder=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search phrase"), "html", null, true);
        echo "\"
                            ";
        // line 29
        if (twig_length_filter($this->env, (isset($context["search_words"]) || array_key_exists("search_words", $context) ? $context["search_words"] : (function () { throw new RuntimeError('Variable "search_words" does not exist.', 29, $this->source); })()))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["search_words"]) || array_key_exists("search_words", $context) ? $context["search_words"] : (function () { throw new RuntimeError('Variable "search_words" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "\" ";
        }
        // line 30
        echo "                    >
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "</button>
            </form>
        </div>
    </div>

    ";
        // line 37
        if ( !twig_length_filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 37, $this->source); })()))) {
            // line 38
            echo "        <div class=\"row\" style=\"margin-top: 10px\">
            <div class=\"col-md-12 alert alert-warning\" role=\"alert\">
                ";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products not sound"), "html", null, true);
            echo "
            </div>
        </div>
    ";
        }
        // line 44
        echo "
    <table class=\"records_list table table-striped\">
        <thead>
        <tr>
            <th class=\"col-md-2\">";
        // line 48
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 48, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "p.name");
        echo "</th>
            <th class=\"col-md-2\">";
        // line 49
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 49, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category"), "pc.name");
        echo "</th>
            <th class=\"col-md-2\">";
        // line 50
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 50, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manufacturer"), "pm.name");
        echo "</th>
            <th class=\"col-md-1\">";
        // line 51
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 51, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price"), "p.price");
        echo "</th>
            <th class=\"col-md-3\">";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Photo"), "html", null, true);
        echo "</th>
            <th class=\"col-md-1\">";
        // line 53
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 53, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Q-ty"), "p.quantity");
        echo "</th>
            <th class=\"col-md-2\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 58, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 59
            echo "            ";
            echo twig_include($this->env, $context, "@Admin/Partials/indexProductItem.html.twig");
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </tbody>
    </table>
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 65
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 65, $this->source); })()));
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fancybox/jquery.mousewheel-3.0.6.pack.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fancybox/jquery.fancybox.pack.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        \$(document).ready(function () {
            \$(\".fancybox\").fancybox();

            \$(\".featured\").on(\"click\", function (e) {
                e.preventDefault();
                var link = \$(this);
                var productId = link.closest('tr').data('id');
                var value = link.text();

                var newValue = false;
                if (value == '";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["NOT_FEATURED"]) || array_key_exists("NOT_FEATURED", $context) ? $context["NOT_FEATURED"] : (function () { throw new RuntimeError('Variable "NOT_FEATURED" does not exist.', 86, $this->source); })()), "html", null, true);
        echo "') {
                    newValue = true;
                }

                \$.ajax({
                    type: 'post',
                    url: '";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_featured_product_edit_ajax");
        echo "',
                    data: {
                        product_id: productId,
                        new_value: newValue
                    },
                    success: function (data) {
                        if (data.success === true) {
                            changeFeaturedValue(link);
                        }
                    }
                });
            });

            function changeFeaturedValue(link) {
                if (link.html() == '";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["NOT_FEATURED"]) || array_key_exists("NOT_FEATURED", $context) ? $context["NOT_FEATURED"] : (function () { throw new RuntimeError('Variable "NOT_FEATURED" does not exist.', 106, $this->source); })()), "html", null, true);
        echo "') {
                    link.html('";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["FEATURED"]) || array_key_exists("FEATURED", $context) ? $context["FEATURED"] : (function () { throw new RuntimeError('Variable "FEATURED" does not exist.', 107, $this->source); })()), "html", null, true);
        echo "')
                } else {
                    link.html('";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["NOT_FEATURED"]) || array_key_exists("NOT_FEATURED", $context) ? $context["NOT_FEATURED"] : (function () { throw new RuntimeError('Variable "NOT_FEATURED" does not exist.', 109, $this->source); })()), "html", null, true);
        echo "')
                }
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 109,  318 => 107,  314 => 106,  297 => 92,  288 => 86,  273 => 74,  268 => 72,  263 => 71,  256 => 70,  245 => 65,  239 => 61,  222 => 59,  205 => 58,  198 => 54,  194 => 53,  190 => 52,  186 => 51,  182 => 50,  178 => 49,  174 => 48,  168 => 44,  161 => 40,  157 => 38,  155 => 37,  147 => 32,  143 => 30,  137 => 29,  133 => 28,  127 => 25,  120 => 21,  115 => 19,  108 => 16,  101 => 15,  89 => 12,  82 => 11,  72 => 7,  67 => 6,  60 => 5,  52 => 1,  50 => 3,  48 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Admin/adminLayout.html.twig' %}
{% set FEATURED = 'featured'|trans %}
{% set NOT_FEATURED = 'not featured'|trans %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('assets/fancybox/jquery.fancybox.css') }}\" media=\"all\" rel=\"stylesheet\"
          type=\"text/css\"/>
{% endblock stylesheets %}

{% block title %}
    {{ 'Products list'|trans }} - {{ 'Administration panel'|trans }}
{% endblock title %}

{% block page_content -%}
    <h3>{{ 'Products list'|trans }}</h3>
    <div class=\"row\">
        <div class=\"col-md-6 pull-left\">
            <a href=\"{{ path('admin_product_new') }}\">
                <span class=\"glyphicon glyphicon-plus\"></span>
                {{ 'Create new Product'|trans }}
            </a>
        </div>
        <div class=\"col-md-6 pull-right\">
            <form class=\"form-inline pull-right\" action=\"{{ path('admin_product') }}\" method=\"get\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" name=\"search_words\"
                           placeholder=\"{{ 'Search phrase'|trans }}\"
                            {% if search_words|length %} value=\"{{ search_words }}\" {% endif %}
                    >
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">{{ 'Search'|trans }}</button>
            </form>
        </div>
    </div>

    {% if not products|length %}
        <div class=\"row\" style=\"margin-top: 10px\">
            <div class=\"col-md-12 alert alert-warning\" role=\"alert\">
                {{ 'Products not sound'|trans }}
            </div>
        </div>
    {% endif %}

    <table class=\"records_list table table-striped\">
        <thead>
        <tr>
            <th class=\"col-md-2\">{{ knp_pagination_sortable(products, 'Name'|trans, 'p.name') }}</th>
            <th class=\"col-md-2\">{{ knp_pagination_sortable(products, 'Category'|trans, 'pc.name') }}</th>
            <th class=\"col-md-2\">{{ knp_pagination_sortable(products, 'Manufacturer'|trans, 'pm.name') }}</th>
            <th class=\"col-md-1\">{{ knp_pagination_sortable(products, 'Price'|trans, 'p.price') }}</th>
            <th class=\"col-md-3\">{{ 'Photo'|trans }}</th>
            <th class=\"col-md-1\">{{ knp_pagination_sortable(products, 'Q-ty'|trans, 'p.quantity') }}</th>
            <th class=\"col-md-2\">{{ 'Actions'|trans }}</th>
        </tr>
        </thead>
        <tbody>
        {% for product in products %}
            {{ include('@Admin/Partials/indexProductItem.html.twig') }}
        {% endfor %}
        </tbody>
    </table>
    <div class=\"row\">
        <div class=\"col-md-12\">
            {{ knp_pagination_render(products) }}
        </div>
    </div>
{% endblock page_content %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/fancybox/jquery.mousewheel-3.0.6.pack.js') }}\"
            type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/fancybox/jquery.fancybox.pack.js') }}\" type=\"text/javascript\"></script>
    <script>
        \$(document).ready(function () {
            \$(\".fancybox\").fancybox();

            \$(\".featured\").on(\"click\", function (e) {
                e.preventDefault();
                var link = \$(this);
                var productId = link.closest('tr').data('id');
                var value = link.text();

                var newValue = false;
                if (value == '{{ NOT_FEATURED }}') {
                    newValue = true;
                }

                \$.ajax({
                    type: 'post',
                    url: '{{ path('admin_featured_product_edit_ajax') }}',
                    data: {
                        product_id: productId,
                        new_value: newValue
                    },
                    success: function (data) {
                        if (data.success === true) {
                            changeFeaturedValue(link);
                        }
                    }
                });
            });

            function changeFeaturedValue(link) {
                if (link.html() == '{{ NOT_FEATURED }}') {
                    link.html('{{ FEATURED }}')
                } else {
                    link.html('{{ NOT_FEATURED }}')
                }
            }
        });
    </script>
{% endblock javascripts %}
", "AdminBundle:Product:index.html.twig", "D:\\laragon\\www\\qassima\\src\\Eshop\\AdminBundle/Resources/views/Product/index.html.twig");
    }
}
