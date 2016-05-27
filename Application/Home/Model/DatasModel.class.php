<?php
namespace Home\Model;
use Think\Model;
class DatasModel extends Model {

   protected $tableName = 'datas';



   //查询活动数据信息
 public function findData($where=null,$order=null,$limit=null){   //条件 ，排序，查询几条数据
     $datas = new Model('datas');
     $sql="SELECT ad.ad_id,ad.ad_content,ad.ad_adress,ad.ad_num,ad.ad_maxnum,ad.ad_pay,ad.ad_payname,ad.ad_person,ad.ad_startime,ad.ad_stoptime,ad.ad_tel,ad.ad_title,ad.ad_type,ad.ad_readnum,au.tg_username
,at.ac_name as type";
     $sql.=" FROM ac_datas as ad ";
     $sql.="INNER JOIN ac_user as au ON ad.ad_author=au.tg_id ";
     $sql.="INNER JOIN ac_type as at ON ad.ad_type=at.ac_id ";
     $sql.=$where.$order.' '.$limit;
//      echo $sql;exit;
     $data=$datas->query($sql);
     //print_r($data);exit;
     return $data;
 }
  //统计活动数据量
 public function findCount($where=null){
     $data=M('datas');
     if ($where){
     $count=$data->where($where)->count();
     }else{
         $count=$data->count();
     }
     return $count;
 }
}

?>