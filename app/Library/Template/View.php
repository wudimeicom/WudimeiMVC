<?php

namespace App\Library\Template;

use Wudimei\StaticProxy;

class View {

    use StaticProxy;

    public static function createObject() {
        
        return new Template();
    }

}
