<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDtoxkh6\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDtoxkh6/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerDtoxkh6.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerDtoxkh6\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerDtoxkh6\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Dtoxkh6',
    'container.build_id' => 'faaa61d7',
    'container.build_time' => 1543352514,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerDtoxkh6');
