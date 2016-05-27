<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="/activityTest/Public/css/common.css" />
<link rel="stylesheet" type="text/css" href="/activityTest/Public/css/detail.css" />
<link rel="stylesheet" type="text/css" href="/activityTest/Public/css/jquery.css" />
<script type="text/javascript" src="/activityTest/Public/js/lib/jquery-1.7.2.min.js"></script>


</head>

<body>
<!--活动类别选择-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/activityTest/Public/styles/1/basic.css" />
<link rel="stylesheet" type="text/css" href="/activityTest/Public/styles/1/login.css" />
<script type="text/javascript" src="/activityTest/Public/js/code.js"></script>
<script type="text/javascript" src="/activityTest/Public/js/login.js"></script>
</head>
<body>
<script type="text/javascript" src="/activityTest/Public/js/skin.js"></script>
<div id="header">
	<ul>
		<li><a href="#">首页</a></li>
		<li><a href="register">注册</a></li>
		<li><a href="userdata"><?php $username=cookie('username');if($username){echo $username.'的个人中心';}else{echo '登录';} ?></a></li>
		<li><a href="#">退出</a></li>
	</ul>
</div>

<div class="activity_select_tc" id="activity_select_tc">
  <div class="select_K">
    <div class="select_qu_zu">
      <div class="select_qu_tit">分类：</div>
      <ul class="select_ul" id="hd_type">
    <li><a class="thisOver" href="#" id="-1" onclick=""><span>全部活动</span></a></li>
    <?php if(is_array($type)): foreach($type as $key=>$ty): ?><li><a class="" href="#" id="8j" onclick=""><span><?php echo ($ty); ?></span></a></li><?php endforeach; endif; ?>

      </ul>
    </div>
    <div class="select_qu_zu">
      <div class="select_qu_tit">时间：</div>
      <ul class="select_ul" id="hd_time">
        <li><a class="thisOver" href="javascript:void(0);" id="bx" onclick=""><span>不限</span></a></li>
        <li><a class="" href="javascript:void(0);" id="d" onclick=""><span>今天</span></a></li>
        <li><a class="" href="javascript:void(0);" id="w" onclick=""><span>近一周</span></a></li>
        <li><a class="" href="javascript:void(0);" id="m" onclick=""><span>近一月</span></a></li>
        <li><a class="" href="javascript:void(0);" id="z" onclick=""><span>周末</span></a></li>
        <li class="date_Manually" id="select_day">
        	<input type="text" class="post_tiMe4 star" value="" placeholder="手动选择日期" readonly onchange="getStartDate();" style="color: rgb(102, 102, 102);">
            <div class="date_selector" style="display: none;"><div class="nav"><p class="month_nav"><span class="button prev" title="[Page-Up]">«</span> <span class="month_name">五月份</span> <span class="button next" title="[Page-Down]">»</span></p><p class="year_nav"><span class="button prev" title="[Ctrl+Page-Up]">«</span> <span class="year_name">2016</span> <span class="button next" title="[Ctrl+Page-Down]">»</span></p></div><table><thead><tr><th>一</th><th>二</th><th>三</th><th>四</th><th>五</th><th>六</th><th>日</th></tr></thead><tbody><tr><td class="unselected_month" date="2016-4-25">25</td><td class="unselected_month" date="2016-4-26">26</td><td class="unselected_month" date="2016-4-27">27</td><td class="unselected_month" date="2016-4-28">28</td><td class="unselected_month" date="2016-4-29">29</td><td class="unselected_month" date="2016-4-30">30</td><td class="selectable_day" date="2016-5-1">1</td></tr><tr><td class="selectable_day" date="2016-5-2">2</td><td class="selectable_day" date="2016-5-3">3</td><td class="selectable_day" date="2016-5-4">4</td><td class="selectable_day" date="2016-5-5">5</td><td class="selectable_day" date="2016-5-6">6</td><td class="selectable_day" date="2016-5-7">7</td><td class="selectable_day" date="2016-5-8">8</td></tr><tr><td class="selectable_day" date="2016-5-9">9</td><td class="selectable_day" date="2016-5-10">10</td><td class="selectable_day" date="2016-5-11">11</td><td class="selectable_day" date="2016-5-12">12</td><td class="selectable_day" date="2016-5-13">13</td><td class="selectable_day" date="2016-5-14">14</td><td class="selectable_day" date="2016-5-15">15</td></tr><tr><td class="selectable_day today selected" date="2016-5-16">16</td><td class="selectable_day" date="2016-5-17">17</td><td class="selectable_day" date="2016-5-18">18</td><td class="selectable_day" date="2016-5-19">19</td><td class="selectable_day" date="2016-5-20">20</td><td class="selectable_day" date="2016-5-21">21</td><td class="selectable_day" date="2016-5-22">22</td></tr><tr><td class="selectable_day" date="2016-5-23">23</td><td class="selectable_day" date="2016-5-24">24</td><td class="selectable_day" date="2016-5-25">25</td><td class="selectable_day" date="2016-5-26">26</td><td class="selectable_day" date="2016-5-27">27</td><td class="selectable_day" date="2016-5-28">28</td><td class="selectable_day" date="2016-5-29">29</td></tr><tr><td class="selectable_day" date="2016-5-30">30</td><td class="selectable_day" date="2016-5-31">31</td><td class="unselected_month" date="2016-6-1">1</td><td class="unselected_month" date="2016-6-2">2</td><td class="unselected_month" date="2016-6-3">3</td><td class="unselected_month" date="2016-6-4">4</td><td class="unselected_month" date="2016-6-5">5</td></tr></tbody></table></div></li>
      </ul>
    </div>
    <div class="select_qu_zu">
      <div class="select_qu_tit">费用：</div>
      <ul class="select_ul" id="hd_pay">
        <li><a class="thisOver" href="javascript:void(0);" id="-1" onclick=""><span>全部</span></a></li>
        <li><a class="" href="javascript:void(0);" id="1" onclick=""><span>收费</span></a></li>
        <li><a class="" href="javascript:void(0);" id="0" onclick=""><span>免费</span></a></li>
      </ul>
    </div>
  </div>
</div>
<!--中部位置活动筛选-->
<div class="find_outside">
  <!--右侧边栏 start-->
  <div class="find_bar_right">
    <!--免费发活动按钮-->

    <!--热门活动-->
      <div class="hot_week">
        <div class="hot_week_top"><img src="img/blueKuai.png">热门活动</div>
        <ul class="hot_week_ul">
            <li><a href="" data-val="=find_hot" onmousedown="_a_link($(this))" target="_blank"><img src="img/hot1.png" style="margin-right:5px; margin-top:3px;">第12届世界徒步大会，面朝大海，走起！</a><div><b>2,008</b> 报名</div></li>
            <li><a href="" data-val="=find_hot" onmousedown="_a_link($(this))" target="_blank"><img src="img/hot2.png" style="margin-right:5px; margin-top:3px;">🔥中国国际动漫节cosplay超级盛典少年组选拔赛火热报名中</a><div><b>1,551</b> 报名</div></li>
            <li><a href="" data-val="=find_hot" onmousedown="_a_link($(this))" target="_blank"><img src="img/hot3.png" style="margin-right:5px; margin-top:3px;">免费职业培训报名：茶艺师/西点师/调酒师/化妆师/插花员/育婴师</a><div><b>1,474</b> 报名</div></li>
            <li><a href="" data-val="=find_hot" onmousedown="_a_link($(this))" target="_blank"><img src="img/hot4.png" style="margin-right:5px; margin-top:3px;">2016创新中国春季峰会暨创新中国展览会</a><div><b>1,324</b> 报名</div></li>
            <li><a href="" data-val="=find_hot" onmousedown="_a_link($(this))" target="_blank"><img src="img/hot5.png" style="margin-right:5px; margin-top:3px;">中国·义乌第二届互联网+网货论坛暨品牌网货供销对接大会</a><div><b>1,000</b> 报名</div></li>
            <li><a href="" data-val="=find_hot" onmousedown="_a_link($(this))" target="_blank"><img src="img/hot6.png" style="margin-right:5px; margin-top:3px;">跨界、融合、分享 IDC产业赢在未来</a><div><b>992</b> 报名</div></li>
            <li><a href="" data-val="=find_hot" onmousedown="_a_link($(this))" target="_blank"><img src="img/hot7.png" style="margin-right:5px; margin-top:3px;">2016四季瑞兽线上马拉松●春季青龙</a><div><b>867</b> 报名</div></li>
            <li><a href="" data-val="=find_hot" onmousedown="_a_link($(this))" target="_blank"><img src="img/hot8.png" style="margin-right:5px; margin-top:3px;">第五届CIP国际少儿模特大赛苏州地区 【报名通道】</a><div><b>703</b> 报名</div></li>
            <li><a href="" data-val="=find_hot" onmousedown="_a_link($(this))" target="_blank"><img src="img/hot9.png" style="margin-right:5px; margin-top:3px;">【春暖花开】踏春公益跑 线上一起来</a><div><b>635</b> 报名</div></li>
            <li><a href="" data-val="=find_hot" onmousedown="_a_link($(this))" target="_blank"><img src="img/hot10.png" style="margin-right:5px; margin-top:3px;">助力北京冬奥，2022相约大崇礼！志愿者备战营！送冬奥纪念币！</a><div style="border-bottom-style: none;"><b>471</b> 报名</div></li>
        </ul>
      </div>
  </div>
  <!--右侧边栏 end-->
  <div class="find_main">
  <ul class="find_main_ul">
		<!--issubtitle判断是否有副标题，有使用issubtitle-->
		<?php if(is_array($data)): foreach($data as $key=>$vo): ?><li class="find_main_li img">
          <div class="find_main_div">
            <div class="find_main_title"><a href="/activityTest/index.php/Home/Index/details?id=<?php echo ($vo["ad_id"]); ?>" data-val="=find" onmousedown="_a_link($(this))" target="_blank"><h4><?php echo ($vo["ad_title"]); ?></h4></a></div>
            <div class="find_main_fixH">
                <div class="find_main_subtitle"></div>

            <div class="find_main_time"><img src="img/icon_time.png" alt=""><p><?php echo ($vo["ad_startime"]); ?></p></div>
            <div class="find_main_address"><img src="img/icon_addr.png" alt=""><p><a href="javascript:void(0)"><?php echo ($vo["ad_adress"]); ?></a></p></div>
            </div>
            <div class="find_main_b">
              <div class="find_main_b_l">

                <span style="display: inline-block;line-height: 25px;float: left;margin-left: 10px;margin-top: 12px;font-size: 14px;color: #999;max-width: 250px;white-space: nowrap;text-overflow: ellipsis;-o-text-overflow: ellipsis;overflow: hidden;">发起人：</span><a href="" target="_blank" class="hd_mem_name_A"><?php echo ($vo["tg_username"]); ?></a>
              </div>
              <div class="find_main_b_r">
               <p class="find_hd_p">
                    <span class="find_hd_join_0"><?php echo ($vo["ad_num"]); ?></span> 报名
                  <span class="find_hd_join_num">
                    <!-- 有限制人数的活动 并且报名人数小于10 显示限X名额-->
                      <!-- 无限制人数的活动 并且报名人数小于10 显示不限名额-->
                                <b></b>
                  </span> | <span class="find_hd_read_num"><?php echo ($vo["ad_readnum"]); ?></span> 浏览
                </p>
              </div>
            </div>
          </div>
        </li><?php endforeach; endif; ?>

      <!-- pageInfo.recordList 判断 end-->
    </ul>
    <!--列表详情 end-->
     <!--分页 start-->
<!-- 分页 start -->
<div class="join_feny"><?php echo ($page); ?></div>

<!-- 分页 end -->
    <!--分页 end-->
   </div>
</div>
<script>
var _info={
  _type:"find",
  _total_page:"399",
  _category_name:"#",
  _domain:"#",
  _category_id:"-1",
  _img1_url:"",
  _start_date:"",
  _start_time:"",
  _is_charge:"",
  _type:"find",
  _total_page:399
};
var _qkInput = {
  _id: "",
  _hide: function(id, qk) {
    $(id).val("");
    $(qk).css("display", "none");
  },
  _hide2: function(d, h, qk) {
    $(d, h).val("");
    $(qk).css("display", "none");
  },
  _show: function() {
    $(".post_d_t_input").each(function() {
      if ($(this).val() != "") {
        $(this).parent().children(".qK").css("display", "block");
      }
    });
  },
  _show2: function() {
    if ($(".post_siTe").val() != "") {
      $(".k_site input").removeClass("jiao");
      $("#qK4").css("display", "block");
    }
  }
};
$(document).ready(function() {
//  if($(".join_feny a").length==0){
//    $(".join_feny").hide();

    if($(".find_main_ul li").length == 0){
        $(".join_feny").css("background","none").html('<div class="fullHd"><img src="img/xiao.png"><p>木有找到相关的活动，试试别的筛选条件吧~</p></div>');
    }

});
</script>
<script type="text/javascript" src="/activityTest/Public/js/lib/comm.20160512_195352.min.js"></script>
<script type="text/javascript" src="/activityTest/Public/js/lib/detail.20160514_180809.min.js"></script>
<script type="text/javascript" src="/activityTest/Public/js/lib/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="/activityTest/Public/js/lib/qrcode.js"></script>
<script type="text/javascript" src="/activityTest/Public/js/lib/jquery_date.js"></script>

</body>
</html>