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

/* @Shop/layout.html.twig */
class __TwigTemplate_9a2a7180e8e02fff68ca740c26b52d0165fcf753e90fe47f076a44d6b3d31559 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'page_content' => [$this, 'block_page_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Shop/layout.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "@Shop/layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop_css/main.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop_css/blue.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop_css/owl.carousel.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop_css/owl.transitions.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop_css/animate.min.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop_css/rateit.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop_css/bootstrap-select.min.css"), "html", null, true);
        echo "\">

  <!-- Icons/Glyphs -->
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop_css/font-awesome.css"), "html", null, true);
        echo "\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800\"
    rel=\"stylesheet\">
  <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
    rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "
<header class=\"header-style-1\">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class=\"top-bar animate-dropdown\">
      <div class=\"container\">
        <div class=\"header-top-inner\">
          <div class=\"cnt-account\">
            <ul class=\"list-unstyled\">
              ";
        // line 38
        $this->loadTemplate("@Shop/Partials/navbarAuthBlock.html.twig", "@Shop/layout.html.twig", 38)->display($context);
        // line 39
        echo "               
              ";
        // line 40
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 41
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favourites");
            echo "\" class=\"icon fa fa-heart\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Wishlist", [], "ShopBundle"), "html", null, true);
            echo "</a></li>
                    ";
        }
        // line 43
        echo "                     <li>
                        <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showcart");
        echo "\">
                            <span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span>
                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("ShopBundle:Cart:navbarCart"));
        echo "
                        </a>
                    </li>
               
              
              <li><a href=\"sign-in.html\"><i class=\"icon fa fa-lock\"></i>Become a Vendor</a></li>
            </ul>
          </div>
          <!-- /.cnt-account -->

          <div class=\"cnt-block\">
            <ul class=\"list-unstyled list-inline\">
              <li class=\"dropdown dropdown-small\"> <a href=\"#\" class=\"dropdown-toggle\" data-hover=\"dropdown\" data-toggle=\"dropdown\"><span class=\"value\">USD </span><b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\">USD</a></li>
                  <li><a href=\"#\">QAR</a></li>
                   
                </ul>
              </li>
              <li class=\"dropdown dropdown-small\"> <a href=\"#\" class=\"dropdown-toggle\" data-hover=\"dropdown\" data-toggle=\"dropdown\"><span class=\"value\">English </span><b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\">English</a></li>
                  <li><a href=\"#\">عربية</a></li>
                  
                </ul>
              </li>
            </ul>
            <!-- /.list-unstyled -->
          </div>
          <!-- /.cnt-cart -->
          <div class=\"clearfix\"></div>
        </div>
        <!-- /.header-top-inner -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class=\"main-header\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xs-12 col-lg-2 col-sm-12 col-md-3 logo-holder\">
            <!-- ============================================================= LOGO ============================================================= -->
            <div class=\"logo\"> <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_main");
        echo "\"> <img style=\"    width: 100px;
    height: 50px;\" src=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("index_main");
        echo "assets\\images\\logo.png\" alt=\"logo\"> </a> </div>
            <!-- /.logo -->
            <!-- ============================================================= LOGO : END ============================================================= -->
          </div>
          <!-- /.logo-holder -->

          <div class=\"col-lg-5 col-md-4 col-sm-5 col-xs-12 top-search-holder\">
            <!-- /.contact-row -->
            <!-- ============================================================= SEARCH AREA ============================================================= -->
            <div class=\"search-area\">
             
              <form action=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" role=\"search\" method=\"GET\" >
                <div class=\"control-group\">
                  <input class=\"search-field\" id=\"search_phrase\" name=\"search_phrase\" placeholder=\"Search here...\">
                  <button type=\"submit\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\">
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Search</span>
\t\t\t\t\t\t\t\t</span>
                            </button></div>
              </form>
            </div>
            <!-- /.search-area -->
            <!-- ============================================================= SEARCH AREA : END ============================================================= -->
          </div>  
          <!-- /.top-search-holder -->

          <div class=\"col-lg-5 col-md-5 col-sm-12 col-xs-12 navmenu\">
            <div class=\"yamm navbar navbar-default\" role=\"navigation\">
              <div class=\"navbar-header\">
                <button data-target=\"#mc-horizontal-menu-collapse\" data-toggle=\"collapse\" class=\"navbar-toggle collapsed\" type=\"button\">
                  <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
              </div>
              <div class=\"nav-bg-class\">
                <div class=\"navbar-collapse collapse\" id=\"mc-horizontal-menu-collapse\">
                  <div class=\"nav-outer\">
                    <ul class=\"nav navbar-nav\">
                      <li class=\"dropdown\"> <a href=\"#\" class=\"dropdown-toggle\" data-hover=\"dropdown\" data-toggle=\"dropdown\">Deals</a>
                        <ul class=\"dropdown-menu pages\">
                          <li>
                            <div class=\"yamm-content\">
                              <div class=\"row\">
                                <div class=\"col-xs-12 col-menu\">
                                  <ul class=\"links\">
                                    <li><a href=\"deals-grid.html\">Grid/List View</a></li>
                                    <li><a href=\"deals-detail.html\">Deal Detail</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>

                      </li>
                             <li class=\"dropdown\"> 
                             <a href=\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Contact_new");
        echo "\" class=\"dropdown-toggle\" data-hover=\"dropdown\" data-toggle=\"dropdown\">Contact</a>
                        

                      </li>
                       
                       ";
        // line 150
        echo "                      
                        </ul>
                      </li>

                    </ul>
                    <!-- /.navbar-nav -->
                    <div class=\"clearfix\"></div>
                  </div>
                  <!-- /.nav-outer -->
                </div>
                <!-- /.navbar-collapse -->

              </div>
              <!-- /.nav-bg-class -->
            </div>
            <!-- /.navbar-default -->
            <div class=\"top-cart-row\">
              <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

               
              <!-- /.dropdown-cart -->

              <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
            </div>
          </div>
          <!-- /.container-class -->



        </div>

        <!-- /.row -->

      </div>
      <!-- /.container -->

    </div>
    <!-- /.main-header -->



  </header>
    <!-- Static navbar -->
     
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div  class=\"col-md-2 \"> 
            </div>
             <div  class=\"col-md-8 col-md-offset-2\">
                ";
        // line 199
        $this->displayBlock('page_content', $context, $blocks);
        // line 201
        echo "                <div class=\"row\" id=\"latest-products\"></div>
           </div>
            <div  class=\"col-md-2 \"> 
            </div>
        </div>
    </div>
 <footer id=\"footer\" class=\"footer color-bg\">
      <div class=\"footer-bottom\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3\">
              <div class=\"module-heading\">
                <h4 class=\"module-title\">Help and Support</h4>
              </div>
              <!-- /.module-heading -->

              <div class=\"module-body\">
                <ul class='list-unstyled'>
                  <li class=\"first\"><a href=\"#\" title=\"Contact us\">Term of Use</a></li>
                  <li><a href=\"#\" title=\"About us\">Search Terms</a></li>
                  <li><a href=\"#\" title=\"faq\">Store Location</a></li>
                  <li><a href=\"#\" title=\"Popular Searches\">Orders and Returns</a></li>
                  <li class=\"last\"><a href=\"#\" title=\"Where is my order?\">Deliveries</a></li>
                </ul>
              </div>
              <!-- /.module-body -->
            </div>
            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3\">
              <div class=\"module-heading\">
                <h4 class=\"module-title\">Customer Service</h4>
              </div>
              <!-- /.module-heading -->

              <div class=\"module-body\">
                <ul class='list-unstyled'>
                  <li class=\"first\"><a href=\"#\" title=\"Contact us\">My Account</a></li>
                  <li><a href=\"#\" title=\"About us\">Order History</a></li>
                  <li><a href=\"#\" title=\"faq\">FAQ</a></li>
                  <li><a href=\"#\" title=\"Popular Searches\">Specials</a></li>
                  <li class=\"last\"><a href=\"#\" title=\"Where is my order?\">Help Center</a></li>
                </ul>
              </div>
              <!-- /.module-body -->
            </div>
            <!-- /.col -->

            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3\">
              <div class=\"module-heading\">
                <h4 class=\"module-title\">Corporation</h4>
              </div>
              <!-- /.module-heading -->

              <div class=\"module-body\">
                <ul class='list-unstyled'>
                  <li class=\"first\"><a title=\"Your Account\" href=\"#\">About us</a></li>
                  <li><a title=\"Information\" href=\"#\">Customer Service</a></li>
                  <li><a title=\"Addresses\" href=\"#\">Company</a></li>
                  <li><a title=\"Addresses\" href=\"#\">Investor Relations</a></li>
                  <li class=\"last\"><a title=\"Orders History\" href=\"#\">Advanced Search</a></li>
                </ul>
              </div>
              <!-- /.module-body -->
            </div>
            <!-- /.col -->

            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3\">
              <div class=\"module-heading\">
                <h4 class=\"module-title\">Why Choose Us</h4>
              </div>
              <!-- /.module-heading -->

              <div class=\"module-body\">
                <ul class='list-unstyled'>
                  <li class=\"first\"><a href=\"#\" title=\"About us\">Shopping Guide</a></li>
                  <li><a href=\"#\" title=\"Blog\">Blog</a></li>
                  <li><a href=\"#\" title=\"Company\">Company</a></li>
                  <li><a href=\"#\" title=\"Investor Relations\">Investor Relations</a></li>
                  <li class=\" last\"><a href=\"contact-us.html\" title=\"Suppliers\">Contact Us</a></li>
                </ul>
              </div>
              <!-- /.module-body -->
            </div>
          </div>
        </div>
      </div>
      <div class=\"copyright-bar white-bg\">
        <div class=\"container\">
          <div class=\"col-xs-12 col-sm-7 col-md-12 col-lg-7 del-info\">
            We have our very own fleet of delivery vans. Your order will be packed with care at our warehouse and
            delivered right to your door by our friendly DealDots team.
          </div>

          <div class=\"col-xs-12 col-sm-5 col-md-12 col-lg-5 no-padding\">
            <div class=\"clearfix payment-methods\">
              <ul>
                <li><img src=\"assets\\images\\payments\\1.png\" alt=\"\"></li>
                <li><img src=\"assets\\images\\payments\\2.png\" alt=\"\"></li>
                <li><img src=\"assets\\images\\payments\\3.png\" alt=\"\"></li>
                <li><img src=\"assets\\images\\payments\\4.png\" alt=\"\"></li>

              </ul>
            </div>
            <!-- /.payment-methods -->
          </div>
        </div>
      </div>
      <div class=\"copyright-bar\">
        <div class=\"container\">
          <div class=\"col-xs-12 col-sm-12 no-padding social\">
            <ul class=\"link\">
              <li class=\"fb\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"Facebook\"></a></li>
              <li class=\"tw\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"Twitter\"></a></li>
              <li class=\"googleplus\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"GooglePlus\"></a></li>
              <li class=\"rss\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"RSS\"></a></li>
              <li class=\"pintrest\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"PInterest\"></a></li>
              <li class=\"linkedin\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"Linkedin\"></a></li>
              <li class=\"youtube\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"Youtube\"></a></li>
            </ul>
          </div>
          <div class=\"col-xs-12 col-sm-12 no-padding copyright\">&copy; 2020 Qasima. All Rights Reserved. </div>

        </div>
      </div>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 199
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 200
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 326
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 327
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/js.cookie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap-confirmation.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/cart.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
   ";
        // line 335
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop_js/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop_js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop_js/echo.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop_js/jquery.easing-1.3.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop_js/bootstrap-slider.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop_js/jquery.rateit.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop_js/lightbox.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop_js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop_js/wow.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop_js/scripts.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/shop_js/countdown.js"), "html", null, true);
        echo "\"></script>
  <script>
    var dthen1 = new Date(\"12/25/17 11:59:00 PM\");
    start = \"08/04/15 03:02:11 AM\";
    start_date = Date.parse(start);
    var dnow1 = new Date(start_date);
    if (CountStepper > 0)
      ddiff = new Date((dnow1) - (dthen1));
    else
      ddiff = new Date((dthen1) - (dnow1));
    gsecs1 = Math.floor(ddiff.valueOf() / 1000);

    var iid1 = \"countbox_1\";
    CountBack_slider(gsecs1, \"countbox_1\", 1);
  </script>
    <script>
        //set path urls
        var urls = [];
        urls['ajax_like'] = '";
        // line 363
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajax_like");
        echo "';
        urls['ajax_is_liked_product'] = '";
        // line 364
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajax_is_liked_product");
        echo "';
        urls['ajax_get_last_seen_products'] = '";
        // line 365
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajax_get_last_seen_products");
        echo "';
        //set translated messages
        var messages = [];
        messages['mustberegistered'] = '";
        // line 368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.messages.mustberegistered", [], "ShopBundle"), "html", null, true);
        echo "';
        messages['productnotfound'] = '";
        // line 369
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.messages.productnotfound", [], "ShopBundle"), "html", null, true);
        echo "';

        //menu items highlight
        function highlightMenu()  {

            //get requestUri
             var requestUri = '";
        // line 375
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 375, $this->source); })()), "request", [], "any", false, false, false, 375), "requestUri", [], "any", false, false, false, 375), "html", null, true);
        echo "';

             //highlight current route
             \$('.menu-link').each(function () {
                if (\$(this).attr('href') == requestUri) {
                     \$(this).addClass('active');
                }
            });
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  594 => 375,  585 => 369,  581 => 368,  575 => 365,  571 => 364,  567 => 363,  546 => 345,  542 => 344,  538 => 343,  534 => 342,  530 => 341,  526 => 340,  522 => 339,  518 => 338,  514 => 337,  510 => 336,  505 => 335,  501 => 332,  497 => 331,  493 => 330,  489 => 329,  483 => 327,  476 => 326,  469 => 200,  462 => 199,  331 => 201,  329 => 199,  278 => 150,  270 => 144,  224 => 101,  210 => 90,  206 => 89,  160 => 46,  155 => 44,  152 => 43,  144 => 41,  142 => 40,  139 => 39,  137 => 38,  126 => 29,  119 => 28,  101 => 16,  95 => 13,  91 => 12,  87 => 11,  83 => 10,  79 => 9,  75 => 8,  71 => 7,  67 => 6,  62 => 5,  55 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"::base.html.twig\" %}
{% trans_default_domain 'ShopBundle' %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/shop_css/main.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('assets/shop_css/blue.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('assets/shop_css/owl.carousel.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('assets/shop_css/owl.transitions.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('assets/shop_css/animate.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('assets/shop_css/rateit.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('assets/shop_css/bootstrap-select.min.css') }}\">

  <!-- Icons/Glyphs -->
  <link rel=\"stylesheet\" href=\"{{ asset('assets/shop_css/font-awesome.css') }}\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800\"
    rel=\"stylesheet\">
  <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
    rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

{% endblock stylesheets %}

{% block body %}

<header class=\"header-style-1\">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class=\"top-bar animate-dropdown\">
      <div class=\"container\">
        <div class=\"header-top-inner\">
          <div class=\"cnt-account\">
            <ul class=\"list-unstyled\">
              {% include '@Shop/Partials/navbarAuthBlock.html.twig' %}
               
              {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                        <li><a href=\"{{ path('favourites') }}\" class=\"icon fa fa-heart\">{{ 'Wishlist'|trans }}</a></li>
                    {% endif %}
                     <li>
                        <a href=\"{{ path('showcart') }}\">
                            <span class=\"glyphicon glyphicon-shopping-cart\" aria-hidden=\"true\"></span>
                            {{ render(controller('ShopBundle:Cart:navbarCart')) }}
                        </a>
                    </li>
               
              
              <li><a href=\"sign-in.html\"><i class=\"icon fa fa-lock\"></i>Become a Vendor</a></li>
            </ul>
          </div>
          <!-- /.cnt-account -->

          <div class=\"cnt-block\">
            <ul class=\"list-unstyled list-inline\">
              <li class=\"dropdown dropdown-small\"> <a href=\"#\" class=\"dropdown-toggle\" data-hover=\"dropdown\" data-toggle=\"dropdown\"><span class=\"value\">USD </span><b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\">USD</a></li>
                  <li><a href=\"#\">QAR</a></li>
                   
                </ul>
              </li>
              <li class=\"dropdown dropdown-small\"> <a href=\"#\" class=\"dropdown-toggle\" data-hover=\"dropdown\" data-toggle=\"dropdown\"><span class=\"value\">English </span><b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\">English</a></li>
                  <li><a href=\"#\">عربية</a></li>
                  
                </ul>
              </li>
            </ul>
            <!-- /.list-unstyled -->
          </div>
          <!-- /.cnt-cart -->
          <div class=\"clearfix\"></div>
        </div>
        <!-- /.header-top-inner -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class=\"main-header\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xs-12 col-lg-2 col-sm-12 col-md-3 logo-holder\">
            <!-- ============================================================= LOGO ============================================================= -->
            <div class=\"logo\"> <a href=\"{{ path('index_main') }}\"> <img style=\"    width: 100px;
    height: 50px;\" src=\"{{ url('index_main') }}assets\\images\\logo.png\" alt=\"logo\"> </a> </div>
            <!-- /.logo -->
            <!-- ============================================================= LOGO : END ============================================================= -->
          </div>
          <!-- /.logo-holder -->

          <div class=\"col-lg-5 col-md-4 col-sm-5 col-xs-12 top-search-holder\">
            <!-- /.contact-row -->
            <!-- ============================================================= SEARCH AREA ============================================================= -->
            <div class=\"search-area\">
             
              <form action=\"{{ path('search') }}\" role=\"search\" method=\"GET\" >
                <div class=\"control-group\">
                  <input class=\"search-field\" id=\"search_phrase\" name=\"search_phrase\" placeholder=\"Search here...\">
                  <button type=\"submit\" class=\"btn btn-default\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-search\">
\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Search</span>
\t\t\t\t\t\t\t\t</span>
                            </button></div>
              </form>
            </div>
            <!-- /.search-area -->
            <!-- ============================================================= SEARCH AREA : END ============================================================= -->
          </div>  
          <!-- /.top-search-holder -->

          <div class=\"col-lg-5 col-md-5 col-sm-12 col-xs-12 navmenu\">
            <div class=\"yamm navbar navbar-default\" role=\"navigation\">
              <div class=\"navbar-header\">
                <button data-target=\"#mc-horizontal-menu-collapse\" data-toggle=\"collapse\" class=\"navbar-toggle collapsed\" type=\"button\">
                  <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> <span class=\"icon-bar\"></span> </button>
              </div>
              <div class=\"nav-bg-class\">
                <div class=\"navbar-collapse collapse\" id=\"mc-horizontal-menu-collapse\">
                  <div class=\"nav-outer\">
                    <ul class=\"nav navbar-nav\">
                      <li class=\"dropdown\"> <a href=\"#\" class=\"dropdown-toggle\" data-hover=\"dropdown\" data-toggle=\"dropdown\">Deals</a>
                        <ul class=\"dropdown-menu pages\">
                          <li>
                            <div class=\"yamm-content\">
                              <div class=\"row\">
                                <div class=\"col-xs-12 col-menu\">
                                  <ul class=\"links\">
                                    <li><a href=\"deals-grid.html\">Grid/List View</a></li>
                                    <li><a href=\"deals-detail.html\">Deal Detail</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>

                      </li>
                             <li class=\"dropdown\"> 
                             <a href=\"{{path('Contact_new')}}\" class=\"dropdown-toggle\" data-hover=\"dropdown\" data-toggle=\"dropdown\">Contact</a>
                        

                      </li>
                       
                       {# {{ render(controller('ShopBundle:LayoutsUtility:staticPagesMenu')) }} #}
                      
                        </ul>
                      </li>

                    </ul>
                    <!-- /.navbar-nav -->
                    <div class=\"clearfix\"></div>
                  </div>
                  <!-- /.nav-outer -->
                </div>
                <!-- /.navbar-collapse -->

              </div>
              <!-- /.nav-bg-class -->
            </div>
            <!-- /.navbar-default -->
            <div class=\"top-cart-row\">
              <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

               
              <!-- /.dropdown-cart -->

              <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
            </div>
          </div>
          <!-- /.container-class -->



        </div>

        <!-- /.row -->

      </div>
      <!-- /.container -->

    </div>
    <!-- /.main-header -->



  </header>
    <!-- Static navbar -->
     
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div  class=\"col-md-2 \"> 
            </div>
             <div  class=\"col-md-8 col-md-offset-2\">
                {% block page_content %}
                {% endblock page_content %}
                <div class=\"row\" id=\"latest-products\"></div>
           </div>
            <div  class=\"col-md-2 \"> 
            </div>
        </div>
    </div>
 <footer id=\"footer\" class=\"footer color-bg\">
      <div class=\"footer-bottom\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3\">
              <div class=\"module-heading\">
                <h4 class=\"module-title\">Help and Support</h4>
              </div>
              <!-- /.module-heading -->

              <div class=\"module-body\">
                <ul class='list-unstyled'>
                  <li class=\"first\"><a href=\"#\" title=\"Contact us\">Term of Use</a></li>
                  <li><a href=\"#\" title=\"About us\">Search Terms</a></li>
                  <li><a href=\"#\" title=\"faq\">Store Location</a></li>
                  <li><a href=\"#\" title=\"Popular Searches\">Orders and Returns</a></li>
                  <li class=\"last\"><a href=\"#\" title=\"Where is my order?\">Deliveries</a></li>
                </ul>
              </div>
              <!-- /.module-body -->
            </div>
            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3\">
              <div class=\"module-heading\">
                <h4 class=\"module-title\">Customer Service</h4>
              </div>
              <!-- /.module-heading -->

              <div class=\"module-body\">
                <ul class='list-unstyled'>
                  <li class=\"first\"><a href=\"#\" title=\"Contact us\">My Account</a></li>
                  <li><a href=\"#\" title=\"About us\">Order History</a></li>
                  <li><a href=\"#\" title=\"faq\">FAQ</a></li>
                  <li><a href=\"#\" title=\"Popular Searches\">Specials</a></li>
                  <li class=\"last\"><a href=\"#\" title=\"Where is my order?\">Help Center</a></li>
                </ul>
              </div>
              <!-- /.module-body -->
            </div>
            <!-- /.col -->

            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3\">
              <div class=\"module-heading\">
                <h4 class=\"module-title\">Corporation</h4>
              </div>
              <!-- /.module-heading -->

              <div class=\"module-body\">
                <ul class='list-unstyled'>
                  <li class=\"first\"><a title=\"Your Account\" href=\"#\">About us</a></li>
                  <li><a title=\"Information\" href=\"#\">Customer Service</a></li>
                  <li><a title=\"Addresses\" href=\"#\">Company</a></li>
                  <li><a title=\"Addresses\" href=\"#\">Investor Relations</a></li>
                  <li class=\"last\"><a title=\"Orders History\" href=\"#\">Advanced Search</a></li>
                </ul>
              </div>
              <!-- /.module-body -->
            </div>
            <!-- /.col -->

            <div class=\"col-xs-12 col-sm-6 col-md-6 col-lg-3\">
              <div class=\"module-heading\">
                <h4 class=\"module-title\">Why Choose Us</h4>
              </div>
              <!-- /.module-heading -->

              <div class=\"module-body\">
                <ul class='list-unstyled'>
                  <li class=\"first\"><a href=\"#\" title=\"About us\">Shopping Guide</a></li>
                  <li><a href=\"#\" title=\"Blog\">Blog</a></li>
                  <li><a href=\"#\" title=\"Company\">Company</a></li>
                  <li><a href=\"#\" title=\"Investor Relations\">Investor Relations</a></li>
                  <li class=\" last\"><a href=\"contact-us.html\" title=\"Suppliers\">Contact Us</a></li>
                </ul>
              </div>
              <!-- /.module-body -->
            </div>
          </div>
        </div>
      </div>
      <div class=\"copyright-bar white-bg\">
        <div class=\"container\">
          <div class=\"col-xs-12 col-sm-7 col-md-12 col-lg-7 del-info\">
            We have our very own fleet of delivery vans. Your order will be packed with care at our warehouse and
            delivered right to your door by our friendly DealDots team.
          </div>

          <div class=\"col-xs-12 col-sm-5 col-md-12 col-lg-5 no-padding\">
            <div class=\"clearfix payment-methods\">
              <ul>
                <li><img src=\"assets\\images\\payments\\1.png\" alt=\"\"></li>
                <li><img src=\"assets\\images\\payments\\2.png\" alt=\"\"></li>
                <li><img src=\"assets\\images\\payments\\3.png\" alt=\"\"></li>
                <li><img src=\"assets\\images\\payments\\4.png\" alt=\"\"></li>

              </ul>
            </div>
            <!-- /.payment-methods -->
          </div>
        </div>
      </div>
      <div class=\"copyright-bar\">
        <div class=\"container\">
          <div class=\"col-xs-12 col-sm-12 no-padding social\">
            <ul class=\"link\">
              <li class=\"fb\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"Facebook\"></a></li>
              <li class=\"tw\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"Twitter\"></a></li>
              <li class=\"googleplus\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"GooglePlus\"></a></li>
              <li class=\"rss\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"RSS\"></a></li>
              <li class=\"pintrest\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"PInterest\"></a></li>
              <li class=\"linkedin\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"Linkedin\"></a></li>
              <li class=\"youtube\"><a target=\"_blank\" rel=\"nofollow\" href=\"#\" title=\"Youtube\"></a></li>
            </ul>
          </div>
          <div class=\"col-xs-12 col-sm-12 no-padding copyright\">&copy; 2020 Qasima. All Rights Reserved. </div>

        </div>
      </div>
    </footer>
{% endblock %}
{% block javascripts %}
    {{ parent() }}

    <script src=\"{{ asset('assets/js/js.cookie.js') }}\"></script>
    <script src=\"{{ asset('assets/js/bootstrap-confirmation.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/cart.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/scripts.js') }}\" type=\"text/javascript\"></script>
   {# <script src=\"{{ asset('assets/shop_js/jquery-1.11.1.min.js') }}\"></script>
  <script src=\"{{ asset('assets/shop_js/bootstrap.min.js') }}\"></script> #}
  <script src=\"{{ asset('assets/shop_js/bootstrap-hover-dropdown.min.js') }}\"></script>
  <script src=\"{{ asset('assets/shop_js/owl.carousel.min.js') }}\"></script>
  <script src=\"{{ asset('assets/shop_js/echo.min.js') }}\"></script>
  <script src=\"{{ asset('assets/shop_js/jquery.easing-1.3.min.js') }}\"></script>
  <script src=\"{{ asset('assets/shop_js/bootstrap-slider.min.js') }}\"></script>
  <script src=\"{{ asset('assets/shop_js/jquery.rateit.min.js') }}\"></script>
  <script src=\"{{ asset('assets/shop_js/lightbox.min.js') }}\"></script>
  <script src=\"{{ asset('assets/shop_js/bootstrap-select.min.js') }}\"></script>
  <script src=\"{{ asset('assets/shop_js/wow.min.js') }}\"></script>
  <script src=\"{{ asset('assets/shop_js/scripts.js') }}\"></script>
  <script src=\"{{ asset('assets/shop_js/countdown.js') }}\"></script>
  <script>
    var dthen1 = new Date(\"12/25/17 11:59:00 PM\");
    start = \"08/04/15 03:02:11 AM\";
    start_date = Date.parse(start);
    var dnow1 = new Date(start_date);
    if (CountStepper > 0)
      ddiff = new Date((dnow1) - (dthen1));
    else
      ddiff = new Date((dthen1) - (dnow1));
    gsecs1 = Math.floor(ddiff.valueOf() / 1000);

    var iid1 = \"countbox_1\";
    CountBack_slider(gsecs1, \"countbox_1\", 1);
  </script>
    <script>
        //set path urls
        var urls = [];
        urls['ajax_like'] = '{{ path('ajax_like') }}';
        urls['ajax_is_liked_product'] = '{{ path('ajax_is_liked_product') }}';
        urls['ajax_get_last_seen_products'] = '{{ path('ajax_get_last_seen_products') }}';
        //set translated messages
        var messages = [];
        messages['mustberegistered'] = '{{ 'layout.messages.mustberegistered'|trans }}';
        messages['productnotfound'] = '{{ 'layout.messages.productnotfound'|trans }}';

        //menu items highlight
        function highlightMenu()  {

            //get requestUri
             var requestUri = '{{ app.request.requestUri }}';

             //highlight current route
             \$('.menu-link').each(function () {
                if (\$(this).attr('href') == requestUri) {
                     \$(this).addClass('active');
                }
            });
        }
    </script>
{% endblock %}
", "@Shop/layout.html.twig", "D:\\laragon\\www\\Qasima\\src\\Eshop\\ShopBundle\\Resources\\views\\layout.html.twig");
    }
}
