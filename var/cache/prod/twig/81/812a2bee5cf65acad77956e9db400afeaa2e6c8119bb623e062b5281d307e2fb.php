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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <!-- Google font-->
     <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/css.css?family=Work+Sans:100,200,300,400,500,600,700,800,900"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/css-1.css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Font Awesome-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/themify.css"), "html", null, true);
        echo "\">

    <!-- Flag icon-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/slick.css"), "html", null, true);
        echo "\">

    <!-- slick icon-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/slick-theme.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/jsgrid.css"), "html", null, true);
        echo "\">

    <!-- jsgrid css-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/bootstrap.css"), "html", null, true);
        echo "\">

    <!-- Bootstrap css-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-css/admin.css"), "html", null, true);
        echo "\">

     
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 36, $this->source); })()), "messageKey", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 36, $this->source); })()), "messageData", [], "any", false, false, false, 36), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 38
        echo "


<div class=\"page-wrapper\">
    <div class=\"authentication-box\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-5 p-0 card-left\">
                    <div class=\"card bg-primary\">
                        <div class=\"svg-icon\">
      <img style=\"    width: 100px;\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\" \"   >
                        </div>

                        <div class=\"single-item\">
                            <div>
                                <div>
                                    <h3>Welcome to Bigdeal</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <h3>Welcome to Bigdeal</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <h3>Welcome to Bigdeal</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-7 p-0 card-right\">
                    <div class=\"card tab2-card\">
                        <div class=\"card-body\">
                            <ul class=\"nav nav-tabs nav-material\" id=\"top-tab\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" id=\"top-profile-tab\" data-toggle=\"tab\" href=\"#top-profile\" role=\"tab\" aria-controls=\"top-profile\" aria-selected=\"true\"><span class=\"icon-user mr-2\"></span>Login</a>
                                </li>
                                 
                            </ul>
                            <div class=\"tab-content\" id=\"top-tabContent\">
                                <div class=\"tab-pane fade show active\" id=\"top-profile\" role=\"tabpanel\" aria-labelledby=\"top-profile-tab\">
                                   <form class=\"form-horizontal auth-form\" action=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                                     <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 85, $this->source); })()), "html", null, true);
        echo "\"/>
                                        <div class=\"form-group\">
                                         
            <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" name=\"_username\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "\"
                   required=\"required\" placeholder=\"Username\" />
                                           
                                        </div>
                                        <div class=\"form-group\">
                                            <input required=\"required\" name=\"_password\" id=\"password\" type=\"password\" class=\"form-control\" placeholder=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "\">
                                        </div>
            
                                        <div class=\"form-terms\">
                                            <div class=\"custom-control custom-checkbox mr-sm-2\">
                                                <input type=\"checkbox\" class=\"custom-control-input\" name=\"_remember_me\" value=\"on\" id=\"customControlAutosizing\">
                                                <label class=\"custom-control-label\" for=\"customControlAutosizing\">";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
                                                <a href=\"#\" class=\"btn btn-default forgot-pass\">lost your password</a>
                                            </div>
                                   
                                        </div>
                                        <div class=\"form-button\">
                                        <input class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\"
               value=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\"/>
                                             
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
                                    </form>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"index.html\" class=\"btn btn-primary back-btn\"><i data-feather=\"arrow-left\"></i>back</a>
        </div>
    </div>
</div>

   





<!-- latest jquery-->
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap js-->
<script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-js/bootstrap.js"), "html", null, true);
        echo "\"></script>
 
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-js/popper.min.js"), "html", null, true);
        echo "\"></script>
<!-- feather icon js-->
<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-js/icons/feather-icon/feather.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-js/icons/feather-icon/feather-icon.js"), "html", null, true);
        echo "\"></script>
 

<!-- Sidebar jquery-->
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-js/sidebar-menu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-js/slick.js"), "html", null, true);
        echo "\"></script>


<!-- Jsgrid js-->
<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-js/jsgrid/jsgrid.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-js/jsgrid/griddata-invoice.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-js/jsgrid/jsgrid-invoice.js"), "html", null, true);
        echo "\"></script>
 

<!-- lazyload js-->
<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-js/lazysizes.min.js"), "html", null, true);
        echo "\"></script>
 

<!--right sidebar js-->
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-js/chat-menu.js"), "html", null, true);
        echo "\"></script>

<!--script admin-->
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin-js/admin-script.js"), "html", null, true);
        echo "\"></script>
<script>
    \$('.single-item').slick({
            arrows: false,
            dots: true
        }
    );
</script>
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
        return array (  331 => 169,  325 => 166,  318 => 162,  311 => 158,  307 => 157,  303 => 156,  296 => 152,  292 => 151,  285 => 147,  281 => 146,  276 => 144,  271 => 142,  265 => 139,  229 => 106,  219 => 99,  210 => 93,  202 => 88,  196 => 85,  192 => 84,  153 => 48,  141 => 38,  135 => 36,  132 => 35,  125 => 34,  113 => 28,  107 => 25,  101 => 22,  97 => 21,  91 => 18,  85 => 15,  79 => 12,  75 => 11,  71 => 10,  65 => 7,  60 => 6,  53 => 5,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"::base.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('assets/css/signin.css') }}\" rel=\"stylesheet\">
    
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

     
    
{% endblock %}

{% block body %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}



<div class=\"page-wrapper\">
    <div class=\"authentication-box\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-5 p-0 card-left\">
                    <div class=\"card bg-primary\">
                        <div class=\"svg-icon\">
      <img style=\"    width: 100px;\" src=\"{{ asset('assets/images/logo.png') }}\" alt=\" \"   >
                        </div>

                        <div class=\"single-item\">
                            <div>
                                <div>
                                    <h3>Welcome to Bigdeal</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <h3>Welcome to Bigdeal</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <h3>Welcome to Bigdeal</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-7 p-0 card-right\">
                    <div class=\"card tab2-card\">
                        <div class=\"card-body\">
                            <ul class=\"nav nav-tabs nav-material\" id=\"top-tab\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" id=\"top-profile-tab\" data-toggle=\"tab\" href=\"#top-profile\" role=\"tab\" aria-controls=\"top-profile\" aria-selected=\"true\"><span class=\"icon-user mr-2\"></span>Login</a>
                                </li>
                                 
                            </ul>
                            <div class=\"tab-content\" id=\"top-tabContent\">
                                <div class=\"tab-pane fade show active\" id=\"top-profile\" role=\"tabpanel\" aria-labelledby=\"top-profile-tab\">
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
                                    </form>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"index.html\" class=\"btn btn-primary back-btn\"><i data-feather=\"arrow-left\"></i>back</a>
        </div>
    </div>
</div>

   





<!-- latest jquery-->
<script src=\"{{ asset('assets/admin-js/jquery-3.3.1.min.js') }}\"></script>

<!-- Bootstrap js-->
<script src=\"{{ asset('assets/admin-js/bootstrap.js') }}\"></script>
 
<script src=\"{{ asset('assets/admin-js/popper.min.js') }}\"></script>
<!-- feather icon js-->
<script src=\"{{ asset('assets/admin-js/icons/feather-icon/feather.min.js') }}\"></script>
<script src=\"{{ asset('assets/admin-js/icons/feather-icon/feather-icon.js') }}\"></script>
 

<!-- Sidebar jquery-->
<script src=\"{{ asset('assets/admin-js/sidebar-menu.js') }}\"></script>
<script src=\"{{ asset('assets/admin-js/slick.js') }}\"></script>


<!-- Jsgrid js-->
<script src=\"{{ asset('assets/admin-js/jsgrid/jsgrid.min.js') }}\"></script>
<script src=\"{{ asset('assets/admin-js/jsgrid/griddata-invoice.js') }}\"></script>
<script src=\"{{ asset('assets/admin-js/jsgrid/jsgrid-invoice.js') }}\"></script>
 

<!-- lazyload js-->
<script src=\"{{ asset('assets/admin-js/lazysizes.min.js') }}\"></script>
 

<!--right sidebar js-->
<script src=\"{{ asset('assets/admin-js/chat-menu.js') }}\"></script>

<!--script admin-->
<script src=\"{{ asset('assets/admin-js/admin-script.js') }}\"></script>
<script>
    \$('.single-item').slick({
            arrows: false,
            dots: true
        }
    );
</script>
{% endblock body %}
", "@FOSUser/Security/login.html.twig", "D:\\laragon\\www\\qassima\\src\\Eshop\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
