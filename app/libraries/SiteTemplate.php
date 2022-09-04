<?php

namespace app\libraries;

use Smarty;

class SiteTemplate extends Smarty
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplateDir(VIEWS . DIRECTORY_SEPARATOR . 'site');
        $this->setConfigDir(VIEWS . DIRECTORY_SEPARATOR . 'site/configs');
        $this->setCompileDir(VIEWS . DIRECTORY_SEPARATOR . 'site/templates_c');
        $this->setCacheDir(VIEWS . DIRECTORY_SEPARATOR . 'site/cache');
    }
}
