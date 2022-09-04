<?php

namespace app\libraries;

use Smarty;

class BlogTemplate extends Smarty
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplateDir(VIEWS . DIRECTORY_SEPARATOR . 'blog');
        $this->setConfigDir(VIEWS . DIRECTORY_SEPARATOR . 'blog/configs');
        $this->setCompileDir(VIEWS . DIRECTORY_SEPARATOR . 'blog/templates_c');
        $this->setCacheDir(VIEWS . DIRECTORY_SEPARATOR . 'blog/cache');
    }
}
