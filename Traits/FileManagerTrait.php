<?php

namespace Vitlabs\GUIElfinder\Traits;

trait FileManagerTrait {

    public function filemanager() { return $this->generate(__FUNCTION__, func_get_args()); }

}
