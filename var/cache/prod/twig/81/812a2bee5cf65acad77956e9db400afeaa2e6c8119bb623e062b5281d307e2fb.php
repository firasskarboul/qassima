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

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_33b33ed584f618fe9c723a6e519ab09243a9de5c18ada59da4c1ba8db94390d0 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent = $this->loadTemplate("@Shop/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create a new account", [], "FOSUserBundle"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 11
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "messageKey", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "messageData", [], "any", false, false, false, 12), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 14
        echo "

 <div class=\"col-md-12\"> 

      <div class=\"sign-in-page\">
\t\t\t<div class=\"row\">
 
";
        // line 58
        echo "

  <div class=\"col-md-6 col-sm-6 sign-in\">
\t<h4 class=\"\">Sign in</h4>
\t<p class=\"\">Hello, Welcome to your account.</p>
\t<div class=\"social-sign-in outer-top-xs\">
\t\t<a href=\"#\" class=\"facebook-sign-in\"><i class=\"fa fa-facebook\"></i> Sign In with Facebook</a>
\t\t<a href=\"#\" class=\"twitter-sign-in\"><i class=\"fa fa-twitter\"></i> Sign In with Twitter</a>
\t</div>
    <form class=\"register-form outer-top-xs\" action=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                                     <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "\"/>
 
\t\t<div class=\"form-group\">
\t\t    <label class=\"info-title\" for=\"exampleInputEmail1\">Username <span>*</span></label>
\t\t    <input type=\"text\" class=\"form-control unicase-form-control text-input\"  id=\"exampleInputEmail1\" name=\"_username\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "\"  >
\t\t</div>
\t  \t<div class=\"form-group\">
\t\t    <label class=\"info-title\" for=\"exampleInputPassword1\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "<span>*</span></label>
\t\t    <input type=\"password\"  name=\"_password\" class=\"form-control unicase-form-control text-input\" id=\"exampleInputPassword1\">
\t\t</div>
\t\t<div class=\"radio outer-xs\">
\t\t  \t<label>   
\t\t    \t<input type=\"checkbox\" name=\"_remember_me\" id=\"customControlAutosizing\" value=\"on\">";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "
\t\t  \t</label>
\t\t  \t<a href=\"#\" class=\"forgot-password pull-right\">Forgot your Password?</a>
\t\t</div>
   
\t  \t<button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn-upper btn btn-primary checkout-page-button\">";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "</button>
\t</form>\t\t\t\t\t
</div>



 </div><!-- /.row -->
\t\t</div>
        
        </div>









";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 85,  131 => 80,  123 => 75,  117 => 72,  110 => 68,  106 => 67,  95 => 58,  86 => 14,  80 => 12,  77 => 11,  70 => 10,  60 => 6,  53 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@Shop/layout.html.twig\" %}
{% trans_default_domain 'FOSUserBundle' %}
 

{% block title %}
    {{ 'Create a new account'|trans }}
{% endblock title %}


{% block page_content %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}


 <div class=\"col-md-12\"> 

      <div class=\"sign-in-page\">
\t\t\t<div class=\"row\">
 
{# 
 
<form class=\"form-horizontal auth-form\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                                     <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
                                        <div class=\"form-group\">
                                         
            <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" name=\"_username\" value=\"{{ last_username }}\"
                   required=\"required\" placeholder=\"Username\" />
                                           
                                        </div>
                                        <div class=\"form-group\">
                                            <input required=\"required\" name=\"_password\" id=\"password\" type=\"password\" class=\"form-control\" placeholder=\"{{ 'security.login.password'|trans }}\">
                                        </div>
            
                                        <div class=\"form-terms\">
                                            <div class=\"custom-control custom-checkbox mr-sm-2\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" name=\"_remember_me\" value=\"on\" id=\"customControlAutosizing\">
                                                <label class=\"custom-control-label\" for=\"customControlAutosizing\">{{ 'security.login.remember_me'|trans }}</label>
                                                <a href=\"#\" class=\"btn btn-default forgot-pass\">lost your password</a>
                                            </div>
                                   
                                        </div>
                                        <div class=\"form-button\">
                                        <input class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\"
               value=\"{{ 'security.login.submit'|trans }}\"/>
                                             
                                        </div>
                                        <div class=\"form-footer\">
                                            <span>Or Login up with social platforms</span>
                                            <ul class=\"social\">
                                                <li><a class=\"icon-facebook\" href=\"\"></a></li>
                                                <li><a class=\"icon-twitter\" href=\"\"></a></li>
                                                <li><a class=\"icon-instagram\" href=\"\"></a></li>
                                                <li><a class=\"icon-pinterest\" href=\"\"></a></li>
                                            </ul>
                                        </div>
                                    </form> #}


  <div class=\"col-md-6 col-sm-6 sign-in\">
\t<h4 class=\"\">Sign in</h4>
\t<p class=\"\">Hello, Welcome to your account.</p>
\t<div class=\"social-sign-in outer-top-xs\">
\t\t<a href=\"#\" class=\"facebook-sign-in\"><i class=\"fa fa-facebook\"></i> Sign In with Facebook</a>
\t\t<a href=\"#\" class=\"twitter-sign-in\"><i class=\"fa fa-twitter\"></i> Sign In with Twitter</a>
\t</div>
    <form class=\"register-form outer-top-xs\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                                     <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>
 
\t\t<div class=\"form-group\">
\t\t    <label class=\"info-title\" for=\"exampleInputEmail1\">Username <span>*</span></label>
\t\t    <input type=\"text\" class=\"form-control unicase-form-control text-input\"  id=\"exampleInputEmail1\" name=\"_username\" value=\"{{ last_username }}\"  >
\t\t</div>
\t  \t<div class=\"form-group\">
\t\t    <label class=\"info-title\" for=\"exampleInputPassword1\">{{ 'security.login.password'|trans }}<span>*</span></label>
\t\t    <input type=\"password\"  name=\"_password\" class=\"form-control unicase-form-control text-input\" id=\"exampleInputPassword1\">
\t\t</div>
\t\t<div class=\"radio outer-xs\">
\t\t  \t<label>   
\t\t    \t<input type=\"checkbox\" name=\"_remember_me\" id=\"customControlAutosizing\" value=\"on\">{{ 'security.login.remember_me'|trans }}
\t\t  \t</label>
\t\t  \t<a href=\"#\" class=\"forgot-password pull-right\">Forgot your Password?</a>
\t\t</div>
   
\t  \t<button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn-upper btn btn-primary checkout-page-button\">{{ 'security.login.submit'|trans }}</button>
\t</form>\t\t\t\t\t
</div>



 </div><!-- /.row -->
\t\t</div>
        
        </div>









{% endblock page_content %}
", "@FOSUser/Security/login.html.twig", "D:\\laragon\\www\\qassima\\src\\Eshop\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
