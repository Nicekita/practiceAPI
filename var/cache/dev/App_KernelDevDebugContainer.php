<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCpG70TP\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCpG70TP/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCpG70TP.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCpG70TP\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCpG70TP\App_KernelDevDebugContainer([
    'container.build_hash' => 'CpG70TP',
    'container.build_id' => '79310b6a',
    'container.build_time' => 1593095303,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCpG70TP');
