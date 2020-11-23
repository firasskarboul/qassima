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

/* AdminBundle:Product:edit.html.twig */
class __TwigTemplate_c8af1925fcffe2d3a91c202bc96d6bec1d500d7f246c8e1c445d930a7ff760c8 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AdminBundle:Product:edit.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 2, $this->source); })()), [0 => "bootstrap_3_horizontal_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("@Admin/adminLayout.html.twig", "AdminBundle:Product:edit.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fancybox/jquery.fancybox.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/summernote.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 13
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product edit"), "html", null, true);
        echo "</h3>

    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "session", [], "any", false, false, false, 15), "flashbag", [], "any", false, false, false, 15), "get", [0 => "notice"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"alert alert-success\" role=\"alert\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group\">
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "product-name"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "summernote"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 35, $this->source); })()), "price", [], "any", false, false, false, 35), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 37, $this->source); })()), "price", [], "any", false, false, false, 37), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 41, $this->source); })()), "Dprice", [], "any", false, false, false, 41), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("deal Price")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 43, $this->source); })()), "Dprice", [], "any", false, false, false, 43), 'widget');
        echo "
        </div>
    </div>
     <div class=\"form-group\">
        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 47, $this->source); })()), "Dealdate", [], "any", false, false, false, 47), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deal time")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 49, $this->source); })()), "Dealdate", [], "any", false, false, false, 49), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 53, $this->source); })()), "category", [], "any", false, false, false, 53), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 55, $this->source); })()), "category", [], "any", false, false, false, 55), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 59, $this->source); })()), "manufacturer", [], "any", false, false, false, 59), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manufacturer")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 61, $this->source); })()), "manufacturer", [], "any", false, false, false, 61), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 65, $this->source); })()), "quantity", [], "any", false, false, false, 65), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 67, $this->source); })()), "quantity", [], "any", false, false, false, 67), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 71, $this->source); })()), "metaKeys", [], "any", false, false, false, 71), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta keys")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 73, $this->source); })()), "metaKeys", [], "any", false, false, false, 73), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 77, $this->source); })()), "metaDescription", [], "any", false, false, false, 77), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta description")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 79, $this->source); })()), "metaDescription", [], "any", false, false, false, 79), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 83, $this->source); })()), "measure", [], "any", false, false, false, 83), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Measure")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 85, $this->source); })()), "measure", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "measure-name"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 89, $this->source); })()), "measureQuantity", [], "any", false, false, false, 89), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Measure quantity")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 91, $this->source); })()), "measureQuantity", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "measure-quantity"]]);
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"></label>
        <div class=\"col-sm-10\">
            <a href=\"#\" class=\"btn btn-default generate-slug\">";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("generate slug"), "html", null, true);
        echo "</a>
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 101, $this->source); })()), "slug", [], "any", false, false, false, 101), 'label', (twig_test_empty($_label_ = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Slug")) ? [] : ["label" => $_label_]));
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 103, $this->source); })()), "slug", [], "any", false, false, false, 103), 'errors');
        echo "
            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 104, $this->source); })()), "slug", [], "any", false, false, false, 104), 'widget', ["attr" => ["class" => "product-slug"]]);
        echo "
        </div>
    </div>

    <input type=\"hidden\" name=\"filenames\" id=\"filenames\">
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"></label>
        <div class=\"col-sm-10\">
            <input type=\"submit\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit"), "html", null, true);
        echo "\" class=\"btn btn-warning\"/>
        </div>
    </div>
    ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 115, $this->source); })()), 'rest');
        echo "
    ";
        // line 116
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 116, $this->source); })()), 'form_end');
        echo "

    <div class=\"row\" style=\"margin: 30px;\">
        ";
        // line 119
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 119, $this->source); })()), "images", [], "any", false, false, false, 119))) {
            // line 120
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 120, $this->source); })()), "images", [], "any", false, false, false, 120));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 121
                echo "                <div class=\"col-md-3 image-container\">
                    <a class=\"fancybox\" rel=\"group\" href=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/gallery/" . twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 122))), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(("uploads/gallery/" . twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 123)), "some_thumb")), "html", null, true);
                echo "\"/>
                    </a>
                    <a href=\"#\" class=\"text-danger image-remove\" data-toggle=\"confirmation\"
                       data-popout=\"true\" data-placement=\"left\" data-id=\"";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 126), "html", null, true);
                echo "\">
                        ";
                // line 127
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("remove"), "html", null, true);
                echo "
                    </a>
                    <img id=\"gif-loading\" style=\"width:17px; height:17px; display: none;\"
                         src=\"";
                // line 130
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/ajax-loader.gif"), "html", null, true);
                echo "\"/>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "        ";
        } else {
            // line 134
            echo "            <p>
                <strong class=\"text-danger\">";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("no photos"), "html", null, true);
            echo "</strong>
            </p>
        ";
        }
        // line 138
        echo "    </div>

    <div class=\"panel panel-default\" style=\"margin: 30px;\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
                <span class=\"glyphicon glyphicon-picture\" aria-hidden=\"true\"></span>
                ";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("attach photos here"), "html", null, true);
        echo "
            </h3>
        </div>
        <form action=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Oneup\UploaderBundle\Twig\Extension\UploaderExtension']->endpoint("gallery"), "html", null, true);
        echo "\" class=\"dropzone dz-clickable\"
              id=\"my-dropzone\" style=\"min-height: 100px;\" enctype=\"multipart/form-data\">
        </form>
    </div>

    <div class=\"col-md-5 col-md-offset-2 \">
        <ul class=\"list-group\">
            <li class=\"list-group-item\">
                <a href=\"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product");
        echo "\">
                    ";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to the list"), "html", null, true);
        echo "
                </a>
            </li>
            <li class=\"list-group-item\">
                ";
        // line 160
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 160, $this->source); })()), 'form_start', ["attr" => ["class" => "bootbox-submit-confirm"]]);
        echo "
                ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 161, $this->source); })()), 'widget');
        echo "
                <input type=\"submit\" value=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete"), "html", null, true);
        echo "\" class=\"btn btn-danger\"/>
                ";
        // line 163
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 163, $this->source); })()), 'form_end');
        echo "
            </li>
        </ul>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 169
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 170
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/dropzone.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/speakingurl.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fancybox/jquery.mousewheel-3.0.6.pack.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fancybox/jquery.fancybox.pack.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap-confirmation.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/cart.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/summernote.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        ";
        // line 179
        $this->loadTemplate("@Admin/Partials/initSummernote.js.twig", "AdminBundle:Product:edit.html.twig", 179)->display(twig_array_merge($context, ["height" => 300]));
        // line 180
        echo "        \$(document).ready(function () {
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

            \$(\".fancybox\").fancybox();

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

            var removeImageLink = \$('.image-remove');
            removeImageLink.css('cursor', 'pointer');
            removeImageLink.on('click', function (e) {
                e.preventDefault();
                var imageEntityId = \$(this).data('id');
                var objToRemove = \$(this).parent();
                console.log(imageEntityId);
                removeImageEntity(imageEntityId, objToRemove);
            });
        });

        //send request to remove image entity
        function removeImageEntity(imageEntityId, objToRemove) {
            var imgObj = objToRemove.find(\"#gif-loading\");
            imgObj.show();

            \$.ajax({
                url: \"";
        // line 234
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_image");
        echo "\",
                type: 'POST',
                data: {imageEntityId: imageEntityId},
                success: function () {
                    //remove image
                    objToRemove.remove();
                },
                error: function (data) {
                    data = JSON.stringify(data);
                    data = JSON.parse(data);
                    console.log(data);
                }
            });
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Product:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  526 => 234,  470 => 180,  468 => 179,  463 => 177,  459 => 176,  455 => 175,  451 => 174,  447 => 173,  443 => 172,  439 => 171,  434 => 170,  427 => 169,  415 => 163,  411 => 162,  407 => 161,  403 => 160,  396 => 156,  392 => 155,  381 => 147,  375 => 144,  367 => 138,  361 => 135,  358 => 134,  355 => 133,  346 => 130,  340 => 127,  336 => 126,  330 => 123,  326 => 122,  323 => 121,  318 => 120,  316 => 119,  310 => 116,  306 => 115,  300 => 112,  289 => 104,  285 => 103,  280 => 101,  273 => 97,  264 => 91,  259 => 89,  252 => 85,  247 => 83,  240 => 79,  235 => 77,  228 => 73,  223 => 71,  216 => 67,  211 => 65,  204 => 61,  199 => 59,  192 => 55,  187 => 53,  180 => 49,  175 => 47,  168 => 43,  163 => 41,  156 => 37,  151 => 35,  144 => 31,  139 => 29,  132 => 25,  127 => 23,  122 => 21,  119 => 20,  110 => 17,  107 => 16,  103 => 15,  97 => 13,  90 => 12,  81 => 9,  77 => 8,  73 => 7,  69 => 6,  64 => 5,  57 => 4,  49 => 1,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Admin/adminLayout.html.twig' %}
{% form_theme edit_form 'bootstrap_3_horizontal_layout.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('assets/css/dropzone.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/fancybox/jquery.fancybox.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"{{ asset('assets/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/summernote.css') }}\" rel=\"stylesheet\">
{% endblock stylesheets %}

{% block page_content -%}
    <h3>{{ 'Product edit'|trans }}</h3>

    {% for flashMessage in app.session.flashbag.get('notice') %}
        <div class=\"alert alert-success\" role=\"alert\">
            {{ flashMessage }}
        </div>
    {% endfor %}

    {{ form_start(edit_form) }}
    <div class=\"form-group\">
        {{ form_label(edit_form.name, 'Name'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(edit_form.name, {'attr': {'class': 'product-name'}}) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.description, 'Description'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(edit_form.description, {'attr': {'class': 'summernote'}}) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.price, 'Price'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(edit_form.price) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.Dprice, 'deal Price'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(edit_form.Dprice) }}
        </div>
    </div>
     <div class=\"form-group\">
        {{ form_label(edit_form.Dealdate, 'Deal time'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(edit_form.Dealdate) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.category, 'Category'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(edit_form.category) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.manufacturer, 'Manufacturer'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(edit_form.manufacturer) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.quantity, 'Quantity'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(edit_form.quantity) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.metaKeys, 'Meta keys'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(edit_form.metaKeys) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.metaDescription, 'Meta description'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(edit_form.metaDescription) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.measure, 'Measure'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(edit_form.measure, {'attr': {'class': 'measure-name'}}) }}
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.measureQuantity, 'Measure quantity'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_widget(edit_form.measureQuantity, {'attr': {'class': 'measure-quantity'}}) }}
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"></label>
        <div class=\"col-sm-10\">
            <a href=\"#\" class=\"btn btn-default generate-slug\">{{ 'generate slug'|trans }}</a>
        </div>
    </div>
    <div class=\"form-group\">
        {{ form_label(edit_form.slug, 'Slug'|trans) }}
        <div class=\"col-sm-10\">
            {{ form_errors(edit_form.slug) }}
            {{ form_widget(edit_form.slug, {'attr': {'class': 'product-slug'}}) }}
        </div>
    </div>

    <input type=\"hidden\" name=\"filenames\" id=\"filenames\">
    <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\"></label>
        <div class=\"col-sm-10\">
            <input type=\"submit\" value=\"{{ 'Edit'|trans }}\" class=\"btn btn-warning\"/>
        </div>
    </div>
    {{ form_rest(edit_form) }}
    {{ form_end(edit_form) }}

    <div class=\"row\" style=\"margin: 30px;\">
        {% if entity.images|length %}
            {% for image in entity.images %}
                <div class=\"col-md-3 image-container\">
                    <a class=\"fancybox\" rel=\"group\" href=\"{{ asset(('uploads/gallery/' ~ image.path)) }}\">
                        <img src=\"{{ asset( ('uploads/gallery/' ~ image.path) | imagine_filter('some_thumb')) }}\"/>
                    </a>
                    <a href=\"#\" class=\"text-danger image-remove\" data-toggle=\"confirmation\"
                       data-popout=\"true\" data-placement=\"left\" data-id=\"{{ image.id }}\">
                        {{ 'remove'|trans }}
                    </a>
                    <img id=\"gif-loading\" style=\"width:17px; height:17px; display: none;\"
                         src=\"{{ asset('assets/images/ajax-loader.gif') }}\"/>
                </div>
            {% endfor %}
        {% else %}
            <p>
                <strong class=\"text-danger\">{{ 'no photos'|trans }}</strong>
            </p>
        {% endif %}
    </div>

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

    <div class=\"col-md-5 col-md-offset-2 \">
        <ul class=\"list-group\">
            <li class=\"list-group-item\">
                <a href=\"{{ path('admin_product') }}\">
                    {{ 'Back to the list'|trans }}
                </a>
            </li>
            <li class=\"list-group-item\">
                {{ form_start(delete_form, { 'attr': {'class': 'bootbox-submit-confirm'} }) }}
                {{ form_widget(delete_form) }}
                <input type=\"submit\" value=\"{{ 'Delete'|trans }}\" class=\"btn btn-danger\"/>
                {{ form_end(delete_form) }}
            </li>
        </ul>
    </div>
{% endblock page_content %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('assets/js/dropzone.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/speakingurl.min.js') }}\"></script>
    <script src=\"{{ asset('assets/fancybox/jquery.mousewheel-3.0.6.pack.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/fancybox/jquery.fancybox.pack.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/bootstrap-confirmation.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/cart.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('assets/js/summernote.min.js') }}\"></script>
    <script>
        {% include '@Admin/Partials/initSummernote.js.twig' with {'height': 300} %}
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

            \$(\".fancybox\").fancybox();

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

            var removeImageLink = \$('.image-remove');
            removeImageLink.css('cursor', 'pointer');
            removeImageLink.on('click', function (e) {
                e.preventDefault();
                var imageEntityId = \$(this).data('id');
                var objToRemove = \$(this).parent();
                console.log(imageEntityId);
                removeImageEntity(imageEntityId, objToRemove);
            });
        });

        //send request to remove image entity
        function removeImageEntity(imageEntityId, objToRemove) {
            var imgObj = objToRemove.find(\"#gif-loading\");
            imgObj.show();

            \$.ajax({
                url: \"{{ path('remove_image') }}\",
                type: 'POST',
                data: {imageEntityId: imageEntityId},
                success: function () {
                    //remove image
                    objToRemove.remove();
                },
                error: function (data) {
                    data = JSON.stringify(data);
                    data = JSON.parse(data);
                    console.log(data);
                }
            });
        }
    </script>
{% endblock javascripts %}
", "AdminBundle:Product:edit.html.twig", "D:\\laragon\\www\\qassima\\src\\Eshop\\AdminBundle/Resources/views/Product/edit.html.twig");
    }
}
