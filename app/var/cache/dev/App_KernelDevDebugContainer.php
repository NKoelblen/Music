<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHOf4bZ6\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHOf4bZ6/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHOf4bZ6.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHOf4bZ6\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHOf4bZ6\App_KernelDevDebugContainer([
    'container.build_hash' => 'HOf4bZ6',
    'container.build_id' => 'a816fec7',
    'container.build_time' => 1711001716,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHOf4bZ6');
