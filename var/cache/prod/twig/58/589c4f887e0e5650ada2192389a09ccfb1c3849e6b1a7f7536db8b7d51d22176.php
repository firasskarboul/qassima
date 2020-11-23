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

/* @Shop/Partials/lastSeenProducts.html.twig */
class __TwigTemplate_fd8adfc93564ab7fba8c025505ca8c65c806defc9e5a6825ab12d217c208a36a extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Shop/Partials/lastSeenProducts.html.twig"));

        // line 2
        echo "<h3 class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.lastseen.header", [], "ShopBundle"), "html", null, true);
        echo "</h3>
 <div class=\"tab-content outer-top-xs\">
          <div class=\"tab-pane in active\" id=\"all\">
            <div class=\"product-slider\">
              <div class=\"owl-carousel home-owl-carousel custom-carousel owl-theme\" style=\"opacity: 1; display: block;\">
                <div class=\"owl-wrapper-outer\">
                  <div class=\"owl-wrapper\" style=\"width: 2850px; left: 0px; display: block;\">

                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 10, $this->source); })()));
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
            // line 11
            echo "                        ";
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
        // line 13
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/Partials/lastSeenProducts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 13,  69 => 11,  52 => 10,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'ShopBundle' %}
<h3 class=\"text-center\">{{ 'layout.lastseen.header'|trans }}</h3>
 <div class=\"tab-content outer-top-xs\">
          <div class=\"tab-pane in active\" id=\"all\">
            <div class=\"product-slider\">
              <div class=\"owl-carousel home-owl-carousel custom-carousel owl-theme\" style=\"opacity: 1; display: block;\">
                <div class=\"owl-wrapper-outer\">
                  <div class=\"owl-wrapper\" style=\"width: 2850px; left: 0px; display: block;\">

                    {% for product in products %}
                        {{ include('@Shop/Partials/productPreview.html.twig') }}
                    {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>", "@Shop/Partials/lastSeenProducts.html.twig", "D:\\laragon\\www\\qassima\\src\\Eshop\\ShopBundle\\Resources\\views\\Partials\\lastSeenProducts.html.twig");
    }
}
