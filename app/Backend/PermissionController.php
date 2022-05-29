<?php

namespace App\Backend;

use App\Models\PermissionModel;
use Menu;
use View;
use Request;
use Redirect;
use App\Library\Security;

class PermissionController {

    public function index() {
        #@ abc('name')

        if ($redirect = Security::check('permission.read'))
            return $redirect;

        $vars = [];
        $page = getInt("page", 1);
        $keywords = get('keywords');

        $perm = new PermissionModel();

        if (trim($keywords) != "") {
            $kw = '%' . $keywords . '%';
            $perm = $perm->whereRaw(' (  id like ? or code like ? or  name like ? or  description like ? ) ', [$kw, $kw, $kw, $kw]);
        }

        $vars['pgPermissions'] = $perm->paginate(10, $page);

        Menu::active('user,permissions');

        $v = View::make("backend.permission.index", $vars);

        return $v;
    }

    public function create() {
        if ($redirect = Security::check('permission.create'))
            return $redirect;
        $vars = ['method' => 'add'];
        if (Request::isPost()) {
            $row = array_only($_POST, 'code,name,description');
            $pid = PermissionModel::insert($row);
            // echo $gid;
            return Redirect::to(url_b('/permissions'))->withSuccess(trans("global.create_successfully"));
        }
        Menu::active('user,permissions');
        return View::make("backend.permission.form", $vars);
    }

    public function edit() {
        if ($redirect = Security::check('permission.update'))
            return $redirect;
        $vars = ['method' => 'edit'];
        if (Request::isPost()) {
            $id = intval(post("id"));
            $row = array_only($_POST, 'code,name,description');
            $pid = PermissionModel::where("id", $id)->update($row);
            // echo $gid;
            return Redirect::to(url_b('/permissions'))->withSuccess(trans("global.create_successfully"));
        }
        $id = getInt("id");
        $vars['item'] = PermissionModel::find($id);
        Menu::active('user,permissions');

        $v = View::make("backend.permission.form", $vars);

        return $v;
    }

    public function delete() {
        if ($redirect = Security::check('permission.delete'))
            return $redirect;
        $id = getInt("id");
        PermissionModel::where("id", $id)->delete();
        return Redirect::back()->withSuccess(trans("global.delete_successfully"));
    }

}
