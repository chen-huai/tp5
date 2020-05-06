<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Citydata as UserModel;
use think\Db;

class Citydata extends Controller {
	//获取省和直辖市
    public function index(){
		$listObj = Db::table('citydata');
		$whereprovince['top_parentid'] = 0;
		$listprovince = $listObj->where($whereprovince)->select();
		$this->assign("province_list",$listprovince);
        return $this->fetch();
//        $this->display();
    }
	//获取地级市
	public function get_citys(){
		$listObj = Db::table('citydata');
		$where['top_parentid'] = I('province_id');
		$where['level'] = 2;
		$list = $listObj->where($where)->select();
		$data=array('status'=>0,'citydata'=>$list);
		header("Content-type: application/json");
		exit(json_encode($data));
	}
	//获取地级县
	public function get_district(){
		$listObj = Db::table('citydata');
		$where['parent_id'] = I('city_id');
		$where['level'] = 3;
		$list = $listObj->where($where)->select();
		$data=array('status'=>0,'district'=>$list);
		header("Content-type: application/json");
		exit(json_encode($data));
	}
}