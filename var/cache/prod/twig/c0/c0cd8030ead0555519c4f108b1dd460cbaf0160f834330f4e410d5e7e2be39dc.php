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

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_caff8555f5ffe3ae3a5751f3a1159197e3d65c65d4f5271912ac2db21f4b0063 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), [0 => "bootstrap_3_horizontal_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@Shop/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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

    // line 9
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 10
        echo "
<div class=\"col-md-12\"> 

      <div class=\"sign-in-page\">
\t\t\t<div class=\"row\">
 <div class=\"col-md-6 col-sm-6 create-new-account\">
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start', ["method" => "post", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register"), "attr" => ["class" => "register-form outer-top-xs"]]);
        echo "

    <div class=\"form-group\">
        <div class=\"col-xs-offset-2 col-xs-10\">
            <h2>";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create a new account", [], "FOSUserBundle"), "html", null, true);
        echo "</h2>
        </div>
    </div>
   <div class=\"my-custom-class-for-errors\">
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'errors');
        echo "
                            </div>
                          ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "_token", [], "any", false, false, false, 26), 'row');
        echo "
    <div class=\"form-group\">
\t    \t<label class=\"info-title\" for=\"exampleInputEmail2\">Email Address <span>*</span></label>
\t    \t<input type=\"email\" Name=\"fos_user_registration_form[email]\" class=\"form-control unicase-form-control text-input\" id=\"exampleInputEmail2\">
\t  \t</div>
           <div class=\"form-group\">
\t    \t<label class=\"info-title\" for=\"exampleInputEmail2\">Firstname  <span>*</span></label>
\t    \t<input type=\"text\" Name=\"fos_user_registration_form[firstname]\" class=\"form-control unicase-form-control text-input\" id=\"exampleInputEmail2\">
\t  \t</div>
           <div class=\"form-group\">
\t    \t<label class=\"info-title\" for=\"exampleInputEmail2\">Lastname <span>*</span></label>
\t    \t<input type=\"text\" Name=\"fos_user_registration_form[lastname]\" class=\"form-control unicase-form-control text-input\" id=\"exampleInputEmail2\">
\t  \t</div>
        <div class=\"form-group\">
\t\t    <label class=\"info-title\" for=\"exampleInputEmail1\">Name <span>*</span></label>
\t\t    <input type=\"text\" Name=\"fos_user_registration_form[username]\" class=\"form-control unicase-form-control text-input\" id=\"exampleInputEmail1\">
\t\t</div>
        <div class=\"form-group\">
\t\t    <label class=\"info-title\" for=\"exampleInputEmail1\">Phone Number <span>*</span></label>
\t\t    <input type=\"text\" Name=\"fos_user_registration_form[phone]\" class=\"form-control unicase-form-control text-input\" id=\"exampleInputEmail1\">
\t\t</div>
        <div class=\"form-group\">
\t\t    <label class=\"info-title\" for=\"exampleInputEmail1\">Password <span>*</span></label>
\t\t    <input type=\"password\" Name=\"fos_user_registration_form[plainPassword][first]\" class=\"form-control unicase-form-control text-input\" id=\"exampleInputEmail1\">
\t\t</div>
         <div class=\"form-group\">
\t\t    <label class=\"info-title\" for=\"exampleInputEmail1\">Confirm Password <span>*</span></label>
\t\t    <input type=\"password\" Name=\"fos_user_registration_form[plainPassword][second]\" class=\"form-control unicase-form-control text-input\" id=\"exampleInputEmail1\">
\t\t</div>
         <div class=\"form-group\">
\t\t    <label class=\"info-title\" for=\"exampleInputEmail1\">Address<span>*</span></label>
\t\t    <input type=\"text\" Name=\"fos_user_registration_form[address]\" class=\"form-control unicase-form-control text-input\" id=\"exampleInputEmail1\">
\t\t</div>

\t   

    <div class=\"form-group\">
        <div class=\"col-xs-offset-2 col-xs-10\">
            <button type=\"submit\" class=\"btn-upper btn btn-primary checkout-page-button\">";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign Up", [], "FOSUserBundle"), "html", null, true);
        echo "</button>
        </div>
    </div>

    ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "

</div>\t
<!-- create a new account -->\t
    </div><!-- /.row -->
\t\t</div>
        
        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 68,  148 => 64,  107 => 26,  102 => 24,  95 => 20,  88 => 16,  80 => 10,  73 => 9,  63 => 6,  56 => 5,  48 => 1,  46 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@Shop/layout.html.twig\" %}
{% trans_default_domain 'FOSUserBundle' %}
{% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}

{% block title %}
    {{ 'Create a new account'|trans }}
{% endblock title %}

{% block page_content %}

<div class=\"col-md-12\"> 

      <div class=\"sign-in-page\">
\t\t\t<div class=\"row\">
 <div class=\"col-md-6 col-sm-6 create-new-account\">
    {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'register-form outer-top-xs'}}) }}

    <div class=\"form-group\">
        <div class=\"col-xs-offset-2 col-xs-10\">
            <h2>{{ 'Create a new account'|trans }}</h2>
        </div>
    </div>
   <div class=\"my-custom-class-for-errors\">
                                {{ form_errors(form) }}
                            </div>
                          {{ form_row(form._token) }}
    <div class=\"form-group\">
\t    \t<label class=\"info-title\" for=\"exampleInputEmail2\">Email Address <span>*</span></label>
\t    \t<input type=\"email\" Name=\"fos_user_registration_form[email]\" class=\"form-control unicase-form-control text-input\" id=\"exampleInputEmail2\">
\t  \t</div>
           <div class=\"form-group\">
\t    \t<label class=\"info-title\" for=\"exampleInputEmail2\">Firstname  <span>*</span></label>
\t    \t<input type=\"text\" Name=\"fos_user_registration_form[firstname]\" class=\"form-control unicase-form-control text-input\" id=\"exampleInputEmail2\">
\t  \t</div>
           <div class=\"form-group\">
\t    \t<label class=\"info-title\" for=\"exampleInputEmail2\">Lastname <span>*</span></label>
\t    \t<input type=\"text\" Name=\"fos_user_registration_form[lastname]\" class=\"form-control unicase-form-control text-input\" id=\"exampleInputEmail2\">
\t  \t</div>
        <div class=\"form-group\">
\t\t    <label class=\"info-title\" for=\"exampleInputEmail1\">Name <span>*</span></label>
\t\t    <input type=\"text\" Name=\"fos_user_registration_form[username]\" class=\"form-control unicase-form-control text-input\" id=\"exampleInputEmail1\">
\t\t</div>
        <div class=\"form-group\">
\t\t    <label class=\"info-title\" for=\"exampleInputEmail1\">Phone Number <span>*</span></label>
\t\t    <input type=\"text\" Name=\"fos_user_registration_form[phone]\" class=\"form-control unicase-form-control text-input\" id=\"exampleInputEmail1\">
\t\t</div>
        <div class=\"form-group\">
\t\t    <label class=\"info-title\" for=\"exampleInputEmail1\">Password <span>*</span></label>
\t\t    <input type=\"password\" Name=\"fos_user_registration_form[plainPassword][first]\" class=\"form-control unicase-form-control text-input\" id=\"exampleInputEmail1\">
\t\t</div>
         <div class=\"form-group\">
\t\t    <label class=\"info-title\" for=\"exampleInputEmail1\">Confirm Password <span>*</span></label>
\t\t    <input type=\"password\" Name=\"fos_user_registration_form[plainPassword][second]\" class=\"form-control unicase-form-control text-input\" id=\"exampleInputEmail1\">
\t\t</div>
         <div class=\"form-group\">
\t\t    <label class=\"info-title\" for=\"exampleInputEmail1\">Address<span>*</span></label>
\t\t    <input type=\"text\" Name=\"fos_user_registration_form[address]\" class=\"form-control unicase-form-control text-input\" id=\"exampleInputEmail1\">
\t\t</div>

\t   

    <div class=\"form-group\">
        <div class=\"col-xs-offset-2 col-xs-10\">
            <button type=\"submit\" class=\"btn-upper btn btn-primary checkout-page-button\">{{ 'Sign Up'|trans }}</button>
        </div>
    </div>

    {{ form_end(form, {'render_rest': false}) }}

</div>\t
<!-- create a new account -->\t
    </div><!-- /.row -->
\t\t</div>
        
        </div>
{% endblock page_content %}
", "@FOSUser/Registration/register.html.twig", "D:\\laragon\\www\\qassima\\src\\Eshop\\UserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
