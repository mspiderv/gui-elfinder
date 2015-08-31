<?php

namespace Vitlabs\GUIElfinder\FileManager;

use Vitlabs\GUICore\Traits\ElementTrait;

abstract class Element {

    use ElementTrait;

    public function getViewsFolder()
    {
        return 'elements';
    }

}
