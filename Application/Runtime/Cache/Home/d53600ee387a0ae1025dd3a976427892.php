<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<title>我报名的</title>
<meta charset="utf-8" />

<!-- 作者：qiutian 时间：2015-06-28 描述：PC公共css-->
<link rel="stylesheet" href="/activityTest/Public/pcenter_css/common.20160517_112240.min.css">
<link rel="stylesheet" href="/activityTest/Public/pcenter_css/manage.20160517_112240.min.css">
<link href="/activityTest/Public/pcenter_css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
<!-- endbuild -->
<script src="/activityTest/Public/pcenter_js/jquery-1.7.2.min.js"></script>

</head>
<body class="e7">
<div class="header_public">
  <div class="header_public_t">
    <div class="mem_r" style=""> <a id="a_top_pic" href="#"> <img class="userPic default_img" src="/activityTest/Public/pcenter_img/9sk5r1443013235955.jpg@!user-head" alt="" onerror="#"> </a> <a id="a_top_user" href="#">略悲剧的天天</a>
      <ul class="a_top_nav">
        <li><a href="#">我的活动</a></li>
        <li><a href="#">我报名的活动</a></li>
        <li><a id="a_top_login_out" class="a_hui" href="#" onclick="_user._toLogout()">退出</a></li>
      </ul>
    </div>
  </div>
  <div class="header_public_b">
    <div class="header_public_main">
      <div class="header_public_logo"> <a href="#"> <img title="" alt="图片" src=""> </a> </div>
      <div class="user_address">
        <div class="user_address_t"><span name="-1" id="-1">全国</span></div>
        <ul class="user_address_ul">
          <li><a class="" href="#" ontouchstart="" name="-1" onclick="#" id="#">全国</a></li>
          <li><a class="" href="#" name="beijing" onclick="#" ontouchstart="" id="#">北京</a></li>
          <li><a class="" href="#" name="shanghai" onclick="#" ontouchstart="" id="#">上海</a></li>
          <li><a class="" href="#" name="guangzhou" onclick="#" ontouchstart="" id="#">广州</a></li>
          <li><a class="" href="#" name="shenzhen" onclick="#" ontouchstart="" id="#">深圳</a></li>
          <li><a class="" href="#" name="suzhou" onclick="#" ontouchstart="" id="#">苏州</a></li>
          <li><a class="" href="#" name="changsha" onclick="#" ontouchstart="" id="#">长沙</a></li>
        </ul>
      </div>
      <ul class="header_public_nav">
        <li><a id="find" href="#">找活动</a></li>
        <li><a href="#" id="addPost">+发活动</a></li>
        <li><a id="home" href="#">首页</a></li>
      </ul>
      <div class="header_public_search">
        <input name="" value="" type="text" placeholder="搜索活动" id="pub_search">
        <a href="javascript:void(0)" id="searchBtn" onclick=""><img title="搜索" src="/activityTest/Public/pcenter_img/searcnBtn.png"></a>
        <div class="search_key"> <img src="/activityTest/Public/pcenter_img/searchK_jiao.png">
          <div class="k">
            <p>大家都在搜</p>
            <a href="#" onclick="#);">徒步</a> <a href="#" onclick="#">DIY</a> <a href="#" onclick="#">踏青</a> <a href="#" onclick="#">瑜伽</a> <a href="#" onclick="#">相亲</a> <a href="#" onclick="#">马拉松</a> <a href="#" onclick="#">亲子游</a> <a href="#" onclick="#">骑行</a> <a href="#" onclick="#">路演</a> <a href="#" onclick="#">总裁班</a> <a href="#" onclick="#">创客</a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="header_public_bot"></div>
<script>
function area(id,name,flag,code){
//  if(flag != 1 && flag != 2){
//    _$asyn("/wap/service",{"area_id":id,"area_name":name,"areaFlag":flag});
//    $("#addPost").attr("href","javascript:formSubmit('/post',\""+id+"\",\""+name+"\");")//发布
//    $("#find").attr("href","javascript:formSubmit('/find/-1.html',\""+id+"\",\""+name+"\");")//找活动
//    $("#home").attr("href","javascript:formSubmit('/',\""+id+"\",\""+name+"\");")//首页
//    $(".user_address_t").html("<span name=\""+code+"\" id=\""+id+"\">"+name+"</span>");
//  }
}
/*$("#pub_search").blur(function(){
    setTimeout(function(){
        $(".search_key").hide();
    }, 200);
});
$("#pub_search").focus(function(){
  $(".search_key").show();
});*/
$(".header_public_search").mouseover(function(){
  $(".search_key").show();
});
$(".header_public_search").mouseout(function(){
  $(".search_key").hide();
});
</script>

<div class="mem_top">
  <div class="K">
    <div class="touX_k">
        <a href="/timeline/9sk5r" target="_blank">
          <img class="topPic" src="/activityTest/Public/pcenter_img/9sk5r1443013235955.jpg@!user-head" alt="图片" />
        </a>
    </div>

    <div class="mem_top_c">
      <div class="mem_top_yhxx"><a href="/timeline/9sk5r" target="_blank"><span id="login_user_name"><?php echo session('username'); ?></span></a></div>
    </div>

    <div class="mem_top_n">
      <p>0<br /><span>累计参与者</span></p><img src="/activityTest/Public/pcenter_img/loadingBj.png"/>
      <p>0<br /><span>我的粉丝</span></p><img src="/activityTest/Public/pcenter_img/loadingBj.png" />
      <p>1<br /><span>我的活动</span></p>
    </div>
  </div>
</div>

<div class="mem_out">
  <div class="mem_outK">
<div class="mem_l">
  <ul>
    <li>
      <div class="grzx"><i></i><span>个人中心</span></div>
      <a href="#">账号资料</a>
    </li>
    <li>
      <div class="wfbd"><i></i><span>我发布的</span></div>
      <a href="#">我的活动</a>
      <a href="#">管理报名</a>
    </li>
    <li>
      <div class="wcyd"><i></i><span>我参与的</span></div>
      <a href="#" class="thisOver">我报名的</a>
    </li>
  </ul>
</div>

    <div class="mem_r">
      <div class="ma_r_top"><span><?php echo ($record?我报名了2条活动:暂时没有报名的活动); ?></span></div>

       <div class="goods_content" style="">

        <div class="p_line"></div>
        <div class="p_line_blue"></div>
        <div class="p_line_top"><img src="/activityTest/Public/pcenter_img/icon_line.png" /></div>
		<ul class="goods_item_Ul">
          <!--repeat791677043166-->
          <?php if(is_array($record)): foreach($record as $key=>$re): ?><li class="goods_item_Li">
            <div class="t"><i><img src="/activityTest/Public/pcenter_img/icon_line.png" ></i><p><?php echo ($re["ar_time"]); ?>报名了该活动</p></div>
            <div class="k">
              <a href="#" target="_blank">
              <img class="hd_list_Pic" src="#">
              <!--ms-if-->
              </a>
              <div class="hd_list_titK">
                <div class="hd_list_title">
                  <p><a target="_blank" href="/activityTest/index.php/Home/Index/details?id=<?php echo ($re["ad_id"]); ?>"><?php echo ($re["ad_title"]); ?></a></p>
                  <!--ms-if-->
                  <b>报名截止</b>
                </div>
                <!--ms-if-->
                <div class="hd_list_zt"><p><?php echo ($re["ad_adress"]); ?></p></div>
              </div>

              <div class="ticket blue">
                <div class="l">
                  <p class="fee"><?php echo ($re["ad_pay"]); ?></p>
                  <p class="title"><?php echo ($re['ad_pay']?收费:免费报名); ?></php></p>
                  <p class="name"><?php echo ($re["ad_person"]); ?></p>
                </div>
                <!--ms-if-->
                <!--ms-if-->
                <div class="way num3">未使用</div>
                <!--ms-if-->
                <!--ms-if-->
                <!--ms-if-->
              </div>
              <img class="ticket_tittle" src="/activityTest/Public/pcenter_img/mem_icon_ticket_little.png">
            </div>
          </li><?php endforeach; endif; ?>

          <!--repeat791677043166结束-->

           <!--LI2开始-->

          <!--LI2结束-->

        </ul>
	</div>
</div>
<!--灰色公共底部-->

<div class="footer_gray">
  <div class="footer_gray_nr">
    <div id="footer_info" class="footer_gray_nr_t">


    </div>
    <div class="footer_gray_nr_b" style="padding-bottom:78px">
      <p class="fu_link"><a href="/about" target="_blank">关于我们</a> | <a href="/contactus" target="_blank">联系我们</a> | <a href="/joinus" target="_blank">招聘英才</a></p>
      <p class="footer_bq">版权所有<br />京ICP备XXXXXX号 京公网安备XXXXX<p>
    </div>
  </div>
</div>

</body>
</html>