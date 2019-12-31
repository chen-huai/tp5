<?php
namespace app\index\controller;
use app\index\model\User as UserModel;
class User
{

    //URL访问规则：http://serverName/index.php（或者其它应用入口文件）/模块/控制器/操作/[参数名/
    //新增数据http://www.tp.com/index/user/add
    //首先需要user同名的数据库
    //index模块目录,user控制器,add方法
    //model为模型

    public function add()
    {
        $user = new UserModel();
        $user->name = '刘云';
        $user->email = 'liuyun@qq.com';
        $user->birthday = strtotime('1989-02-09');
        if($user->save())
        {
            return '用户新增成功';
        }else{
            return '用户新增失败';
        }
    }

}
