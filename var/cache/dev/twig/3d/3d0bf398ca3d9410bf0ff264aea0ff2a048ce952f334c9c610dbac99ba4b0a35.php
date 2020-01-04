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
class __TwigTemplate_46d52c49d4e4e446ab672e304a0046a4d4c56b38c9bbfdd2cb065076fc8b0a5c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "


<form action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 6
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })()), "messageKey", [], "any", false, false, false, 7), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })()), "messageData", [], "any", false, false, false, 7), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "    ";
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "\" />
    ";
        }
        // line 12
        echo "    <div class=\"form-group has-feedback\">
        <input  type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 13, $this->source); })()), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  88 => 28,  82 => 20,  72 => 13,  69 => 12,  63 => 10,  60 => 9,  54 => 7,  52 => 6,  48 => 5,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}



<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}
    <div class=\"form-group has-feedback\">
        <input  type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" autocomplete=\"username\"  class=\"form-control\" placeholder=\"DNI\" required autofocus>
        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
    </div>
    <div class=\"form-group has-feedback\">
        <input type=\"password\" id=\"password\" name=\"_password\" autocomplete=\"current-password\"  class=\"form-control\" placeholder=\"Contraseña\" required>
        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
    <div class=\"row\">
        <div class=\"col-xs-8\">
            {#<div class=\"checkbox icheck\">
                <label>
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />&nbsp;&nbsp;Recordarme
                </label>
            </div>#}
        </div>
        <!-- /.col -->
        <div class=\"col-xs-4\">
            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Entrar</button>
        </div>
        <!-- /.col -->
    </div>
</form>

{#<a href=\"{{ path('fos_user_resetting_request') }}\">Olvidé mi contraseña</a><br/>#}
{#<a href=\"{{ path('fos_user_registration_register') }}\">Registrarme</a>#}", "@FOSUser/Security/login_content.html.twig", "C:\\wamp64\\www\\html\\datospersonal.sattelital.com.pe\\templates\\bundles\\FOSUserBundle\\Security\\login_content.html.twig");
    }
}
