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

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_8d791ea6bdba24346bd69bc6ddbfaf5a7a7e16cc35f25bd5504c5ab3fbe1ae1b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "


<form action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 6
        if (($context["error"] ?? null)) {
            // line 7
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 7), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "    ";
        if (($context["csrf_token"] ?? null)) {
            // line 10
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\" />
    ";
        }
        // line 12
        echo "    <div class=\"form-group has-feedback\">
        <input  type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" autocomplete=\"username\"  class=\"form-control\" placeholder=\"DNI\" required autofocus>
        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
    </div>
    <div class=\"form-group has-feedback\">
        <input type=\"password\" id=\"password\" name=\"_password\" autocomplete=\"current-password\"  class=\"form-control\" placeholder=\"Contraseña\" required>
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
    <div class=\"row\">
        <div class=\"col-xs-8\">
            ";
        // line 28
        echo "        </div>
        <!-- /.col -->
        <div class=\"col-xs-4\">
            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Entrar</button>
        </div>
        <!-- /.col -->
    </div>
</form>

";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 28,  76 => 20,  66 => 13,  63 => 12,  57 => 10,  54 => 9,  48 => 7,  46 => 6,  42 => 5,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FOSUser/Security/login_content.html.twig", "C:\\wamp64\\www\\html\\datospersonal.sattelital.com.pe\\templates\\bundles\\FOSUserBundle\\Security\\login_content.html.twig");
    }
}
