<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.qnc47gj' shared service.

return $this->privates['.service_locator.qnc47gj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'security' => ['privates', 'security.helper', 'getSecurity_HelperService.php', true],
    'usuario' => ['privates', '.errored..service_locator.qnc47gj.App\\Entity\\Usuario', NULL, 'Cannot autowire service ".service_locator.qnc47gj": it references class "App\\Entity\\Usuario" but no such service exists.'],
], [
    'security' => '?',
    'usuario' => 'App\\Entity\\Usuario',
]);
