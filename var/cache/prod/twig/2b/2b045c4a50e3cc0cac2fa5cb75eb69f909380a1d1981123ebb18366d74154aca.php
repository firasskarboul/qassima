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

/* ShopBundle:Catalog:index.html.twig */
class __TwigTemplate_f9234e49658e98b4e661633e78ccb133c7c742a3e6d42777af403c82dafb0d47 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ShopBundle:Catalog:index.html.twig"));

        $this->parent = $this->loadTemplate("@Shop/layout.html.twig", "ShopBundle:Catalog:index.html.twig", 1);
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
        // line 6
        echo "    QASIMA
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
        echo "<div class=\"row\">
   <div class=\"col-md-12\">
      <div class=\"cnt-strip\">
        <div class=\"image1\">
                  

 

            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Ads"]) || array_key_exists("Ads", $context) ? $context["Ads"] : (function () { throw new RuntimeError('Variable "Ads" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 19
            echo "                     ";
            // line 20
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["ad"], "slideOrder", [], "any", false, false, false, 20) == "top")) {
                // line 21
                echo "                <a class=\"fancybox\" rel=\"group\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_product", ["slug" => twig_get_attribute($this->env, $this->source, $context["ad"], "slug", [], "any", false, false, false, 21)]), "html", null, true);
                echo "\">
                   <img style=\"    width: 100%;\" class=\"img-responsive\" src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["ad"], "path", [], "any", false, false, false, 22))), "html", null, true);
                echo "\" alt=\"\">
              </a>
              ";
            }
            // line 25
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </div>
                   
                  <!-- /.new-label -->
      </div>
                <!-- /.wide-banner -->
    </div>
              <!-- /.col -->
 
</div>
            <!-- /.row -->
<div class=\"outer-top-ts top-banner\">
    <div class=\"container\">
      <img class=\"img-responsive\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/banners/top-banner.png"), "html", null, true);
        echo "\" alt=\"\"></div>
  </div>
    ";
        // line 40
        if (twig_length_filter($this->env, (isset($context["slides"]) || array_key_exists("slides", $context) ? $context["slides"] : (function () { throw new RuntimeError('Variable "slides" does not exist.', 40, $this->source); })()))) {
            // line 41
            echo "        ";
            echo twig_include($this->env, $context, "@Shop/Partials/slidesBlock.html.twig");
            echo "
    ";
        }
        // line 43
        echo "    <div class=\"row\">
<div class=\"col-xs-12 col-sm-12 col-md-12\">
          <!-- ========================================== SECTION – HERO ========================================= -->



          <!-- ========================================= SECTION – HERO : END ========================================= -->


          <!-- ============================================== STORES SECTION ============================================== -->
       <section class=\"section featured-section wow fadeInUp animated\" style=\"visibility: visible;\">
            <h2>Stores For You</h2>
            <div class=\"featured-product\">
              <div class=\"owl-carousel homepage-owl-carousel custom-carousel owl-theme outer-top-xs\" style=\"opacity: 1; display: block;\">
                <div class=\"owl-wrapper-outer\">
                <div class=\"owl-wrapper\" style=\"width: 2838px; left: 0px; display: block;\">
                 

 

 
                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catss"]) || array_key_exists("catss", $context) ? $context["catss"] : (function () { throw new RuntimeError('Variable "catss" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 65
            echo "                 <div class=\"owl-item\" style=\"width: 129px;\">
                 <div class=\"item item-carousel\">
                  <div class=\"products\">
                    <div class=\"product\">
                      <div class=\"product-image\">
                        <div class=\"image\">
                          <a href=\"#\">
                           ";
            // line 72
            if (twig_get_attribute($this->env, $this->source, $context["entity"], "path", [], "any", false, false, false, 72)) {
                // line 73
                echo "                        <a class=\"fancybox\" rel=\"group\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["slug" => twig_get_attribute($this->env, $this->source, $context["entity"], "slug", [], "any", false, false, false, 73)]), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["entity"], "path", [], "any", false, false, false, 74)), "some_thumb")), "html", null, true);
                echo "\"/>
                        </a>
                    ";
            } else {
                // line 77
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no photos", [], "ShopBundle"), "html", null, true);
                echo "
                    ";
            }
            // line 79
            echo "                             
                          </a>
                        </div>
                        <!-- /.image -->

                      </div>
                      <div class=\"product-info\">
                        <h3 class=\"name\"><a href=\"#\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "name", [], "any", false, false, false, 86), "html", null, true);
            echo "</a></h3>
                      </div>

                    </div>
                    <!-- /.product -->

                  </div>
                  <!-- /.products -->
                   </div>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "   
                </div></div>
             
              <div class=\"owl-controls clickable\"><div class=\"owl-buttons\"><div class=\"owl-prev\"></div><div class=\"owl-next\"></div></div></div></div>

              <!-- /.home-owl-carousel -->
            </div>
          </section>

 
        
           
             
        
         
    </div>
     
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"cnt-strip\">
                  <div class=\"image1\"> 
                  
                   ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Ads"]) || array_key_exists("Ads", $context) ? $context["Ads"] : (function () { throw new RuntimeError('Variable "Ads" does not exist.', 118, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 119
            echo "                     ";
            // line 120
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["ad"], "slideOrder", [], "any", false, false, false, 120) == "MID")) {
                // line 121
                echo "                <a class=\"fancybox\" rel=\"group\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_product", ["slug" => twig_get_attribute($this->env, $this->source, $context["ad"], "slug", [], "any", false, false, false, 121)]), "html", null, true);
                echo "\">
                   <img style=\"    width: 100%;\" class=\"img-responsive\" src=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["ad"], "path", [], "any", false, false, false, 122))), "html", null, true);
                echo "\" alt=\"\">
              </a>
              ";
            }
            // line 125
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                  </div>
                 
                  <!-- /.new-label -->
                </div>
                <!-- /.wide-banner -->
              </div>
              <!-- /.col -->


            </div>
            <!-- /.row -->
         
    <div class=\"row\">
        <div class=\"col-md-12\">
       
             <div class=\"more-info-tab clearfix \">
                <h3 class=\"new-product-title pull-left\">";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.index.latestproducts", [], "ShopBundle"), "html", null, true);
        echo "</h3>
              <ul class=\"nav nav-tabs nav-tab-line pull-right\" id=\"new-products-1\">
                <li class=\"active\"><a data-transition-type=\"backSlide\" href=\"#all\" data-toggle=\"tab\">All</a></li>
                <li><a data-transition-type=\"backSlide\" href=\"#smartphone\" data-toggle=\"tab\">Clothing</a></li>
                <li><a data-transition-type=\"backSlide\" href=\"#laptop\" data-toggle=\"tab\">Electronics</a></li>
                <li><a data-transition-type=\"backSlide\" href=\"#apple\" data-toggle=\"tab\">Shoes</a></li>
              </ul>
              <!-- /.nav-tabs --> 
            </div>
            <div class=\"tab-content outer-top-xs\">
                    <div class=\"tab-pane in active\" id=\"all\">
                            <div class=\"product-slider\">
                                <div class=\"owl-carousel home-owl-carousel custom-carousel owl-theme\" style=\"opacity: 1; display: block;\">
                                    <div class=\"owl-wrapper-outer\">
                                        <div class=\"owl-wrapper\" style=\"width: 2850px; left: 0px; display: block;\">
                                                ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latest_products"]) || array_key_exists("latest_products", $context) ? $context["latest_products"] : (function () { throw new RuntimeError('Variable "latest_products" does not exist.', 157, $this->source); })()));
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
            // line 158
            echo "                                                    ";
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
        // line 160
        echo "                                        </div>
                                    </div>
                                 </div>
                                </div>
                            </div>
            </div>

        </div>
    </div>
    <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"cnt-strip\">
                  <div class=\"image1\">  
                  
                   ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Ads"]) || array_key_exists("Ads", $context) ? $context["Ads"] : (function () { throw new RuntimeError('Variable "Ads" does not exist.', 174, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 175
            echo "                   ";
            if ((twig_get_attribute($this->env, $this->source, $context["ad"], "slideOrder", [], "any", false, false, false, 175) == "Bottuom")) {
                // line 176
                echo "                <a class=\"fancybox\" rel=\"group\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_product", ["slug" => twig_get_attribute($this->env, $this->source, $context["ad"], "slug", [], "any", false, false, false, 176)]), "html", null, true);
                echo "\">
                   <img style=\"    width: 100%;\" class=\"img-responsive\" src=\"";
                // line 177
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["ad"], "path", [], "any", false, false, false, 177))), "html", null, true);
                echo "\" alt=\"\">
              </a>
              ";
            }
            // line 180
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "                  
                  </div>
                
                  <!-- /.new-label -->
                </div>
                <!-- /.wide-banner -->
              </div>
              <!-- /.col -->


            </div>
            <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-md-12\">
                 <div class=\"more-info-tab clearfix \">
                <h3 class=\"new-product-title pull-left\">";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.index.featuredproducts", [], "ShopBundle"), "html", null, true);
        echo "</h3>
              <ul class=\"nav nav-tabs nav-tab-line pull-right\" id=\"new-products-1\">
                <li class=\"active\"><a data-transition-type=\"backSlide\" href=\"#all\" data-toggle=\"tab\">All</a></li>
                <li><a data-transition-type=\"backSlide\" href=\"#smartphone\" data-toggle=\"tab\">Clothing</a></li>
                <li><a data-transition-type=\"backSlide\" href=\"#laptop\" data-toggle=\"tab\">Electronics</a></li>
                <li><a data-transition-type=\"backSlide\" href=\"#apple\" data-toggle=\"tab\">Shoes</a></li>
              </ul>
              <!-- /.nav-tabs --> 
            </div>
            <div class=\"tab-content outer-top-xs\">
                    <div class=\"tab-pane in active\" id=\"all\">
                            <div class=\"product-slider\">
                                <div class=\"owl-carousel home-owl-carousel custom-carousel owl-theme\" style=\"opacity: 1; display: block;\">
                                    <div class=\"owl-wrapper-outer\">
                                        <div class=\"owl-wrapper\" style=\"width: 2850px; left: 0px; display: block;\">
         
            ";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["featured_products"]) || array_key_exists("featured_products", $context) ? $context["featured_products"] : (function () { throw new RuntimeError('Variable "featured_products" does not exist.', 212, $this->source); })()));
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
            // line 213
            echo "                ";
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
        // line 215
        echo "                    
                                        </div>
                                    </div>
                                 </div>
                                </div>
                            </div>
            </div>
        </div>
    </div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:Catalog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 215,  434 => 213,  417 => 212,  398 => 196,  381 => 181,  375 => 180,  369 => 177,  364 => 176,  361 => 175,  357 => 174,  341 => 160,  324 => 158,  307 => 157,  289 => 142,  271 => 126,  265 => 125,  259 => 122,  254 => 121,  251 => 120,  249 => 119,  245 => 118,  221 => 96,  204 => 86,  195 => 79,  189 => 77,  183 => 74,  178 => 73,  176 => 72,  167 => 65,  163 => 64,  140 => 43,  134 => 41,  132 => 40,  127 => 38,  113 => 26,  107 => 25,  101 => 22,  96 => 21,  93 => 20,  91 => 19,  87 => 18,  77 => 10,  70 => 9,  62 => 6,  60 => 5,  53 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Shop/layout.html.twig' %}
{% trans_default_domain 'ShopBundle' %}

{% block title %}
    {# {{ 'layout.navbar.sitename'|trans }} - {{ 'categories.menu.header'|trans }} #}
    QASIMA
{% endblock title %}

{% block page_content -%}
<div class=\"row\">
   <div class=\"col-md-12\">
      <div class=\"cnt-strip\">
        <div class=\"image1\">
                  

 

            {% for ad in Ads %}
                     {# {{ad.slideOrder == 'top'}} #}
              {% if ad.slideOrder == 'top' %}
                <a class=\"fancybox\" rel=\"group\" href=\"{{ path('show_product', {'slug' : ad.slug}) }}\">
                   <img style=\"    width: 100%;\" class=\"img-responsive\" src=\"{{ asset('uploads/images/' ~ ad.path)   }}\" alt=\"\">
              </a>
              {% endif %}
            {% endfor %}
        </div>
                   
                  <!-- /.new-label -->
      </div>
                <!-- /.wide-banner -->
    </div>
              <!-- /.col -->
 
</div>
            <!-- /.row -->
<div class=\"outer-top-ts top-banner\">
    <div class=\"container\">
      <img class=\"img-responsive\" src=\"{{ asset('assets/images/banners/top-banner.png') }}\" alt=\"\"></div>
  </div>
    {% if slides|length %}
        {{ include('@Shop/Partials/slidesBlock.html.twig') }}
    {% endif %}
    <div class=\"row\">
<div class=\"col-xs-12 col-sm-12 col-md-12\">
          <!-- ========================================== SECTION – HERO ========================================= -->



          <!-- ========================================= SECTION – HERO : END ========================================= -->


          <!-- ============================================== STORES SECTION ============================================== -->
       <section class=\"section featured-section wow fadeInUp animated\" style=\"visibility: visible;\">
            <h2>Stores For You</h2>
            <div class=\"featured-product\">
              <div class=\"owl-carousel homepage-owl-carousel custom-carousel owl-theme outer-top-xs\" style=\"opacity: 1; display: block;\">
                <div class=\"owl-wrapper-outer\">
                <div class=\"owl-wrapper\" style=\"width: 2838px; left: 0px; display: block;\">
                 

 

 
                {% for entity in catss %}
                 <div class=\"owl-item\" style=\"width: 129px;\">
                 <div class=\"item item-carousel\">
                  <div class=\"products\">
                    <div class=\"product\">
                      <div class=\"product-image\">
                        <div class=\"image\">
                          <a href=\"#\">
                           {% if entity.path %}
                        <a class=\"fancybox\" rel=\"group\" href=\"{{ path('category', {'slug' : entity.slug}) }}\">
                            <img src=\"{{ asset( ('uploads/images/' ~ entity.path) | imagine_filter('some_thumb')) }}\"/>
                        </a>
                    {% else %}
                        {{ 'no photos'|trans }}
                    {% endif %}
                             
                          </a>
                        </div>
                        <!-- /.image -->

                      </div>
                      <div class=\"product-info\">
                        <h3 class=\"name\"><a href=\"#\">{{ entity.name }}</a></h3>
                      </div>

                    </div>
                    <!-- /.product -->

                  </div>
                  <!-- /.products -->
                   </div>
                      </div>
                      {% endfor %}   
                </div></div>
             
              <div class=\"owl-controls clickable\"><div class=\"owl-buttons\"><div class=\"owl-prev\"></div><div class=\"owl-next\"></div></div></div></div>

              <!-- /.home-owl-carousel -->
            </div>
          </section>

 
        
           
             
        
         
    </div>
     
            <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"cnt-strip\">
                  <div class=\"image1\"> 
                  
                   {% for ad in Ads %}
                     {# {{ad.slideOrder == 'top'}} #}
              {% if ad.slideOrder == 'MID' %}
                <a class=\"fancybox\" rel=\"group\" href=\"{{ path('show_product', {'slug' : ad.slug}) }}\">
                   <img style=\"    width: 100%;\" class=\"img-responsive\" src=\"{{ asset('uploads/images/' ~ ad.path)   }}\" alt=\"\">
              </a>
              {% endif %}
            {% endfor %}
                  </div>
                 
                  <!-- /.new-label -->
                </div>
                <!-- /.wide-banner -->
              </div>
              <!-- /.col -->


            </div>
            <!-- /.row -->
         
    <div class=\"row\">
        <div class=\"col-md-12\">
       
             <div class=\"more-info-tab clearfix \">
                <h3 class=\"new-product-title pull-left\">{{ 'layout.index.latestproducts'|trans }}</h3>
              <ul class=\"nav nav-tabs nav-tab-line pull-right\" id=\"new-products-1\">
                <li class=\"active\"><a data-transition-type=\"backSlide\" href=\"#all\" data-toggle=\"tab\">All</a></li>
                <li><a data-transition-type=\"backSlide\" href=\"#smartphone\" data-toggle=\"tab\">Clothing</a></li>
                <li><a data-transition-type=\"backSlide\" href=\"#laptop\" data-toggle=\"tab\">Electronics</a></li>
                <li><a data-transition-type=\"backSlide\" href=\"#apple\" data-toggle=\"tab\">Shoes</a></li>
              </ul>
              <!-- /.nav-tabs --> 
            </div>
            <div class=\"tab-content outer-top-xs\">
                    <div class=\"tab-pane in active\" id=\"all\">
                            <div class=\"product-slider\">
                                <div class=\"owl-carousel home-owl-carousel custom-carousel owl-theme\" style=\"opacity: 1; display: block;\">
                                    <div class=\"owl-wrapper-outer\">
                                        <div class=\"owl-wrapper\" style=\"width: 2850px; left: 0px; display: block;\">
                                                {% for product in latest_products %}
                                                    {{ include('@Shop/Partials/productPreview.html.twig') }}
                                                {% endfor %}
                                        </div>
                                    </div>
                                 </div>
                                </div>
                            </div>
            </div>

        </div>
    </div>
    <div class=\"row\">
              <div class=\"col-md-12\">
                <div class=\"cnt-strip\">
                  <div class=\"image1\">  
                  
                   {% for ad in Ads %}
                   {% if ad.slideOrder == 'Bottuom' %}
                <a class=\"fancybox\" rel=\"group\" href=\"{{ path('show_product', {'slug' : ad.slug}) }}\">
                   <img style=\"    width: 100%;\" class=\"img-responsive\" src=\"{{ asset('uploads/images/' ~ ad.path)   }}\" alt=\"\">
              </a>
              {% endif %}
            {% endfor %}
                  
                  </div>
                
                  <!-- /.new-label -->
                </div>
                <!-- /.wide-banner -->
              </div>
              <!-- /.col -->


            </div>
            <!-- /.row -->
    <div class=\"row\">
        <div class=\"col-md-12\">
                 <div class=\"more-info-tab clearfix \">
                <h3 class=\"new-product-title pull-left\">{{ 'layout.index.featuredproducts'|trans }}</h3>
              <ul class=\"nav nav-tabs nav-tab-line pull-right\" id=\"new-products-1\">
                <li class=\"active\"><a data-transition-type=\"backSlide\" href=\"#all\" data-toggle=\"tab\">All</a></li>
                <li><a data-transition-type=\"backSlide\" href=\"#smartphone\" data-toggle=\"tab\">Clothing</a></li>
                <li><a data-transition-type=\"backSlide\" href=\"#laptop\" data-toggle=\"tab\">Electronics</a></li>
                <li><a data-transition-type=\"backSlide\" href=\"#apple\" data-toggle=\"tab\">Shoes</a></li>
              </ul>
              <!-- /.nav-tabs --> 
            </div>
            <div class=\"tab-content outer-top-xs\">
                    <div class=\"tab-pane in active\" id=\"all\">
                            <div class=\"product-slider\">
                                <div class=\"owl-carousel home-owl-carousel custom-carousel owl-theme\" style=\"opacity: 1; display: block;\">
                                    <div class=\"owl-wrapper-outer\">
                                        <div class=\"owl-wrapper\" style=\"width: 2850px; left: 0px; display: block;\">
         
            {% for product in featured_products %}
                {{ include('@Shop/Partials/productPreview.html.twig') }}
            {% endfor %}
                    
                                        </div>
                                    </div>
                                 </div>
                                </div>
                            </div>
            </div>
        </div>
    </div>
    
{% endblock page_content %}
", "ShopBundle:Catalog:index.html.twig", "D:\\laragon\\www\\Qasima\\src\\Eshop\\ShopBundle/Resources/views/Catalog/index.html.twig");
    }
}
