<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZtr6F8U\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZtr6F8U/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerZtr6F8U.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerZtr6F8U\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerZtr6F8U\srcApp_KernelProdContainer([
    'container.build_hash' => 'Ztr6F8U',
    'container.build_id' => 'ccce6520',
    'container.build_time' => 1577728706,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZtr6F8U');