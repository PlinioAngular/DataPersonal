<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_user.change_password.form.type' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Form/Type/ChangePasswordFormType.php';

return $this->privates['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('App\\Entity\\Usuario');
