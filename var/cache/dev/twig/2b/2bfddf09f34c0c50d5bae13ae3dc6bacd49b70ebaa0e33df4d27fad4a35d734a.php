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

/* perfil.html.twig */
class __TwigTemplate_8a8fde7324d4dc484119f58912dd8109d7985e203a641e1eff55e8351048e04a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "perfil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "perfil.html.twig"));

        $this->parent = $this->loadTemplate("/layout.html.twig", "perfil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"content-header\">
        <h1>
            <i class=\"fas fa-user-cog\" style=\"color: #222222\"></i>
            ";
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 8
            echo "                Usuario: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "username", [], "any", false, false, false, 8), "html", null, true);
            echo "
            ";
        }
        // line 10
        echo "            <div class=\"pull-right\">
                ";
        // line 11
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11) == 9) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11) == 238)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11) == 569))) {
            // line 12
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registrados");
            echo "\" class=\"btn btn-info\">Ver registrados</a>
                ";
        }
        // line 14
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-success\">Cerrar sesión</a>
            </div>
        </h1>
    </section>

    <section style=\"border-top: 5px solid #dddddd; margin: 20px; margin-top: 20px;\"></section>
    <section class=\"content container-fluid\" style=\"padding-top: 0\" >
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"box box-body\">
                    <p>
                        Mantenga actualizada su información personal, es muy importante para la empresa.
                    </p>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"box-body\">
                    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                    <div class=\"form-group\" style=\"display: none\">
                        <label>E-mail</label>
                        <input type=\"text\" class=\"form-control\" style=\"width: 100%;\" readonly=\"readonly\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), "html", null, true);
        echo "\"/>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "nombre", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Nombre completo:"]);
        echo "
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "nombre", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span class=\"help-block\" style=\"color: brown\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "nombre", [], "any", false, false, false, 41), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "apellidopaterno", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Apellido paterno:"]);
        echo "
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "apellidopaterno", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span class=\"help-block\" style=\"color: brown\">";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "apellidopaterno", [], "any", false, false, false, 47), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "apellidomaterno", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Apellido materno:"]);
        echo "
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "apellidomaterno", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span class=\"help-block\" style=\"color: brown\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "apellidomaterno", [], "any", false, false, false, 53), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "fechanacimiento", [], "any", false, false, false, 57), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Fecha de nacimiento: (día/mes/año)"]);
        echo "

                        <div class=\"row\">
                            <div class=\"col-md-12\" style=\"margin: 0px\">
                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "fechanacimiento", [], "any", false, false, false, 61), "day", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "style" => "float:left; margin-right: 10px"]]);
        echo "
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "fechanacimiento", [], "any", false, false, false, 62), "month", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control", "style" => "float:left; margin-right: 10px"]]);
        echo "
                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "fechanacimiento", [], "any", false, false, false, 63), "year", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "style" => "float:left; margin-right: 10px"]]);
        echo "
                            </div>
                        </div>

                        <span class=\"help-block\" style=\"color: brown\">";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "fechanacimiento", [], "any", false, false, false, 67), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "correo1", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Correo personal"]);
        echo "
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "correo1", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span class=\"help-block\" style=\"color: brown\">";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "correo1", [], "any", false, false, false, 73), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "correo2", [], "any", false, false, false, 77), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Correo corporativo (Formato con nombre), si tiene asignado; ej: nombre.apellido@sattelital.com.pe"]);
        echo "
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "correo2", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span class=\"help-block\" style=\"color: brown\">";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "correo2", [], "any", false, false, false, 79), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "correo3", [], "any", false, false, false, 83), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Correo corporativo (Formato con cargo), si tiene asignado; ej: cargo@sattelital.com.pe"]);
        echo "
                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "correo3", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span class=\"help-block\" style=\"color: brown\">";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "correo3", [], "any", false, false, false, 85), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "telefono1", [], "any", false, false, false, 89), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Teléfono personal"]);
        echo "
                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "telefono1", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span class=\"help-block\" style=\"color: brown\">";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "telefono1", [], "any", false, false, false, 91), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "telefono2", [], "any", false, false, false, 95), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Teléfono corporativo \"móvil, si tiene asignado\""]);
        echo "
                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "telefono2", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span class=\"help-block\" style=\"color: brown\">";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "telefono2", [], "any", false, false, false, 97), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "telefono3", [], "any", false, false, false, 101), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Teléfono corporativo \"anexo\", si tiene asignado"]);
        echo "
                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "telefono3", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span class=\"help-block\" style=\"color: brown\">";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "telefono3", [], "any", false, false, false, 103), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "areageneral", [], "any", false, false, false, 107), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Área general de pertenencia"]);
        echo "
                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "areageneral", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span class=\"help-block\" style=\"color: brown\">";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "areageneral", [], "any", false, false, false, 109), 'errors');
        echo "</span>
                    </div>

                    <button class=\"btn btn-success\">Guardar</button>
                    ";
        // line 114
        echo "                    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 123
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 124
        echo "<script>
    \$(document).ready(function(){
        \$(\"#usuario_fechanacimiento_day\").addClass(\"form-control\");
        \$(\"#usuario_fechanacimiento_month\").addClass(\"form-control\");
        \$(\"#usuario_fechanacimiento_year\").addClass(\"form-control\");

        \$(\"#usuario_fechanacimiento_day\").css(\"width\", \"80px\");
        \$(\"#usuario_fechanacimiento_month\").css(\"width\", \"80px\");
        \$(\"#usuario_fechanacimiento_year\").css(\"width\", \"80px\");
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 124,  325 => 123,  307 => 114,  300 => 109,  296 => 108,  292 => 107,  285 => 103,  281 => 102,  277 => 101,  270 => 97,  266 => 96,  262 => 95,  255 => 91,  251 => 90,  247 => 89,  240 => 85,  236 => 84,  232 => 83,  225 => 79,  221 => 78,  217 => 77,  210 => 73,  206 => 72,  202 => 71,  195 => 67,  188 => 63,  184 => 62,  180 => 61,  173 => 57,  166 => 53,  162 => 52,  158 => 51,  151 => 47,  147 => 46,  143 => 45,  136 => 41,  132 => 40,  128 => 39,  121 => 35,  114 => 31,  93 => 14,  87 => 12,  85 => 11,  82 => 10,  76 => 8,  74 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/layout.html.twig' %}

{% block body %}
    <section class=\"content-header\">
        <h1>
            <i class=\"fas fa-user-cog\" style=\"color: #222222\"></i>
            {% if is_granted(\"ROLE_USER\") %}
                Usuario: {{ app.user.username }}
            {% endif %}
            <div class=\"pull-right\">
                {% if (app.user.id == 9) or (app.user.id == 238) or (app.user.id == 569) %}
                    <a href=\"{{ path('registrados') }}\" class=\"btn btn-info\">Ver registrados</a>
                {% endif %}
                <a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn btn-success\">Cerrar sesión</a>
            </div>
        </h1>
    </section>

    <section style=\"border-top: 5px solid #dddddd; margin: 20px; margin-top: 20px;\"></section>
    <section class=\"content container-fluid\" style=\"padding-top: 0\" >
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"box box-body\">
                    <p>
                        Mantenga actualizada su información personal, es muy importante para la empresa.
                    </p>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"box-body\">
                    {{ form_start(form, {attr: {novalidate: 'novalidate'}}) }}

                    <div class=\"form-group\" style=\"display: none\">
                        <label>E-mail</label>
                        <input type=\"text\" class=\"form-control\" style=\"width: 100%;\" readonly=\"readonly\" value=\"{{ usuario.email }}\"/>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.nombre, 'Nombre completo:', {'label_attr': {'class': 'control-label'}}) }}
                        {{ form_widget(form.nombre, {'attr': {'class': 'form-control'}}) }}
                        <span class=\"help-block\" style=\"color: brown\">{{ form_errors(form.nombre) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.apellidopaterno, 'Apellido paterno:', {'label_attr': {'class': 'control-label'}}) }}
                        {{ form_widget(form.apellidopaterno, {'attr': {'class': 'form-control'}}) }}
                        <span class=\"help-block\" style=\"color: brown\">{{ form_errors(form.apellidopaterno) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.apellidomaterno, 'Apellido materno:', {'label_attr': {'class': 'control-label'}}) }}
                        {{ form_widget(form.apellidomaterno, {'attr': {'class': 'form-control'}}) }}
                        <span class=\"help-block\" style=\"color: brown\">{{ form_errors(form.apellidomaterno) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.fechanacimiento, 'Fecha de nacimiento: (día/mes/año)', {'label_attr': {'class': 'control-label'}}) }}

                        <div class=\"row\">
                            <div class=\"col-md-12\" style=\"margin: 0px\">
                                {{ form_widget(form.fechanacimiento.day, {'attr': {'class': 'form-control', 'style': 'float:left; margin-right: 10px'}}) }}
                                {{ form_widget(form.fechanacimiento.month, {'attr': {'class': 'form-control', 'style': 'float:left; margin-right: 10px'}}) }}
                                {{ form_widget(form.fechanacimiento.year, {'attr': {'class': 'form-control', 'style': 'float:left; margin-right: 10px'}}) }}
                            </div>
                        </div>

                        <span class=\"help-block\" style=\"color: brown\">{{ form_errors(form.fechanacimiento) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.correo1, 'Correo personal', {'label_attr': {'class': 'control-label'}}) }}
                        {{ form_widget(form.correo1, {'attr': {'class': 'form-control'}}) }}
                        <span class=\"help-block\" style=\"color: brown\">{{ form_errors(form.correo1) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.correo2, 'Correo corporativo (Formato con nombre), si tiene asignado; ej: nombre.apellido@sattelital.com.pe', {'label_attr': {'class': 'control-label'}}) }}
                        {{ form_widget(form.correo2, {'attr': {'class': 'form-control'}}) }}
                        <span class=\"help-block\" style=\"color: brown\">{{ form_errors(form.correo2) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.correo3, 'Correo corporativo (Formato con cargo), si tiene asignado; ej: cargo@sattelital.com.pe', {'label_attr': {'class': 'control-label'}}) }}
                        {{ form_widget(form.correo3, {'attr': {'class': 'form-control'}}) }}
                        <span class=\"help-block\" style=\"color: brown\">{{ form_errors(form.correo3) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.telefono1, 'Teléfono personal', {'label_attr': {'class': 'control-label'}}) }}
                        {{ form_widget(form.telefono1, {'attr': {'class': 'form-control'}}) }}
                        <span class=\"help-block\" style=\"color: brown\">{{ form_errors(form.telefono1) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.telefono2, 'Teléfono corporativo \"móvil, si tiene asignado\"', {'label_attr': {'class': 'control-label'}}) }}
                        {{ form_widget(form.telefono2, {'attr': {'class': 'form-control'}}) }}
                        <span class=\"help-block\" style=\"color: brown\">{{ form_errors(form.telefono2) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.telefono3, 'Teléfono corporativo \"anexo\", si tiene asignado', {'label_attr': {'class': 'control-label'}}) }}
                        {{ form_widget(form.telefono3, {'attr': {'class': 'form-control'}}) }}
                        <span class=\"help-block\" style=\"color: brown\">{{ form_errors(form.telefono3) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.areageneral, 'Área general de pertenencia', {'label_attr': {'class': 'control-label'}}) }}
                        {{ form_widget(form.areageneral, {'attr': {'class': 'form-control'}}) }}
                        <span class=\"help-block\" style=\"color: brown\">{{ form_errors(form.areageneral) }}</span>
                    </div>

                    <button class=\"btn btn-success\">Guardar</button>
                    {#<a class=\"btn btn-default pull-right \" href=\"{{ path('fos_user_profile_show') }}\">Cancelar</a>#}
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </section>

{% endblock %}


{% block javascripts %}
<script>
    \$(document).ready(function(){
        \$(\"#usuario_fechanacimiento_day\").addClass(\"form-control\");
        \$(\"#usuario_fechanacimiento_month\").addClass(\"form-control\");
        \$(\"#usuario_fechanacimiento_year\").addClass(\"form-control\");

        \$(\"#usuario_fechanacimiento_day\").css(\"width\", \"80px\");
        \$(\"#usuario_fechanacimiento_month\").css(\"width\", \"80px\");
        \$(\"#usuario_fechanacimiento_year\").css(\"width\", \"80px\");
    });
</script>
{% endblock %}
", "perfil.html.twig", "C:\\wamp64\\www\\html\\datospersonal.sattelital.com.pe\\templates\\perfil.html.twig");
    }
}
