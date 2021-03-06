<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'templating' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\templating\\EngineInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\templating\\StreamingEngineInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bridge\\TwigEngine.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Templating\\EngineInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\twig-bundle\\TwigEngine.php';

@trigger_error('The "templating" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

$this->services['templating'] = $instance = new \Symfony\Bundle\FrameworkBundle\Templating\DelegatingEngine($this, []);

$instance->addEngine(new \Symfony\Bundle\TwigBundle\TwigEngine(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['templating.name_parser'] ?? $this->load('getTemplating_NameParserService.php')), ($this->privates['templating.locator'] ?? $this->load('getTemplating_LocatorService.php'))));
$instance->addEngine(($this->privates['templating.engine.php'] ?? $this->load('getTemplating_Engine_PhpService.php')));

return $instance;
