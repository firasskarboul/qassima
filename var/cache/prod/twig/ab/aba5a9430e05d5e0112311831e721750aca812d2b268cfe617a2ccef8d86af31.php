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
class __TwigTemplate_97b691a842bd83facd009154105554d87d338a9b45104d0f2f9658dea7fc5123 extends \Twig\Template
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

        // line 6
        echo "QASIMA
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
        echo "</div>
<div class=\"container\">
  <div class=\"row\" style=\"margin:30px;\">
    <div class=\"col-md-12\" >
      <div class=\"cnt-strip\">
        <div class=\"image1\">




          ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Ads"]) || array_key_exists("Ads", $context) ? $context["Ads"] : (function () { throw new RuntimeError('Variable "Ads" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 21
            echo "          ";
            // line 22
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["ad"], "slideOrder", [], "any", false, false, false, 22) == "top")) {
                // line 23
                echo "          <a class=\"fancybox\" rel=\"group\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_product", ["slug" => twig_get_attribute($this->env, $this->source, $context["ad"], "slug", [], "any", false, false, false, 23)]), "html", null, true);
                echo "\">
            <img style=\"    width: 100%;\" class=\"img-responsive\" src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["ad"], "path", [], "any", false, false, false, 24))), "html", null, true);
                echo "\"
              alt=\"\">
          </a>
          ";
            }
            // line 28
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
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
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/banners/top-banner.png"), "html", null, true);
        echo "\" alt=\"\"></div>
  </div>
  ";
        // line 43
        if (twig_length_filter($this->env, (isset($context["slides"]) || array_key_exists("slides", $context) ? $context["slides"] : (function () { throw new RuntimeError('Variable "slides" does not exist.', 43, $this->source); })()))) {
            // line 44
            echo "  ";
            echo twig_include($this->env, $context, "@Shop/Partials/slidesBlock.html.twig");
            echo "
  ";
        }
        // line 46
        echo "  <div class=\"row\" style=\"margin:30px;\">
    <div class=\"col-xs-12 col-sm-12 col-md-12\">
      <!-- ========================================== SECTION – HERO ========================================= -->



      <!-- ========================================= SECTION – HERO : END ========================================= -->


      <!-- ============================================== STORES SECTION ============================================== -->
      <section class=\"section featured-section wow fadeInUp animated\" style=\"visibility: visible;\">
        <h2>Stores For You</h2>
        <div class=\"featured-product\">
          <div class=\"owl-carousel homepage-owl-carousel custom-carousel owl-theme outer-top-xs\"
            style=\"opacity: 1; display: block;\">
            <div class=\"owl-wrapper-outer\">
              <div class=\"owl-wrapper\" style=\"width: 2838px; left: 0px; display: block;\">





                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catss"]) || array_key_exists("catss", $context) ? $context["catss"] : (function () { throw new RuntimeError('Variable "catss" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 69
            echo "                <div class=\"owl-item\" style=\"width: 129px;\">
                  <div class=\"item item-carousel\">
                    <div class=\"products\">
                      <div class=\"product\">
                        <div class=\"product-image\">
                          <div class=\"image\">
                            <a href=\"#\">
                              ";
            // line 76
            if (twig_get_attribute($this->env, $this->source, $context["entity"], "path", [], "any", false, false, false, 76)) {
                // line 77
                echo "                              <a class=\"fancybox\" rel=\"group\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["slug" => twig_get_attribute($this->env, $this->source, $context["entity"], "slug", [], "any", false, false, false, 77)]), "html", null, true);
                echo "\">
                                <img
                                  src=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["entity"], "path", [], "any", false, false, false, 79)), "some_thumb")), "html", null, true);
                echo "\" />
                              </a>
                              ";
            } else {
                // line 82
                echo "                              ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no photos", [], "ShopBundle"), "html", null, true);
                echo "
                              ";
            }
            // line 84
            echo "
                            </a>
                          </div>
                          <!-- /.image -->

                        </div>
                        <div class=\"product-info\">
                          <h3 class=\"name\"><a href=\"#\">";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "name", [], "any", false, false, false, 91), "html", null, true);
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
        // line 102
        echo "              </div>
            </div>

            <div class=\"owl-controls clickable\">
              <div class=\"owl-buttons\">
                <div class=\"owl-prev\"></div>
                <div class=\"owl-next\"></div>
              </div>
            </div>
          </div>

          <!-- /.home-owl-carousel -->
        </div>
      </section>

    </div>

    <div class=\"row\" style=\"margin:30px;\">
      <div class=\"col-md-12\">
        <div class=\"cnt-strip\">
          <div class=\"image1\">

            ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Ads"]) || array_key_exists("Ads", $context) ? $context["Ads"] : (function () { throw new RuntimeError('Variable "Ads" does not exist.', 124, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 125
            echo "            ";
            // line 126
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["ad"], "slideOrder", [], "any", false, false, false, 126) == "MID")) {
                // line 127
                echo "            <br>
            <a class=\"fancybox\" rel=\"group\" href=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_product", ["slug" => twig_get_attribute($this->env, $this->source, $context["ad"], "slug", [], "any", false, false, false, 128)]), "html", null, true);
                echo "\">
              <img style=\"width: 100%;\" class=\"img-responsive\" src=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["ad"], "path", [], "any", false, false, false, 129))), "html", null, true);
                echo "\"
                alt=\"\">
            </a>
            ";
            }
            // line 133
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "          </div>

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
        // line 150
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
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latest_products"]) || array_key_exists("latest_products", $context) ? $context["latest_products"] : (function () { throw new RuntimeError('Variable "latest_products" does not exist.', 165, $this->source); })()));
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
            // line 166
            echo "                    ";
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
        // line 168
        echo "                  </div>
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
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Ads"]) || array_key_exists("Ads", $context) ? $context["Ads"] : (function () { throw new RuntimeError('Variable "Ads" does not exist.', 182, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ad"]) {
            // line 183
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["ad"], "slideOrder", [], "any", false, false, false, 183) == "Bottuom")) {
                // line 184
                echo "            <br>
            <a class=\"fancybox\" rel=\"group\" href=\"";
                // line 185
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_product", ["slug" => twig_get_attribute($this->env, $this->source, $context["ad"], "slug", [], "any", false, false, false, 185)]), "html", null, true);
                echo "\">
              <img style=\"width: 100%;\" class=\"img-responsive\" src=\"";
                // line 186
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["ad"], "path", [], "any", false, false, false, 186))), "html", null, true);
                echo "\"
                alt=\"\">
            </a>
            ";
            }
            // line 190
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
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
        // line 206
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
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["featured_products"]) || array_key_exists("featured_products", $context) ? $context["featured_products"] : (function () { throw new RuntimeError('Variable "featured_products" does not exist.', 222, $this->source); })()));
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
            // line 223
            echo "                    ";
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
        // line 225
        echo "
                  </div>
                </div>
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
        return array (  460 => 225,  443 => 223,  426 => 222,  407 => 206,  390 => 191,  384 => 190,  377 => 186,  373 => 185,  370 => 184,  367 => 183,  363 => 182,  347 => 168,  330 => 166,  313 => 165,  295 => 150,  277 => 134,  271 => 133,  264 => 129,  260 => 128,  257 => 127,  254 => 126,  252 => 125,  248 => 124,  224 => 102,  207 => 91,  198 => 84,  192 => 82,  186 => 79,  180 => 77,  178 => 76,  169 => 69,  165 => 68,  141 => 46,  135 => 44,  133 => 43,  128 => 41,  114 => 29,  108 => 28,  101 => 24,  96 => 23,  93 => 22,  91 => 21,  87 => 20,  75 => 10,  68 => 9,  60 => 6,  53 => 4,  36 => 1,);
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
</div>
<div class=\"container\">
  <div class=\"row\" style=\"margin:30px;\">
    <div class=\"col-md-12\" >
      <div class=\"cnt-strip\">
        <div class=\"image1\">




          {% for ad in Ads %}
          {# {{ad.slideOrder == 'top'}} #}
          {% if ad.slideOrder == 'top' %}
          <a class=\"fancybox\" rel=\"group\" href=\"{{ path('show_product', {'slug' : ad.slug}) }}\">
            <img style=\"    width: 100%;\" class=\"img-responsive\" src=\"{{ asset('uploads/images/' ~ ad.path)   }}\"
              alt=\"\">
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
  <div class=\"row\" style=\"margin:30px;\">
    <div class=\"col-xs-12 col-sm-12 col-md-12\">
      <!-- ========================================== SECTION – HERO ========================================= -->



      <!-- ========================================= SECTION – HERO : END ========================================= -->


      <!-- ============================================== STORES SECTION ============================================== -->
      <section class=\"section featured-section wow fadeInUp animated\" style=\"visibility: visible;\">
        <h2>Stores For You</h2>
        <div class=\"featured-product\">
          <div class=\"owl-carousel homepage-owl-carousel custom-carousel owl-theme outer-top-xs\"
            style=\"opacity: 1; display: block;\">
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
                                <img
                                  src=\"{{ asset( ('uploads/images/' ~ entity.path) | imagine_filter('some_thumb')) }}\" />
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
              </div>
            </div>

            <div class=\"owl-controls clickable\">
              <div class=\"owl-buttons\">
                <div class=\"owl-prev\"></div>
                <div class=\"owl-next\"></div>
              </div>
            </div>
          </div>

          <!-- /.home-owl-carousel -->
        </div>
      </section>

    </div>

    <div class=\"row\" style=\"margin:30px;\">
      <div class=\"col-md-12\">
        <div class=\"cnt-strip\">
          <div class=\"image1\">

            {% for ad in Ads %}
            {# {{ad.slideOrder == 'top'}} #}
            {% if ad.slideOrder == 'MID' %}
            <br>
            <a class=\"fancybox\" rel=\"group\" href=\"{{ path('show_product', {'slug' : ad.slug}) }}\">
              <img style=\"width: 100%;\" class=\"img-responsive\" src=\"{{ asset('uploads/images/' ~ ad.path)   }}\"
                alt=\"\">
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
            <br>
            <a class=\"fancybox\" rel=\"group\" href=\"{{ path('show_product', {'slug' : ad.slug}) }}\">
              <img style=\"width: 100%;\" class=\"img-responsive\" src=\"{{ asset('uploads/images/' ~ ad.path)   }}\"
                alt=\"\">
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
  </div>
</div>
{% endblock page_content %}", "ShopBundle:Catalog:index.html.twig", "C:\\laragon\\www\\qassiima\\src\\Eshop\\ShopBundle/Resources/views/Catalog/index.html.twig");
    }
}
