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

/* AdminBundle:Orders:index.html.twig */
class __TwigTemplate_94d5d0ba5f8ddcb32fedab0d468dd89cd0cf5ec2690d779d0cf0b0af7a8294bc extends \Twig\Template
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
        return "@Admin/adminLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AdminBundle:Orders:index.html.twig"));

        $this->parent = $this->loadTemplate("@Admin/adminLayout.html.twig", "AdminBundle:Orders:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders list"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Administration panel"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders list"), "html", null, true);
        echo "</h3>
    ";
        // line 9
        if (twig_length_filter($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "        <table class=\"records_list table table-striped\">
            <thead>
            <tr>
                <th class=\"col-md-1\">";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order No"), "html", null, true);
            echo " #</th>
                <th class=\"col-md-1\">";
            // line 14
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 14, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Client name"), "o.name");
            echo "</th>
                <th class=\"col-md-1\">";
            // line 15
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 15, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("User"), "u.username");
            echo "</th>
                <th class=\"col-md-1\">";
            // line 16
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 16, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order totalsum"), "o.sum");
            echo "</th>
                <th class=\"col-md-6\">";
            // line 17
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 17, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order date"), "o.date");
            echo "</th>
                <th class=\"col-md-2\">";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions"), "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 23
                echo "                <tr>
                    <td>
                        <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_show", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 25), "html", null, true);
                echo "</a>
                    </td>
                    <td>
                        <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_show", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 28), "html", null, true);
                echo "</a>
                    </td>
                    <td>
                        ";
                // line 31
                if (twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_info", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 32), "username", [], "any", false, false, false, 32), "html", null, true);
                    echo "</a>
                        ";
                } else {
                    // line 34
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("not registered"), "html", null, true);
                    echo "
                        ";
                }
                // line 36
                echo "                    </td>
                    <td>
                        ";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "sum", [], "any", false, false, false, 38), "html", null, true);
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("currency"), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "date", [], "any", false, false, false, 41), "Y-m-d H:i"), "html", null, true);
                echo "
                    </td>
                    <td>
                        <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_show", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show"), "html", null, true);
                echo "</a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 51
            echo "        <strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No orders yet"), "html", null, true);
            echo "</strong>
    ";
        }
        // line 53
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 55
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 55, $this->source); })()));
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Orders:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 55,  198 => 53,  192 => 51,  187 => 48,  175 => 44,  169 => 41,  162 => 38,  158 => 36,  152 => 34,  144 => 32,  142 => 31,  134 => 28,  126 => 25,  122 => 23,  118 => 22,  111 => 18,  107 => 17,  103 => 16,  99 => 15,  95 => 14,  91 => 13,  86 => 10,  84 => 9,  79 => 8,  72 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Admin/adminLayout.html.twig' %}

{% block title %}
    {{ 'Orders list'|trans }} - {{ 'Administration panel'|trans }}
{% endblock title %}

{% block page_content -%}
    <h3>{{ 'Orders list'|trans }}</h3>
    {% if orders|length %}
        <table class=\"records_list table table-striped\">
            <thead>
            <tr>
                <th class=\"col-md-1\">{{ 'Order No'|trans }} #</th>
                <th class=\"col-md-1\">{{ knp_pagination_sortable(orders, 'Client name'|trans, 'o.name') }}</th>
                <th class=\"col-md-1\">{{ knp_pagination_sortable(orders, 'User'|trans, 'u.username') }}</th>
                <th class=\"col-md-1\">{{ knp_pagination_sortable(orders, 'Order totalsum'|trans, 'o.sum') }}</th>
                <th class=\"col-md-6\">{{ knp_pagination_sortable(orders, 'Order date'|trans, 'o.date') }}</th>
                <th class=\"col-md-2\">{{ 'Actions'|trans }}</th>
            </tr>
            </thead>
            <tbody>
            {% for order in orders %}
                <tr>
                    <td>
                        <a href=\"{{ path('admin_order_show', { 'id': order.id }) }}\">{{ order.id }}</a>
                    </td>
                    <td>
                        <a href=\"{{ path('admin_order_show', { 'id': order.id }) }}\">{{ order.name }}</a>
                    </td>
                    <td>
                        {% if order.user %}
                            <a href=\"{{ path('admin_user_info', { 'id': order.user.id }) }}\">{{ order.user.username }}</a>
                        {% else %}
                            {{ 'not registered'|trans }}
                        {% endif %}
                    </td>
                    <td>
                        {{ order.sum }}{{ 'currency'|trans }}
                    </td>
                    <td>
                        {{ order.date|date('Y-m-d H:i') }}
                    </td>
                    <td>
                        <a href=\"{{ path('admin_order_show', { 'id': order.id }) }}\">{{ 'Show'|trans }}</a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        <strong>{{ 'No orders yet'|trans }}</strong>
    {% endif %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            {{ knp_pagination_render(orders) }}
        </div>
    </div>
{% endblock page_content %}
", "AdminBundle:Orders:index.html.twig", "C:\\laragon\\www\\qassiima\\src\\Eshop\\AdminBundle/Resources/views/Orders/index.html.twig");
    }
}
