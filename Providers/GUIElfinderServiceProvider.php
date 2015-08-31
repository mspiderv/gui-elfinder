<?php

namespace Vitlabs\GUIElfinder\Providers;

use Vitlabs\GUICore\Providers\ImplementationServiceProvider;

class GUIElfinderServiceProvider extends ImplementationServiceProvider
{
    protected $contractsNamespace = 'Vitlabs\GUIAdmin\Contracts\FileManager\\';

    protected $implementationsNamespace = 'Vitlabs\GUIElfinder\FileManager\\';

    protected $bindElements = [
        'FileManager',
    ];

    protected function getViewPath()
    {
        return __DIR__ . '/../Resources/views/';
    }

    protected function getAssetsPath()
    {
        return __DIR__ . '/../Assets/';
    }

    protected function publishConfig()
    {
        return [
            __DIR__ . '/../Config/config.php' => 'gui-elfinder'
        ];
    }

}
