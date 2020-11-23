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

/* @Shop/Partials/productPreview.html.twig */
class __TwigTemplate_46322c01a8c2978f1521a6142b926838578af4d8b5c9bf327549f8f34095a3a8 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Shop/Partials/productPreview.html.twig"));

        // line 2
        echo "<div class=\"owl-item\" style=\"width: 240px;\"><div class=\"item item-carousel\">
                      <div class=\"products\">
                        <div class=\"product\">
                          <div class=\"product-image\">
                            <div class=\"image\"> 
                              <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_product", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 7, $this->source); })()), "slug", [], "any", false, false, false, 7)]), "html", null, true);
        echo "\">
                                ";
        // line 8
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 8, $this->source); })()), "images", [], "any", false, false, false, 8))) {
            // line 9
            echo "                                  <img class=\"group list-group-image\"
                                      src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(("uploads/gallery/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "images", [], "any", false, false, false, 10), "first", [], "method", false, false, false, 10), "path", [], "any", false, false, false, 10)), "category_mainpage_thumb")), "html", null, true);
            echo "\"
                                      alt=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
            echo "\"/>
                                ";
        } else {
            // line 13
            echo "                                  <img class=\"group list-group-image\"
                                      src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter("uploads/gallery/no_image_available.png", "category_mainpage_thumb")), "html", null, true);
            echo "\"
                                      alt=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
            echo "\"/>
                                ";
        }
        // line 17
        echo "                              </a> 
                            </div>
                            <!-- /.image -->
                            
                      
                          </div>
                          <!-- /.product-image -->
                          
                          <div class=\"product-info text-left\">
                       
                            <h3 class=\"name\"><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_product", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "slug", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "</a></h3>
                             
                            <div class=\"description\"></div>
                            <div class=\"product-price\"> <span class=\"price\">  ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), "price", [], "any", false, false, false, 30), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("currency", [], "ShopBundle"), "html", null, true);
        echo "</span> <span class=\"price-before-discount\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), "Dprice", [], "any", false, false, false, 30), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("currency", [], "ShopBundle"), "html", null, true);
        echo "</span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                          <!-- /.product-info -->
                          <div class=\"cart clearfix animate-effect\">
                            <div class=\"action\">
                              <ul class=\"list-unstyled\">
                                <li class=\"add-cart-button btn-group\">
                                  <button class=\"btn btn-primary icon\" data-toggle=\"dropdown\" type=\"button\"> <i
                                  class=\"fa fa-shopping-cart\"></i> </button>
                                </li>
                                <li class=\"lnk wishlist\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" href=\"deals-detail.html\" title=\"\" data-original-title=\"Wishlist\"> <i class=\"icon fa fa-heart\"></i> </a> </li>
                                <li class=\"lnk\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" href=\"deals-detail.html\" title=\"\" data-original-title=\"Compare\"> <i class=\"fa fa-signal\" aria-hidden=\"true\"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action --> 
                          </div>
                          <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                        
                      </div>
                      <!-- /.products --> 
                    </div></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/Partials/productPreview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  89 => 27,  77 => 17,  72 => 15,  68 => 14,  65 => 13,  60 => 11,  56 => 10,  53 => 9,  51 => 8,  47 => 7,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'ShopBundle' %}
<div class=\"owl-item\" style=\"width: 240px;\"><div class=\"item item-carousel\">
                      <div class=\"products\">
                        <div class=\"product\">
                          <div class=\"product-image\">
                            <div class=\"image\"> 
                              <a href=\"{{ path('show_product', {'slug' : product.slug}) }}\">
                                {% if product.images|length %}
                                  <img class=\"group list-group-image\"
                                      src=\"{{ asset( ('uploads/gallery/' ~ product.images.first().path) | imagine_filter('category_mainpage_thumb')) }}\"
                                      alt=\"{{ product.name }}\"/>
                                {% else %}
                                  <img class=\"group list-group-image\"
                                      src=\"{{ asset( ('uploads/gallery/no_image_available.png') | imagine_filter('category_mainpage_thumb')) }}\"
                                      alt=\"{{ product.name }}\"/>
                                {% endif %}
                              </a> 
                            </div>
                            <!-- /.image -->
                            
                      
                          </div>
                          <!-- /.product-image -->
                          
                          <div class=\"product-info text-left\">
                       
                            <h3 class=\"name\"><a href=\"{{ path('show_product', {'slug' : product.slug}) }}\"> {{ product.name }}</a></h3>
                             
                            <div class=\"description\"></div>
                            <div class=\"product-price\"> <span class=\"price\">  {{ product.price }} {{ 'currency'|trans }}</span> <span class=\"price-before-discount\">{{ product.Dprice }} {{ 'currency'|trans }}</span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                          <!-- /.product-info -->
                          <div class=\"cart clearfix animate-effect\">
                            <div class=\"action\">
                              <ul class=\"list-unstyled\">
                                <li class=\"add-cart-button btn-group\">
                                  <button class=\"btn btn-primary icon\" data-toggle=\"dropdown\" type=\"button\"> <i
                                  class=\"fa fa-shopping-cart\"></i> </button>
                                </li>
                                <li class=\"lnk wishlist\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" href=\"deals-detail.html\" title=\"\" data-original-title=\"Wishlist\"> <i class=\"icon fa fa-heart\"></i> </a> </li>
                                <li class=\"lnk\"> <a data-toggle=\"tooltip\" class=\"add-to-cart\" href=\"deals-detail.html\" title=\"\" data-original-title=\"Compare\"> <i class=\"fa fa-signal\" aria-hidden=\"true\"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action --> 
                          </div>
                          <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                        
                      </div>
                      <!-- /.products --> 
                    </div></div>
", "@Shop/Partials/productPreview.html.twig", "C:\\laragon\\www\\qassima\\src\\Eshop\\ShopBundle\\Resources\\views\\Partials\\productPreview.html.twig");
    }
}
