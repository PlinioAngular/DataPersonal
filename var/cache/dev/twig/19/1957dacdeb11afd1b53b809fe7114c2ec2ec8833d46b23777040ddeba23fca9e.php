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
class __TwigTemplate_9931d55e0c361c07f4f1ac9422a7849be812bfbd59cca4001056150bdc55af26 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout1.html.twig"));

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
        $context["vn"] = twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "nombre", [], "any", false, false, false, 73), " ");
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81), "nombre", [], "any", false, false, false, 81), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 117
        echo "
                ";
        // line 118
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 121
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 118
    public function block_fos_user_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 119
        echo "                    ";
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "layout1.html.twig", 119)->display($context);
        // line 120
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 135
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  284 => 135,  274 => 120,  271 => 119,  261 => 118,  250 => 121,  248 => 118,  245 => 117,  235 => 116,  217 => 43,  205 => 136,  203 => 135,  200 => 134,  196 => 128,  192 => 127,  188 => 126,  183 => 123,  181 => 116,  176 => 113,  163 => 94,  157 => 89,  146 => 81,  138 => 75,  136 => 74,  134 => 73,  127 => 68,  105 => 45,  103 => 44,  101 => 43,  97 => 42,  93 => 41,  89 => 40,  86 => 39,  76 => 14,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Satelital</title>
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <link rel=\"stylesheet\" href=\"{{ asset('otros/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('otros/adminlte/bower_components/font-awesome/css/font-awesome.min.css') }}\" async=\"true\">
    <link rel=\"stylesheet\" href=\"{{ asset('otros/adminlte/bower_components/Ionicons/css/ionicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('otros/adminlte/dist/css/AdminLTE.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('otros/adminlte/dist/css/skins/_all-skins.css') }}\">
    {#<link type=\"text/css\" rel=\"stylesheet\" href=\" {{ asset('bundles/adminlte/bower_components/lightgallery/dist/css/lightgallery.css') }}\" />#}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\"/>

    {#<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"{{ asset('img/favicon/apple-icon-57x57.png')}}\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"{{ asset('img/favicon/apple-icon-60x60.png')}}\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"{{ asset('img/favicon/apple-icon-72x72.png')}}\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('img/favicon/apple-icon-76x76.png')}}\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"{{ asset('img/favicon/apple-icon-114x114.png')}}\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"{{ asset('img/favicon/apple-icon-120x120.png')}}\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"{{ asset('img/favicon/apple-icon-144x144.png')}}\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"{{ asset('img/favicon/apple-icon-152x152.png')}}\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('img/favicon/apple-icon-180x180.png')}}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"{{ asset('img/favicon/android-icon-192x192.png')}}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('img/favicon/favicon-32x32.png')}}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"{{ asset('img/favicon/favicon-96x96.png')}}\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('img/favicon/favicon-16x16.png')}}\">
    <link rel=\"manifest\" href=\"{{ asset('img/favicon/manifest.json')}}\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"{{ asset('img/favicon/ms-icon-144x144.png')}}\">
    <meta name=\"theme-color\" content=\"#ffffff\">#}

    <link rel=\"shortcut icon\" href=\"{{ asset('img/favicon/favicon.ico') }}\" type=\"image/x-icon\">
    <link rel=\"icon\" href=\"{{ asset('img/favicon/favicon.ico') }}\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"{{ asset('otros/fontawesome/css/all.min.css') }}\">
    {% block stylesheets %}{% endblock %}
    {#<link rel=\"stylesheet\" href=\"{{ asset('css/estilo.css') }}\">#}

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
           {# <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>#}
            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown user user-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"#\" class=\"user-image\" alt=\"User Image\">
                            {% set vn = app.user.nombre|split(' ') %}
                            {#<span class=\"hidden-xs\">{{ vn[0] }} {{ vn[1] }}</span>#}
                        </a>

                        <ul class=\"dropdown-menu dropdown-menu-perfil\">
                            <li class=\"user-header\">
                                <img src=\"\" class=\"img-circle\" alt=\"User Image\">
                                <p>
                                    {{ app.user.nombre }}
                                    <small>
                                        USUARIO
                                    </small>
                                </p>
                            </li>
                            <li class=\"user-footer\">
                                <div class=\"pull-left\">
                                    <a href=\"{{ path('fos_user_profile_show') }}\" class=\"btn btn-default\" style=\"width: 100px\">Perfil</a>
                                </div>
                                <div class=\"pull-right\">
                                    {#<a href=\"{{ path('app_logout') }}\" class=\"btn btn-default\" style=\"width: 100px\">Cerrar
                                        sesión</a>#}
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>


   {# <aside class=\"main-sidebar\">
        <div id=\"sidebar\">
            {{ render(controller(
                'App\\\\Controller\\\\MenuController::index',
                { 'codigo': app.request.attributes.get('_route') }
            )) }}
        </div>
    </aside>#}

    <div class=\"content-wrapper\">
        <div class=\"contenido-interno\" style=\"min-height: 900px\">
            {% block body %}

                {% block fos_user_content %}
                    {% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
                {% endblock fos_user_content %}

            {% endblock %}
        </div>
    </div>
</div>
<script src=\"{{ asset('otros/adminlte/bower_components/jquery/dist/jquery.min.js') }}\"></script>
<script src=\"{{ asset('otros/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('otros/adminlte/dist/js/adminlte.min.js') }}\"></script>
{#<script src=\"{{ asset('js/efectomodal.js') }}\"></script>#}
{#<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js\"></script>#}
{#<script src=\"{{ asset('bundles/adminlte/bower_components/lightgallery/dist/js/lightgallery-all.js') }}\"></script>
<script src=\"{{ asset('bundles/adminlte/bower_components/lightgallery/modules/lg-thumbnail.min.js') }}\"></script>
<script src=\"{{ asset('bundles/adminlte/bower_components/lightgallery/modules/lg-fullscreen.min.js') }}\"></script>#}

{% block javascripts %}{% endblock %}

</body>
</html>", "layout1.html.twig", "/var/www/html/datospersonal.sattelital.com.pe/templates/layout1.html.twig");
    }
}
