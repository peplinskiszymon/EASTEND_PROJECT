<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXBqwcXE\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXBqwcXE/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXBqwcXE.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXBqwcXE\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXBqwcXE\App_KernelDevDebugContainer([
    'container.build_hash' => 'XBqwcXE',
    'container.build_id' => '216215b3',
    'container.build_time' => 1596088986,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXBqwcXE');
