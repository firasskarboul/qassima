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

/* AdminBundle:Product:show.html.twig */
class __TwigTemplate_e0acc4b0a7e22e9afbed74e8e6afb6f66a266a7a0d00efcc633e58f9ed2915a2 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AdminBundle:Product:show.html.twig"));

        $this->parent = $this->loadTemplate("@Admin/adminLayout.html.twig", "AdminBundle:Product:show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fancybox/jquery.fancybox.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\"
          type=\"text/css\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 10
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product"), "html", null, true);
        echo "</h3>

    <table class=\"record_properties table table-bordered table-striped\">
        <tbody>
        <tr>
            <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo "</th>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Slug"), "html", null, true);
        echo "</th>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "slug", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description"), "html", null, true);
        echo "</th>
            <td>
                ";
        // line 25
        echo nl2br($this->extensions['Eshop\ShopBundle\Twig\RawDescriptionExtension']->rawdescrFilter(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25)));
        echo "
            </td>
        </tr>
        <tr>
            <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price"), "html", null, true);
        echo "</th>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), "price", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Image"), "html", null, true);
        echo "</th>
            <td>
                ";
        // line 35
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 35, $this->source); })()), "images", [], "any", false, false, false, 35))) {
            // line 36
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 36, $this->source); })()), "images", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 37
                echo "                        <a class=\"fancybox\" rel=\"group\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/gallery/" . twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 37))), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(("uploads/gallery/" . twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 38)), "some_thumb")), "html", null, true);
                echo "\"/>
                        </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                ";
        } else {
            // line 42
            echo "                    <span class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no photos"), "html", null, true);
            echo "</span>
                ";
        }
        // line 44
        echo "            </td>
        </tr>
        <tr>
            <th>";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity"), "html", null, true);
        echo "</th>
            <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 48, $this->source); })()), "quantity", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Measure"), "html", null, true);
        echo "</th>
            <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 52, $this->source); })()), "measure", [], "any", false, false, false, 52), "name", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Measure quantity"), "html", null, true);
        echo "</th>
            <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 56, $this->source); })()), "measureQuantity", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta keys"), "html", null, true);
        echo "</th>
            <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 60, $this->source); })()), "metaKeys", [], "any", false, false, false, 60), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta description"), "html", null, true);
        echo "</th>
            <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 64, $this->source); })()), "metaDescription", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
        </tr>
        </tbody>
    </table>

    <ul class=\"list-group\">
        <li class=\"list-group-item\">
            <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product");
        echo "\">
                ";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to the list"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"list-group-item\">
            <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76)]), "html", null, true);
        echo "\">
                ";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
        echo "
            </a>
        </li>
        <li class=\"list-group-item\">
            ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 81, $this->source); })()), 'form_start', ["attr" => ["class" => "bootbox-submit-confirm"]]);
        echo "
            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 82, $this->source); })()), 'widget');
        echo "
            <input type=\"submit\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
        echo "\" class=\"btn btn-danger\"/>
            ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 84, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fancybox/jquery.mousewheel-3.0.6.pack.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fancybox/jquery.fancybox.pack.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        \$(document).ready(function () {
            \$(\".fancybox\").fancybox();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Product:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 93,  285 => 91,  280 => 90,  273 => 89,  262 => 84,  258 => 83,  254 => 82,  250 => 81,  243 => 77,  239 => 76,  232 => 72,  228 => 71,  218 => 64,  214 => 63,  208 => 60,  204 => 59,  198 => 56,  194 => 55,  188 => 52,  184 => 51,  178 => 48,  174 => 47,  169 => 44,  163 => 42,  160 => 41,  151 => 38,  146 => 37,  141 => 36,  139 => 35,  134 => 33,  128 => 30,  124 => 29,  117 => 25,  112 => 23,  106 => 20,  102 => 19,  96 => 16,  92 => 15,  83 => 10,  76 => 9,  66 => 5,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Admin/adminLayout.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('assets/fancybox/jquery.fancybox.css') }}\" media=\"all\" rel=\"stylesheet\"
          type=\"text/css\"/>
{% endblock stylesheets %}

{% block page_content -%}
    <h3>{{ 'Product'|trans }}</h3>

    <table class=\"record_properties table table-bordered table-striped\">
        <tbody>
        <tr>
            <th>{{ 'Name'|trans }}</th>
            <td>{{ entity.name }}</td>
        </tr>
        <tr>
            <th>{{ 'Slug'|trans }}</th>
            <td>{{ entity.slug }}</td>
        </tr>
        <tr>
            <th>{{ 'Description'|trans }}</th>
            <td>
                {{ entity.description|rawdescr|nl2br }}
            </td>
        </tr>
        <tr>
            <th>{{ 'Price'|trans }}</th>
            <td>{{ entity.price }}</td>
        </tr>
        <tr>
            <th>{{ 'Image'|trans }}</th>
            <td>
                {% if entity.images|length %}
                    {% for image in entity.images %}
                        <a class=\"fancybox\" rel=\"group\" href=\"{{ asset(('uploads/gallery/' ~ image.path)) }}\">
                            <img src=\"{{ asset( ('uploads/gallery/' ~ image.path) | imagine_filter('some_thumb')) }}\"/>
                        </a>
                    {% endfor %}
                {% else %}
                    <span class=\"text-danger\">{{ 'no photos'|trans }}</span>
                {% endif %}
            </td>
        </tr>
        <tr>
            <th>{{ 'Quantity'|trans }}</th>
            <td>{{ entity.quantity }}</td>
        </tr>
        <tr>
            <th>{{ 'Measure'|trans }}</th>
            <td>{{ entity.measure.name }}</td>
        </tr>
        <tr>
            <th>{{ 'Measure quantity'|trans }}</th>
            <td>{{ entity.measureQuantity }}</td>
        </tr>
        <tr>
            <th>{{ 'Meta keys'|trans }}</th>
            <td>{{ entity.metaKeys }}</td>
        </tr>
        <tr>
            <th>{{ 'Meta description'|trans }}</th>
            <td>{{ entity.metaDescription }}</td>
        </tr>
        </tbody>
    </table>

    <ul class=\"list-group\">
        <li class=\"list-group-item\">
            <a href=\"{{ path('admin_product') }}\">
                {{ 'Back to the list'|trans }}
            </a>
        </li>
        <li class=\"list-group-item\">
            <a href=\"{{ path('admin_product_edit', { 'id': entity.id }) }}\">
                {{ 'Edit'|trans }}
            </a>
        </li>
        <li class=\"list-group-item\">
            {{ form_start(delete_form, { 'attr': {'class': 'bootbox-submit-confirm'} }) }}
            {{ form_widget(delete_form) }}
            <input type=\"submit\" value=\"{{ 'Delete'|trans }}\" class=\"btn btn-danger\"/>
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock page_content %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/fancybox/jquery.mousewheel-3.0.6.pack.js') }}\"
            type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/fancybox/jquery.fancybox.pack.js') }}\" type=\"text/javascript\"></script>
    <script>
        \$(document).ready(function () {
            \$(\".fancybox\").fancybox();
        });
    </script>
{% endblock javascripts %}
", "AdminBundle:Product:show.html.twig", "D:\\laragon\\www\\qassima\\src\\Eshop\\AdminBundle/Resources/views/Product/show.html.twig");
    }
}
