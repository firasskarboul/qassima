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

/* @Shop/Partials/slidesBlock.html.twig */
class __TwigTemplate_f442276e1fdd47b6ae174910e2bc7cd4a636322d9f97ca5e02e1dce42721760b extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Shop/Partials/slidesBlock.html.twig"));

        // line 2
        echo "<div class=\"row\">
    ";
        // line 31
        echo " 
            <!-- Controls -->
            ";
        // line 44
        echo "  
<div class=\"slider-section\">

        <!-- ============================================== SIDEBAR ============================================== -->
        

        <!-- /.sidemenu-holder -->



        <!-- ============================================== SIDEBAR : END ============================================== -->

        <div class=\"homebanner-holder\">
          <div id=\"hero\">
            <div id=\"owl-main\" class=\"owl-carousel owl-inner-nav owl-ui-sm\">
            <div class=\"item active\">
                    <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["slides"]) || array_key_exists("slides", $context) ? $context["slides"] : (function () { throw new RuntimeError('Variable "slides" does not exist.', 60, $this->source); })()), 0, [], "any", false, false, false, 60), "path", [], "any", false, false, false, 60))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["slides"]) || array_key_exists("slides", $context) ? $context["slides"] : (function () { throw new RuntimeError('Variable "slides" does not exist.', 60, $this->source); })()), 0, [], "any", false, false, false, 60), "name", [], "any", false, false, false, 60), "html", null, true);
        echo "\">
                    <div class=\"carousel-caption\">
                    </div>
                </div>
                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["slides"]) || array_key_exists("slides", $context) ? $context["slides"] : (function () { throw new RuntimeError('Variable "slides" does not exist.', 64, $this->source); })()), 1));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 65
            echo "                 
               
              
              
              <div class=\"item\" style=\"background-image: url(";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["slide"], "path", [], "any", false, false, false, 69))), "html", null, true);
            echo ");\">
                <div class=\"container-fluid\">
                  <div class=\"caption bg-color vertical-center text-left\">
                    <div class=\"slider-header fadeInDown-1\">Top Brands</div>
                    <div class=\"big-text fadeInDown-1\"> New Collections </div>
                    <div class=\"excerpt fadeInDown-2 hidden-xs\"> <span>Lorem ipsum dolor sit amet, consectetur
                        adipisicing.</span> </div>
                    <div class=\"button-holder fadeInDown-3\"> <a href=\"index.php?page=single-product\"
                        class=\"btn-lg btn btn-uppercase btn-primary shop-now-button\">Shop Now</a> </div>
                  </div>
                  <!-- /.caption -->
                </div>
                <!-- /.container-fluid -->
              </div>
              <!-- /.item -->
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "               
            </div>
            <!-- /.owl-carousel -->
          </div>
        </div>
      </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/Partials/slidesBlock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 85,  84 => 69,  78 => 65,  74 => 64,  65 => 60,  47 => 44,  43 => 31,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'ShopBundle' %}
<div class=\"row\">
    {# <div class=\"col-md-12\">
        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                {% for slide in slides|slice(1) %}
                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"{{ loop.index }}\"></li>
                {% endfor %}
            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"item active\">
                    <img src=\"{{ asset('uploads/images/' ~ slides.0.path)  }}\" alt=\"{{ slides.0.name }}\">
                    <div class=\"carousel-caption\">
                    </div>
                </div>
                {% for slide in slides|slice(1) %}
                    <div class=\"item\">
                        <img src=\"{{ asset('uploads/images/' ~ slide.path)   }}\"
                             alt=\"{{ slide.name }}\">
                        <div class=\"carousel-caption\">
                        </div>
                    </div>
                {% endfor %}
            </div>
            \t
{# {{ dump( asset('uploads/images/' ~ slides.0.path)) }} #}
 
            <!-- Controls -->
            {# <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">{{ 'slider.previous'|trans }}</span>
            </a>
            <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">{{ 'slider.next'|trans }}</span>
            </a>
        </div>
    </div>
</div>
<br/> #}  
<div class=\"slider-section\">

        <!-- ============================================== SIDEBAR ============================================== -->
        

        <!-- /.sidemenu-holder -->



        <!-- ============================================== SIDEBAR : END ============================================== -->

        <div class=\"homebanner-holder\">
          <div id=\"hero\">
            <div id=\"owl-main\" class=\"owl-carousel owl-inner-nav owl-ui-sm\">
            <div class=\"item active\">
                    <img src=\"{{ asset('uploads/images/' ~ slides.0.path)   }}\" alt=\"{{ slides.0.name }}\">
                    <div class=\"carousel-caption\">
                    </div>
                </div>
                {% for slide in slides|slice(1) %}
                 
               
              
              
              <div class=\"item\" style=\"background-image: url({{ asset('uploads/images/' ~ slide.path)   }});\">
                <div class=\"container-fluid\">
                  <div class=\"caption bg-color vertical-center text-left\">
                    <div class=\"slider-header fadeInDown-1\">Top Brands</div>
                    <div class=\"big-text fadeInDown-1\"> New Collections </div>
                    <div class=\"excerpt fadeInDown-2 hidden-xs\"> <span>Lorem ipsum dolor sit amet, consectetur
                        adipisicing.</span> </div>
                    <div class=\"button-holder fadeInDown-3\"> <a href=\"index.php?page=single-product\"
                        class=\"btn-lg btn btn-uppercase btn-primary shop-now-button\">Shop Now</a> </div>
                  </div>
                  <!-- /.caption -->
                </div>
                <!-- /.container-fluid -->
              </div>
              <!-- /.item -->
 {% endfor %}
               
            </div>
            <!-- /.owl-carousel -->
          </div>
        </div>
      </div>", "@Shop/Partials/slidesBlock.html.twig", "D:\\laragon\\www\\Qasima\\src\\Eshop\\ShopBundle\\Resources\\views\\Partials\\slidesBlock.html.twig");
    }
}
