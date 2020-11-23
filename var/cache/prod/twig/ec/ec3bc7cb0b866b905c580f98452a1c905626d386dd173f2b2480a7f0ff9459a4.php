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

/* @Shop/Partials/navbarAuthBlock.html.twig */
class __TwigTemplate_49b7e6766d77da1a7901b36db312b049a205a629c69614e589d80f8b783bee33 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Shop/Partials/navbarAuthBlock.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 4
            echo "    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 5
                echo "        <li class=\"dropdown\">
            <a   href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
               aria-expanded=\"true\">
                ";
                // line 8
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.navbar.admin", [], "ShopBundle"), "html", null, true);
                echo " <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                <li><a style=\"color: #333;\"  href=\"";
                // line 11
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.navbar.adminpanel", [], "ShopBundle"), "html", null, true);
                echo "</a></li>
                <li><a style=\"color: #333;\" href=\"";
                // line 12
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.navbar.logout", [], "ShopBundle"), "html", null, true);
                echo "</a></li>
            </ul>
        </li>
    ";
            } else {
                // line 16
                echo "        <li class=\"dropdown\">
            <a  style=\"color: #333;\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
               aria-expanded=\"true\">
                ";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.navbar.loggedas", [], "ShopBundle"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "username", [], "any", false, false, false, 19), "html", null, true);
                echo " <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                <li><a style=\"color: #333;\" href=\"";
                // line 22
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.navbar.logout", [], "ShopBundle"), "html", null, true);
                echo "</a></li>
            </ul>
        </li>
    ";
            }
        } else {
            // line 27
            echo "    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
           aria-expanded=\"true\">
            ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.navbar.login", [], "ShopBundle"), "html", null, true);
            echo " <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu\">
            <li><a style=\"color: #333;\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.navbar.signin", [], "ShopBundle"), "html", null, true);
            echo "</a></li>
            <li><a style=\"color: #333;\" href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("layout.navbar.signup", [], "ShopBundle"), "html", null, true);
            echo "</a></li>
        </ul>
    </li>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Shop/Partials/navbarAuthBlock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  108 => 33,  102 => 30,  97 => 27,  87 => 22,  79 => 19,  74 => 16,  65 => 12,  59 => 11,  53 => 8,  48 => 5,  45 => 4,  43 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'ShopBundle' %}

{% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
    {% if is_granted('ROLE_ADMIN') %}
        <li class=\"dropdown\">
            <a   href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
               aria-expanded=\"true\">
                {{ 'layout.navbar.admin'|trans }} <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                <li><a style=\"color: #333;\"  href=\"{{ path('admin_index') }}\">{{ 'layout.navbar.adminpanel'|trans }}</a></li>
                <li><a style=\"color: #333;\" href=\"{{ path('fos_user_security_logout') }}\">{{ 'layout.navbar.logout'|trans }}</a></li>
            </ul>
        </li>
    {% else %}
        <li class=\"dropdown\">
            <a  style=\"color: #333;\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
               aria-expanded=\"true\">
                {{ 'layout.navbar.loggedas'|trans }} {{ app.user.username }} <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                <li><a style=\"color: #333;\" href=\"{{ path('fos_user_security_logout') }}\">{{ 'layout.navbar.logout'|trans }}</a></li>
            </ul>
        </li>
    {% endif %}
{% else %}
    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
           aria-expanded=\"true\">
            {{ 'layout.navbar.login'|trans }} <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu\">
            <li><a style=\"color: #333;\" href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.navbar.signin'|trans }}</a></li>
            <li><a style=\"color: #333;\" href=\"{{ path('fos_user_registration_register') }}\">{{ 'layout.navbar.signup'|trans }}</a></li>
        </ul>
    </li>
{% endif %}
", "@Shop/Partials/navbarAuthBlock.html.twig", "C:\\laragon\\www\\qassiima\\src\\Eshop\\ShopBundle\\Resources\\views\\Partials\\navbarAuthBlock.html.twig");
    }
}
