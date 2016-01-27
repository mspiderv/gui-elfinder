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

    protected function getPackageName()
    {
        return 'gui-elfinder';
    }

    protected function assetDirs()
    {
        return [
            __DIR__ . '/../Assets/'
        ];
    }

    protected function viewDirs()
    {
        return [
            __DIR__ . '/../Resources/views/'
        ];
    }

}
