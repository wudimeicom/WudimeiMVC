<?php

namespace App\Frontend;

use View;
use Session;

class InfoController {

    public function success() {
        $vars['message'] = Session::get('message');
        return View::make("frontend.success", $vars);
    }

    public function error() {
        $vars['message'] = Session::get('message');
        return View::make("frontend.error", $vars);
    }

}
