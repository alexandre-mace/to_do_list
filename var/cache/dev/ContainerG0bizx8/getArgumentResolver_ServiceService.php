<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->services['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('AppBundle\\Controller\\TaskController:addAction' => function () {
    return ${($_ = isset($this->services['service_locator.zj3t5t2']) ? $this->services['service_locator.zj3t5t2'] : $this->load('getServiceLocator_Zj3t5t2Service.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\TaskController:deleteAction' => function () {
    return ${($_ = isset($this->services['service_locator.zj3t5t2']) ? $this->services['service_locator.zj3t5t2'] : $this->load('getServiceLocator_Zj3t5t2Service.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\TaskController:listAction' => function () {
    return ${($_ = isset($this->services['service_locator.zj3t5t2']) ? $this->services['service_locator.zj3t5t2'] : $this->load('getServiceLocator_Zj3t5t2Service.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\TaskController:updateAction' => function () {
    return ${($_ = isset($this->services['service_locator.zj3t5t2']) ? $this->services['service_locator.zj3t5t2'] : $this->load('getServiceLocator_Zj3t5t2Service.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\TaskController::addAction' => function () {
    return ${($_ = isset($this->services['service_locator.zj3t5t2']) ? $this->services['service_locator.zj3t5t2'] : $this->load('getServiceLocator_Zj3t5t2Service.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\TaskController::deleteAction' => function () {
    return ${($_ = isset($this->services['service_locator.zj3t5t2']) ? $this->services['service_locator.zj3t5t2'] : $this->load('getServiceLocator_Zj3t5t2Service.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\TaskController::listAction' => function () {
    return ${($_ = isset($this->services['service_locator.zj3t5t2']) ? $this->services['service_locator.zj3t5t2'] : $this->load('getServiceLocator_Zj3t5t2Service.php')) && false ?: '_'};
}, 'AppBundle\\Controller\\TaskController::updateAction' => function () {
    return ${($_ = isset($this->services['service_locator.zj3t5t2']) ? $this->services['service_locator.zj3t5t2'] : $this->load('getServiceLocator_Zj3t5t2Service.php')) && false ?: '_'};
})));
