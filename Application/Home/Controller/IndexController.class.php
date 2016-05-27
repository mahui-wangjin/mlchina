<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    protected $page_num = 3;
    public function post(){

            $this->display('post');



    }
    //注册界面
    public function register(){

        $this->display('user-register');

    }
    //加入数据库验证
    public function adduser(){

        $userArr=array(
               'tg_username'=>$_POST['username'],   //用户名
            'tg_password'=>$_POST['password'],   //密码
            'tg_question'=>$_POST['question'],   //问题
            'tg_answer'=>$_POST['answer'],   //密码回答
            'tg_sex'=>$_POST['sex'],   //性别
            'tg_email'=>$_POST['email'],   //邮箱
            'tg_qq'=>$_POST['qq'],   //QQ
            'tg_url'=>$_POST['url'],   //网址
            'tg_reg_time'=>date('Y-m-d H-i-s'),  //注册时间
            'tg_last_time'=>date('Y-m-d H-i-s'),  //最后登录时间
            'tg_last_ip'=>get_client_ip(),  //获取Ip地址

        );
        $user=M('user');
        $result=$user->add($userArr);

        if ($result){
            $this->success('注册成功','login');
        }else{
            $this->error('注册失败');
        }
    }

    //显示发布的活动页面
    public function showData() {

        //活动分类显示
        $type=M('type');
        $type=$type->where('ac_pid=0')->getfield('ac_name',true);

        $datas=D('datas');   //活动数据model

        $count=$datas->findCount();
        $page=new \Think\Page($count,$this->page_num);//实例化分页类 传入总记录数和每页显示的记录数

        $show=$page->show();   //分页显示输出
        $limit=' limit '.$page->firstRow.','.$page->listRows;
        $data=$datas->findData($limit);    //活动数据信息


            $this->assign('type',$type);
            $this->assign('data',$data);
            $this->assign('page',$show);
            $this->display('activity');
    }
    //登录界面
    public function login(){

        $this->display('user-login');

    }
    //登录判断
    public function auto() {
      $username=$_POST['username'];
      $password=$_POST['password'];
      $user=M('user');

      $count=$user->where('tg_username="'.$username.'" and tg_password= "'.$password.'"')->count();
      if ($count>0){
          cookie('username',$username);
          $this->success('登录成功','showData');
      }else{
          $this->error('登录失败，请核对密码和用户名');
      }
    }

    //活动详情页面
    public function details() {
        if (isset($_GET['id'])){
         $id=$_GET['id'];
         $data=D('Datas');
         $where=' where ad.ad_id= '.$id.' ';
         $data=$data->findData($where);


         $this->assign('data',$data);
        }else{

        }
        $this->display('details');
    }
//个人报名记录
    public function userdata(){
        $username=cookie('username');
        if ($username){
            $record=D('record');
            $record=$record->findRecord($username);
            $this->assign('record',$record);
        }

        $this->display('pcenter_registered');
    }
    //报名提交
     public function userrecord(){
         $username=cookie('username');
         $user=M('user');
         $userID=$user->where(' tg_username = "'.$username.'" ')->getField('tg_id');
         if (isset($_POST['tel'])){


         $recordArr=array(
           'ar_name' => $userID,  //用户编号
          'ar_time' => date('Y-m-d H-i-s'),  //报名时间
          'ar_title'=>$_POST['id'],   //活动编号
             'ar_tel'=>$_POST['tel'],   //联系方式
             'ar_qq'=>$_POST['qq'],   //QQ
             'ar_adress'=>$_POST['adress'],  //地址
             'ar_person'=>$_POST['name']   //姓名
         );
         $record=M('record');
         $result=$record->add($recordArr);
         if ($result){
            $this->success('报名成功','showData');
         }{
            $this->error('报名失败');
         }


             }


     }

     public function cord() {
         $this->display('user');
     }

}