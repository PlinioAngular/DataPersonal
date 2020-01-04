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

/* gracias.html.twig */
class __TwigTemplate_90eb89332560b3045aea2918f3c82931da4c82b4496ec7aa0772250d8c13d4e5 extends \Twig\Template
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
        return "/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("/layout.html.twig", "gracias.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <section class=\"content-header\">
        <h1>
            <i class=\"fas fa-user-cog\" style=\"color: #222222\"></i>&nbsp;Usuario: ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 10), "username", [], "any", false, false, false, 10), "html", null, true);
        echo "
            <div class=\"pull-right\">
                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-success\">Cerrar sesión</a>
            </div>
        </h1>
    </section>

    <section style=\"border-top: 5px solid #dddddd; margin: 20px; margin-top: 20px;\"></section>
    <section class=\"content container-fluid\" style=\"padding-top: 0\" >
        <div class=\"row\">
            <div class=\"col-md-12\" style=\"min-height: 150px\">
                <div class=\"box box-body\">

                    <p style=\"font-size: 30px; color: #265699; text-align: center\">
                        <svg aria-hidden=\"true\" style=\"width: 50px;\" font-size=\"25px\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"handshake\" class=\"svg-inline--fa fa-handshake fa-w-20\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 640 512\"><path fill=\"currentColor\" d=\"M434.7 64h-85.9c-8 0-15.7 3-21.6 8.4l-98.3 90c-.1.1-.2.3-.3.4-16.6 15.6-16.3 40.5-2.1 56 12.7 13.9 39.4 17.6 56.1 2.7.1-.1.3-.1.4-.2l79.9-73.2c6.5-5.9 16.7-5.5 22.6 1 6 6.5 5.5 16.6-1 22.6l-26.1 23.9L504 313.8c2.9 2.4 5.5 5 7.9 7.7V128l-54.6-54.6c-5.9-6-14.1-9.4-22.6-9.4zM544 128.2v223.9c0 17.7 14.3 32 32 32h64V128.2h-96zm48 223.9c-8.8 0-16-7.2-16-16s7.2-16 16-16 16 7.2 16 16-7.2 16-16 16zM0 384h64c17.7 0 32-14.3 32-32V128.2H0V384zm48-63.9c8.8 0 16 7.2 16 16s-7.2 16-16 16-16-7.2-16-16c0-8.9 7.2-16 16-16zm435.9 18.6L334.6 217.5l-30 27.5c-29.7 27.1-75.2 24.5-101.7-4.4-26.9-29.4-24.8-74.9 4.4-101.7L289.1 64h-83.8c-8.5 0-16.6 3.4-22.6 9.4L128 128v223.9h18.3l90.5 81.9c27.4 22.3 67.7 18.1 90-9.3l.2-.2 17.9 15.5c15.9 13 39.4 10.5 52.3-5.4l31.4-38.6 5.4 4.4c13.7 11.1 33.9 9.1 45-4.7l9.5-11.7c11.2-13.8 9.1-33.9-4.6-45.1z\"></path></svg>
                    </p>

                    <p style=\"font-size: 25px; text-align: center; color: #265699;\">
                        GRACIAS POR ACTUALIZAR TU INFORMACIÓN.
                    </p>

                    <p class=\"text-center\">Hemos concluido con el registro de tu información. Agradecemos mucho tu interés de participar en este procedimiento institucional.</p>

                    <p class=\"text-center\">
                        Recuerda que estos datos serán valiosos para toda tu configuración laboral y en sistemas de nuestra institución.
                        Si deseas verificar tus datos puedes volver a ingresar al sistema.
                    </p>

                    <p class=\"text-center\"><b>Muchas gracias por depositar tu confianza en nuestra organización y nuestros procedimientos, sigamos construyendo el futuro de nuestra empresa.</b></p>

                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "gracias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 12,  64 => 10,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "gracias.html.twig", "C:\\wamp64\\www\\html\\datospersonal.sattelital.com.pe\\templates\\gracias.html.twig");
    }
}
