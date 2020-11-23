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

/* @Admin/Partials/productImages.html.twig */
class __TwigTemplate_9fd244192a6caf6c2963dc71a90a91786c8bf23c988eff0721f975abed74e87a extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin/Partials/productImages.html.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 1, $this->source); })()), "images", [], "any", false, false, false, 1))) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 2, $this->source); })()), "images", [], "any", false, false, false, 2), 0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 3
                echo "        <a class=\"fancybox\" rel=\"group\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/gallery/" . twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 3))), "html", null, true);
                echo "\">
            <img src=\"";
                // line 4
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(("uploads/gallery/" . twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 4)), "some_thumb")), "html", null, true);
                echo "\"/>
        </a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo " ...
";
        } else {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no photos"), "html", null, true);
            echo "
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Partials/productImages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 8,  61 => 6,  52 => 4,  47 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if product.images|length %}
    {% for image in product.images|slice(0, 3) %}
        <a class=\"fancybox\" rel=\"group\" href=\"{{ asset(('uploads/gallery/' ~ image.path)) }}\">
            <img src=\"{{ asset( ('uploads/gallery/' ~ image.path) | imagine_filter('some_thumb')) }}\"/>
        </a>
    {% endfor %} ...
{% else %}
    {{ 'no photos'|trans }}
{% endif %}
", "@Admin/Partials/productImages.html.twig", "D:\\laragon\\www\\qassima\\src\\Eshop\\AdminBundle\\Resources\\views\\Partials\\productImages.html.twig");
    }
}
