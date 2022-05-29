<?php

namespace App\Frontend;

class ArticleController {

    public function show($id) {
        echo $id;
    }

    public function category($ctgName, $ctgId) {
        echo 'ctg name:' . $ctgName . ' , ctg id:' . $ctgId;
    }

    public function regex($ctgName, $ctgId) {
        echo 'ctg name:' . $ctgName . ' , ctg id:' . $ctgId;
    }

}
