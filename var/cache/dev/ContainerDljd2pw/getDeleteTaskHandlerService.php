<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'AppBundle\Handler\DeleteTaskHandler' shared autowired service.

include_once $this->targetDirs[3].'/src/AppBundle/Handler/DeleteTaskHandler.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpFoundation/Session/SessionBagInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpFoundation/Session/Flash/FlashBagInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpFoundation/Session/Flash/FlashBag.php';

return $this->services['AppBundle\Handler\DeleteTaskHandler'] = new \AppBundle\Handler\DeleteTaskHandler(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['session.flash_bag']) ? $this->services['session.flash_bag'] : $this->services['session.flash_bag'] = new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag()) && false ?: '_'});
