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

/* FrameworkBundle:Form:form_errors.html.php */
class __TwigTemplate_95db9cc2c27c0bb7301eb566aa460e0cf6f00c7864faeb4d8caabc17dc80d7a7 extends \Twig\Template
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
        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$view->escape(\$error->getMessage()) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }

    public function getTemplateName()
    {
        return "FrameworkBundle:Form:form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "FrameworkBundle:Form:form_errors.html.php", "C:\\wamp64\\www\\html\\datospersonal.sattelital.com.pe\\vendor\\symfony\\framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
