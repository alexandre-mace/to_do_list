<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXdrbasw\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXdrbasw/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXdrbasw.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXdrbasw\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXdrbasw\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Xdrbasw',
    'container.build_id' => '40dec3d8',
    'container.build_time' => 1539888855,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerXdrbasw');
