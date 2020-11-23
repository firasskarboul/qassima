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

/* ShopBundle:Catalog:searchProduct.html.twig */
class __TwigTemplate_659778f431ef4a4947bc00129a8586c7449faf8a7358fc195899d0e4d0acaaa0 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ShopBundle:Catalog:searchProduct.html.twig"));

        $this->parent = $this->loadTemplate("@Shop/layout.html.twig", "ShopBundle:Catalog:searchProduct.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search.searchfor", [], "ShopBundle"), "html", null, true);
        echo " \"";
        echo twig_escape_filter($this->env, (isset($context["search_phrase"]) || array_key_exists("search_phrase", $context) ? $context["search_phrase"] : (function () { throw new RuntimeError('Variable "search_phrase" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\"
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 9
        echo "<div class=\"well well-sm\">
        <div class=\"btn-group\">
            <a href=\"#\" id=\"list\" class=\"btn btn-default btn-sm\"><span class=\"glyphicon glyphicon-th-list\">
            </span>";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("category.view.list", [], "ShopBundle"), "html", null, true);
        echo "</a> <a href=\"#\" id=\"grid\" class=\"btn btn-default btn-sm\"><span
                        class=\"glyphicon glyphicon-th\"></span>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("category.view.grid", [], "ShopBundle"), "html", null, true);
        echo "</a>
        </div>
        <strong>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("search.searchfor", [], "ShopBundle"), "html", null, true);
        echo " \"";
        echo twig_escape_filter($this->env, (isset($context["search_phrase"]) || array_key_exists("search_phrase", $context) ? $context["search_phrase"] : (function () { throw new RuntimeError('Variable "search_phrase" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\"</strong>
        <div class=\"dropdown pull-right\">
            <strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("category.sort.by", [], "ShopBundle"), "html", null, true);
        echo "</strong>
            <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\"
                    aria-haspopup=\"true\" aria-expanded=\"true\">
                ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["sortedby"]) || array_key_exists("sortedby", $context) ? $context["sortedby"] : (function () { throw new RuntimeError('Variable "sortedby" does not exist.', 20, $this->source); })()), [], "ShopBundle"), "html", null, true);
        echo "
                <span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                <li>";
        // line 24
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 24, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("category.sort.name", [], "ShopBundle"), "p.name");
        echo "</li>
                <li>";
        // line 25
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 25, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("category.sort.price", [], "ShopBundle"), "p.price");
        echo "</li>
            </ul>
        </div>
    </div>
    <div id=\"products\" class=\"row list-group\">
    ";
        // line 30
        if (twig_length_filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 30, $this->source); })()))) {
            // line 31
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 31, $this->source); })()));
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
                // line 32
                echo "            ";
                echo twig_include($this->env, $context, "@Shop/Partials/productPreview.html.twig");
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
            // line 34
            echo "    ";
        } else {
            // line 35
            echo "        <h3>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("manufacturer.noproducts", [], "ShopBundle"), "html", null, true);
            echo "</h3>
    ";
        }
        // line 37
        echo "    </div>
    <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-4\">
            ";
        // line 40
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 40, $this->source); })()));
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:Catalog:searchProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 40,  171 => 37,  165 => 35,  162 => 34,  145 => 32,  127 => 31,  125 => 30,  117 => 25,  113 => 24,  106 => 20,  100 => 17,  93 => 15,  88 => 13,  84 => 12,  79 => 9,  72 => 8,  60 => 5,  53 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Shop/layout.html.twig' %}
{% trans_default_domain 'ShopBundle' %}

{% block title %}
    {{ 'search.searchfor'|trans }} \"{{ search_phrase }}\"
{% endblock title %}

{% block page_content -%}
    <div class=\"well well-sm\">
        <div class=\"btn-group\">
            <a href=\"#\" id=\"list\" class=\"btn btn-default btn-sm\"><span class=\"glyphicon glyphicon-th-list\">
            </span>{{ 'category.view.list'|trans }}</a> <a href=\"#\" id=\"grid\" class=\"btn btn-default btn-sm\"><span
                        class=\"glyphicon glyphicon-th\"></span>{{ 'category.view.grid'|trans }}</a>
        </div>
        <strong>{{ 'search.searchfor'|trans }} \"{{ search_phrase }}\"</strong>
        <div class=\"dropdown pull-right\">
            <strong>{{ 'category.sort.by'|trans }}</strong>
            <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\"
                    aria-haspopup=\"true\" aria-expanded=\"true\">
                {{ sortedby|trans }}
                <span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
                <li>{{ knp_pagination_sortable(products, 'category.sort.name'|trans, 'p.name') }}</li>
                <li>{{ knp_pagination_sortable(products, 'category.sort.price'|trans, 'p.price') }}</li>
            </ul>
        </div>
    </div>
    <div id=\"products\" class=\"row list-group\">
    {% if products|length %}
        {% for product in products %}
            {{ include('@Shop/Partials/productPreview.html.twig') }}
        {% endfor %}
    {% else %}
        <h3>{{ 'manufacturer.noproducts'|trans }}</h3>
    {% endif %}
    </div>
    <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-4\">
            {{ knp_pagination_render(products) }}
        </div>
    </div>
{% endblock page_content %}
", "ShopBundle:Catalog:searchProduct.html.twig", "C:\\laragon\\www\\qassiima\\src\\Eshop\\ShopBundle/Resources/views/Catalog/searchProduct.html.twig");
    }
}
