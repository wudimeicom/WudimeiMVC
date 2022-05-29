<?php

namespace App\Library\Template;

use Wudimei\Template\Engine;

class Template {

    protected $template;
    public function loadConfig($cfgFile) {




        
        $config = include $cfgFile;

        $this->template = new Engine($config);
        
        require_once __DIR__ . '/op.php';
        $this->template->addOp(['trans']);
        return $this->template;
    }

    public function make($template, $vars) {
        
        return  $this->template->fetch($template, $vars);
    }

}
