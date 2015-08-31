<?php

namespace Vitlabs\GUIElfinder\FileManager;

use Vitlabs\GUIAdmin\Contracts\FileManager\FileManagerContract;

class FileManager extends Element implements FileManagerContract {

    protected static $id = 1;

    public function __construct()
    {
    }

    public function needResources()
    {
        return [
            'css' => [

                // jQuery and jQuery UI
                'http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css',

                // elFinder CSS
                '/packages/barryvdh/elfinder/css/elfinder.min.css',
                '/packages/barryvdh/elfinder/css/theme.css',

            ],
            'js' => [

                // jQuery and jQuery UI
                'AdminLTE-2.2.0/plugins/jQuery/jQuery-2.1.4.min.js',
                'http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js',

                // elFinder JS
                '/packages/barryvdh/elfinder/js/elfinder.min.js',

                // Initialize elfinder
                'js/elfinder-init.js',

            ],
            'config' => [
                'gui-elfinder.connectorURL',
            ],
        ];
    }

    public function render()
    {
        $data = [];

        $data['id'] = 'elfinder-' . (static::$id++);

        return $this->renderView('elfinder', $data);
    }

}
