<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4kSnFAy\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4kSnFAy/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4kSnFAy.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4kSnFAy\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4kSnFAy\App_KernelDevDebugContainer([
    'container.build_hash' => '4kSnFAy',
    'container.build_id' => '81d60313',
    'container.build_time' => 1691074835,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4kSnFAy');
