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
class __TwigTemplate_16ae93a576a9e29f6e4b00fe020d111a027c4ed42226d01a95610bbaaf9f34f1 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("/layout.html.twig", "perfil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <section class=\"content-header\">
        <h1>
            <i class=\"fas fa-user-cog\" style=\"color: #222222\"></i>
            ";
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 8
            echo "                Usuario: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 8), "username", [], "any", false, false, false, 8), "html", null, true);
            echo "
            ";
        }
        // line 10
        echo "            <div class=\"pull-right\">
                ";
        // line 11
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11) == 9) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11) == 238)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11) == 569))) {
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                    <div class=\"form-group\" style=\"display: none\">
                        <label>E-mail</label>
                        <input type=\"text\" class=\"form-control\" style=\"width: 100%;\" readonly=\"readonly\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["usuario"] ?? null), "email", [], "any", false, false, false, 35), "html", null, true);
        echo "\"/>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nombre", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Nombre completo:"]);
        echo "
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nombre", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span class=\"help-block\" style=\"color: brown\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nombre", [], "any", false, false, false, 41), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "apellidopaterno", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Apellido paterno:"]);
        echo "
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "apellidopaterno", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span class=\"help-block\" style=\"color: brown\">";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "apellidopaterno", [], "any", false, false, false, 47), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "apellidomaterno", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Apellido materno:"]);
        echo "
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "apellidomaterno", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span class=\"help-block\" style=\"color: brown\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "apellidomaterno", [], "any", false, false, false, 53), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fechanacimiento", [], "any", false, false, false, 57), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Fecha de nacimiento: (día/mes/año)"]);
        echo "

                        <div class=\"row\">
                            <div class=\"col-md-12\" style=\"margin: 0px\">
                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fechanacimiento", [], "any", false, false, false, 61), "day", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "style" => "float:left; margin-right: 10px"]]);
        echo "
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fechanacimiento", [], "any", false, false, false, 62), "month", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control", "style" => "float:left; margin-right: 10px"]]);
        echo "
                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fechanacimiento", [], "any", false, false, false, 63), "year", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "style" => "float:left; margin-right: 10px"]]);
        echo "
                            </div>
                        </div>

                        <span class=\"help-block\" style=\"color: brown\">";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fechanacimiento", [], "any", false, false, false, 67), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "correo1", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Correo personal"]);
        echo "
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "correo1", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span class=\"help-block\" style=\"color: brown\">";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "correo1", [], "any", false, false, false, 73), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "correo2", [], "any", false, false, false, 77), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Correo corporativo (Formato con nombre), si tiene asignado; ej: nombre.apellido@sattelital.com.pe"]);
        echo "
                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "correo2", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span class=\"help-block\" style=\"color: brown\">";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "correo2", [], "any", false, false, false, 79), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "correo3", [], "any", false, false, false, 83), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Correo corporativo (Formato con cargo), si tiene asignado; ej: cargo@sattelital.com.pe"]);
        echo "
                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "correo3", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span class=\"help-block\" style=\"color: brown\">";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "correo3", [], "any", false, false, false, 85), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telefono1", [], "any", false, false, false, 89), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Teléfono personal"]);
        echo "
                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telefono1", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span class=\"help-block\" style=\"color: brown\">";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telefono1", [], "any", false, false, false, 91), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telefono2", [], "any", false, false, false, 95), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Teléfono corporativo \"móvil, si tiene asignado\""]);
        echo "
                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telefono2", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span class=\"help-block\" style=\"color: brown\">";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telefono2", [], "any", false, false, false, 97), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telefono3", [], "any", false, false, false, 101), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Teléfono corporativo \"anexo\", si tiene asignado"]);
        echo "
                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telefono3", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span class=\"help-block\" style=\"color: brown\">";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telefono3", [], "any", false, false, false, 103), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "areageneral", [], "any", false, false, false, 107), 'label', ["label_attr" => ["class" => "control-label"], "label" => "Área general de pertenencia"]);
        echo "
                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "areageneral", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        <span class=\"help-block\" style=\"color: brown\">";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "areageneral", [], "any", false, false, false, 109), 'errors');
        echo "</span>
                    </div>

                    <button class=\"btn btn-success\">Guardar</button>
                    ";
        // line 114
        echo "                    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </section>

";
    }

    // line 123
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  305 => 124,  301 => 123,  289 => 114,  282 => 109,  278 => 108,  274 => 107,  267 => 103,  263 => 102,  259 => 101,  252 => 97,  248 => 96,  244 => 95,  237 => 91,  233 => 90,  229 => 89,  222 => 85,  218 => 84,  214 => 83,  207 => 79,  203 => 78,  199 => 77,  192 => 73,  188 => 72,  184 => 71,  177 => 67,  170 => 63,  166 => 62,  162 => 61,  155 => 57,  148 => 53,  144 => 52,  140 => 51,  133 => 47,  129 => 46,  125 => 45,  118 => 41,  114 => 40,  110 => 39,  103 => 35,  96 => 31,  75 => 14,  69 => 12,  67 => 11,  64 => 10,  58 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "perfil.html.twig", "C:\\wamp64\\www\\html\\datospersonal.sattelital.com.pe\\templates\\perfil.html.twig");
    }
}
