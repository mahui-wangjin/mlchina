<?php
namespace Admin\Model;
use Think\Model\RelationModel;
class UserModel extends RelationModel {

   protected $tableName = 'user';
   protected $_link = array(
       'Datas'=>array(
           'mapping_type'  => self::HAS_MANY,
           'class_name'    => 'Datas',
           'foreign_key'   => 'ad_author',
           'mapping_name'  => 'activitydatas',
           'mapping_order' => 'ad_num desc',
           ),

   );
}

?>