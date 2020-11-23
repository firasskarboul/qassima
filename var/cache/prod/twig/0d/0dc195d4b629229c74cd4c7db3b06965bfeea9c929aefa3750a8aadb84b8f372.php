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

/* @Admin/Partials/indexProductItem.html.twig */
class __TwigTemplate_7a58958fbfc29308d9fa49c3ab51095bee8f7c31642295c44c5f6b251c85c5b0 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin/Partials/indexProductItem.html.twig"));

        // line 1
        echo "<tr data-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
    <td><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), "name", [], "any", false, false, false, 2), "html", null, true);
        echo "</a></td>
    <td>
        <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "category", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4)]), "html", null, true);
        echo "\">
            ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 5, $this->source); })()), "category", [], "any", false, false, false, 5), "html", null, true);
        echo "
        </a>
    </td>
    <td>
        <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_manufacturer_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "manufacturer", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\">
            ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "manufacturer", [], "any", false, false, false, 10), "html", null, true);
        echo "
        </a>
    </td>
    <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 13, $this->source); })()), "price", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
    <td>
        ";
        // line 15
        echo twig_include($this->env, $context, "@Admin/Partials/productImages.html.twig");
        echo "
    </td>
    <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 17, $this->source); })()), "quantity", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
    <td>
        <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("show"), "html", null, true);
        echo "</a><br>
        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit"), "html", null, true);
        echo "</a><br>
        ";
        // line 21
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "featured", [], "any", false, false, false, 21))) {
            // line 22
            echo "            <a href=\"#\" class=\"featured\">";
            echo twig_escape_filter($this->env, (isset($context["FEATURED"]) || array_key_exists("FEATURED", $context) ? $context["FEATURED"] : (function () { throw new RuntimeError('Variable "FEATURED" does not exist.', 22, $this->source); })()), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 24
            echo "            <a href=\"#\" class=\"featured\">";
            echo twig_escape_filter($this->env, (isset($context["NOT_FEATURED"]) || array_key_exists("NOT_FEATURED", $context) ? $context["NOT_FEATURED"] : (function () { throw new RuntimeError('Variable "NOT_FEATURED" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "</a>
        ";
        }
        // line 26
        echo "    </td>
</tr>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Partials/indexProductItem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 26,  108 => 24,  102 => 22,  100 => 21,  94 => 20,  88 => 19,  83 => 17,  78 => 15,  73 => 13,  67 => 10,  63 => 9,  56 => 5,  52 => 4,  45 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr data-id=\"{{ product.id }}\">
    <td><a href=\"{{ path('admin_product_show', { 'id': product.id }) }}\">{{ product.name }}</a></td>
    <td>
        <a href=\"{{ path('admin_category_show', {'id': product.category.id}) }}\">
            {{ product.category }}
        </a>
    </td>
    <td>
        <a href=\"{{ path('admin_manufacturer_show', {'id': product.manufacturer.id}) }}\">
            {{ product.manufacturer }}
        </a>
    </td>
    <td>{{ product.price }}</td>
    <td>
        {{ include('@Admin/Partials/productImages.html.twig') }}
    </td>
    <td>{{ product.quantity }}</td>
    <td>
        <a href=\"{{ path('admin_product_show', { 'id': product.id }) }}\">{{ 'show'|trans }}</a><br>
        <a href=\"{{ path('admin_product_edit', { 'id': product.id }) }}\">{{ 'edit'|trans }}</a><br>
        {% if product.featured|length %}
            <a href=\"#\" class=\"featured\">{{ FEATURED }}</a>
        {% else %}
            <a href=\"#\" class=\"featured\">{{ NOT_FEATURED }}</a>
        {% endif %}
    </td>
</tr>
", "@Admin/Partials/indexProductItem.html.twig", "C:\\laragon\\www\\qassiima\\src\\Eshop\\AdminBundle\\Resources\\views\\Partials\\indexProductItem.html.twig");
    }
}
