<?php
namespace Home\Model;
use Think\Model;
class RecordModel extends Model {

   protected $tableName = 'record';
   public function findRecord($username){
       $sql="select * from ac_record as ar";
       $sql.=" inner join ac_user as au on ar.ar_name=au.tg_id";
       $sql.="  inner join ac_datas as ad on ar.ar_title=ad.ad_id";

       $where=" where au.tg_username= '".$username."'";
       $sql.=$where;
       $Model =D('record');
       $record=$Model->query($sql);
       return $record;
   }

}

?>