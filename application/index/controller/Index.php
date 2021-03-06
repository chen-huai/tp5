<?php
namespace app\index\controller;
//文件路径 thinkphp/labary/think/Request.php	//文件路径 thinkphp/labary/think/Request.php
use think\Request;
use think\Db;
use think\Controller;
//自定义常量
define('APP_PA','这个是自定义常量的量');
class Index extends Controller
{
    public function index()
    {

        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';

    }
	 public function test()
    {
		phpinfo();

    }
    public function request()
    {
        //实例化对象http://www.tp.com/index.php/index/index/request
        $request = Request::instance();
        //整个数据集
        //dump($request).'<br />';
        //获取当前域名www.tp.com
        echo '当前的域名是：'.$request->domain().'<br />';
        //获取当前的入口文件
        echo '当前的入口文件是：'.$request->baseFile().'<br />';
        //后缀需要传入文件www.tp.com/index.html
        echo '当前的后缀是：'.$request->ext().'<br />';
        echo '当前的操作是：'.$request->action().'<br />';
        echo '当前的请求方法是：'.$request->method().'<br />';
        echo '获取变量'.'<br />';
        //变量需要传入变量www.tp.com/?name=张三
        echo $request->param('name');
        //获取所有变量需要传入变量www.tp.com/index.php/index/index/request/?name=张三&password=123456
        dump($request->param());
        dump(input(''));
        dump(input('param.name'));
        //get 获取类型，将name张三改为李四
        dump($request->get(['name'=>'李四']));
        //伪静态：将config.php   第84行改为'url_html_suffix'        => 'html|json'
        //www.tp.com/index.json
        dump($request->ext());
    }


    public function db()
    {
        //数据库
        //配置数据库，database.php
        //原生查询，query用于查询，execute用与增删改
        //调用db类
        //插入数据http://www.tp.com/index.php/index/index/db
        //index模块
        /*
        $result = Db::execute('insert into think_data (name,status) values ("周杰伦",1)');
        $result = Db::execute('insert into think_data (name,status) values ("林俊杰",1)');
        $result = Db::execute('insert into think_data (name,status) values ("许嵩",0)');
        */
        //修改数据
        /*
        $result = Db::execute('update think_data set name = "张学友",status=0 where id=1');
        */
        //删除数据
        /*
        $result = Db::execute('delete from think_data where id=1');
        */
        //查询数据
        /*
        $result =Db::query('select * from think_data');
        dump($result);
        */
        //查询构造器封装的数据库方法
        //插入数据
        /*
        $result = Db::table('think_data')->insert(['name'=>'黄晓明','status'=>1]);
        */
        //更改数据
        //$result = Db::table('think_data')->where('id',2)->update(['name'=>'赵薇','status'=>0]);
        //查询数据select()前面不写where，查询所有。
        //$result = Db::table('think_data')->where('id',1)->select();
        //删除数据
        //$result = Db::table('think_data')->where('id',1)->delete();
        //由于我们在配置文件中设置了数据表的前缀think_,因此table方法可以改为name方法；
        //$result = Db::name('data')->select();
        //链式操作
        /*
         $result = Db::name('data')
             ->field('id,name')//查询字段
             ->order('id','desc')//降序顺序
             ->where('status',1)
             ->limit(10)
             ->select();
         */
        //查询第一个数据
        //$result = Db::name('data')->find();
        //模糊查询where(字段名，表达式，查询值)
        $result = Db::name('data')->where('name','like','%明%')->  select();
        //区间查询
        //$result = Db::name('data')->where('id','BETWEEN',[2,4])->select();
        //插入多条数据
        /*
        $data = [
            ['name'=>'林志玲','status'=>1],
            ['name'=>'林志颖','status'=>1],
        ];
        $result = Db::table('think_data')->insertAll($data);
        */
        //更改字段值
        //$result = Db::name('data')->where('id',2)->setField('name','刘德华');
        //字段自动加减数字
        //$result = Db::name('data')->where('id',2)->setInc('status');
        //$result = Db::name('data')->where('id',4)->setDec('status',2);
        dump($result);
    }
    public function view()
    {
        //赋值给模板变量
        //需要在当前模块下有个view视图，同时需要与控制器同名的文件夹,与function一致的文件
        //http://www.tp.com/index/index/view
        /*
       $name = '哈哈';
       $email = 'haha@qq.com';
       $this->assign('name',$name);
       $this->assign('email',$email);
       */
        /*
        //	或者批量赋值
        $this->assign([
            'name'		=>	'ThinkPHP',
            'email'	=>	'thinkphp@qq.com'
        ]);

        //	模板输出，fetch里面传参数对应跳转到view中的文件
        //return	$this->fetch('index');
        //return	$this->fetch('view');
        //return	$this->fetch('test');
        //不写默认同function名字的文件
         return	$this->fetch();
         //跨模块调用
        //return	$this->fetch('user/user');
        */

        //传入参数
        /*
        return	$this->fetch('view',	[
            'name'		=>	'Think',
            'email'	=>	'thinkphp@qq.com'
        ]);
        */

        //助手函数

        return	view('index',	[
            'name'		=>	'ThinkPHP',
            'email'	=>	'thinkphp@qq.com'
        ]);


    }
    public function export()
    {
        //变量输出http://www.tp.com/index/index/export
        /*$name = 'think';
        $this->assign('name',$name);
        return	$this->fetch('index');*/
        //系统变量的输出
        //return $this->fetch();
        /*
        //调用非本文件的输出，会出错，需要assign
        $this->assign('name','haha');
        return $this->fetch('index');
        */

        //变量加密

        $this->assign('name','haha');
        $this->assign('time',time());
        return $this->fetch();

        //模板布局调用，一般情况下，不开启；
        //需要在config配置文件中添加《'layout_on'=>true,'layout_name'=>'layout'》；
        //需要在view中建立一个layout.html文件，
        //{include	file="public/header"	/}
        //	{__CONTENT__}这个即为替换内容，头部和底部一般没有变化
        //{include	file="public/footer"	/}
        //只要将调用的文件的格式删除即可开启模板布局
        //文件开头{__NOLAYOUT__}可以禁止模板布局

        //还有一种直接在文件开头中调用标签{layout name="layout" /}即可，name值可以改为自己的模板布局


        /*模板继承
        标签{extend name="base"}即可继承基础模板，{__block__}
        继承后该文件继承之外的内容无法显示
        */



    }
    public function list()
    {
        /*包含文件
        有文件包含会排斥模板布局和模板继承
        */
        return $this->fetch();
    }
}
