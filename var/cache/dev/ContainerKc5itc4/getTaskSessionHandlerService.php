<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'AppBundle\Service\TaskSessionHandler' shared autowired service.

include_once $this->targetDirs[3].'/src/AppBundle/Service/TaskSessionHandler.php';

return $this->services['AppBundle\Service\TaskSessionHandler'] = new \AppBundle\Service\TaskSessionHandler(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load('getSessionService.php')) && false ?: '_'});