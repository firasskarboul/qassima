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

/* ShopBundle:Catalog:showProduct.html.twig */
class __TwigTemplate_37aa1dcb0871bed78033dd440a1cce03c8b67e26b928507744d0668ae63a028e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'metadescription' => [$this, 'block_metadescription'],
            'metakeys' => [$this, 'block_metakeys'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ShopBundle:Catalog:showProduct.html.twig"));

        $this->parent = $this->loadTemplate("@Shop/layout.html.twig", "ShopBundle:Catalog:showProduct.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 5, $this->source); })()), "measureQuantity", [], "any", false, false, false, 5), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 5, $this->source); })()), "measure", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "html", null, true);
        echo ")
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_metadescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metadescription"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 8, $this->source); })()), "metaDescription", [], "any", false, false, false, 8), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_metakeys($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metakeys"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 9, $this->source); })()), "metaKeys", [], "any", false, false, false, 9), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fancybox/jquery.fancybox.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\"
          type=\"text/css\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 18
        echo "</div>
<div class=\"container\">
<br>
\t<div class=\"detail-block\">
\t\t\t\t<div class=\"row  wow fadeInUp animated\" style=\"visibility: visible;\">
                
\t\t\t\t\t     <div class=\"col-xs-12 col-sm-5 col-md-4 gallery-holder\">
    <div class=\"product-item-holder size-big single-product-gallery small-gallery\">

     <div id=\"owl-single-product\" class=\"owl-carousel owl-theme\" style=\"opacity: 1; display: block;\">
            <div class=\"owl-wrapper-outer\"><div class=\"owl-wrapper\" style=\"width: 6372px; left: 0px; display: block;\">
            <div class=\"owl-item\" style=\"width: 354px;\"><div class=\"single-product-gallery-item\" id=\"slide1\">
           
              ";
        // line 31
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "images", [], "any", false, false, false, 31))) {
            // line 32
            echo "                 
                <a data-lightbox=\"image-1\" data-title=\"Gallery\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/gallery/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 33, $this->source); })()), "images", [], "any", false, false, false, 33), "first", [], "method", false, false, false, 33), "path", [], "any", false, false, false, 33))), "html", null, true);
            echo "\">
                    <img class=\"img-responsive\" alt=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(("uploads/gallery/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 34, $this->source); })()), "images", [], "any", false, false, false, 34), "first", [], "method", false, false, false, 34), "path", [], "any", false, false, false, 34)), "product_main_thumb")), "html", null, true);
            echo "\">
                </a>
                 
            
                  
                ";
        } else {
            // line 40
            echo "                    
                          
                <a data-lightbox=\"image-1\" data-title=\"Gallery\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter("uploads/gallery/no_image_available.png", "product_main_thumb")), "html", null, true);
            echo "\">
                    <img class=\"img-responsive\" alt=\"\" src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter("uploads/gallery/no_image_available.png", "product_main_thumb")), "html", null, true);
            echo "\">
                </a>
                ";
        }
        // line 46
        echo "            </div>
            </div>
            
            </div></div><!-- /.single-product-gallery-item -->

            <!-- /.single-product-gallery-item -->

            <!-- /.single-product-gallery-item -->

            <!-- /.single-product-gallery-item -->

            <!-- /.single-product-gallery-item -->

            <!-- /.single-product-gallery-item -->

            <!-- /.single-product-gallery-item -->

            <!-- /.single-product-gallery-item -->

            <!-- /.single-product-gallery-item -->

        <div class=\"owl-controls clickable\"><div class=\"owl-pagination\"><div class=\"owl-page active\"><span class=\"\"></span></div><div class=\"owl-page\"><span class=\"\"></span></div><div class=\"owl-page\"><span class=\"\"></span></div><div class=\"owl-page\"><span class=\"\"></span></div><div class=\"owl-page\"><span class=\"\"></span></div><div class=\"owl-page\"><span class=\"\"></span></div><div class=\"owl-page\"><span class=\"\"></span></div><div class=\"owl-page\"><span class=\"\"></span></div><div class=\"owl-page\"><span class=\"\"></span></div></div></div></div><!-- /.single-product-slider -->


        <div class=\"single-product-gallery-thumbs gallery-thumbs\">

            <div id=\"owl-single-product-thumbnails\" class=\"owl-carousel owl-theme\" style=\"opacity: 1; display: block;\">
                <div class=\"owl-wrapper-outer\">
                <div class=\"owl-wrapper\" style=\" \">
                     ";
        // line 75
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 75, $this->source); })()), "images", [], "any", false, false, false, 75))) {
            // line 76
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 76, $this->source); })()), "images", [], "any", false, false, false, 76), 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 77
                echo "                        
                                 <div class=\"owl-item\" style=\"width: 89px;\">
                        <div class=\"item\">
                                <a class=\"horizontal-thumb active\" data-target=\"#owl-single-product\" data-slide=\"1\" href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/gallery/" . twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 80))), "html", null, true);
                echo "\">
                                    <img class=\"img-responsive\" alt=\"";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 81, $this->source); })()), "name", [], "any", false, false, false, 81), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(("uploads/gallery/" . twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 81)), "product_preview_thumb")), "html", null, true);
                echo "\">
                                    </a>
                        </div>
                    </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                        ";
        }
        // line 87
        echo "                    
               </div></div>
            <div class=\"owl-controls clickable\"><div class=\"owl-pagination\"><div class=\"owl-page\"><span class=\"\"></span></div><div class=\"owl-page\"><span class=\"\"></span></div><div class=\"owl-page active\"><span class=\"\"></span></div></div></div></div><!-- /#owl-single-product-thumbnails -->

            

        </div><!-- /.gallery-thumbs -->

    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->        \t\t\t
\t\t\t\t\t<div class=\"col-sm-7 col-md-5 product-info-block\">
\t\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t\t<h1 class=\"name\">";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 99, $this->source); })()), "name", [], "any", false, false, false, 99), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"rating-reviews m-t-20\">
\t\t\t\t\t\t\t\t<div class=\"row\">
                                <div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rating rateit-small rateit\"><button id=\"rateit-reset-2\" data-role=\"none\" class=\"rateit-reset\" aria-label=\"reset rating\" aria-controls=\"rateit-range-2\" style=\"display: none;\"></button><div id=\"rateit-range-2\" class=\"rateit-range\" tabindex=\"0\" role=\"slider\" aria-label=\"rating\" aria-owns=\"rateit-reset-2\" aria-valuemin=\"0\" aria-valuemax=\"5\" aria-valuenow=\"4\" aria-readonly=\"true\" style=\"width: 70px; height: 14px;\"><div class=\"rateit-selected\" style=\"height: 14px; width: 56px;\"></div><div class=\"rateit-hover\" style=\"height:14px\"></div></div></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t<div class=\"reviews\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"lnk\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    </div>
\t\t\t\t\t\t\t\t</div><!-- /.row -->\t\t
\t\t\t\t\t\t\t</div><!-- /.rating-reviews -->

\t\t\t\t\t\t\t<div class=\"stock-container info-container m-t-10\">
\t\t\t\t\t\t\t\t<div class=\"row\">
                                <div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t<div class=\"stock-box\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label\">Availability :</span>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t<div class=\"stock-box\">
                                          ";
        // line 126
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 126, $this->source); })()), "quantity", [], "any", false, false, false, 126) > 0)) {
            // line 127
            echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"value\">In Stock</span>
                                            ";
        } else {
            // line 129
            echo "                                            <span class=\"value\">Not Availble</span>
                                            ";
        }
        // line 131
        echo "\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t</div>
                                    </div>
\t\t\t\t\t\t\t\t</div><!-- /.row -->\t
\t\t\t\t\t\t\t</div><!-- /.stock-container -->

\t\t

\t\t\t\t\t\t\t<div class=\"price-container info-container m-t-20\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-xs-12 col-md-6 col-lg-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
                                        <span class=\"price\" style=\"color: #ffc100;  font-size: 22px;  font-weight: 500;     line-height: 50px;\"
                                        
                                        >";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 147, $this->source); })()), "price", [], "any", false, false, false, 147), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("currency", [], "ShopBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t<span style=\"    color: #aaa;    font-size: 22px;     font-weight: 300;     line-height: 50px;     text-decoration: line-through;     vertical-align: top;     margin-left: 10px;\" 
                                            class=\"price-strike\">";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 150, $this->source); })()), "Dprice", [], "any", false, false, false, 150), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("currency", [], "ShopBundle"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-xs-12 col-md-6 col-lg-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"favorite-button\">
\t\t\t\t\t\t\t\t\t\t\t<a style=\"background: #f2f2f2;
    border-radius: 999px;
    padding: 10px 14px;
    border: none;\" class=\"btn btn-primary\"   data-placement=\"right\" title=\"\" href=\"#\" data-original-title=\"Wishlist\">
\t\t\t\t\t\t\t\t\t\t\t    <i style=\"display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;color: #ffc100;\" class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a style=\"background: #f2f2f2;
    border-radius: 999px;
    padding: 10px 14px;
    border: none;\"class=\"btn btn-primary\"   data-placement=\"right\" title=\"\" href=\"#\" data-original-title=\"Add to Compare\">
\t\t\t\t\t\t\t\t\t\t\t   <i style=\"display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;color: #ffc100;\" class=\"fa fa-signal\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a style=\"background: #f2f2f2;
    border-radius: 999px;
    padding: 10px 14px;
    border: none;\"class=\"btn btn-primary\"   data-placement=\"right\" title=\"\" href=\"#\" data-original-title=\"E-mail\">
\t\t\t\t\t\t\t\t\t\t\t    <i style=\"display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;color: #ffc100;\" class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t\t\t\t</div><!-- /.price-container -->

\t\t\t\t\t\t\t<div class=\"quantity-container info-container\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t <div class=\"row addtocart id-row\" data-id=\"";
        // line 196
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 196, $this->source); })()), "id", [], "any", false, false, false, 196), "html", null, true);
        echo "\">
                                        <div class=\"col-md-2\">
                                     <span class=\"label\">Qty :</span>       <input type=\"number\" class=\"form-control addtocart-input\" value=\"1\">
                                        </div>
                                        <div class=\"col-md-2\">
                                            <p>
                                                <a style=\"    padding: 10px 30px;  font-size: 18px;    background-color: #ffc100;    color: #fff;     font-weight: 500;\"
                                                class=\"btn btn-success addtocart-btn\" href=\"#\">
                                             <i class=\"fa fa-shopping-cart inner-right-vs\"></i>   ";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cart.addtocart", [], "ShopBundle"), "html", null, true);
        echo "</a>
                                            </p>
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t 

\t\t\t\t\t\t\t\t 

\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t\t\t\t</div><!-- /.quantity-container -->

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t
\t\t\t\t\t\t</div><!-- /.product-info -->
\t\t\t\t\t</div><!-- /.col-sm-7 -->
                    <div class=\"col-lg-3 col-sm-12 col-md-3\">
                   
                    </div>
\t\t\t\t</div><!-- /.row -->
                </div>




<!-- /.product-description -->








<div class=\"product-tabs inner-bottom-xs  wow fadeInUp animated\" style=\"    visibility: visible;
    margin-top: 30px;
    background-color: #fff;
    padding: 0px;
    overflow: hidden;
    margin-bottom: 30px;
    border-radius: 5px;
    box-shadow: 0 1px 2px 0 rgba(0,0,0,.2);\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<ul   id=\"product-tabs\" class=\"nav nav-tabs nav-tab-cell\">
\t\t\t\t\t\t\t\t<li style=\"float: none !important; \"><a style =\"display: block; padding: 12px 22px; font-size: 18px;line-height: 28px;position: relative;    font-weight: 500; letter-spacing: normal;  border: 1px #fff solid;\" href=\"#description\">Description</a></li>
                                <li style=\"float: none !important; \"><a style =\"display: block; padding: 12px 22px; font-size: 18px;line-height: 28px;position: relative;    font-weight: 500; letter-spacing: normal;  border: 1px #fff solid;\"     href=\"#vendor\">Vendor</a></li>
\t\t\t\t\t\t\t\t<li style=\"float: none !important; \"><a style =\" display: block; padding: 12px 22px; font-size: 18px;line-height: 28px;position: relative;    font-weight: 500; letter-spacing: normal;  border: 1px #fff solid;\"     href=\"#review\">Review</a></li>
\t\t\t\t 
\t\t\t\t\t\t\t</ul><!-- /.nav-tabs #product-tabs -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9\">

\t\t\t\t\t\t\t<div class=\"tab-content\" style=\"    padding-left: 0px;
    box-shadow: none;
    padding: 0;\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div id=\"description\" class=\"tab-pane in active\">
\t\t\t\t\t\t\t\t\t<div class=\"product-tab\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text\">      ";
        // line 266
        echo nl2br($this->extensions['Eshop\ShopBundle\Twig\RawDescriptionExtension']->rawdescrFilter(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 266, $this->source); })()), "description", [], "any", false, false, false, 266)));
        echo " </p>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t</div><!-- /.tab-pane -->
<div id=\"vendor\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t<div class=\"product-tab\">
                                                                            <h3>Amazon</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text\">
 

 </p>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"review\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t<div class=\"product-tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"product-reviews\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\">Customer Reviews</h4>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"reviews\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-title\"><span class=\"summary\">We love this product</span><span class=\"date\"><i class=\"fa fa-calendar\"></i><span>1 days ago</span></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit.Aliquam suscipit.\"</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.reviews -->
\t\t\t\t\t\t\t\t\t\t</div><!-- /.product-reviews -->
\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"product-add-review\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\">Write your own review</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-table\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"cell-label\">&nbsp;</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>1 star</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>2 stars</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>3 stars</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>4 stars</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>5 stars</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"cell-label\">Quality</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"1\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"2\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"3\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"4\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"5\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"cell-label\">Price</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"1\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"2\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"3\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"4\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"5\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"cell-label\">Value</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"1\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"2\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"3\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"4\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"5\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table><!-- /.table .table-bordered -->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.table-responsive -->
\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.review-table -->
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-form\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"cnt-form\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"exampleInputName\">Your Name <span class=\"astk\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control txt\" id=\"exampleInputName\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.form-group -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"exampleInputSummary\">Summary <span class=\"astk\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control txt\" id=\"exampleInputSummary\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.form-group -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"exampleInputReview\">Review <span class=\"astk\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control txt txt-review\" id=\"exampleInputReview\" rows=\"4\" placeholder=\"\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.form-group -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-upper\">SUBMIT REVIEW</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.action -->

\t\t\t\t\t\t\t\t\t\t\t\t\t</form><!-- /.cnt-form -->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.form-container -->
\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.review-form -->

\t\t\t\t\t\t\t\t\t\t</div><!-- /.product-add-review -->\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t        </div><!-- /.product-tab -->
\t\t\t\t\t\t\t\t</div><!-- /.tab-pane -->

\t\t\t\t\t\t\t\t<div id=\"tags\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t<div class=\"product-tag\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\">Product Tags</h4>
\t\t\t\t\t\t\t\t\t\t<form class=\"form-inline form-cnt\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-container\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"exampleInputTag\">Add Your Tags: </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"exampleInputTag\" class=\"form-control txt\">
\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-upper btn-primary\" type=\"submit\">ADD TAGS</button>
\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.form-container -->
\t\t\t\t\t\t\t\t\t\t</form><!-- /.form-cnt -->

\t\t\t\t\t\t\t\t\t\t<form class=\"form-inline form-cnt\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>&nbsp;</label>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text col-md-offset-3\">Use spaces to separate tags. Use single quotes (') for phrases.</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form><!-- /.form-cnt -->

\t\t\t\t\t\t\t\t\t</div><!-- /.product-tab -->
\t\t\t\t\t\t\t\t</div><!-- /.tab-pane -->
                                <div id=\"offers\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t<div class=\"product-tab\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text\">Sorry no more offers available</p>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div><!-- /.tab-content -->
\t\t\t\t\t\t</div><!-- /.col -->
\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t</div>
     
    <div class=\"row well well-lg\">
      
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 421
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 422
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fancybox/jquery.mousewheel-3.0.6.pack.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fancybox/jquery.fancybox.pack.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script>
        \$(document).ready(function () {
            \$('.fancybox').fancybox();

            ";
        // line 429
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 430
            echo "                checkProductIsLiked(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 430, $this->source); })()), "id", [], "any", false, false, false, 430), "html", null, true);
            echo ");
            ";
        }
        // line 432
        echo "
            addToLastSeenProductIds(";
        // line 433
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 433, $this->source); })()), "id", [], "any", false, false, false, 433), "html", null, true);
        echo ");
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:Catalog:showProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  648 => 433,  645 => 432,  639 => 430,  637 => 429,  629 => 424,  625 => 423,  620 => 422,  613 => 421,  452 => 266,  387 => 204,  376 => 196,  325 => 150,  317 => 147,  299 => 131,  295 => 129,  291 => 127,  289 => 126,  259 => 99,  245 => 87,  242 => 86,  229 => 81,  225 => 80,  220 => 77,  215 => 76,  213 => 75,  182 => 46,  176 => 43,  172 => 42,  168 => 40,  157 => 34,  153 => 33,  150 => 32,  148 => 31,  133 => 18,  126 => 17,  116 => 13,  111 => 12,  104 => 11,  91 => 9,  78 => 8,  64 => 5,  57 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Shop/layout.html.twig' %}
{% trans_default_domain 'ShopBundle' %}

{% block title %}
    {{ product.name }} ({{ product.measureQuantity }} {{ product.measure.name }})
{% endblock title %}

{% block metadescription %}{{ product.metaDescription }}{% endblock %}
{% block metakeys %}{{ product.metaKeys }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('assets/fancybox/jquery.fancybox.css') }}\" media=\"all\" rel=\"stylesheet\"
          type=\"text/css\"/>
{% endblock stylesheets %}

{% block page_content -%}
</div>
<div class=\"container\">
<br>
\t<div class=\"detail-block\">
\t\t\t\t<div class=\"row  wow fadeInUp animated\" style=\"visibility: visible;\">
                
\t\t\t\t\t     <div class=\"col-xs-12 col-sm-5 col-md-4 gallery-holder\">
    <div class=\"product-item-holder size-big single-product-gallery small-gallery\">

     <div id=\"owl-single-product\" class=\"owl-carousel owl-theme\" style=\"opacity: 1; display: block;\">
            <div class=\"owl-wrapper-outer\"><div class=\"owl-wrapper\" style=\"width: 6372px; left: 0px; display: block;\">
            <div class=\"owl-item\" style=\"width: 354px;\"><div class=\"single-product-gallery-item\" id=\"slide1\">
           
              {% if product.images | length %}
                 
                <a data-lightbox=\"image-1\" data-title=\"Gallery\" href=\"{{ asset(('uploads/gallery/' ~ product.images.first().path)) }}\">
                    <img class=\"img-responsive\" alt=\"{{ product.name }}\" src=\"{{ asset( ('uploads/gallery/' ~ product.images.first().path) | imagine_filter('product_main_thumb')) }}\">
                </a>
                 
            
                  
                {% else %}
                    
                          
                <a data-lightbox=\"image-1\" data-title=\"Gallery\" href=\"{{ asset( ('uploads/gallery/no_image_available.png') | imagine_filter('product_main_thumb')) }}\">
                    <img class=\"img-responsive\" alt=\"\" src=\"{{ asset( ('uploads/gallery/no_image_available.png') | imagine_filter('product_main_thumb')) }}\">
                </a>
                {% endif %}
            </div>
            </div>
            
            </div></div><!-- /.single-product-gallery-item -->

            <!-- /.single-product-gallery-item -->

            <!-- /.single-product-gallery-item -->

            <!-- /.single-product-gallery-item -->

            <!-- /.single-product-gallery-item -->

            <!-- /.single-product-gallery-item -->

            <!-- /.single-product-gallery-item -->

            <!-- /.single-product-gallery-item -->

            <!-- /.single-product-gallery-item -->

        <div class=\"owl-controls clickable\"><div class=\"owl-pagination\"><div class=\"owl-page active\"><span class=\"\"></span></div><div class=\"owl-page\"><span class=\"\"></span></div><div class=\"owl-page\"><span class=\"\"></span></div><div class=\"owl-page\"><span class=\"\"></span></div><div class=\"owl-page\"><span class=\"\"></span></div><div class=\"owl-page\"><span class=\"\"></span></div><div class=\"owl-page\"><span class=\"\"></span></div><div class=\"owl-page\"><span class=\"\"></span></div><div class=\"owl-page\"><span class=\"\"></span></div></div></div></div><!-- /.single-product-slider -->


        <div class=\"single-product-gallery-thumbs gallery-thumbs\">

            <div id=\"owl-single-product-thumbnails\" class=\"owl-carousel owl-theme\" style=\"opacity: 1; display: block;\">
                <div class=\"owl-wrapper-outer\">
                <div class=\"owl-wrapper\" style=\" \">
                     {% if product.images | length %}
                            {% for image in product.images|slice(1) %}
                        
                                 <div class=\"owl-item\" style=\"width: 89px;\">
                        <div class=\"item\">
                                <a class=\"horizontal-thumb active\" data-target=\"#owl-single-product\" data-slide=\"1\" href=\"{{ asset(('uploads/gallery/' ~ image.path)) }}\">
                                    <img class=\"img-responsive\" alt=\"{{ product.name }}\" src=\"{{ asset( ('uploads/gallery/' ~ image.path) | imagine_filter('product_preview_thumb')) }}\">
                                    </a>
                        </div>
                    </div>
                            {% endfor %}
                        {% endif %}
                    
               </div></div>
            <div class=\"owl-controls clickable\"><div class=\"owl-pagination\"><div class=\"owl-page\"><span class=\"\"></span></div><div class=\"owl-page\"><span class=\"\"></span></div><div class=\"owl-page active\"><span class=\"\"></span></div></div></div></div><!-- /#owl-single-product-thumbnails -->

            

        </div><!-- /.gallery-thumbs -->

    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->        \t\t\t
\t\t\t\t\t<div class=\"col-sm-7 col-md-5 product-info-block\">
\t\t\t\t\t\t<div class=\"product-info\">
\t\t\t\t\t\t\t<h1 class=\"name\">{{ product.name }}</h1>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"rating-reviews m-t-20\">
\t\t\t\t\t\t\t\t<div class=\"row\">
                                <div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rating rateit-small rateit\"><button id=\"rateit-reset-2\" data-role=\"none\" class=\"rateit-reset\" aria-label=\"reset rating\" aria-controls=\"rateit-range-2\" style=\"display: none;\"></button><div id=\"rateit-range-2\" class=\"rateit-range\" tabindex=\"0\" role=\"slider\" aria-label=\"rating\" aria-owns=\"rateit-reset-2\" aria-valuemin=\"0\" aria-valuemax=\"5\" aria-valuenow=\"4\" aria-readonly=\"true\" style=\"width: 70px; height: 14px;\"><div class=\"rateit-selected\" style=\"height: 14px; width: 56px;\"></div><div class=\"rateit-hover\" style=\"height:14px\"></div></div></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t<div class=\"reviews\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"lnk\"></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                    </div>
\t\t\t\t\t\t\t\t</div><!-- /.row -->\t\t
\t\t\t\t\t\t\t</div><!-- /.rating-reviews -->

\t\t\t\t\t\t\t<div class=\"stock-container info-container m-t-10\">
\t\t\t\t\t\t\t\t<div class=\"row\">
                                <div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t<div class=\"stock-box\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label\">Availability :</span>
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t<div class=\"stock-box\">
                                          {% if product.quantity > 0 %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"value\">In Stock</span>
                                            {% else %}
                                            <span class=\"value\">Not Availble</span>
                                            {% endif %}
\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t</div>
                                    </div>
\t\t\t\t\t\t\t\t</div><!-- /.row -->\t
\t\t\t\t\t\t\t</div><!-- /.stock-container -->

\t\t

\t\t\t\t\t\t\t<div class=\"price-container info-container m-t-20\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-xs-12 col-md-6 col-lg-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"price-box\">
                                        <span class=\"price\" style=\"color: #ffc100;  font-size: 22px;  font-weight: 500;     line-height: 50px;\"
                                        
                                        >{{ product.price }}</span> {{ 'currency'|trans }}
\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t<span style=\"    color: #aaa;    font-size: 22px;     font-weight: 300;     line-height: 50px;     text-decoration: line-through;     vertical-align: top;     margin-left: 10px;\" 
                                            class=\"price-strike\">{{ product.Dprice }}</span> {{ 'currency'|trans }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12 col-xs-12 col-md-6 col-lg-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"favorite-button\">
\t\t\t\t\t\t\t\t\t\t\t<a style=\"background: #f2f2f2;
    border-radius: 999px;
    padding: 10px 14px;
    border: none;\" class=\"btn btn-primary\"   data-placement=\"right\" title=\"\" href=\"#\" data-original-title=\"Wishlist\">
\t\t\t\t\t\t\t\t\t\t\t    <i style=\"display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;color: #ffc100;\" class=\"fa fa-heart\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a style=\"background: #f2f2f2;
    border-radius: 999px;
    padding: 10px 14px;
    border: none;\"class=\"btn btn-primary\"   data-placement=\"right\" title=\"\" href=\"#\" data-original-title=\"Add to Compare\">
\t\t\t\t\t\t\t\t\t\t\t   <i style=\"display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;color: #ffc100;\" class=\"fa fa-signal\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a style=\"background: #f2f2f2;
    border-radius: 999px;
    padding: 10px 14px;
    border: none;\"class=\"btn btn-primary\"   data-placement=\"right\" title=\"\" href=\"#\" data-original-title=\"E-mail\">
\t\t\t\t\t\t\t\t\t\t\t    <i style=\"display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;color: #ffc100;\" class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t\t\t\t</div><!-- /.price-container -->

\t\t\t\t\t\t\t<div class=\"quantity-container info-container\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t <div class=\"row addtocart id-row\" data-id=\"{{ product.id }}\">
                                        <div class=\"col-md-2\">
                                     <span class=\"label\">Qty :</span>       <input type=\"number\" class=\"form-control addtocart-input\" value=\"1\">
                                        </div>
                                        <div class=\"col-md-2\">
                                            <p>
                                                <a style=\"    padding: 10px 30px;  font-size: 18px;    background-color: #ffc100;    color: #fff;     font-weight: 500;\"
                                                class=\"btn btn-success addtocart-btn\" href=\"#\">
                                             <i class=\"fa fa-shopping-cart inner-right-vs\"></i>   {{ 'cart.addtocart'|trans }}</a>
                                            </p>
                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t 

\t\t\t\t\t\t\t\t 

\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t\t\t\t</div><!-- /.quantity-container -->

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t
\t\t\t\t\t\t</div><!-- /.product-info -->
\t\t\t\t\t</div><!-- /.col-sm-7 -->
                    <div class=\"col-lg-3 col-sm-12 col-md-3\">
                   
                    </div>
\t\t\t\t</div><!-- /.row -->
                </div>




<!-- /.product-description -->








<div class=\"product-tabs inner-bottom-xs  wow fadeInUp animated\" style=\"    visibility: visible;
    margin-top: 30px;
    background-color: #fff;
    padding: 0px;
    overflow: hidden;
    margin-bottom: 30px;
    border-radius: 5px;
    box-shadow: 0 1px 2px 0 rgba(0,0,0,.2);\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<ul   id=\"product-tabs\" class=\"nav nav-tabs nav-tab-cell\">
\t\t\t\t\t\t\t\t<li style=\"float: none !important; \"><a style =\"display: block; padding: 12px 22px; font-size: 18px;line-height: 28px;position: relative;    font-weight: 500; letter-spacing: normal;  border: 1px #fff solid;\" href=\"#description\">Description</a></li>
                                <li style=\"float: none !important; \"><a style =\"display: block; padding: 12px 22px; font-size: 18px;line-height: 28px;position: relative;    font-weight: 500; letter-spacing: normal;  border: 1px #fff solid;\"     href=\"#vendor\">Vendor</a></li>
\t\t\t\t\t\t\t\t<li style=\"float: none !important; \"><a style =\" display: block; padding: 12px 22px; font-size: 18px;line-height: 28px;position: relative;    font-weight: 500; letter-spacing: normal;  border: 1px #fff solid;\"     href=\"#review\">Review</a></li>
\t\t\t\t 
\t\t\t\t\t\t\t</ul><!-- /.nav-tabs #product-tabs -->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-9\">

\t\t\t\t\t\t\t<div class=\"tab-content\" style=\"    padding-left: 0px;
    box-shadow: none;
    padding: 0;\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div id=\"description\" class=\"tab-pane in active\">
\t\t\t\t\t\t\t\t\t<div class=\"product-tab\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text\">      {{ product.description|rawdescr|nl2br }} </p>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t</div><!-- /.tab-pane -->
<div id=\"vendor\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t<div class=\"product-tab\">
                                                                            <h3>Amazon</h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"text\">
 

 </p>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"review\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t<div class=\"product-tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"product-reviews\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\">Customer Reviews</h4>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"reviews\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-title\"><span class=\"summary\">We love this product</span><span class=\"date\"><i class=\"fa fa-calendar\"></i><span>1 days ago</span></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit.Aliquam suscipit.\"</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.reviews -->
\t\t\t\t\t\t\t\t\t\t</div><!-- /.product-reviews -->
\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"product-add-review\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\">Write your own review</h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-table\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table\">\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"cell-label\">&nbsp;</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>1 star</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>2 stars</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>3 stars</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>4 stars</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>5 stars</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"cell-label\">Quality</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"1\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"2\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"3\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"4\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"5\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"cell-label\">Price</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"1\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"2\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"3\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"4\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"5\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"cell-label\">Value</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"1\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"2\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"3\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"4\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><input type=\"radio\" name=\"quality\" class=\"radio\" value=\"5\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t</table><!-- /.table .table-bordered -->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.table-responsive -->
\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.review-table -->
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-form\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<form class=\"cnt-form\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"exampleInputName\">Your Name <span class=\"astk\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control txt\" id=\"exampleInputName\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.form-group -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"exampleInputSummary\">Summary <span class=\"astk\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control txt\" id=\"exampleInputSummary\" placeholder=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.form-group -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"exampleInputReview\">Review <span class=\"astk\">*</span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control txt txt-review\" id=\"exampleInputReview\" rows=\"4\" placeholder=\"\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.form-group -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"action text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-upper\">SUBMIT REVIEW</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.action -->

\t\t\t\t\t\t\t\t\t\t\t\t\t</form><!-- /.cnt-form -->
\t\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.form-container -->
\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.review-form -->

\t\t\t\t\t\t\t\t\t\t</div><!-- /.product-add-review -->\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t        </div><!-- /.product-tab -->
\t\t\t\t\t\t\t\t</div><!-- /.tab-pane -->

\t\t\t\t\t\t\t\t<div id=\"tags\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t<div class=\"product-tag\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<h4 class=\"title\">Product Tags</h4>
\t\t\t\t\t\t\t\t\t\t<form class=\"form-inline form-cnt\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-container\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"exampleInputTag\">Add Your Tags: </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" id=\"exampleInputTag\" class=\"form-control txt\">
\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-upper btn-primary\" type=\"submit\">ADD TAGS</button>
\t\t\t\t\t\t\t\t\t\t\t</div><!-- /.form-container -->
\t\t\t\t\t\t\t\t\t\t</form><!-- /.form-cnt -->

\t\t\t\t\t\t\t\t\t\t<form class=\"form-inline form-cnt\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>&nbsp;</label>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text col-md-offset-3\">Use spaces to separate tags. Use single quotes (') for phrases.</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form><!-- /.form-cnt -->

\t\t\t\t\t\t\t\t\t</div><!-- /.product-tab -->
\t\t\t\t\t\t\t\t</div><!-- /.tab-pane -->
                                <div id=\"offers\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t<div class=\"product-tab\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text\">Sorry no more offers available</p>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div><!-- /.tab-content -->
\t\t\t\t\t\t</div><!-- /.col -->
\t\t\t\t\t</div><!-- /.row -->
\t\t\t\t</div>
     
    <div class=\"row well well-lg\">
      
    </div>
</div>
{% endblock page_content %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/fancybox/jquery.mousewheel-3.0.6.pack.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/fancybox/jquery.fancybox.pack.js') }}\" type=\"text/javascript\"></script>
    <script>
        \$(document).ready(function () {
            \$('.fancybox').fancybox();

            {% if is_granted('ROLE_USER') %}
                checkProductIsLiked({{ product.id }});
            {% endif %}

            addToLastSeenProductIds({{ product.id }});
        });
    </script>
{% endblock javascripts %}
", "ShopBundle:Catalog:showProduct.html.twig", "C:\\laragon\\www\\qassima\\src\\Eshop\\ShopBundle/Resources/views/Catalog/showProduct.html.twig");
    }
}
