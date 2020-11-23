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

/* ShopBundle:Cart:navbarCart.html.twig */
class __TwigTemplate_44e5374abe15f7b215271947dc5abecbde26b6f26f488cc56aa1187c0ac9db44 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ShopBundle:Cart:navbarCart.html.twig"));

        // line 2
        echo " 
<div class=\"items-cart-inner\">
                    <div class=\"basket\"> <i class=\"glyphicon glyphicon-shopping-cart\"></i> </div>
                    <div class=\"basket-item-count\"><span id=\"cart-quantity\" class=\"count\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 5, $this->source); })()), "quantity", [], "any", false, false, false, 5), "html", null, true);
        echo "</span></div>
                    <div class=\"total-price-basket\"> <span id=\"cart-sum\" class=\"lbl\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 6, $this->source); })()), "sum", [], "any", false, false, false, 6), "html", null, true);
        echo "</span> </div>
                  </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:Cart:navbarCart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  45 => 5,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'ShopBundle' %}
 
<div class=\"items-cart-inner\">
                    <div class=\"basket\"> <i class=\"glyphicon glyphicon-shopping-cart\"></i> </div>
                    <div class=\"basket-item-count\"><span id=\"cart-quantity\" class=\"count\">{{ cart.quantity }}</span></div>
                    <div class=\"total-price-basket\"> <span id=\"cart-sum\" class=\"lbl\">{{ cart.sum }}</span> </div>
                  </div>", "ShopBundle:Cart:navbarCart.html.twig", "D:\\laragon\\www\\qassima\\src\\Eshop\\ShopBundle/Resources/views/Cart/navbarCart.html.twig");
    }
}
