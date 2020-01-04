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

/* layout1.html.twig */
class __TwigTemplate_cc793c0851eb472c918300f33d618d844b2e077b575c49fc77c743ae0ba2323f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'fos_user_content' => [$this, 'block_fos_user_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Satelital</title>
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("otros/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("otros/adminlte/bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" async=\"true\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("otros/adminlte/bower_components/Ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("otros/adminlte/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("otros/adminlte/dist/css/skins/_all-skins.css"), "html", null, true);
        echo "\">
    ";
        // line 14
        echo "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\"/>

    ";
        // line 39
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("otros/fontawesome/css/all.min.css"), "html", null, true);
        echo "\">
    ";
        // line 43
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 44
        echo "    ";
        // line 45
        echo "
    <style>
        .content-wrapper{
            margin-left: 0px;
        }
    </style>
</head>


<body class=\"hold-transition blue sidebar-collapse sidebar-mini \">

<div class=\"wrapper\">

    <header class=\"main-header\">
        <a href=\"#\" class=\"logo\">
            <span class=\"logo-mini\"><img src=\"\" id=\"logo-mini\" class=\"img-circle\" alt=\"User Image\" style=\"height: 35px\"></span>
            <span class=\"logo-lg\"><img src=\"\" id=\"logo-normal\" class=\"img-circles\" alt=\"User Image\" style=\"height: 24px; margin-top: -3px; margin-right: 2px\"></span>
        </a>

        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
           ";
        // line 68
        echo "            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown user user-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"#\" class=\"user-image\" alt=\"User Image\">
                            ";
        // line 73
        $context["vn"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 73), "nombre", [], "any", false, false, false, 73), " ");
        // line 74
        echo "                            ";
        // line 75
        echo "                        </a>

                        <ul class=\"dropdown-menu dropdown-menu-perfil\">
                            <li class=\"user-header\">
                                <img src=\"\" class=\"img-circle\" alt=\"User Image\">
                                <p>
                                    ";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 81), "nombre", [], "any", false, false, false, 81), "html", null, true);
        echo "
                                    <small>
                                        USUARIO
                                    </small>
                                </p>
                            </li>
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
        echo "\" class=\"btn btn-default\" style=\"width: 100px\">Perfil</a>
                                </div>
                                <div class=\"pull-right\">
                                    ";
        // line 94
        echo "                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>


   ";
        // line 113
        echo "
    <div class=\"content-wrapper\">
        <div class=\"contenido-interno\" style=\"min-height: 900px\">
            ";
        // line 116
        $this->displayBlock('body', $context, $blocks);
        // line 123
        echo "        </div>
    </div>
</div>
<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("otros/adminlte/bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("otros/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("otros/adminlte/dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 134
        echo "
";
        // line 135
        $this->displayBlock('javascripts', $context, $blocks);
        // line 136
        echo "
</body>
</html>";
    }

    // line 43
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 116
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 117
        echo "
                ";
        // line 118
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 121
        echo "
            ";
    }

    // line 118
    public function block_fos_user_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "                    ";
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "layout1.html.twig", 119)->display($context);
        // line 120
        echo "                ";
    }

    // line 135
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 135,  232 => 120,  229 => 119,  225 => 118,  220 => 121,  218 => 118,  215 => 117,  211 => 116,  205 => 43,  199 => 136,  197 => 135,  194 => 134,  190 => 128,  186 => 127,  182 => 126,  177 => 123,  175 => 116,  170 => 113,  157 => 94,  151 => 89,  140 => 81,  132 => 75,  130 => 74,  128 => 73,  121 => 68,  99 => 45,  97 => 44,  95 => 43,  91 => 42,  87 => 41,  83 => 40,  80 => 39,  70 => 14,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  50 => 8,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout1.html.twig", "C:\\wamp64\\www\\html\\datospersonal.sattelital.com.pe\\templates\\layout1.html.twig");
    }
}
