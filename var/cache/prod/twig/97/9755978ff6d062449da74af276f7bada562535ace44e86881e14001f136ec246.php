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

/* @Admin/Partials/admin-menu.html.twig */
class __TwigTemplate_f7d17918245d3aeee5ef12110707d8df6625690b7ab2f585b4b820168a19b88f extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Admin/Partials/admin-menu.html.twig"));

        // line 1
        $context["route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "get", [0 => "_route"], "method", false, false, false, 1);
        // line 2
        echo "

<div class=\"page-sidebar\">
            <div class=\"sidebar custom-scrollbar\">
                <div class=\"sidebar-user text-center\">
                    <div><img class=\"img-60 rounded-circle lazyloaded blur-up\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Admin_avatar.png"), "html", null, true);
        echo "\" alt=\"#\">
                    </div>
                    <h6 class=\"mt-3 f-14\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "username", [], "any", false, false, false, 9), "html", null, true);
        echo "</h6>
                    <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "roles", [], "any", false, false, false, 10), 0, [], "array", false, false, false, 10), "html", null, true);
        echo "</p>
                </div>
                <ul class=\"sidebar-menu\">
                 
                    <li><a class=\"sidebar-header\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        echo "\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-dollar-sign\"><line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"></line>
                        <path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"></path></svg><span>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders"), "html", null, true);
        echo "</span><i class=\"fa fa-angle-right pull-right\"></i></a>
                        
                    </li>
                    <li><a class=\"sidebar-header\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product");
        echo "\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-box\">
                            <path d=\"M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z\"></path><polyline points=\"2.32 6.16 12 11 21.68 6.16\"></polyline><line x1=\"12\" y1=\"22.76\" x2=\"12\" y2=\"11\"></line></svg> 
                                <span>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deals"), "html", null, true);
        echo "</span><i class=\"fa fa-angle-right pull-right\"></i>
                        </a>
              
                    </li>
                    
                    <li>
                        <a class=\"sidebar-header\" href=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-tag\"><path d=\"M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z\"></path><line x1=\"7\" y1=\"7\" x2=\"7\" y2=\"7\"></line></svg>
                            <span>Coupons</span><i class=\"fa fa-angle-right pull-right\">

                            </i>
                        </a>
                         
                    </li>
                    ";
        // line 36
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 37
            echo "                    <li><a class=\"sidebar-header\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_slide");
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-clipboard\"><path d=\"M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2\"></path><rect x=\"8\" y=\"2\" width=\"8\" height=\"4\" rx=\"1\" ry=\"1\"></rect></svg>
                    <span>Slides</span><i class=\"fa fa-angle-right pull-right\"></i></a>
                        
                    </li>
                       <li><a class=\"sidebar-header\" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_Ads");
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-clipboard\"><path d=\"M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2\"></path><rect x=\"8\" y=\"2\" width=\"8\" height=\"4\" rx=\"1\" ry=\"1\"></rect></svg>
                    <span>Ads</span><i class=\"fa fa-angle-right pull-right\"></i></a>
                        
                    </li>
                    ";
        }
        // line 46
        echo "                    <li>
                        <a class=\"sidebar-header\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category");
        echo "\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-camera\">
                                <path d=\"M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z\"></path>
                                    <circle cx=\"12\" cy=\"13\" r=\"4\"></circle>
                            </svg>
                                    <span>";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Categories"), "html", null, true);
        echo "</span>
                        </a>
                    </li>

                    <li><a class=\"sidebar-header\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-align-left\"><line x1=\"17\" y1=\"10\" x2=\"3\" y2=\"10\"></line><line x1=\"21\" y1=\"6\" x2=\"3\" y2=\"6\"></line><line x1=\"21\" y1=\"14\" x2=\"3\" y2=\"14\"></line><line x1=\"17\" y1=\"18\" x2=\"3\" y2=\"18\"></line></svg><span>Menus</span><i class=\"fa fa-angle-right pull-right\"></i></a>
                       
                       
                    </li>
                     ";
        // line 60
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 61
            echo "                    <li><a class=\"sidebar-header\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_list");
            echo "\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-user-plus\"><path d=\"M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"></path><circle cx=\"8.5\" cy=\"7\" r=\"4\"></circle><line x1=\"20\" y1=\"8\" x2=\"20\" y2=\"14\"></line><line x1=\"23\" y1=\"11\" x2=\"17\" y2=\"11\"></line></svg>
                        <span>Users</span><i class=\"fa fa-angle-right pull-right\"></i></a>
                        
                    </li>
                     ";
        }
        // line 67
        echo "                      ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 68
            echo "                    <li><a class=\"sidebar-header\" href=\"\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-users\"><path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"></path><circle cx=\"9\" cy=\"7\" r=\"4\"></circle><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"></path><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"></path></svg><span>Vendors</span><i class=\"fa fa-angle-right pull-right\"></i></a>
                        <ul class=\"sidebar-submenu\">
                            <li><a href=\"list-vendor.html\"><i class=\"fa fa-circle\"></i>Vendor List</a></li>
                            <li><a href=\"create-vendors.html\"><i class=\"fa fa-circle\"></i>Create Vendor</a></li>
                        </ul>
                    </li>
                     ";
        }
        // line 75
        echo "                       ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 76
            echo "                    <li><a class=\"sidebar-header\" href=\"reports.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-bar-chart\"><line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"10\"></line><line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"4\"></line><line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"16\"></line></svg><span>Reports</span></a></li>
                    <li>
                        <a class=\"sidebar-header\" href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_settings");
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-settings\"><circle cx=\"12\" cy=\"12\" r=\"3\"></circle><path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"></path></svg>
                        <span>";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Site settings"), "html", null, true);
            echo "</span><i class=\"fa fa-angle-right pull-right\"></i>
                        </a>
                        
                    </li>
 ";
        }
        // line 84
        echo "                </ul>
            </div>
        </div>


<!--






 
    <li ";
        // line 97
        echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 97, $this->source); })()) == "admin_orders")) ? ("class=\"active\"") : (""));
        echo ">
        <a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders"), "html", null, true);
        echo "</a>
    </li>
    <li ";
        // line 100
        echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 100, $this->source); })()) == "admin_user_list")) ? ("class=\"active\"") : (""));
        echo ">
        <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("User list"), "html", null, true);
        echo "</a>
    </li>
 

 
    <li ";
        // line 106
        echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 106, $this->source); })()) == "admin_product")) ? ("class=\"active\"") : (""));
        echo ">
        <a href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products"), "html", null, true);
        echo "</a>
    </li>
    <li ";
        // line 109
        echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 109, $this->source); })()) == "admin_category")) ? ("class=\"active\"") : (""));
        echo ">
        <a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Categories"), "html", null, true);
        echo "</a>
    </li>
    <li ";
        // line 112
        echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 112, $this->source); })()) == "admin_manufacturer")) ? ("class=\"active\"") : (""));
        echo ">
        <a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_manufacturer");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manufacturers"), "html", null, true);
        echo "</a>
    </li>
    <li ";
        // line 115
        echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 115, $this->source); })()) == "admin_measure")) ? ("class=\"active\"") : (""));
        echo ">
        <a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_measure");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Measures"), "html", null, true);
        echo "</a>
    </li>
 

 
    <li ";
        // line 121
        echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 121, $this->source); })()) == "admin_news")) ? ("class=\"active\"") : (""));
        echo ">
        <a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_news");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("News"), "html", null, true);
        echo "</a>
    </li>
    <li ";
        // line 124
        echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 124, $this->source); })()) == "admin_slide")) ? ("class=\"active\"") : (""));
        echo ">
        <a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_slide");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Slides"), "html", null, true);
        echo "</a>
    <li ";
        // line 126
        echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 126, $this->source); })()) == "admin_staticpage")) ? ("class=\"active\"") : (""));
        echo ">
        <a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_staticpage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Static pages"), "html", null, true);
        echo "</a>
    </li>
    <li ";
        // line 129
        echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 129, $this->source); })()) == "admin_featured")) ? ("class=\"active\"") : (""));
        echo ">
        <a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_featured");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Featured products"), "html", null, true);
        echo "</a>
    </li>   

    <li ";
        // line 133
        echo ((((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 133, $this->source); })()) == "admin_settings")) ? ("class=\"active\"") : (""));
        echo ">
        <a href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_settings");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Site settings"), "html", null, true);
        echo "</a>
    </li>
 
 
   -->";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/Partials/admin-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 134,  313 => 133,  305 => 130,  301 => 129,  294 => 127,  290 => 126,  284 => 125,  280 => 124,  273 => 122,  269 => 121,  259 => 116,  255 => 115,  248 => 113,  244 => 112,  237 => 110,  233 => 109,  226 => 107,  222 => 106,  212 => 101,  208 => 100,  201 => 98,  197 => 97,  182 => 84,  174 => 79,  170 => 78,  166 => 76,  163 => 75,  154 => 68,  151 => 67,  141 => 61,  139 => 60,  128 => 52,  120 => 47,  117 => 46,  109 => 41,  101 => 37,  99 => 36,  82 => 22,  76 => 19,  70 => 16,  65 => 14,  58 => 10,  54 => 9,  49 => 7,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set route = app.request.get('_route') %}


<div class=\"page-sidebar\">
            <div class=\"sidebar custom-scrollbar\">
                <div class=\"sidebar-user text-center\">
                    <div><img class=\"img-60 rounded-circle lazyloaded blur-up\" src=\"{{ asset('assets/images/Admin_avatar.png') }}\" alt=\"#\">
                    </div>
                    <h6 class=\"mt-3 f-14\">{{ app.user.username }}</h6>
                    <p>{{app.user.roles[0]}}</p>
                </div>
                <ul class=\"sidebar-menu\">
                 
                    <li><a class=\"sidebar-header\" href=\"{{ path('admin_orders') }}\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-dollar-sign\"><line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"23\"></line>
                        <path d=\"M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6\"></path></svg><span>{{ 'Orders'|trans }}</span><i class=\"fa fa-angle-right pull-right\"></i></a>
                        
                    </li>
                    <li><a class=\"sidebar-header\" href=\"{{ path('admin_product') }}\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-box\">
                            <path d=\"M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z\"></path><polyline points=\"2.32 6.16 12 11 21.68 6.16\"></polyline><line x1=\"12\" y1=\"22.76\" x2=\"12\" y2=\"11\"></line></svg> 
                                <span>{{ 'Deals'|trans }}</span><i class=\"fa fa-angle-right pull-right\"></i>
                        </a>
              
                    </li>
                    
                    <li>
                        <a class=\"sidebar-header\" href=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-tag\"><path d=\"M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z\"></path><line x1=\"7\" y1=\"7\" x2=\"7\" y2=\"7\"></line></svg>
                            <span>Coupons</span><i class=\"fa fa-angle-right pull-right\">

                            </i>
                        </a>
                         
                    </li>
                    {% if is_granted('ROLE_ADMIN') %}
                    <li><a class=\"sidebar-header\" href=\"{{ path('admin_slide') }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-clipboard\"><path d=\"M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2\"></path><rect x=\"8\" y=\"2\" width=\"8\" height=\"4\" rx=\"1\" ry=\"1\"></rect></svg>
                    <span>Slides</span><i class=\"fa fa-angle-right pull-right\"></i></a>
                        
                    </li>
                       <li><a class=\"sidebar-header\" href=\"{{ path('admin_Ads') }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-clipboard\"><path d=\"M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2\"></path><rect x=\"8\" y=\"2\" width=\"8\" height=\"4\" rx=\"1\" ry=\"1\"></rect></svg>
                    <span>Ads</span><i class=\"fa fa-angle-right pull-right\"></i></a>
                        
                    </li>
                    {% endif %}
                    <li>
                        <a class=\"sidebar-header\" href=\"{{ path('admin_category') }}\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-camera\">
                                <path d=\"M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z\"></path>
                                    <circle cx=\"12\" cy=\"13\" r=\"4\"></circle>
                            </svg>
                                    <span>{{ 'Categories'|trans }}</span>
                        </a>
                    </li>

                    <li><a class=\"sidebar-header\" href=\"#\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-align-left\"><line x1=\"17\" y1=\"10\" x2=\"3\" y2=\"10\"></line><line x1=\"21\" y1=\"6\" x2=\"3\" y2=\"6\"></line><line x1=\"21\" y1=\"14\" x2=\"3\" y2=\"14\"></line><line x1=\"17\" y1=\"18\" x2=\"3\" y2=\"18\"></line></svg><span>Menus</span><i class=\"fa fa-angle-right pull-right\"></i></a>
                       
                       
                    </li>
                     {% if is_granted('ROLE_ADMIN') %}
                    <li><a class=\"sidebar-header\" href=\"{{ path('admin_user_list') }}\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-user-plus\"><path d=\"M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"></path><circle cx=\"8.5\" cy=\"7\" r=\"4\"></circle><line x1=\"20\" y1=\"8\" x2=\"20\" y2=\"14\"></line><line x1=\"23\" y1=\"11\" x2=\"17\" y2=\"11\"></line></svg>
                        <span>Users</span><i class=\"fa fa-angle-right pull-right\"></i></a>
                        
                    </li>
                     {% endif %}
                      {% if is_granted('ROLE_ADMIN') %}
                    <li><a class=\"sidebar-header\" href=\"\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-users\"><path d=\"M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2\"></path><circle cx=\"9\" cy=\"7\" r=\"4\"></circle><path d=\"M23 21v-2a4 4 0 0 0-3-3.87\"></path><path d=\"M16 3.13a4 4 0 0 1 0 7.75\"></path></svg><span>Vendors</span><i class=\"fa fa-angle-right pull-right\"></i></a>
                        <ul class=\"sidebar-submenu\">
                            <li><a href=\"list-vendor.html\"><i class=\"fa fa-circle\"></i>Vendor List</a></li>
                            <li><a href=\"create-vendors.html\"><i class=\"fa fa-circle\"></i>Create Vendor</a></li>
                        </ul>
                    </li>
                     {% endif %}
                       {% if is_granted('ROLE_ADMIN') %}
                    <li><a class=\"sidebar-header\" href=\"reports.html\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-bar-chart\"><line x1=\"12\" y1=\"20\" x2=\"12\" y2=\"10\"></line><line x1=\"18\" y1=\"20\" x2=\"18\" y2=\"4\"></line><line x1=\"6\" y1=\"20\" x2=\"6\" y2=\"16\"></line></svg><span>Reports</span></a></li>
                    <li>
                        <a class=\"sidebar-header\" href=\"{{ path('admin_settings') }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-settings\"><circle cx=\"12\" cy=\"12\" r=\"3\"></circle><path d=\"M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z\"></path></svg>
                        <span>{{ 'Site settings'|trans }}</span><i class=\"fa fa-angle-right pull-right\"></i>
                        </a>
                        
                    </li>
 {% endif %}
                </ul>
            </div>
        </div>


<!--






 
    <li {{ route == 'admin_orders' ? 'class=\"active\"' }}>
        <a href=\"{{ path('admin_orders') }}\">{{ 'Orders'|trans }}</a>
    </li>
    <li {{ route == 'admin_user_list' ? 'class=\"active\"' }}>
        <a href=\"{{ path('admin_user_list') }}\">{{ 'User list'|trans }}</a>
    </li>
 

 
    <li {{ route == 'admin_product' ? 'class=\"active\"' }}>
        <a href=\"{{ path('admin_product') }}\">{{ 'Products'|trans }}</a>
    </li>
    <li {{ route == 'admin_category' ? 'class=\"active\"' }}>
        <a href=\"{{ path('admin_category') }}\">{{ 'Categories'|trans }}</a>
    </li>
    <li {{ route == 'admin_manufacturer' ? 'class=\"active\"' }}>
        <a href=\"{{ path('admin_manufacturer') }}\">{{ 'Manufacturers'|trans }}</a>
    </li>
    <li {{ route == 'admin_measure' ? 'class=\"active\"' }}>
        <a href=\"{{ path('admin_measure') }}\">{{ 'Measures'|trans }}</a>
    </li>
 

 
    <li {{ route == 'admin_news' ? 'class=\"active\"' }}>
        <a href=\"{{ path('admin_news') }}\">{{ 'News'|trans }}</a>
    </li>
    <li {{ route == 'admin_slide' ? 'class=\"active\"' }}>
        <a href=\"{{ path('admin_slide') }}\">{{ 'Slides'|trans }}</a>
    <li {{ route == 'admin_staticpage' ? 'class=\"active\"' }}>
        <a href=\"{{ path('admin_staticpage') }}\">{{ 'Static pages'|trans }}</a>
    </li>
    <li {{ route == 'admin_featured' ? 'class=\"active\"' }}>
        <a href=\"{{ path('admin_featured') }}\">{{ 'Featured products'|trans }}</a>
    </li>   

    <li {{ route == 'admin_settings' ? 'class=\"active\"' }}>
        <a href=\"{{ path('admin_settings') }}\">{{ 'Site settings'|trans }}</a>
    </li>
 
 
   -->", "@Admin/Partials/admin-menu.html.twig", "D:\\laragon\\www\\qassima\\src\\Eshop\\AdminBundle\\Resources\\views\\Partials\\admin-menu.html.twig");
    }
}
