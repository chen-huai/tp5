<?php

namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Request;

class City extends Controller
{
    public function index()
    {
        if (Request::instance()) {
            $data = Request::instance();
            $id = $data['pro_id'];
            $region = Db::name('packet_region')->where(['parent_id' => $id])->select();

            $opt = '<option>--请选择--</option>';
            foreach ($region as $key => $val) {
                $opt .= "<option value='{$val['id']}'>{$val['name']}</option>";
            }
            echo json_encode($opt);
            die;
        }

        $region = Db::name('packet_region')->where(['level_type' => 1])->select();
        $this->assign('region', $region);

        return $this->fetch();
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }


}