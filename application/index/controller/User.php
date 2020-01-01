<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\User as UserModel;
class User extends Controller
{
    //URL访问规则：http://serverName/index.php（或者其它应用入口文件）/模块/控制器/操作/[参数名/
    //新增数据http://www.tp.com/index/user/add
    //首先需要user同名的数据库,即think_user，因为配置文件已经有申明为think_前缀
    //index模块目录,user控制器,add方法
    //model为模型
    public function add()
    {
        /*
        $user = new UserModel();
        $user->name = '刘云';
        $user->email = 'liuyun@qq.com';
        $user->birthday = strtotime('1989-02-09');
        if($user->save())
        {
            return '用户新增成功';
        }else{
            return '用户新增失败';
        */
        /*
        $user['name'] = '看云';
        $user['email'] = 'kanyun@qq.com';
        $user['birthday'] = strtotime('1989-02-09');
        if($result=UserModel::create($user))
        {
            return '用户新增成功';
        }else{
            return '用户新增失败';
           */
        $user = new UserModel();
        $list=[
            ['name'=>'张三','email'=>'zhangsan@qq.com','birthday'=>strtotime('1999-5-6')],
            ['name'=>'李四','email'=>'lisi@qq.com','birthday'=>strtotime('2000-12-25')],
            ['name'=>'王五','email'=>'wangwu@qq.com','birthday'=>strtotime('2001-11-6')],
        ];
        if($user->saveAll($list))
        {
            return '用户新增成功';
        }else{
            return '用户新增失败';
        }
    }
    //更新数据
    public function update()
    {
        //先查找后更新http://tp.com/index/user/update
        /*
        $user = UserModel::get(1);
        //dump($user);
        $user->name = '刘云';
        $user->email = 'liuyun@qq.com';
        if($user->save())
        {
            return '用户更新成功';
        }else{
            return '用户更新失败';
        }
        */
        //$user = UserModel::get(1);
        //$user->save(['name'=>'刘涛','email'=>'liutao@qq.com'],['id'=>1]);
        /*
        //批量更新数据，实例化
        $user = new UserModel();
        $list = [
            ['id'=>2,'name'=>'蒋欣','email'=>'jiangxin@qq.com'],
            ['id'=>3,'name'=>'钟汉良','email'=>'zhonghanliang@qq.com'],
        ];
        $user->saveAll($list);
        */
        /*
        $user = new UserModel();
        $user->update(['id'=>4,'name'=>'郑伊健','email'=>'zhengyijina@qq.com']);
        */
        UserModel::update(['id'=>5,'name'=>'刘德华','email'=>'liudehua@qq.com']);

    }
    //查询数据
    public function select()
    {
        /*
        //取出主键，根据字段查询
        $user = UserModel::get(1);
        //dump($user);
        echo $user->name.'<br />';
        echo $user->email.'<br />';
        */
        /*
        //用数组查询
        $user = UserModel::get(['name'=>'蒋欣']);
        echo $user->email;
        */
        /*
        //实例化
        $user = new UserModel();
        $result=$user->where('name','钟汉良')->find();
        echo $result->email;
        */
        //获取多个数据,id为1.2.3的数据
        /*
        $list=UserModel::all([5,7,9]);
        foreach ($list as $key=>$value)
        {
            echo $value->name.'<br />';
            echo $value->email.'<br />';
        }
        */

        /*
        //
        $user = new UserModel();
        $result = $user->where('id',2)->limit(2)->order('id','desc')->select();
        //dump($result);
        foreach ($result as $key=>$value)
        {
            echo $value['name'].'<br />';
            echo $value['email'].'<br />';
        }
        */

        //聚合函数的调用
        $user = new UserModel();
        echo $user->count('id').'<br />';
        echo $user->max('birthday');

    }

    //删除数据
    public function delete()
    {
        /*
        $user = UserModel::get(1);
        if ($user->delete()){
            return '删除成功';
        }else{
            return '删除失败';
        }
        */
        /*
        if (UserModel::destroy(2))
        {
            return '删除成功';
        }else{
            return '删除失败';
        }
        */
        //删除多条数据
        /*
        if (UserModel::destroy([3,4]))
        {
            return '删除成功';
        }else{
            return '删除失败';
        }
        */
        //条件删除
        /*
        if (UserModel::destroy(['name'=>'张三']))
        {
            return '删除成功';
        }else{
            return '删除失败';
        }
        */
        $result = UserModel::where('id','>',7)->delete();
        if ($result)
        {
            return '删除成功';
        }else{
            return '删除失败';
        }

    }
    //内置标签
    public function tag()
    {

        //前置条件，需要extends controller
        //http://www.tp.com/index/user/tag
        $list = UserModel::all();
        $this->assign('list',$list);
        return $this->fetch();
    }
}
