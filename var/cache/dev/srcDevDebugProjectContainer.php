<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUBG9f0G\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUBG9f0G/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerUBG9f0G.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerUBG9f0G\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerUBG9f0G\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'UBG9f0G',
    'container.build_id' => '592bcc11',
    'container.build_time' => 1528389189,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerUBG9f0G');
