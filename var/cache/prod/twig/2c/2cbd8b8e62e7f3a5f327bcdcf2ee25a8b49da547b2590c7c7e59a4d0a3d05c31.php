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

/* ShopBundle:Catalog:category.html.twig */
class __TwigTemplate_09ef61dfc811f21233a9b5eb8e7f698149b0d0cf65e83e9d770b6fe8dcc98d27 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ShopBundle:Catalog:category.html.twig"));

        $this->parent = $this->loadTemplate("@Shop/layout.html.twig", "ShopBundle:Catalog:category.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_metadescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metadescription"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 8, $this->source); })()), "metaDescription", [], "any", false, false, false, 8), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_metakeys($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metakeys"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 9, $this->source); })()), "metaKeys", [], "any", false, false, false, 9), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 12
        echo "</div>
<div class=\"container\">
  <div class=\"col-md-3 sidebar\">
    <div class=\"sidebar-module-container\">
      <div class=\"sidebar-filter\">
        <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
        <div class=\"sidebar-widget wow fadeInUp animated animated\"
          style=\"visibility: visible; animation-name: fadeInUp;\">
          <h3 class=\"section-title\">Shop by</h3>
          <div class=\"widget-header\">
            <h4 class=\"widget-title\">Category</h4>
          </div>
          <div class=\"sidebar-widget-body\">
            <div class=\"accordion\">
              <div class=\"accordion-group\">
                <div class=\"accordion-heading\"> <a href=\"#collapseOne\" data-toggle=\"collapse\"
                    class=\"accordion-toggle collapsed\"> Camera </a> </div>
                <!-- /.accordion-heading -->
                <div class=\"accordion-body collapse\" id=\"collapseOne\" style=\"height: 0px;\">
                  <div class=\"accordion-inner\">
                    <ul>
                      <li><a href=\"#\">gaming</a></li>
                      <li><a href=\"#\">office</a></li>
                      <li><a href=\"#\">kids</a></li>
                      <li><a href=\"#\">for women</a></li>
                    </ul>
                  </div>
                  <!-- /.accordion-inner -->
                </div>
                <!-- /.accordion-body -->
              </div>
              <!-- /.accordion-group -->

              <div class=\"accordion-group\">
                <div class=\"accordion-heading\"> <a href=\"#collapseTwo\" data-toggle=\"collapse\"
                    class=\"accordion-toggle collapsed\"> Desktops </a> </div>
                <!-- /.accordion-heading -->
                <div class=\"accordion-body collapse\" id=\"collapseTwo\" style=\"height: 0px;\">
                  <div class=\"accordion-inner\">
                    <ul>
                      <li><a href=\"#\">gaming</a></li>
                      <li><a href=\"#\">office</a></li>
                      <li><a href=\"#\">kids</a></li>
                      <li><a href=\"#\">for women</a></li>
                    </ul>
                  </div>
                  <!-- /.accordion-inner -->
                </div>
                <!-- /.accordion-body -->
              </div>
              <!-- /.accordion-group -->

              <div class=\"accordion-group\">
                <div class=\"accordion-heading\"> <a href=\"#collapseThree\" data-toggle=\"collapse\"
                    class=\"accordion-toggle collapsed\"> Pants </a> </div>
                <!-- /.accordion-heading -->
                <div class=\"accordion-body collapse\" id=\"collapseThree\" style=\"height: 0px;\">
                  <div class=\"accordion-inner\">
                    <ul>
                      <li><a href=\"#\">gaming</a></li>
                      <li><a href=\"#\">office</a></li>
                      <li><a href=\"#\">kids</a></li>
                      <li><a href=\"#\">for women</a></li>
                    </ul>
                  </div>
                  <!-- /.accordion-inner -->
                </div>
                <!-- /.accordion-body -->
              </div>
              <!-- /.accordion-group -->

              <div class=\"accordion-group\">
                <div class=\"accordion-heading\"> <a href=\"#collapseFour\" data-toggle=\"collapse\"
                    class=\"accordion-toggle collapsed\"> Bags </a> </div>
                <!-- /.accordion-heading -->
                <div class=\"accordion-body collapse\" id=\"collapseFour\" style=\"height: 0px;\">
                  <div class=\"accordion-inner\">
                    <ul>
                      <li><a href=\"#\">gaming</a></li>
                      <li><a href=\"#\">office</a></li>
                      <li><a href=\"#\">kids</a></li>
                      <li><a href=\"#\">for women</a></li>
                    </ul>
                  </div>
                  <!-- /.accordion-inner -->
                </div>
                <!-- /.accordion-body -->
              </div>
              <!-- /.accordion-group -->

              <div class=\"accordion-group\">
                <div class=\"accordion-heading\"> <a href=\"#collapseFive\" data-toggle=\"collapse\"
                    class=\"accordion-toggle collapsed\"> Hats </a> </div>
                <!-- /.accordion-heading -->
                <div class=\"accordion-body collapse\" id=\"collapseFive\" style=\"height: 0px;\">
                  <div class=\"accordion-inner\">
                    <ul>
                      <li><a href=\"#\">gaming</a></li>
                      <li><a href=\"#\">office</a></li>
                      <li><a href=\"#\">kids</a></li>
                      <li><a href=\"#\">for women</a></li>
                    </ul>
                  </div>
                  <!-- /.accordion-inner -->
                </div>
                <!-- /.accordion-body -->
              </div>
              <!-- /.accordion-group -->

              <div class=\"accordion-group\">
                <div class=\"accordion-heading\"> <a href=\"#collapseSix\" data-toggle=\"collapse\"
                    class=\"accordion-toggle collapsed\"> Accessories </a> </div>
                <!-- /.accordion-heading -->
                <div class=\"accordion-body collapse\" id=\"collapseSix\" style=\"height: 0px;\">
                  <div class=\"accordion-inner\">
                    <ul>
                      <li><a href=\"#\">gaming</a></li>
                      <li><a href=\"#\">office</a></li>
                      <li><a href=\"#\">kids</a></li>
                      <li><a href=\"#\">for women</a></li>
                    </ul>
                  </div>
                  <!-- /.accordion-inner -->
                </div>
                <!-- /.accordion-body -->
              </div>
              <!-- /.accordion-group -->

            </div>
            <!-- /.accordion -->
          </div>
          <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->
        <!-- ============================================== SIDEBAR CATEGORY : END ============================================== -->

        <!-- ============================================== PRICE SILDER============================================== -->

        <div class=\"sidebar-widget wow fadeInUp animated animated\"
          style=\"visibility: visible; animation-name: fadeInUp;\">
          <div class=\"widget-header\">
            <h4 class=\"widget-title\">Price Slider</h4>
          </div>
          <div class=\"sidebar-widget-body m-t-10\">
            <div class=\"price-range-holder\"> <span class=\"min-max\"> <span class=\"pull-left\">\$200.00</span> <span
                  class=\"pull-right\">\$800.00</span> </span>
              <input type=\"text\" id=\"amount\" style=\"border:0; color:#666666; font-weight:bold;text-align:center;\">
              <div class=\"slider slider-horizontal\" id=\"\">
                <div class=\"slider-track\">
                  <div class=\"slider-selection\" style=\"left: 16.6667%; width: 50%;\"></div>
                  <div class=\"slider-handle min-slider-handle\" tabindex=\"0\" style=\"left: 16.6667%;\"></div>
                  <div class=\"slider-handle max-slider-handle\" tabindex=\"0\" style=\"left: 66.6667%;\"></div>
                </div>
                <div class=\"tooltip tooltip-main top\" style=\"left: 41.6667%; margin-left: -34.5px;\">
                  <div class=\"tooltip-arrow\"></div>
                  <div class=\"tooltip-inner\">200 : 500</div>
                </div>
                <div class=\"tooltip tooltip-min top\" style=\"left: 16.6667%; margin-left: -34.5px;\">
                  <div class=\"tooltip-arrow\"></div>
                  <div class=\"tooltip-inner\">200</div>
                </div>
                <div class=\"tooltip tooltip-max bottom\" style=\"top: 18px; left: 66.6667%; margin-left: -35px;\">
                  <div class=\"tooltip-arrow\"></div>
                  <div class=\"tooltip-inner\">500</div>
                </div>
              </div><input type=\"text\" class=\"price-slider\" value=\"200,500\" data=\"value: '200,500'\"
                style=\"display: none;\">
            </div>
            <!-- /.price-range-holder -->
            <a href=\"#\" class=\"lnk btn btn-primary\">Show Now</a>
          </div>
          <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->
        <!-- ============================================== PRICE SILDER : END ============================================== -->
        <!-- ============================================== MANUFACTURES============================================== -->
        <div class=\"sidebar-widget wow fadeInUp animated animated\"
          style=\"visibility: visible; animation-name: fadeInUp;\">
          <div class=\"widget-header\">
            <h4 class=\"widget-title\">Manufactures</h4>
          </div>
          <div class=\"sidebar-widget-body\">
            <ul class=\"list\">
              <li><a href=\"#\">Forever 18</a></li>
              <li><a href=\"#\">Nike</a></li>
              <li><a href=\"#\">Dolce &amp; Gabbana</a></li>
              <li><a href=\"#\">Alluare</a></li>
              <li><a href=\"#\">Chanel</a></li>
              <li><a href=\"#\">Other Brand</a></li>
            </ul>
            <!--<a href=\"#\" class=\"lnk btn btn-primary\">Show Now</a>-->
          </div>
          <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->
        <!-- ============================================== MANUFACTURES: END ============================================== -->
        <!-- ============================================== COLOR============================================== -->
        <div class=\"sidebar-widget wow fadeInUp animated animated\"
          style=\"visibility: visible; animation-name: fadeInUp;\">
          <div class=\"widget-header\">
            <h4 class=\"widget-title\">Colors</h4>
          </div>
          <div class=\"sidebar-widget-body\">
            <ul class=\"list\">
              <li><a href=\"#\">Red</a></li>
              <li><a href=\"#\">Blue</a></li>
              <li><a href=\"#\">Yellow</a></li>
              <li><a href=\"#\">Pink</a></li>
              <li><a href=\"#\">Brown</a></li>
              <li><a href=\"#\">Teal</a></li>
            </ul>
          </div>
          <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->

        <!-- ============================================== COMPARE: END ============================================== -->
        <!-- ============================================== PRODUCT TAGS ============================================== -->

        <!-- /.sidebar-widget -->
        <!----------- Testimonials------------->


        <!-- ============================================== Testimonials: END ============================================== -->


      </div>
      <!-- /.sidebar-filter -->
    </div>
  </div>

  <div class=\"col-md-9 rht-col\">
    <div class=\"clearfix filters-container m-t-10\">

      <div class=\"well well-sm\">
        <div class=\"btn-group\">
          <a href=\"#\" id=\"list\" class=\"btn btn-default btn-sm\"><span class=\"glyphicon glyphicon-th-list\">
            </span>";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("category.view.list", [], "ShopBundle"), "html", null, true);
        echo "</a> <a href=\"#\" id=\"grid\" class=\"btn btn-default btn-sm\"><span
              class=\"glyphicon glyphicon-th\"></span>";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("category.view.grid", [], "ShopBundle"), "html", null, true);
        echo "</a>
        </div>
        <strong>";
        // line 252
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 252, $this->source); })()), "name", [], "any", false, false, false, 252), "html", null, true);
        echo "</strong>
        <div class=\"dropdown pull-right\">
          <strong>";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("category.sort.by", [], "ShopBundle"), "html", null, true);
        echo "</strong>
          <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\"
            aria-haspopup=\"true\" aria-expanded=\"true\">
            ";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["sortedby"]) || array_key_exists("sortedby", $context) ? $context["sortedby"] : (function () { throw new RuntimeError('Variable "sortedby" does not exist.', 257, $this->source); })()), [], "ShopBundle"), "html", null, true);
        echo "
            <span class=\"caret\"></span>
          </button>
          <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
            <li>";
        // line 261
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 261, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("category.sort.name", [], "ShopBundle"), "p.name");
        echo "</li>
            <li>";
        // line 262
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 262, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("category.sort.price", [], "ShopBundle"), "p.price");
        echo "</li>
          </ul>
        </div>
      </div>

      <div class=\"search-result-container\">
        <div id=\"myTabContent\" class=\"tab-content category-list\">
          <div class=\"tab-pane active\">
            <div class=\"category-product\">
              <div class=\"row\">
                ";
        // line 272
        if (twig_length_filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 272, $this->source); })()))) {
            // line 273
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 273, $this->source); })()));
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
                // line 274
                echo "                    <div class=\"col-sm-6 col-md-4 col-lg-4 wow fadeInUp animated\">
                      ";
                // line 275
                echo twig_include($this->env, $context, "@Shop/Partials/productPreview.html.twig");
                echo "
                    </div>
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
            // line 278
            echo "                ";
        } else {
            // line 279
            echo "                <h3>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("manufacturer.noproducts", [], "ShopBundle"), "html", null, true);
            echo "</h3>
                ";
        }
        // line 281
        echo "              </div>
              <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-4\">
                  ";
        // line 284
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 284, $this->source); })()));
        echo "
                </div>
              </div>
              <div class=\"row well well-lg\">
                ";
        // line 289
        echo "                <div class=\"caption\">
                  ";
        // line 293
        echo "                </div>


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
        return "ShopBundle:Catalog:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 293,  448 => 289,  441 => 284,  436 => 281,  430 => 279,  427 => 278,  410 => 275,  407 => 274,  389 => 273,  387 => 272,  374 => 262,  370 => 261,  363 => 257,  357 => 254,  352 => 252,  347 => 250,  343 => 249,  104 => 12,  97 => 11,  84 => 9,  71 => 8,  62 => 5,  55 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Shop/layout.html.twig' %}
{% trans_default_domain 'ShopBundle' %}

{% block title %}
{{ category.name }}
{% endblock title %}

{% block metadescription %}{{ category.metaDescription }}{% endblock %}
{% block metakeys %}{{ category.metaKeys }}{% endblock %}

{% block page_content -%}
</div>
<div class=\"container\">
  <div class=\"col-md-3 sidebar\">
    <div class=\"sidebar-module-container\">
      <div class=\"sidebar-filter\">
        <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
        <div class=\"sidebar-widget wow fadeInUp animated animated\"
          style=\"visibility: visible; animation-name: fadeInUp;\">
          <h3 class=\"section-title\">Shop by</h3>
          <div class=\"widget-header\">
            <h4 class=\"widget-title\">Category</h4>
          </div>
          <div class=\"sidebar-widget-body\">
            <div class=\"accordion\">
              <div class=\"accordion-group\">
                <div class=\"accordion-heading\"> <a href=\"#collapseOne\" data-toggle=\"collapse\"
                    class=\"accordion-toggle collapsed\"> Camera </a> </div>
                <!-- /.accordion-heading -->
                <div class=\"accordion-body collapse\" id=\"collapseOne\" style=\"height: 0px;\">
                  <div class=\"accordion-inner\">
                    <ul>
                      <li><a href=\"#\">gaming</a></li>
                      <li><a href=\"#\">office</a></li>
                      <li><a href=\"#\">kids</a></li>
                      <li><a href=\"#\">for women</a></li>
                    </ul>
                  </div>
                  <!-- /.accordion-inner -->
                </div>
                <!-- /.accordion-body -->
              </div>
              <!-- /.accordion-group -->

              <div class=\"accordion-group\">
                <div class=\"accordion-heading\"> <a href=\"#collapseTwo\" data-toggle=\"collapse\"
                    class=\"accordion-toggle collapsed\"> Desktops </a> </div>
                <!-- /.accordion-heading -->
                <div class=\"accordion-body collapse\" id=\"collapseTwo\" style=\"height: 0px;\">
                  <div class=\"accordion-inner\">
                    <ul>
                      <li><a href=\"#\">gaming</a></li>
                      <li><a href=\"#\">office</a></li>
                      <li><a href=\"#\">kids</a></li>
                      <li><a href=\"#\">for women</a></li>
                    </ul>
                  </div>
                  <!-- /.accordion-inner -->
                </div>
                <!-- /.accordion-body -->
              </div>
              <!-- /.accordion-group -->

              <div class=\"accordion-group\">
                <div class=\"accordion-heading\"> <a href=\"#collapseThree\" data-toggle=\"collapse\"
                    class=\"accordion-toggle collapsed\"> Pants </a> </div>
                <!-- /.accordion-heading -->
                <div class=\"accordion-body collapse\" id=\"collapseThree\" style=\"height: 0px;\">
                  <div class=\"accordion-inner\">
                    <ul>
                      <li><a href=\"#\">gaming</a></li>
                      <li><a href=\"#\">office</a></li>
                      <li><a href=\"#\">kids</a></li>
                      <li><a href=\"#\">for women</a></li>
                    </ul>
                  </div>
                  <!-- /.accordion-inner -->
                </div>
                <!-- /.accordion-body -->
              </div>
              <!-- /.accordion-group -->

              <div class=\"accordion-group\">
                <div class=\"accordion-heading\"> <a href=\"#collapseFour\" data-toggle=\"collapse\"
                    class=\"accordion-toggle collapsed\"> Bags </a> </div>
                <!-- /.accordion-heading -->
                <div class=\"accordion-body collapse\" id=\"collapseFour\" style=\"height: 0px;\">
                  <div class=\"accordion-inner\">
                    <ul>
                      <li><a href=\"#\">gaming</a></li>
                      <li><a href=\"#\">office</a></li>
                      <li><a href=\"#\">kids</a></li>
                      <li><a href=\"#\">for women</a></li>
                    </ul>
                  </div>
                  <!-- /.accordion-inner -->
                </div>
                <!-- /.accordion-body -->
              </div>
              <!-- /.accordion-group -->

              <div class=\"accordion-group\">
                <div class=\"accordion-heading\"> <a href=\"#collapseFive\" data-toggle=\"collapse\"
                    class=\"accordion-toggle collapsed\"> Hats </a> </div>
                <!-- /.accordion-heading -->
                <div class=\"accordion-body collapse\" id=\"collapseFive\" style=\"height: 0px;\">
                  <div class=\"accordion-inner\">
                    <ul>
                      <li><a href=\"#\">gaming</a></li>
                      <li><a href=\"#\">office</a></li>
                      <li><a href=\"#\">kids</a></li>
                      <li><a href=\"#\">for women</a></li>
                    </ul>
                  </div>
                  <!-- /.accordion-inner -->
                </div>
                <!-- /.accordion-body -->
              </div>
              <!-- /.accordion-group -->

              <div class=\"accordion-group\">
                <div class=\"accordion-heading\"> <a href=\"#collapseSix\" data-toggle=\"collapse\"
                    class=\"accordion-toggle collapsed\"> Accessories </a> </div>
                <!-- /.accordion-heading -->
                <div class=\"accordion-body collapse\" id=\"collapseSix\" style=\"height: 0px;\">
                  <div class=\"accordion-inner\">
                    <ul>
                      <li><a href=\"#\">gaming</a></li>
                      <li><a href=\"#\">office</a></li>
                      <li><a href=\"#\">kids</a></li>
                      <li><a href=\"#\">for women</a></li>
                    </ul>
                  </div>
                  <!-- /.accordion-inner -->
                </div>
                <!-- /.accordion-body -->
              </div>
              <!-- /.accordion-group -->

            </div>
            <!-- /.accordion -->
          </div>
          <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->
        <!-- ============================================== SIDEBAR CATEGORY : END ============================================== -->

        <!-- ============================================== PRICE SILDER============================================== -->

        <div class=\"sidebar-widget wow fadeInUp animated animated\"
          style=\"visibility: visible; animation-name: fadeInUp;\">
          <div class=\"widget-header\">
            <h4 class=\"widget-title\">Price Slider</h4>
          </div>
          <div class=\"sidebar-widget-body m-t-10\">
            <div class=\"price-range-holder\"> <span class=\"min-max\"> <span class=\"pull-left\">\$200.00</span> <span
                  class=\"pull-right\">\$800.00</span> </span>
              <input type=\"text\" id=\"amount\" style=\"border:0; color:#666666; font-weight:bold;text-align:center;\">
              <div class=\"slider slider-horizontal\" id=\"\">
                <div class=\"slider-track\">
                  <div class=\"slider-selection\" style=\"left: 16.6667%; width: 50%;\"></div>
                  <div class=\"slider-handle min-slider-handle\" tabindex=\"0\" style=\"left: 16.6667%;\"></div>
                  <div class=\"slider-handle max-slider-handle\" tabindex=\"0\" style=\"left: 66.6667%;\"></div>
                </div>
                <div class=\"tooltip tooltip-main top\" style=\"left: 41.6667%; margin-left: -34.5px;\">
                  <div class=\"tooltip-arrow\"></div>
                  <div class=\"tooltip-inner\">200 : 500</div>
                </div>
                <div class=\"tooltip tooltip-min top\" style=\"left: 16.6667%; margin-left: -34.5px;\">
                  <div class=\"tooltip-arrow\"></div>
                  <div class=\"tooltip-inner\">200</div>
                </div>
                <div class=\"tooltip tooltip-max bottom\" style=\"top: 18px; left: 66.6667%; margin-left: -35px;\">
                  <div class=\"tooltip-arrow\"></div>
                  <div class=\"tooltip-inner\">500</div>
                </div>
              </div><input type=\"text\" class=\"price-slider\" value=\"200,500\" data=\"value: '200,500'\"
                style=\"display: none;\">
            </div>
            <!-- /.price-range-holder -->
            <a href=\"#\" class=\"lnk btn btn-primary\">Show Now</a>
          </div>
          <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->
        <!-- ============================================== PRICE SILDER : END ============================================== -->
        <!-- ============================================== MANUFACTURES============================================== -->
        <div class=\"sidebar-widget wow fadeInUp animated animated\"
          style=\"visibility: visible; animation-name: fadeInUp;\">
          <div class=\"widget-header\">
            <h4 class=\"widget-title\">Manufactures</h4>
          </div>
          <div class=\"sidebar-widget-body\">
            <ul class=\"list\">
              <li><a href=\"#\">Forever 18</a></li>
              <li><a href=\"#\">Nike</a></li>
              <li><a href=\"#\">Dolce &amp; Gabbana</a></li>
              <li><a href=\"#\">Alluare</a></li>
              <li><a href=\"#\">Chanel</a></li>
              <li><a href=\"#\">Other Brand</a></li>
            </ul>
            <!--<a href=\"#\" class=\"lnk btn btn-primary\">Show Now</a>-->
          </div>
          <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->
        <!-- ============================================== MANUFACTURES: END ============================================== -->
        <!-- ============================================== COLOR============================================== -->
        <div class=\"sidebar-widget wow fadeInUp animated animated\"
          style=\"visibility: visible; animation-name: fadeInUp;\">
          <div class=\"widget-header\">
            <h4 class=\"widget-title\">Colors</h4>
          </div>
          <div class=\"sidebar-widget-body\">
            <ul class=\"list\">
              <li><a href=\"#\">Red</a></li>
              <li><a href=\"#\">Blue</a></li>
              <li><a href=\"#\">Yellow</a></li>
              <li><a href=\"#\">Pink</a></li>
              <li><a href=\"#\">Brown</a></li>
              <li><a href=\"#\">Teal</a></li>
            </ul>
          </div>
          <!-- /.sidebar-widget-body -->
        </div>
        <!-- /.sidebar-widget -->

        <!-- ============================================== COMPARE: END ============================================== -->
        <!-- ============================================== PRODUCT TAGS ============================================== -->

        <!-- /.sidebar-widget -->
        <!----------- Testimonials------------->


        <!-- ============================================== Testimonials: END ============================================== -->


      </div>
      <!-- /.sidebar-filter -->
    </div>
  </div>

  <div class=\"col-md-9 rht-col\">
    <div class=\"clearfix filters-container m-t-10\">

      <div class=\"well well-sm\">
        <div class=\"btn-group\">
          <a href=\"#\" id=\"list\" class=\"btn btn-default btn-sm\"><span class=\"glyphicon glyphicon-th-list\">
            </span>{{ 'category.view.list'|trans }}</a> <a href=\"#\" id=\"grid\" class=\"btn btn-default btn-sm\"><span
              class=\"glyphicon glyphicon-th\"></span>{{ 'category.view.grid'|trans }}</a>
        </div>
        <strong>{{ category.name }}</strong>
        <div class=\"dropdown pull-right\">
          <strong>{{ 'category.sort.by'|trans }}</strong>
          <button class=\"btn btn-default dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\"
            aria-haspopup=\"true\" aria-expanded=\"true\">
            {{ sortedby|trans }}
            <span class=\"caret\"></span>
          </button>
          <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
            <li>{{ knp_pagination_sortable(products, 'category.sort.name'|trans, 'p.name') }}</li>
            <li>{{ knp_pagination_sortable(products, 'category.sort.price'|trans, 'p.price') }}</li>
          </ul>
        </div>
      </div>

      <div class=\"search-result-container\">
        <div id=\"myTabContent\" class=\"tab-content category-list\">
          <div class=\"tab-pane active\">
            <div class=\"category-product\">
              <div class=\"row\">
                {% if products|length %}
                  {% for product in products %}
                    <div class=\"col-sm-6 col-md-4 col-lg-4 wow fadeInUp animated\">
                      {{ include('@Shop/Partials/productPreview.html.twig') }}
                    </div>
                  {% endfor %}
                {% else %}
                <h3>{{ 'manufacturer.noproducts'|trans }}</h3>
                {% endif %}
              </div>
              <div class=\"row\">
                <div class=\"col-md-8 col-md-offset-4\">
                  {{ knp_pagination_render(products) }}
                </div>
              </div>
              <div class=\"row well well-lg\">
                {# <h3 class=\"group inner list-group-item-heading\">{{ category.name }}</h3> #}
                <div class=\"caption\">
                  {# <p class=\"group inner list-group-item-text\">
                                                            {{ category.description|rawdescr|nl2br }}
                                                        </p> #}
                </div>


              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


  </div>
</div>
{% endblock page_content %}", "ShopBundle:Catalog:category.html.twig", "C:\\laragon\\www\\qassima\\src\\Eshop\\ShopBundle/Resources/views/Catalog/category.html.twig");
    }
}
