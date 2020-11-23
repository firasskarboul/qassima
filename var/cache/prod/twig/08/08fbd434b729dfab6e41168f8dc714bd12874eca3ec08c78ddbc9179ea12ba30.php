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

/* AdminBundle:Orders:show.html.twig */
class __TwigTemplate_36aa4cda87571a92c796565515391c65569bd10eef7976e883603409090c8c2b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AdminBundle:Orders:show.html.twig"));

        $this->parent = $this->loadTemplate("@Admin/adminLayout.html.twig", "AdminBundle:Orders:show.html.twig", 1);
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
        echo "<h3>Order</h3>

    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <b>";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order No"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "</b>
        </div>
        <div class=\"panel-body\">
            <table class=\"table\">
                <tr>
                    <td class=\"field-label col-md-2 active\">
                        <label>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("User"), "html", null, true);
        echo ":</label>
                    </td>
                    <td class=\"col-md-10\">
                        ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            // line 18
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_info", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "username", [], "any", false, false, false, 18), "html", null, true);
            echo "</a>
                        ";
        } else {
            // line 20
            echo "                            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("not registered"), "html", null, true);
            echo "
                        ";
        }
        // line 22
        echo "                    </td>
                </tr>
                <tr>
                    <td class=\"field-label col-md-2 active\">
                        <label>";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Client Name"), "html", null, true);
        echo ":</label>
                    </td>
                    <td class=\"col-md-10\">
                        ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), "html", null, true);
        echo "
                    </td>
                </tr>
                <tr>
                    <td class=\"field-label col-md-2 active\">
                        <label>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo ":</label>
                    </td>
                    <td class=\"col-md-10\">
                        ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), "html", null, true);
        echo "
                    </td>
                </tr>
                <tr>
                    <td class=\"field-label col-md-2 active\">
                        <label>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Phone"), "html", null, true);
        echo ":</label>
                    </td>
                    <td class=\"col-md-10\">
                        ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 45, $this->source); })()), "phone", [], "any", false, false, false, 45), "html", null, true);
        echo "
                    </td>
                </tr>
                <tr>
                    <td class=\"field-label col-md-2 active\">
                        <label>";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Address"), "html", null, true);
        echo ":</label>
                    </td>
                    <td class=\"col-md-10\">
                        ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 53, $this->source); })()), "address", [], "any", false, false, false, 53), "html", null, true);
        echo "
                    </td>
                </tr>
                <tr>
                    <td class=\"field-label col-md-2 active\">
                        <label>";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order date"), "html", null, true);
        echo ":</label>
                    </td>
                    <td class=\"col-md-10\">
                        ";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 61, $this->source); })()), "date", [], "any", false, false, false, 61), "Y-m-d h:i"), "html", null, true);
        echo "
                    </td>
                </tr>
                <tr>
                    <td class=\"field-label col-md-2 active\">
                        <label>";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Comment"), "html", null, true);
        echo ":</label>
                    </td>
                    <td class=\"col-md-10\">
                        ";
        // line 69
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 69, $this->source); })()), "comment", [], "any", false, false, false, 69))) {
            // line 70
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 70, $this->source); })()), "comment", [], "any", false, false, false, 70), "html", null, true);
            echo "
                        ";
        } else {
            // line 72
            echo "                            <p class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No comment"), "html", null, true);
            echo "</p>
                        ";
        }
        // line 74
        echo "                    </td>
                </tr>
            </table>
        </div>

        <table class=\"table table-striped table-bordered\">
            <thead>
                <tr class=\"info\">
                    <th>#</th>
                    <th>";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo "</th>
                    <th>";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Q-ty"), "html", null, true);
        echo "</th>
                    <th>";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price"), "html", null, true);
        echo "</th>
                    <th>";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 90, $this->source); })()));
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
            // line 91
            echo "                <tr>
                    <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                    <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 93), "name", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
                    <td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
                    <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 95), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("currency"), "html", null, true);
            echo "</td>
                    <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "sum", [], "any", false, false, false, 96), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("currency"), "html", null, true);
            echo "</td>
                </tr>
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
        // line 99
        echo "            <tr class=\"warning\">
                <td colspan=\"3\"><b>";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order totalsum"), "html", null, true);
        echo "</b></td>
                <td colspan=\"2\"><b>";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 101, $this->source); })()), "sum", [], "any", false, false, false, 101), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("currency"), "html", null, true);
        echo "</b></td>
            </tr>
            </tbody>
        </table>
    </div>

    <ul class=\"list-group\">
        <li class=\"list-group-item\">
            <a href=\"";
        // line 109
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        echo "\">
                ";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to the list"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"list-group-item\">
            ";
        // line 114
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 114, $this->source); })()), 'form_start', ["attr" => ["class" => "bootbox-submit-confirm"]]);
        echo "
                ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 115, $this->source); })()), 'widget');
        echo "
                <input type=\"submit\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
        echo "\" class=\"btn btn-danger\" />
            ";
        // line 117
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 117, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Orders:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 117,  320 => 116,  316 => 115,  312 => 114,  305 => 110,  301 => 109,  288 => 101,  284 => 100,  281 => 99,  262 => 96,  256 => 95,  252 => 94,  248 => 93,  244 => 92,  241 => 91,  224 => 90,  217 => 86,  213 => 85,  209 => 84,  205 => 83,  194 => 74,  188 => 72,  182 => 70,  180 => 69,  174 => 66,  166 => 61,  160 => 58,  152 => 53,  146 => 50,  138 => 45,  132 => 42,  124 => 37,  118 => 34,  110 => 29,  104 => 26,  98 => 22,  92 => 20,  84 => 18,  82 => 17,  76 => 14,  65 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Admin/adminLayout.html.twig' %}

{% block page_content -%}
    <h3>Order</h3>

    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <b>{{ 'Order No'|trans }} #{{ order.id }}</b>
        </div>
        <div class=\"panel-body\">
            <table class=\"table\">
                <tr>
                    <td class=\"field-label col-md-2 active\">
                        <label>{{ 'User'|trans }}:</label>
                    </td>
                    <td class=\"col-md-10\">
                        {% if order.user %}
                            <a href=\"{{ path('admin_user_info', { 'id': order.user.id }) }}\">{{ order.user.username }}</a>
                        {% else %}
                            {{ 'not registered'|trans }}
                        {% endif %}
                    </td>
                </tr>
                <tr>
                    <td class=\"field-label col-md-2 active\">
                        <label>{{ 'Client Name'|trans }}:</label>
                    </td>
                    <td class=\"col-md-10\">
                        {{ order.name }}
                    </td>
                </tr>
                <tr>
                    <td class=\"field-label col-md-2 active\">
                        <label>{{ 'Email'|trans }}:</label>
                    </td>
                    <td class=\"col-md-10\">
                        {{ order.email }}
                    </td>
                </tr>
                <tr>
                    <td class=\"field-label col-md-2 active\">
                        <label>{{ 'Phone'|trans }}:</label>
                    </td>
                    <td class=\"col-md-10\">
                        {{ order.phone }}
                    </td>
                </tr>
                <tr>
                    <td class=\"field-label col-md-2 active\">
                        <label>{{ 'Address'|trans }}:</label>
                    </td>
                    <td class=\"col-md-10\">
                        {{ order.address }}
                    </td>
                </tr>
                <tr>
                    <td class=\"field-label col-md-2 active\">
                        <label>{{ 'Order date'|trans }}:</label>
                    </td>
                    <td class=\"col-md-10\">
                        {{ order.date|date('Y-m-d h:i') }}
                    </td>
                </tr>
                <tr>
                    <td class=\"field-label col-md-2 active\">
                        <label>{{ 'Comment'|trans }}:</label>
                    </td>
                    <td class=\"col-md-10\">
                        {% if order.comment|length %}
                            {{ order.comment }}
                        {% else %}
                            <p class=\"text-muted\">{{ 'No comment'|trans }}</p>
                        {% endif %}
                    </td>
                </tr>
            </table>
        </div>

        <table class=\"table table-striped table-bordered\">
            <thead>
                <tr class=\"info\">
                    <th>#</th>
                    <th>{{ 'Name'|trans }}</th>
                    <th>{{ 'Q-ty'|trans }}</th>
                    <th>{{ 'Price'|trans }}</th>
                    <th>{{ 'Total'|trans }}</th>
                </tr>
            </thead>
            <tbody>
            {% for product in products %}
                <tr>
                    <td>{{ loop.index }}</td>
                    <td>{{ product.product.name }}</td>
                    <td>{{ product.quantity }}</td>
                    <td>{{ product.price }} {{ 'currency'|trans }}</td>
                    <td>{{ product.sum }} {{ 'currency'|trans }}</td>
                </tr>
            {% endfor %}
            <tr class=\"warning\">
                <td colspan=\"3\"><b>{{ 'Order totalsum'|trans }}</b></td>
                <td colspan=\"2\"><b>{{ order.sum }} {{ 'currency'|trans }}</b></td>
            </tr>
            </tbody>
        </table>
    </div>

    <ul class=\"list-group\">
        <li class=\"list-group-item\">
            <a href=\"{{ path('admin_orders') }}\">
                {{ 'Back to the list'|trans }}
            </a>
        </li>
        <li class=\"list-group-item\">
            {{ form_start(delete_form, { 'attr': {'class': 'bootbox-submit-confirm'} }) }}
                {{ form_widget(delete_form) }}
                <input type=\"submit\" value=\"{{ 'Delete'|trans }}\" class=\"btn btn-danger\" />
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock page_content %}
", "AdminBundle:Orders:show.html.twig", "C:\\laragon\\www\\qassiima\\src\\Eshop\\AdminBundle/Resources/views/Orders/show.html.twig");
    }
}
