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

/* ShopBundle:Contact:new.html.twig */
class __TwigTemplate_0562a904260fc464d473e6e2308a1eca35427f62242c1ba0bb727df8819f673c extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ShopBundle:Contact:new.html.twig"));

        $this->parent = $this->loadTemplate("@Shop/layout.html.twig", "ShopBundle:Contact:new.html.twig", 1);
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
        echo "Contact";
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 9
        echo "</div>
<div class=\"container\">

    <div class=\"col-md-12\" style=\"margin:30px;\"> 
                <div class=\"contact-page\">
                        <div class=\"row\">
                            <div class=\"col-md-12 contact-map outer-bottom-vs\">
                              <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.4967012556012!2d51.5215268150106!3d25.25387148386982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x32f5787c3abcdd37!2sBMI%20Fitness!5e0!3m2!1sen!2stn!4v1606090093956!5m2!1sen!2stn\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
                            </div>
                            <div class=\"col-md-8 contact-form\">
                <div class=\"col-md-12 contact-title\">
                    <h4>Contact Form</h4>
                </div>
                


                 ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
        echo "
                            <div class=\"my-custom-class-for-errors\">
                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'errors');
        echo "
                            </div>
                          ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "_token", [], "any", false, false, false, 29), 'row');
        echo "
                            <div class=\"col-md-4 \">
                                <div class=\"form-group\">
                                    <label class=\"info-title\" for=\"exampleInputName\">Your Name <span>*</span></label>
                        
                                    <input type=\"text\" name=\"eshop_shopbundle_Contact[name]\"class=\"form-control text-input\" id=\"exampleInputName\" placeholder=\"\">
                                </div>
                               </div>  
                               <div class=\"col-md-4\">
                                <div class=\"form-group\">
                                        <label class=\"info-title\" for=\"exampleInputEmail1\">Email Address <span>*</span></label>
                                        <input type=\"email\"name=\"eshop_shopbundle_Contact[email]\" class=\"form-control text-input\" id=\"exampleInputEmail1\" placeholder=\"\">
                                    </div>
                                 </div>
                                  <div class=\"col-md-4\">
                                 <div class=\"form-group\">
                                    <label class=\"info-title\" for=\"exampleInputTitle\">Title <span>*</span></label>
                                    <input type=\"text\" name=\"eshop_shopbundle_Contact[subject]\" class=\"form-control text-input\" id=\"exampleInputTitle\" placeholder=\"Title\">
                                </div>
                                </div>
                                <div class=\"col-md-12\">
                                        <div class=\"form-group\">
                                                <label class=\"info-title\" for=\"exampleInputComments\">Your Comments <span>*</span></label>
                                                <textarea name=\"eshop_shopbundle_Contact[message]\" class=\"form-control unicase-form-control\" id=\"exampleInputComments\"></textarea>
                                            </div>
                                 </div>
                        <div class=\"col-md-12 outer-bottom-small m-t-20\">
                            <button type=\"submit\" class=\"btn-upper btn btn-primary checkout-page-button\">Send Message</button>
                        </div>
     
                 ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
                     
            </div>
            <div class=\"col-md-4 contact-info\">
                <div class=\"contact-title\">
                    <h4>Information</h4>
                </div>
                <div class=\"clearfix address\">
                    <span class=\"contact-i\"><i class=\"fa fa-map-marker\"></i></span>
                    <span class=\"contact-span\">Qasima ,Qatar</span>
                </div>
                <div class=\"clearfix phone-no\">
                    <span class=\"contact-i\"><i class=\"fa fa-mobile\"></i></span>
                    <span class=\"contact-span\">+974 0000 1111</span>
                </div>
                <div class=\"clearfix email\">
                    <span class=\"contact-i\"><i class=\"fa fa-envelope\"></i></span>
                    <span class=\"contact-span\"><a href=\"#\">Contact@Qasima.com</a></span>
                </div>
            </div>\t\t\t</div>
            </div>
    </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ShopBundle:Contact:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 59,  105 => 29,  100 => 27,  95 => 25,  77 => 9,  70 => 8,  60 => 5,  53 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Shop/layout.html.twig' %}
{% trans_default_domain 'ShopBundle' %}

{% block title %}
    {{ 'Contact'  }}
{% endblock title %}

{% block page_content -%}
</div>
<div class=\"container\">

    <div class=\"col-md-12\" style=\"margin:30px;\"> 
                <div class=\"contact-page\">
                        <div class=\"row\">
                            <div class=\"col-md-12 contact-map outer-bottom-vs\">
                              <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.4967012556012!2d51.5215268150106!3d25.25387148386982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x32f5787c3abcdd37!2sBMI%20Fitness!5e0!3m2!1sen!2stn!4v1606090093956!5m2!1sen!2stn\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
                            </div>
                            <div class=\"col-md-8 contact-form\">
                <div class=\"col-md-12 contact-title\">
                    <h4>Contact Form</h4>
                </div>
                


                 {{ form_start(form) }}
                            <div class=\"my-custom-class-for-errors\">
                                {{ form_errors(form) }}
                            </div>
                          {{ form_row(form._token) }}
                            <div class=\"col-md-4 \">
                                <div class=\"form-group\">
                                    <label class=\"info-title\" for=\"exampleInputName\">Your Name <span>*</span></label>
                        
                                    <input type=\"text\" name=\"eshop_shopbundle_Contact[name]\"class=\"form-control text-input\" id=\"exampleInputName\" placeholder=\"\">
                                </div>
                               </div>  
                               <div class=\"col-md-4\">
                                <div class=\"form-group\">
                                        <label class=\"info-title\" for=\"exampleInputEmail1\">Email Address <span>*</span></label>
                                        <input type=\"email\"name=\"eshop_shopbundle_Contact[email]\" class=\"form-control text-input\" id=\"exampleInputEmail1\" placeholder=\"\">
                                    </div>
                                 </div>
                                  <div class=\"col-md-4\">
                                 <div class=\"form-group\">
                                    <label class=\"info-title\" for=\"exampleInputTitle\">Title <span>*</span></label>
                                    <input type=\"text\" name=\"eshop_shopbundle_Contact[subject]\" class=\"form-control text-input\" id=\"exampleInputTitle\" placeholder=\"Title\">
                                </div>
                                </div>
                                <div class=\"col-md-12\">
                                        <div class=\"form-group\">
                                                <label class=\"info-title\" for=\"exampleInputComments\">Your Comments <span>*</span></label>
                                                <textarea name=\"eshop_shopbundle_Contact[message]\" class=\"form-control unicase-form-control\" id=\"exampleInputComments\"></textarea>
                                            </div>
                                 </div>
                        <div class=\"col-md-12 outer-bottom-small m-t-20\">
                            <button type=\"submit\" class=\"btn-upper btn btn-primary checkout-page-button\">Send Message</button>
                        </div>
     
                 {{ form_end(form, {'render_rest': false}) }}
                     
            </div>
            <div class=\"col-md-4 contact-info\">
                <div class=\"contact-title\">
                    <h4>Information</h4>
                </div>
                <div class=\"clearfix address\">
                    <span class=\"contact-i\"><i class=\"fa fa-map-marker\"></i></span>
                    <span class=\"contact-span\">Qasima ,Qatar</span>
                </div>
                <div class=\"clearfix phone-no\">
                    <span class=\"contact-i\"><i class=\"fa fa-mobile\"></i></span>
                    <span class=\"contact-span\">+974 0000 1111</span>
                </div>
                <div class=\"clearfix email\">
                    <span class=\"contact-i\"><i class=\"fa fa-envelope\"></i></span>
                    <span class=\"contact-span\"><a href=\"#\">Contact@Qasima.com</a></span>
                </div>
            </div>\t\t\t</div>
            </div>
    </div>
</div>


{% endblock page_content %}

 ", "ShopBundle:Contact:new.html.twig", "C:\\laragon\\www\\qassiima\\src\\Eshop\\ShopBundle/Resources/views/Contact/new.html.twig");
    }
}
