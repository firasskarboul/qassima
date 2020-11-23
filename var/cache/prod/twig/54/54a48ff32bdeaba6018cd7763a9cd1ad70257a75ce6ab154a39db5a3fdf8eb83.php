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

/* @Admin/adminLayout.html.twig */
class __TwigTemplate_725f3e68e47b15c49d26a965036d0d69d25385ece0d90b7d4d92f9c1fbd2f216 extends \Twig\Template
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
        // line 2
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin/adminLayout.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "@Admin/adminLayout.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<!-- -->
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/dashboard-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


 



      <!-- Google font-->
     <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/css.css?family=Work+Sans:100,200,300,400,500,600,700,800,900"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/css-1.css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Font Awesome-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/themify.css"), "html", null, true);
        echo "\">

    <!-- Flag icon-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/slick.css"), "html", null, true);
        echo "\">

    <!-- slick icon-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/slick-theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/jsgrid.css"), "html", null, true);
        echo "\">

    <!-- jsgrid css-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/bootstrap.css"), "html", null, true);
        echo "\">


    <!-- Bootstrap css-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/admin.css"), "html", null, true);
        echo "\">
    
    <!-- Flag icon-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/flag-icon.css"), "html", null, true);
        echo "\">

    <!-- ico-font-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/icofont.css"), "html", null, true);
        echo "\">

    <!-- Prism css-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/prism.css"), "html", null, true);
        echo "\">

    <!-- Chartist css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/chartist.css"), "html", null, true);
        echo "\">

    <!-- vector map css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\" ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/vector-map.css"), "html", null, true);
        echo "\">




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 56
        echo "
<!-- page-wrapper Start-->
<div class=\"page-wrapper\">
 <!-- Page Header Start-->
    <div class=\"page-main-header\">
 
        <div class=\"main-header-left\">
            <div class=\"logo-wrapper\"><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index_main");
        echo "\">  
            <img class=\"blur-up lazyloaded\" style=\"width: 80px;\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
        </div>
        <div class=\"main-header-right row\">
             
            <div class=\"nav-right col\">
                <ul class=\"nav-menus\">
                    <li>
                        <form class=\"form-inline search-form\">
                            <div class=\"form-group\">
                                <input class=\"form-control-plaintext\" type=\"search\" placeholder=\"Search..\"><span class=\"d-sm-none mobile-search\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-search\"><circle cx=\"11\" cy=\"11\" r=\"8\"></circle><line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line></svg></span>
                            </div>
                        </form>
                    </li>
                    <li class=\"onhover-dropdown\"><a class=\"txt-dark\" href=\"#\">
                        <h6>EN</h6></a>
                       
                    </li>
                  
                     
                        <ul class=\"notification-dropdown onhover-show-div p-0\">
                            
                           
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-message-square right_side_toggle\">
                            <path d=\"M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z\"></path>
                                </svg>
                                <span class=\"dot\"></span></a>
                                </li>
                                
                    <li class=\"onhover-dropdown\">
                        <div class=\"media align-items-center\">
                        <img class=\"align-self-center pull-right img-50 rounded-circle blur-up lazyloaded\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Admin_avatar.png"), "html", null, true);
        echo "\" alt=\"header-user\">
                            <div class=\"dotted-animation\"><span class=\"animate-circle\"></span><span class=\"main-circle\"></span></div>
                        </div>
                        <ul class=\"profile-dropdown onhover-show-div p-20 profile-dropdown-hover\">
                             ";
        // line 101
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 102
            echo "                        <li><span class=\"pull-right\"> <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logout"), "html", null, true);
            echo "</a></span></li>
                    ";
        }
        // line 104
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 105
            echo "                        
                            <li><span class=\"pull-right\"><a href=\"";
            // line 106
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Administration panel"), "html", null, true);
            echo "</a></span></li>
                       
                    ";
        }
        // line 109
        echo "                         
                    </ul>
                    </li>
                </ul>
                <div class=\"d-lg-none mobile-toggle pull-right\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-horizontal\"><circle cx=\"12\" cy=\"12\" r=\"1\"></circle><circle cx=\"19\" cy=\"12\" r=\"1\"></circle><circle cx=\"5\" cy=\"12\" r=\"1\"></circle></svg></div>
            </div>
        </div>
    </div>
    <div class=\"page-body-wrapper\">
      
           
                ";
        // line 120
        $this->loadTemplate("@Admin/Partials/admin-menu.html.twig", "@Admin/adminLayout.html.twig", 120)->display($context);
        // line 121
        echo "           
            <div class=\"page-body\">
            ";
        // line 123
        $this->displayBlock('page_content', $context, $blocks);
        // line 126
        echo "            </div>
        
    </div>
    </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 123
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 124
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function() {
            bootbox.addLocale('";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "request", [], "any", false, false, false, 138), "locale", [], "any", false, false, false, 138), "html", null, true);
        echo "', {
                OK : '";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("OK"), "html", null, true);
        echo "',
                CANCEL : '";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cancel"), "html", null, true);
        echo "',
                CONFIRM : '";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("yes"), "html", null, true);
        echo "'
            });
            bootbox.setDefaults({ locale: '";
        // line 143
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "request", [], "any", false, false, false, 143), "locale", [], "any", false, false, false, 143), "html", null, true);
        echo "' });

            \$('.bootbox-submit-confirm').submit(function (e) {
                var currentForm = this;
                e.preventDefault();
                bootbox.confirm(\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure?"), "html", null, true);
        echo "\", function (result) {
                    if (result) {
                        currentForm.submit();
                    }
                });
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/adminLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 148,  336 => 143,  331 => 141,  327 => 140,  323 => 139,  319 => 138,  313 => 135,  308 => 134,  301 => 133,  293 => 124,  286 => 123,  273 => 126,  271 => 123,  267 => 121,  265 => 120,  252 => 109,  244 => 106,  241 => 105,  238 => 104,  230 => 102,  228 => 101,  221 => 97,  185 => 64,  181 => 63,  172 => 56,  165 => 55,  152 => 48,  146 => 45,  140 => 42,  134 => 39,  128 => 36,  122 => 33,  115 => 29,  109 => 26,  105 => 25,  99 => 22,  93 => 19,  87 => 16,  83 => 15,  79 => 14,  68 => 6,  62 => 4,  55 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"::base.html.twig\" %}
{% block stylesheets %}
    {{ parent() }}
<!-- -->
    <link href=\"{{ asset('assets/css/dashboard-style.css') }}\" rel=\"stylesheet\">


 



      <!-- Google font-->
     <link href=\"{{ asset('assets/admin-css/css.css?family=Work+Sans:100,200,300,400,500,600,700,800,900') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/admin-css/css-1.css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/admin-css/font-awesome.css') }}\" rel=\"stylesheet\">

    <!-- Font Awesome-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/admin-css/themify.css') }}\">

    <!-- Flag icon-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/admin-css/slick.css') }}\">

    <!-- slick icon-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/admin-css/slick-theme.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/admin-css/jsgrid.css') }}\">

    <!-- jsgrid css-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/admin-css/bootstrap.css') }}\">


    <!-- Bootstrap css-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/admin-css/admin.css') }}\">
    
    <!-- Flag icon-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/admin-css/flag-icon.css') }}\">

    <!-- ico-font-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/admin-css/icofont.css') }}\">

    <!-- Prism css-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/admin-css/prism.css') }}\">

    <!-- Chartist css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/admin-css/chartist.css') }}\">

    <!-- vector map css -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\" {{ asset('assets/admin-css/vector-map.css') }}\">




{% endblock stylesheets %}

{% block body %}

<!-- page-wrapper Start-->
<div class=\"page-wrapper\">
 <!-- Page Header Start-->
    <div class=\"page-main-header\">
 
        <div class=\"main-header-left\">
            <div class=\"logo-wrapper\"><a href=\"{{ path('index_main') }}\">  
            <img class=\"blur-up lazyloaded\" style=\"width: 80px;\" src=\"{{ asset('assets/images/logo.png') }}\" alt=\"\"></a></div>
        </div>
        <div class=\"main-header-right row\">
             
            <div class=\"nav-right col\">
                <ul class=\"nav-menus\">
                    <li>
                        <form class=\"form-inline search-form\">
                            <div class=\"form-group\">
                                <input class=\"form-control-plaintext\" type=\"search\" placeholder=\"Search..\"><span class=\"d-sm-none mobile-search\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-search\"><circle cx=\"11\" cy=\"11\" r=\"8\"></circle><line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line></svg></span>
                            </div>
                        </form>
                    </li>
                    <li class=\"onhover-dropdown\"><a class=\"txt-dark\" href=\"#\">
                        <h6>EN</h6></a>
                       
                    </li>
                  
                     
                        <ul class=\"notification-dropdown onhover-show-div p-0\">
                            
                           
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-message-square right_side_toggle\">
                            <path d=\"M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z\"></path>
                                </svg>
                                <span class=\"dot\"></span></a>
                                </li>
                                
                    <li class=\"onhover-dropdown\">
                        <div class=\"media align-items-center\">
                        <img class=\"align-self-center pull-right img-50 rounded-circle blur-up lazyloaded\" src=\"{{ asset('assets/images/Admin_avatar.png') }}\" alt=\"header-user\">
                            <div class=\"dotted-animation\"><span class=\"animate-circle\"></span><span class=\"main-circle\"></span></div>
                        </div>
                        <ul class=\"profile-dropdown onhover-show-div p-20 profile-dropdown-hover\">
                             {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                        <li><span class=\"pull-right\"> <a href=\"{{ path('fos_user_security_logout') }}\">{{ 'Logout'|trans }}</a></span></li>
                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') %}
                        
                            <li><span class=\"pull-right\"><a href=\"{{ path('admin_index') }}\">{{ 'Administration panel'|trans }}</a></span></li>
                       
                    {% endif %}
                         
                    </ul>
                    </li>
                </ul>
                <div class=\"d-lg-none mobile-toggle pull-right\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-horizontal\"><circle cx=\"12\" cy=\"12\" r=\"1\"></circle><circle cx=\"19\" cy=\"12\" r=\"1\"></circle><circle cx=\"5\" cy=\"12\" r=\"1\"></circle></svg></div>
            </div>
        </div>
    </div>
    <div class=\"page-body-wrapper\">
      
           
                {% include \"@Admin/Partials/admin-menu.html.twig\" %}
           
            <div class=\"page-body\">
            {% block page_content %}

            {% endblock page_content %}
            </div>
        
    </div>
    </div>

</div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/bootbox.min.js') }}\"></script>
    <script>
        \$(function() {
            bootbox.addLocale('{{ app.request.locale }}', {
                OK : '{{ 'OK'|trans }}',
                CANCEL : '{{ 'cancel'|trans }}',
                CONFIRM : '{{ 'yes'|trans }}'
            });
            bootbox.setDefaults({ locale: '{{ app.request.locale }}' });

            \$('.bootbox-submit-confirm').submit(function (e) {
                var currentForm = this;
                e.preventDefault();
                bootbox.confirm(\"{{ 'Are you sure?'|trans }}\", function (result) {
                    if (result) {
                        currentForm.submit();
                    }
                });
            });
        });
    </script>
{% endblock %}
", "@Admin/adminLayout.html.twig", "C:\\laragon\\www\\qassiima\\src\\Eshop\\AdminBundle\\Resources\\views\\adminLayout.html.twig");
    }
}
