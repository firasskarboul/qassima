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

/* AdminBundle:Product:new.html.twig */
class __TwigTemplate_d1aabbbed0b4853501ee57f2b201c231cba675093255f8dff917307dcfb412bf extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'page_content' => [$this, 'block_page_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Admin/adminLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AdminBundle:Product:new.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "bootstrap_3_horizontal_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@Admin/adminLayout.html.twig", "AdminBundle:Product:new.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/dropzone.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/summernote.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 12
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deals create"), "html", null, true);
        echo "</h3>

    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "product-name"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "summernote"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "price", [], "any", false, false, false, 28), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "price", [], "any", false, false, false, 30), 'widget');
        echo "
        </div>
    </div>
   
    <div class=\"form-group\">
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "Dprice", [], "any", false, false, false, 35), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("deal Price")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "Dprice", [], "any", false, false, false, 37), 'widget');
        echo "
        </div>
    </div>
     <div class=\"form-group\">
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "Dealdate", [], "any", false, false, false, 41), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deal time")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "Dealdate", [], "any", false, false, false, 43), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "category", [], "any", false, false, false, 47), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "category", [], "any", false, false, false, 49), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "manufacturer", [], "any", false, false, false, 53), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manufacturer")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "manufacturer", [], "any", false, false, false, 55), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "quantity", [], "any", false, false, false, 59), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "quantity", [], "any", false, false, false, 61), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "metaKeys", [], "any", false, false, false, 65), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta keys")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "metaKeys", [], "any", false, false, false, 67), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "metaDescription", [], "any", false, false, false, 71), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta description")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "metaDescription", [], "any", false, false, false, 73), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "measure", [], "any", false, false, false, 77), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Measure")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "measure", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "measure-name"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "measureQuantity", [], "any", false, false, false, 83), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Measure quantity")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "measureQuantity", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "measure-quantity"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"></label>
        <div class=\"col-sm-10\">
            <a href=\"#\" class=\"btn btn-default generate-slug\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("generate slug"), "html", null, true);
        echo "</a>
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "slug", [], "any", false, false, false, 95), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Slug")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "slug", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "product-slug"]]);
        echo "
        </div>
    </div>
    <input type=\"hidden\" name=\"filenames\" id=\"filenames\">
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"></label>
        <div class=\"col-sm-10\">
            <input type=\"submit\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create"), "html", null, true);
        echo "\" class=\"btn btn-success\"/>
        </div>
    </div>
    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'rest');
        echo "
    ";
        // line 108
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'form_end');
        echo "

    <div class=\"panel panel-default\" style=\"margin: 30px;\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
                <span class=\"glyphicon glyphicon-picture\" aria-hidden=\"true\"></span>
                ";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attach photos here"), "html", null, true);
        echo "
            </h3>
        </div>
        <form action=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Oneup\UploaderBundle\Twig\Extension\UploaderExtension']->endpoint("gallery"), "html", null, true);
        echo "\" class=\"dropzone dz-clickable\"
              id=\"my-dropzone\" style=\"min-height: 100px;\" enctype=\"multipart/form-data\">
        </form>
    </div>

    <a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product");
        echo "\">
        ";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to the list"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dropzone.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/speakingurl.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/summernote.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            Dropzone.options.myDropzone = {
                init: function () {
                    thisDropzone = this;
                    this.on(\"success\", function (file, response) {
                        var filename = response['image_id'];
                        //check for normal file uploaded
                        if (filename) {
                            \$('#filenames').val(\$('#filenames').val() + filename + ',');
                        }
                    });
                }
            };

            \$('.generate-slug').on('click', function (e) {
                e.preventDefault();
                //get field value
                var productName = \$('.product-name').val();
                var measureQuantity = \$('.measure-quantity').val();
                var measureName = \$('.measure-name').find('option:selected').text();

                var slugInut = \$('.product-slug');
                var nameToSlug = productName + '-' + measureQuantity + '-' + measureName;

                //generate slug
                var slug = getSlug(nameToSlug, {
                    custom: {
                        '%': ' percent '
                    },
                    uric: true
                });
                //record to slug input
                slugInut.val(slug);
            });
        });
        ";
        // line 168
        $this->loadTemplate("@Admin/Partials/initSummernote.js.twig", "AdminBundle:Product:new.html.twig", 168)->display(twig_array_merge($context, ["height" => 300]));
        // line 169
        echo "    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Product:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 169,  380 => 168,  340 => 131,  336 => 130,  332 => 129,  327 => 128,  320 => 127,  310 => 123,  306 => 122,  298 => 117,  292 => 114,  283 => 108,  279 => 107,  273 => 104,  263 => 97,  258 => 95,  251 => 91,  242 => 85,  237 => 83,  230 => 79,  225 => 77,  218 => 73,  213 => 71,  206 => 67,  201 => 65,  194 => 61,  189 => 59,  182 => 55,  177 => 53,  170 => 49,  165 => 47,  158 => 43,  153 => 41,  146 => 37,  141 => 35,  133 => 30,  128 => 28,  121 => 24,  116 => 22,  109 => 18,  104 => 16,  99 => 14,  93 => 12,  86 => 11,  77 => 8,  73 => 7,  69 => 6,  64 => 5,  57 => 4,  49 => 1,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Admin/adminLayout.html.twig' %}
{% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('assets/css/dropzone.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/summernote.css') }}\" rel=\"stylesheet\">
{% endblock stylesheets %}

{% block page_content -%}
    <h3>{{ 'Deals create'|trans }}</h3>

    {{ form_start(form) }}
    <div class=\"form-group\">
        {{ form_label(form.name, 'Name'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.name, {'attr': {'class': 'product-name'}}) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(form.description, 'Description'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.description, {'attr': {'class': 'summernote'}}) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(form.price, 'Price'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.price) }}
        </div>
    </div>
   
    <div class=\"form-group\">
        {{ form_label(form.Dprice, 'deal Price'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.Dprice) }}
        </div>
    </div>
     <div class=\"form-group\">
        {{ form_label(form.Dealdate, 'Deal time'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.Dealdate) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(form.category, 'Category'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.category) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(form.manufacturer, 'Manufacturer'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.manufacturer) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(form.quantity, 'Quantity'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.quantity) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(form.metaKeys, 'Meta keys'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.metaKeys) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(form.metaDescription, 'Meta description'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.metaDescription) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(form.measure, 'Measure'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.measure, {'attr': {'class': 'measure-name'}}) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(form.measureQuantity, 'Measure quantity'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.measureQuantity, {'attr': {'class': 'measure-quantity'}}) }}
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"></label>
        <div class=\"col-sm-10\">
            <a href=\"#\" class=\"btn btn-default generate-slug\">{{ 'generate slug'|trans }}</a>
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(form.slug, 'Slug'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(form.slug, {'attr': {'class': 'product-slug'}}) }}
        </div>
    </div>
    <input type=\"hidden\" name=\"filenames\" id=\"filenames\">
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"></label>
        <div class=\"col-sm-10\">
            <input type=\"submit\" value=\"{{ 'Create'|trans }}\" class=\"btn btn-success\"/>
        </div>
    </div>
    {{ form_rest(form) }}
    {{ form_end(form) }}

    <div class=\"panel panel-default\" style=\"margin: 30px;\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
                <span class=\"glyphicon glyphicon-picture\" aria-hidden=\"true\"></span>
                {{ 'attach photos here'|trans }}
            </h3>
        </div>
        <form action=\"{{ oneup_uploader_endpoint('gallery') }}\" class=\"dropzone dz-clickable\"
              id=\"my-dropzone\" style=\"min-height: 100px;\" enctype=\"multipart/form-data\">
        </form>
    </div>

    <a href=\"{{ path('admin_product') }}\">
        {{ 'Back to the list'|trans }}
    </a>
{% endblock page_content %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/dropzone.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/speakingurl.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/summernote.min.js') }}\"></script>
    <script>
        \$(document).ready(function () {
            Dropzone.options.myDropzone = {
                init: function () {
                    thisDropzone = this;
                    this.on(\"success\", function (file, response) {
                        var filename = response['image_id'];
                        //check for normal file uploaded
                        if (filename) {
                            \$('#filenames').val(\$('#filenames').val() + filename + ',');
                        }
                    });
                }
            };

            \$('.generate-slug').on('click', function (e) {
                e.preventDefault();
                //get field value
                var productName = \$('.product-name').val();
                var measureQuantity = \$('.measure-quantity').val();
                var measureName = \$('.measure-name').find('option:selected').text();

                var slugInut = \$('.product-slug');
                var nameToSlug = productName + '-' + measureQuantity + '-' + measureName;

                //generate slug
                var slug = getSlug(nameToSlug, {
                    custom: {
                        '%': ' percent '
                    },
                    uric: true
                });
                //record to slug input
                slugInut.val(slug);
            });
        });
        {% include '@Admin/Partials/initSummernote.js.twig' with {'height': 300} %}
    </script>
{% endblock javascripts %}
", "AdminBundle:Product:new.html.twig", "D:\\laragon\\www\\qassima\\src\\Eshop\\AdminBundle/Resources/views/Product/new.html.twig");
    }
}
