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

/* ShopBundle:Cart:showCart.html.twig */
class __TwigTemplate_0a6ff16ea4f80c4d9d3a789cce4567b9fb024767b8dbcb7d180fe0f1a4f19563 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ShopBundle:Cart:showCart.html.twig"));

        $this->parent = $this->loadTemplate("@Shop/layout.html.twig", "ShopBundle:Cart:showCart.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.title.cart", [], "ShopBundle"), "html", null, true);
        echo "
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
        echo "<div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1\">
            ";
        // line 11
        if (twig_length_filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "                <div class=\"row\">
                    <div>
                        <h2>";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.yourcart", [], "ShopBundle"), "html", null, true);
            echo "</h2>
                    </div>
                </div>
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.table.product", [], "ShopBundle"), "html", null, true);
            echo "</th>
                        <th>";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.table.quantity", [], "ShopBundle"), "html", null, true);
            echo "</th>
                        <th></th>
                        <th>";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.table.price", [], "ShopBundle"), "html", null, true);
            echo "</th>
                        <th style=\"text-align: right;\">";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.table.sum", [], "ShopBundle"), "html", null, true);
            echo "</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 29, $this->source); })()));
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
                // line 30
                echo "                        <tr class=\"product-position\">
                            <td class=\"col-md-1\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"#\" class=\"thumbnail pull-left\" style=\"margin-right: 15px;\">
                                    ";
                // line 34
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 34), "images", [], "any", false, false, false, 34))) {
                    // line 35
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(("uploads/gallery/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 35), "images", [], "any", false, false, false, 35), "first", [], "method", false, false, false, 35), "path", [], "any", false, false, false, 35)), "some_thumb")), "html", null, true);
                    echo "\"
                                             alt=\"";
                    // line 36
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
                    echo "\">
                                    ";
                } else {
                    // line 38
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter("uploads/gallery/no_image_available.png", "some_thumb")), "html", null, true);
                    echo "\"
                                             alt=\"";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
                    echo "\">
                                    ";
                }
                // line 41
                echo "                                </a>
                                <div>
                                    <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_product", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 43), "slug", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\">
                                        <strong>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
                echo "</strong>
                                    </a>
                                    <ul class=\"list-unstyled\">
                                    </ul>
                                </div>
                            </td>
                            <td class=\"col-md-2\">
                                <div class=\"form-group\">
                                    <div>
                                        <input type=\"number\" name=\"quantity\" required=\"required\" min=\"1\"
                                               data-id=\"";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "html", null, true);
                echo "\" class=\"form-control quantity\"
                                               value=\"";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 55), "html", null, true);
                echo "\">
                                    </div>
                                </div>
                            </td>
                            <td class=\"col-md-1\">
                                <a href=\"#\" class=\"btn btn-danger glyphicon glyphicon-remove product-remove\"
                                   data-toggle=\"confirmation\" data-popout=\"true\" data-placement=\"left\">
                                    <i class=\"icon-trash icon-white\"></i>
                                </a>
                            </td>
                            <td class=\"col-md-1 price\">
                                <span>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 66), "html", null, true);
                echo "</span>
                            </td>
                            <td class=\"col-md-1 sum\" style=\"text-align: right\">
                                ";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "sum", [], "any", false, false, false, 69), "html", null, true);
                echo "
                            </td>
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
            // line 73
            echo "                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan=\"6\" style=\"text-align: right;\">
                            <strong>";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.table.totalsum", [], "ShopBundle"), "html", null, true);
            echo ":</strong>
                            <span class=\"totalsum\">";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["totalsum"]) || array_key_exists("totalsum", $context) ? $context["totalsum"] : (function () { throw new RuntimeError('Variable "totalsum" does not exist.', 78, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("currency", [], "ShopBundle"), "html", null, true);
            echo "</span>
                        </td>
                    </tr>
                    </tfoot>
                </table>
                <div class=\"row\">
                    <div>
                        <div class=\"pull-right\">
                            <a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orderform");
            echo "\" class=\"btn btn-success glyphicon glyphicon-ok\"
                               id=\"";
            // line 87
            if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                echo "showModal";
            }
            echo "\">
                                ";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.checkout", [], "ShopBundle"), "html", null, true);
            echo "
                            </a>
                            <a href=\"#\" class=\"btn btn-danger glyphicon glyphicon-trash clear-cart\"
                               data-toggle=\"confirmation\" data-popout=\"true\" data-placement=\"left\">
                                ";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.clear", [], "ShopBundle"), "html", null, true);
            echo "
                            </a>
                        </div>
                    </div>
                </div>
            ";
        } else {
            // line 98
            echo "                <div class=\"row\">
                    <div>
                        <h2>";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.isemptyyet", [], "ShopBundle"), "html", null, true);
            echo "</h2>
                        <p><a href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_main");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.continue", [], "ShopBundle"), "html", null, true);
            echo "</a></p>
                    </div>
                </div>
            ";
        }
        // line 105
        echo "        </div>
    </div>
    <!-- Modal -->
    <div class=\"modal fade\" id=\"authSuggest\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.pleasereg", [], "ShopBundle"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.regadvadtages", [], "ShopBundle"), "html", null, true);
        echo "
                </div>
                <div class=\"modal-footer\">
                    <a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "\" class=\"btn btn-success\">
                        ";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.login", [], "ShopBundle"), "html", null, true);
        echo "
                    </a>
                    <a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-success\">
                        ";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.register", [], "ShopBundle"), "html", null, true);
        echo "
                    </a>
                    <a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orderform");
        echo "\" class=\"btn btn-primary\">
                        ";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.continuewithout", [], "ShopBundle"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 135
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 136
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function (e) {
            \$('#showModal').on('click', function (e) {
                e.preventDefault();
                \$('#authSuggest').modal('show');
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:Cart:showCart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 136,  354 => 135,  340 => 127,  336 => 126,  331 => 124,  327 => 123,  322 => 121,  318 => 120,  312 => 117,  306 => 114,  295 => 105,  286 => 101,  282 => 100,  278 => 98,  269 => 92,  262 => 88,  256 => 87,  252 => 86,  239 => 78,  235 => 77,  229 => 73,  211 => 69,  205 => 66,  191 => 55,  187 => 54,  174 => 44,  170 => 43,  166 => 41,  161 => 39,  156 => 38,  151 => 36,  146 => 35,  144 => 34,  138 => 31,  135 => 30,  118 => 29,  111 => 25,  107 => 24,  102 => 22,  98 => 21,  88 => 14,  84 => 12,  82 => 11,  78 => 9,  71 => 8,  61 => 5,  54 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Shop/layout.html.twig' %}
{% trans_default_domain 'ShopBundle' %}

{% block title %}
    {{ 'cart.title.cart'|trans }}
{% endblock title %}

{% block page_content -%}
    <div class=\"row\">
        <div class=\"col-md-10 col-md-offset-1\">
            {% if products|length %}
                <div class=\"row\">
                    <div>
                        <h2>{{ 'cart.yourcart'|trans }}</h2>
                    </div>
                </div>
                <table class=\"table\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ 'cart.table.product'|trans }}</th>
                        <th>{{ 'cart.table.quantity'|trans }}</th>
                        <th></th>
                        <th>{{ 'cart.table.price'|trans }}</th>
                        <th style=\"text-align: right;\">{{ 'cart.table.sum'|trans }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for product in products %}
                        <tr class=\"product-position\">
                            <td class=\"col-md-1\">{{ loop.index }}</td>
                            <td>
                                <a href=\"#\" class=\"thumbnail pull-left\" style=\"margin-right: 15px;\">
                                    {% if product.product.images|length %}
                                        <img src=\"{{ asset( ('uploads/gallery/' ~ product.product.images.first().path) | imagine_filter('some_thumb')) }}\"
                                             alt=\"{{ product.product.name }}\">
                                    {% else %}
                                        <img src=\"{{ asset( ('uploads/gallery/no_image_available.png') | imagine_filter('some_thumb')) }}\"
                                             alt=\"{{ product.product.name }}\">
                                    {% endif %}
                                </a>
                                <div>
                                    <a href=\"{{ path('show_product', {'slug' : product.product.slug}) }}\">
                                        <strong>{{ product.product.name }}</strong>
                                    </a>
                                    <ul class=\"list-unstyled\">
                                    </ul>
                                </div>
                            </td>
                            <td class=\"col-md-2\">
                                <div class=\"form-group\">
                                    <div>
                                        <input type=\"number\" name=\"quantity\" required=\"required\" min=\"1\"
                                               data-id=\"{{ product.product.id }}\" class=\"form-control quantity\"
                                               value=\"{{ product.quantity }}\">
                                    </div>
                                </div>
                            </td>
                            <td class=\"col-md-1\">
                                <a href=\"#\" class=\"btn btn-danger glyphicon glyphicon-remove product-remove\"
                                   data-toggle=\"confirmation\" data-popout=\"true\" data-placement=\"left\">
                                    <i class=\"icon-trash icon-white\"></i>
                                </a>
                            </td>
                            <td class=\"col-md-1 price\">
                                <span>{{ product.price }}</span>
                            </td>
                            <td class=\"col-md-1 sum\" style=\"text-align: right\">
                                {{ product.sum }}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan=\"6\" style=\"text-align: right;\">
                            <strong>{{ 'cart.table.totalsum'|trans }}:</strong>
                            <span class=\"totalsum\">{{ totalsum }} {{ 'currency'|trans }}</span>
                        </td>
                    </tr>
                    </tfoot>
                </table>
                <div class=\"row\">
                    <div>
                        <div class=\"pull-right\">
                            <a href=\"{{ path('orderform') }}\" class=\"btn btn-success glyphicon glyphicon-ok\"
                               id=\"{% if not is_granted('IS_AUTHENTICATED_REMEMBERED') %}showModal{% endif %}\">
                                {{ 'cart.checkout'|trans }}
                            </a>
                            <a href=\"#\" class=\"btn btn-danger glyphicon glyphicon-trash clear-cart\"
                               data-toggle=\"confirmation\" data-popout=\"true\" data-placement=\"left\">
                                {{ 'cart.clear'|trans }}
                            </a>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"row\">
                    <div>
                        <h2>{{ 'cart.isemptyyet'|trans }}</h2>
                        <p><a href=\"{{ path('index_main') }}\">{{ 'cart.continue'|trans }}</a></p>
                    </div>
                </div>
            {% endif %}
        </div>
    </div>
    <!-- Modal -->
    <div class=\"modal fade\" id=\"authSuggest\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">{{ 'cart.pleasereg'|trans }}</h4>
                </div>
                <div class=\"modal-body\">
                    {{ 'cart.regadvadtages'|trans }}
                </div>
                <div class=\"modal-footer\">
                    <a href=\"{{ path('fos_user_security_login') }}\" class=\"btn btn-success\">
                        {{ 'cart.login'|trans }}
                    </a>
                    <a href=\"{{ path('fos_user_registration_register') }}\" class=\"btn btn-success\">
                        {{ 'cart.register'|trans }}
                    </a>
                    <a href=\"{{ path('orderform') }}\" class=\"btn btn-primary\">
                        {{ 'cart.continuewithout'|trans }}
                    </a>
                </div>
            </div>
        </div>
    </div>
{% endblock page_content %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$(document).ready(function (e) {
            \$('#showModal').on('click', function (e) {
                e.preventDefault();
                \$('#authSuggest').modal('show');
            });
        });
    </script>
{% endblock javascripts %}
", "ShopBundle:Cart:showCart.html.twig", "D:\\laragon\\www\\Qasima\\src\\Eshop\\ShopBundle/Resources/views/Cart/showCart.html.twig");
    }
}
