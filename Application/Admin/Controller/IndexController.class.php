<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    protected $page_num = 5;
    public function login(){
        $this->display('login');
    }
    public function index(){
        //接收表单递交的信息
        $username=$_POST['username'];
        $getPassword=$_POST['password'];
        $code=strtolower($_POST['code']);
        $admindata=D('admin');
        $admindata=$admindata->where('aa_name="'.$username.'"')->find();
        if (isset($_POST['password'])){
            $password=$admindata['aa_password'];
          if($password==$getPassword && $code=="rnnb7"){
             session('admin',$username);
             $url=U('Admin/Index/adminIndex');
             $this->success('登录成功',$url);

            }else {
                $this->error('密码或验证码错误');
            }
        }else{
            $this->error('密码不能为空');
        }


    }
    public function adminIndex(){

        if (isset($_GET['direct'])){
          $direct=$_GET['direct'];
          $this->assign('direct',$direct);
        }else{
            $this->assign('direct','mainfra');
        }
        $this->display('interactive_admin');
    }
    public function left(){
        $adminname=$_COOKIE['adminname'];
        $this->assign('adminname',$adminname);
        $this->display('Index/files/left');
    }
    public function top(){
        $this->display('Index/files/top');
    }
    public function mainfra(){

        $this->display('Index/files/mainfra');
    }
    //活动数据列表
    public function listrenwu(){
        $data=D('Datas');

         $count=$data->findCount();
         $page=$this->pageshow($count, $this->page_num);
         $limit=' limit '.$page->firstRow.','.$page->listRows;
         $page=$page->show();
        $order=" order by ad.ad_id desc";
        $data=$data->findData($order,$limit);    //活动数据信息


         $this->assign('data',$data);
         $this->assign('page',$page);
        $this->display(T('Index/files/listrenwu'));
    }
   //分页样式
    public function pageshow($count,$pagenum) {
        $page=new \Think\Page($count,$this->page_num);  //分页
        $page->setConfig('header', '<td width="50%">共 <span class="right-text09">%TOTAL_PAGE%</span> 页 丨共<span class="right-text09">%TOTAL_ROW%</span> 条数据| 第 <span class="right-text09">%NOW_PAGE%</span> 页</td><td width="49%" align="right">');
        $page->setConfig('first', '首页');
        $page->setConfig('theme','%HEADER% %FIRST% %UP_PAGE%  %DOWN_PAGE% %END%');

        return $page;
    }

    //添加活动页面
    public function addrenwu(){


        $this->display(T('Index/files/addrenwu'));
    }
    //添加活动数据接收
    public function addlogin(){
        if (isset($_POST['ad_content'])){

            $ad_type=$_POST['ad_type']; //获取分类
            $username=session('admin');
            $datas = D("Datas");
            $type=$datas->nameById('ac_name','type',$ad_type);  //转换成类型数字
            $author=$datas->nameById('aa_name','admin',$username);
            $dataArr=array(
                'ad_author' => $author['aa_id'], //发布活动的用户名
                'ad_title' => $_POST['ad_title'],  //标题
                'ad_startime' => $_POST['ad_starttime'] ,  //活动开始时间
                'ad_stoptime' => $_POST['ad_stoptime'],    //活动结束时间
                'ad_adress' => $_POST['ad_adress'],   //详细地址文字存储
                'ad_type' => $type['ac_id'],  //将查询到的类型表中的相应id进行存储

                'ad_payname' => $_POST['ad_payname'],  //费用名称
                'ad_pay' => $_POST['ad_pay'],    //费用
                'ad_maxnum' => $_POST['ad_maxnum'],   //人数上限
                'ad_content' => $_POST['ad_content'],//活动详情
                'ad_person' => $_POST['ad_person'],  //报名联系人
                'ad_tel' => $_POST['ad_tel'],  //报名联系方式
                'ad_time' => date('Y-m-d H:i:s')   //添加活动时间
            );

            $datas=M('datas');


            $result=$datas->add($dataArr);

            if ($result){

                $this->success('新增成功', 'adminIndex?direct=listrenwu');
            }else{
                $this->error('新增失败');
            }
        }
    }

    //报名信息
    public function listgerenrenwu() {
        $record=D('Record');
        $count=$record->count();
        $page=$this->pageshow($count, $this->page_num);
        $limit=' limit '.$page->firstRow.','.$page->listRows;
        $page=$page->show();   //分页
        $record=$record->findRecord(null,$limit,null);

        $this->assign('record',$record);
        $this->assign('page',$page);
        $this->display(T('Index/files/listgerenrenwu'));
    }


    //管理员信息查看

    public function listkehuxinxi() {
        $this->display('index/files/listkehuxinxi');
    }

    //导航信息查看

    public function daohangguanli(){
        $admin=M('admin');
        $top=M('top');
        $topcount=$top->where(' at_pid=0')->count('at_id');
        $page=$this->pageshow($topcount, $this->page_num);
        $limit=' limit '.$page->firstRow.','.$page->listRows;
        $topdata=$top->table($top->getTableName().' t')->join($admin->getTableName().' a on t.at_person=a.aa_id')->getField('at_id,at_name,at_time,aa_name');
        $page=$page->show();   //分页


         $this->assign('topdata',$topdata);
         $this->assign('page',$page);
        $this->display('index/files/daohangguanli');
    }

    //删除方法
    public function delete(){
          $id=intval($_GET['id']);
          $name=strtolower($_GET['name']);
          if($id){
              if ($name=='top'){
                  $model=M('top');
                  $result=$model->where(' at_id='.$id)->delete();
              }

          }


          if ($result){
              $this->success('删除成功','daohangguanli');
          }else{
              $this->error('删除失败');
          }


    }
}