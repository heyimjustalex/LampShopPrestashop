<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEhv2zec\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEhv2zec/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerEhv2zec.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerEhv2zec\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerEhv2zec\appProdProjectContainer([
    'container.build_hash' => 'Ehv2zec',
    'container.build_id' => '83b63a0a',
    'container.build_time' => 1634738990,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEhv2zec');