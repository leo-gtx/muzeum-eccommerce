<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKMgfpLU\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKMgfpLU/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKMgfpLU.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKMgfpLU\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerKMgfpLU\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'KMgfpLU',
    'container.build_id' => 'b1970760',
    'container.build_time' => 1727978304,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKMgfpLU');
