<?php

namespace Vitlabs\GUIElfinder\FileManager;

use Vitlabs\GUICore\Traits\ElementTrait;

abstract class Element {

    use ElementTrait;

    public function getPackageName()
    {
        return 'gui-elfinder';
    }

    public function getViewsFolder()
    {
        return 'elements';
    }

}
