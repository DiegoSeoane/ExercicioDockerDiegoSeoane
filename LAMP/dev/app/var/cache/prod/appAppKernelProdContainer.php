<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGxqs7io\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGxqs7io/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerGxqs7io.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerGxqs7io\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerGxqs7io\appAppKernelProdContainer([
    'container.build_hash' => 'Gxqs7io',
    'container.build_id' => 'fc7dcdf0',
    'container.build_time' => 1709983812,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGxqs7io');
