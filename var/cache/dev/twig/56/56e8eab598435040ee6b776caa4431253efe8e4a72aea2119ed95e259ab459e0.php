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

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_49ad58f0d67db89b5cfe8ff5677a4b947877cc4b1ee98d270a7fb3e2f53964eb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "intranet/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent = $this->loadTemplate("intranet/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
            <i class=\"fas fa-shield-alt\" style=\"color: #222222\"></i>&nbsp;&nbsp;Cambiar contraseña
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-pagelines\"></i> Inicio</a></li>
            <li class=\"active\">Perfil</li>
        </ol>
    </section>

    <section class=\"content container-fluid\">

        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"box box-body\">
                    <h3 class=\"subtitulo-principal\"> <i class=\"fa fa-lock\"></i>&nbsp; Contraseña segura</h3>
                    <p>
                        Recomendaciones para crear una contraseña segura:
                    <ul>
                        <li>La contraseña debe contener al menos 8 caracteres.</li>
                        <li>Al menos una letra mayúscula.</li>
                        <li>Al menos una letra minúscula.</li>
                        <li>Al menos un número.</li>
                        <li>Al menos un caractér no alfanumérico.</li>
                    </ul>
                    </p>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"box box-default\">

                    <div class=\"box-body\">

                        ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password"), "attr" => ["class" => "fos_user_change_password"]]);
        echo "

                        <div class=\"form-group\">
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "current_password", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Contraseña actual"]);
        echo "
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "current_password", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"help-block\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "current_password", [], "any", false, false, false, 42), 'errors');
        echo "</span>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "plainPassword", [], "any", false, false, false, 46), "first", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Nueva contraseña"]);
        echo "
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "plainPassword", [], "any", false, false, false, 47), "first", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"help-block\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "plainPassword", [], "any", false, false, false, 48), "first", [], "any", false, false, false, 48), 'errors');
        echo "</span>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "plainPassword", [], "any", false, false, false, 52), "second", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Repetir nueva contraseña"]);
        echo "
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "plainPassword", [], "any", false, false, false, 53), "second", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"help-block\">";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "plainPassword", [], "any", false, false, false, 54), "second", [], "any", false, false, false, 54), 'errors');
        echo "</span>
                        </div>

                        <div>
                            <input type=\"submit\" class=\"btn btn-success\" value=\"Cambiar contraseña\" />
                            <a class=\"btn btn-default pull-right\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
        echo "\">Cancelar</a>
                        </div>
                        ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 61,  155 => 59,  147 => 54,  143 => 53,  139 => 52,  132 => 48,  128 => 47,  124 => 46,  117 => 42,  113 => 41,  109 => 40,  103 => 37,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'intranet/layout.html.twig' %}

{% block body %}
    <section class=\"content-header\">
        <h1>
            <i class=\"fas fa-shield-alt\" style=\"color: #222222\"></i>&nbsp;&nbsp;Cambiar contraseña
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-pagelines\"></i> Inicio</a></li>
            <li class=\"active\">Perfil</li>
        </ol>
    </section>

    <section class=\"content container-fluid\">

        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"box box-body\">
                    <h3 class=\"subtitulo-principal\"> <i class=\"fa fa-lock\"></i>&nbsp; Contraseña segura</h3>
                    <p>
                        Recomendaciones para crear una contraseña segura:
                    <ul>
                        <li>La contraseña debe contener al menos 8 caracteres.</li>
                        <li>Al menos una letra mayúscula.</li>
                        <li>Al menos una letra minúscula.</li>
                        <li>Al menos un número.</li>
                        <li>Al menos un caractér no alfanumérico.</li>
                    </ul>
                    </p>
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"box box-default\">

                    <div class=\"box-body\">

                        {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}

                        <div class=\"form-group\">
                            {{ form_label(form.current_password, 'Contraseña actual', {'label_attr': {'class': 'control-label'}}) }}
                            {{ form_widget(form.current_password, {'attr': {'class': 'form-control'}}) }}
                            <span class=\"help-block\">{{ form_errors(form.current_password) }}</span>
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(form.plainPassword.first, 'Nueva contraseña', {'label_attr': {'class': 'control-label'}}) }}
                            {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control'}}) }}
                            <span class=\"help-block\">{{ form_errors(form.plainPassword.first) }}</span>
                        </div>

                        <div class=\"form-group\">
                            {{ form_label(form.plainPassword.second, 'Repetir nueva contraseña', {'label_attr': {'class': 'control-label'}}) }}
                            {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control'}}) }}
                            <span class=\"help-block\">{{ form_errors(form.plainPassword.second) }}</span>
                        </div>

                        <div>
                            <input type=\"submit\" class=\"btn btn-success\" value=\"Cambiar contraseña\" />
                            <a class=\"btn btn-default pull-right\" href=\"{{ path('fos_user_profile_show') }}\">Cancelar</a>
                        </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}

", "@FOSUser/ChangePassword/change_password.html.twig", "/var/www/html/datospersonal.sattelital.com.pe/templates/bundles/FOSUserBundle/ChangePassword/change_password.html.twig");
    }
}
