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
class __TwigTemplate_c04848a57e2ce823223962247220b39ef4b3f19f6e7f0b60f89a98965a1260f5 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("intranet/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password"), "attr" => ["class" => "fos_user_change_password"]]);
        echo "

                        <div class=\"form-group\">
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "current_password", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Contraseña actual"]);
        echo "
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "current_password", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"help-block\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "current_password", [], "any", false, false, false, 42), 'errors');
        echo "</span>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 46), "first", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Nueva contraseña"]);
        echo "
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 47), "first", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"help-block\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 48), "first", [], "any", false, false, false, 48), 'errors');
        echo "</span>
                        </div>

                        <div class=\"form-group\">
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 52), "second", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Repetir nueva contraseña"]);
        echo "
                            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 53), "second", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"help-block\">";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "plainPassword", [], "any", false, false, false, 54), "second", [], "any", false, false, false, 54), 'errors');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </section>
";
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
        return array (  142 => 61,  137 => 59,  129 => 54,  125 => 53,  121 => 52,  114 => 48,  110 => 47,  106 => 46,  99 => 42,  95 => 41,  91 => 40,  85 => 37,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\html\\datospersonal.sattelital.com.pe\\templates\\bundles\\FOSUserBundle\\ChangePassword\\change_password.html.twig");
    }
}
