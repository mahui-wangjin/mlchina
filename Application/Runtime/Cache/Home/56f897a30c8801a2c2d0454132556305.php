<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">

<style type="text/css">
.amap-indoor-map .label-canvas {
	position: absolute;
	top: 0;
	left: 0
}
.amap-indoor-map .highlight-image-con * {
	pointer-events: none
}
.amap-indoormap-floorbar-control {
	position: absolute;
	margin: auto 0;
	bottom: 165px;
	right: 12px;
	width: 35px;
	text-align: center;
	line-height: 1.3em;
	overflow: hidden;
	padding: 0 2px
}
.amap-indoormap-floorbar-control .panel-box {
	background-color: rgba(255,255,255,.9);
	border-radius: 3px;
	border: 1px solid #ccc
}
.amap-indoormap-floorbar-control .select-dock {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	box-sizing: border-box;
	height: 30px;
	border: solid #4196ff;
	border-width: 0 2px;
	border-radius: 2px;
	pointer-events: none;
	background: linear-gradient(to bottom, #f6f8f9 0, #e5ebee 50%, #d7dee3 51%, #f5f7f9 100%)
}
.amap-indoor-map .transition {
	transition: opacity .2s
}
, .amap-indoormap-floorbar-control .transition {
transition:top .2s, margin-top .2s
}
.amap-indoormap-floorbar-control .select-dock:after, .amap-indoormap-floorbar-control .select-dock:before {
	content: "";
	position: absolute;
	width: 0;
	height: 0;
	left: 0;
	top: 10px;
	border: solid transparent;
	border-width: 4px;
	border-left-color: #4196ff
}
.amap-indoormap-floorbar-control .select-dock:after {
	right: 0;
	left: auto;
	border-left-color: transparent;
	border-right-color: #4196ff
}
.amap-indoormap-floorbar-control.is-mobile {
	width: 37px
}
.amap-indoormap-floorbar-control.is-mobile .floor-btn {
	height: 35px;
	line-height: 35px
}
.amap-indoormap-floorbar-control.is-mobile .select-dock {
	height: 35px;
	top: 36px
}
.amap-indoormap-floorbar-control.is-mobile .select-dock:after, .amap-indoormap-floorbar-control.is-mobile .select-dock:before {
	top: 13px
}
.amap-indoormap-floorbar-control.is-mobile .floor-list-box {
	height: 105px
}
.amap-indoormap-floorbar-control .floor-list-item .floor-btn {
	color: #555;
	font-family: "Times New Roman", sans-serif, "Microsoft Yahei";
	font-size: 16px
}
.amap-indoormap-floorbar-control .floor-list-item.selected .floor-btn {
	color: #000
}
.amap-indoormap-floorbar-control .floor-btn {
	height: 28px;
	line-height: 28px;
	overflow: hidden;
	cursor: pointer;
	position: relative;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none
}
.amap-indoormap-floorbar-control .floor-btn:hover {
	background-color: rgba(221,221,221,.4)
}
.amap-indoormap-floorbar-control .floor-minus, .amap-indoormap-floorbar-control .floor-plus {
	position: relative;
	text-indent: -1000em
}
.amap-indoormap-floorbar-control .floor-minus:after, .amap-indoormap-floorbar-control .floor-plus:after {
	content: "";
	position: absolute;
	margin: auto;
	top: 9px;
	left: 0;
	right: 0;
	width: 0;
	height: 0;
	border: solid transparent;
	border-width: 10px 8px;
	border-top-color: #777
}
.amap-indoormap-floorbar-control .floor-minus.disabled, .amap-indoormap-floorbar-control .floor-plus.disabled {
	opacity: .3
}
.amap-indoormap-floorbar-control .floor-plus:after {
	border-bottom-color: #777;
	border-top-color: transparent;
	top: -3px
}
.amap-indoormap-floorbar-control .floor-list-box {
	max-height: 153px;
	position: relative;
	overflow-y: hidden
}
.amap-indoormap-floorbar-control .floor-list {
	margin: 0;
	padding: 0;
	list-style: none
}
.amap-indoormap-floorbar-control .floor-list-item {
	position: relative
}
.amap-indoormap-floorbar-control .floor-btn.disabled, .amap-indoormap-floorbar-control .floor-btn.disabled *, .amap-indoormap-floorbar-control.with-indrm-loader * {
	-webkit-pointer-events: none!important;
	pointer-events: none!important
}
.amap-indoormap-floorbar-control .with-indrm-loader .floor-nonas {
	opacity: .5
}
.amap-indoor-map-moverf-marker {
	background-color: #FFFEEF;
	border: 1px solid #7E7E7E;
	padding: 3px 6px;
	font-size: 12px;
	white-space: nowrap;
	display: inline-block;
	position: absolute;
	top: 1em;
	left: 1.2em
}
.amap-indoormap-floorbar-control .amap-indrm-loader {
	-moz-animation: amap-indrm-loader 1.25s infinite linear;
	-webkit-animation: amap-indrm-loader 1.25s infinite linear;
	animation: amap-indrm-loader 1.25s infinite linear;
	border: 2px solid #91A3D8;
	border-right-color: transparent;
	box-sizing: border-box;
	display: inline-block;
	overflow: hidden;
	text-indent: -9999px;
	width: 13px;
	height: 13px;
	border-radius: 7px;
	position: absolute;
	margin: auto;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0
}
@-moz-keyframes amap-indrm-loader {
0% {
-moz-transform:rotate(0);
transform:rotate(0)
}
100% {
-moz-transform:rotate(360deg);
transform:rotate(360deg)
}
}
@-webkit-keyframes amap-indrm-loader {
0% {
-webkit-transform:rotate(0);
transform:rotate(0)
}
100% {
-webkit-transform:rotate(360deg);
transform:rotate(360deg)
}
}
@keyframes amap-indrm-loader {
0% {
-moz-transform:rotate(0);
-ms-transform:rotate(0);
-webkit-transform:rotate(0);
transform:rotate(0)
}
100% {
-moz-transform:rotate(360deg);
-ms-transform:rotate(360deg);
-webkit-transform:rotate(360deg);
transform:rotate(360deg)
}
}
</style>

<title>发布活动</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta property="qc:admins" content="241045133560426375747716">
<meta name="baidu-site-verification" content="dNifqp8wX6">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta name="HandheldFriendly" content="true">
<link rel="apple-touch-icon" href="img/icon_72x72.png">
<link rel="icon" type="image/x-icon" href="img/favicon.ico" size="16x16 24x24 32x32">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">


<link rel="stylesheet" href="../../Public/css/common.css">
<link rel="stylesheet" href="../../Public/css/post.css">
<!-- endbuild -->
<script src="../../Public/js/lib/jquery-1.7.2.min.js" ></script>
<link href="../../Public/css/default.css" rel="stylesheet">
<style type="text/css">
.amap-container{cursor:url(cur/openhand.cur),default;}.amap-drag{cursor:url(cur/closedhand.cur),default;}
</style>
</head>

<body class="e7">

<script>
//js动态创建form 提交表单
function formSubmit(action,areaid,areaname) {
    var turnForm = document.createElement("form");
    //一定要加入到body中！！
    document.body.appendChild(turnForm);
    turnForm.method = 'get';
  turnForm.action = action;
  turnForm.target = '_blank';
  //创建隐藏表单
  var areaId = document.createElement("input");
    areaId.setAttribute("name","area_id");
    areaId.setAttribute("type","hidden");
    areaId.setAttribute("value",areaid);
    turnForm.appendChild(areaId);
  var areaName = document.createElement("input");
    areaName.setAttribute("name","area_name");
    areaName.setAttribute("type","hidden");
    areaName.setAttribute("value",areaname);
    turnForm.appendChild(areaName);

    turnForm.submit();
}

//js动态创建form 提交表单，在当前页
function formSubmitNoBlank(action,areaid,areaname) {
    var turnForm = document.createElement("form");
    //一定要加入到body中！！
    document.body.appendChild(turnForm);
    turnForm.method = 'get';
  turnForm.action = action;
  //创建隐藏表单
  var areaId = document.createElement("input");
    areaId.setAttribute("name","area_id");
    areaId.setAttribute("type","hidden");
    areaId.setAttribute("value",areaid);
    turnForm.appendChild(areaId);
  var areaName = document.createElement("input");
    areaName.setAttribute("name","area_name");
    areaName.setAttribute("type","hidden");
    areaName.setAttribute("value",areaname);
    turnForm.appendChild(areaName);

    turnForm.submit();
}

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
<form action="login" method="post">
<div class="wrap">
  <div class="container">
    <div id="post_form" style="min-height: 643px;">
      <ul class="post_main_ul">
        <li class="post_main_li hdZt">
          <div class="post_main_l_tit"><b class="red">*</b><span>活动主题</span></div>
          <div id="post_main_r_K_title" class="red_outK">
            <div class="post_main_r">
              <input type="text" class="post_title" name="ad_title" id="post_party_title_101" onpropertychange="dochangeTitle('post_party_title_101');_checkRed._title()" oninput="dochangeTitle('post_party_title_101');_checkRed._title()" placeholder="请输入活动主题" maxlength="70">
            </div>
            <div class="post_main_note">
              <p><img src="img/tan_icon.png" alt=""><span>请输入活动主题</span></p>
            </div>
          </div>
        </li>
        <li class="post_main_li hdTime1">
          <div class="post_main_l_tit"><b class="red">*</b><span>活动时间</span></div>
          <div id="post_main_r_K_partyTime1" class="red_outK">
            <div class="post_main_r">
              <div class="k_time_date">
                <input type="text" class="post_tiMe1 post_d_t_input"  onchange="dochangeV_time('sDateYMD')" placeholder="开始时间" id="sDateYMD" name="ad_starttime">

              </div>
              <div class="k_time_ge"></div>
              <div class="k_time_date">
                <input type="text" class="post_tiMe2 post_d_t_input"  onchange="dochangeV_time('eDateYMD')" placeholder="结束时间" id="eDateYMD" name="ad_stoptime">

              </div>
            </div>
            <div id="joinTime_control"></div>
            <div class="post_main_note">

            </div>
          </div>
        </li>

        <li class="post_main_li hdAddress">
          <div class="post_main_l_tit"><b class="red">*</b><span>活动地点</span><a id="qK4" class="qK" title="清空"></a></div>
          <div id="post_main_r_K_address" class="red_outK">
            <div class="post_main_r">

              <div class="post_site_K">
                <input type="text" class="post_siTe2 jiao"  name="ad_adress" onkeyup="_placeSearch._init();" onpropertychange="_t._set('post_party_place_site_101_1',$(this).val());_checkRed._partyAddress()" oninput="_t._set('post_party_place_site_101_1',$(this).val());_checkRed._partyAddress()" placeholder="活动地址" id="post_party_place_site_101">
                <input type="hidden" id="lngX" name="lngX" value="">
                <input type="hidden" id="latY" name="latY" value="">
                <span id="mapMark" onclick="_placeSearch._mark();" style="display:none;">已标记</span> </div>
              <div class="post_site_set">
                <div class="post_map amap-container" id="mapContainer" style="position: relative;">
                  <object style="display: block; position: absolute; top: 0; left: 0; height: 100%; width: 100%; overflow: hidden; pointer-events: none; z-index: -1;" type="text/html" data="about:blank">
                  </object>
                  <div class="amap-maps">
                    <div class="amap-drags">
                      <div class="amap-layers" style="transform: translateZ(0px);">
                        <div style="position: absolute; z-index: 0; top: 0px; left: 0px;"><img src="" style="position: absolute; top: -127px; left: -91px; width: 256px; height: 256px; z-index: 14;"></div>
                        <canvas width="0" height="0" style="position: absolute; z-index: 1; height: 0px; width: 0px; top: 0px; left: 0px;"></canvas>
                        <canvas style="position: absolute; z-index: 99; height: 150px; width: 300px; top: 0px; left: 0px;"></canvas>
                        <div style="position: absolute; z-index: 120; top: 0px; left: 0px;">
                          <div class="amap-marker" style="top: 0px; left: 0px; z-index: 100; transform: translate(0px, 0px) rotate(0deg) translate(0px, 0px); display: none;">
                            <div class="amap-icon" style="position: absolute; width: 19px; height: 33px; opacity: 1;"><img src="http://webapi.amap.com/theme/v1.3/markers/n/mark_bs.png" style="width: 19px; height: 33px; top: 0px; left: 0px;"></div>
                          </div>
                        </div>
                      </div>
                      <div class="amap-overlays"></div>
                    </div>
                  </div>
                  <div style="display: none;"></div>
                  <div class="amap-controls"></div>
                  <a class="amap-logo" href="http://gaode.com" target="_blank" style="display: none;"><img src="http://webapi.amap.com/theme/v1.3/autonavi.png"></a>
                  <div class="amap-copyright" style="display: none;"><!--v1.3.14--> © 2016 AutoNavi - GS(2016)710号</div>
                </div>
                <a href="javascript:void(0)" onclick="_gaode._findCenter();"><img class="mapD" src="http://cdn.hudongba.com/static_v4/images/post/mapD.png" alt=""></a> </div>
            </div>
            <div class="post_main_note">
              <p><img src="http://cdn.hudongba.com/static_v4/images/post/tan_icon.png" alt=""><span>请设置活动举办的地点</span></p>
            </div>
          </div>
        </li>
        <li class="post_main_li hdStyle">
          <div class="post_main_l_tit"><b class="red"></b><span>活动类型</span></div>
          <div id="post_main_r_K_hdstyle" class="red_outK">
            <div class="post_main_r">
              <div class="k_style">
                <input type="text" class="jiao" readonly onclick="clickBtn3(event)" placeholder="选择类型" category_id="" value="" id="post_party_style_101" name="ad_type">
                <a id="qK6" class="qK" title="清空" onclick="clickBtn4(event)"></a>
                <div class="k_site_K3" id="k_site_K3">
                  <ul>
                    <li><a id="485" onclick="_partyPostPC._changeStyle(this)">运动与健身</a></li>
                    <li><a id="490" onclick="_partyPostPC._changeStyle(this)">会议与展览</a></li>
                    <li><a id="493" onclick="_partyPostPC._changeStyle(this)">亲子与幼教</a></li>
                    <li><a id="484" onclick="_partyPostPC._changeStyle(this)">旅游与户外</a></li>
                    <li><a id="487" onclick="_partyPostPC._changeStyle(this)">职业与培训</a></li>
                    <li><a id="486" onclick="_partyPostPC._changeStyle(this)">派对与娱乐</a></li>
                    <li><a id="488" onclick="_partyPostPC._changeStyle(this)">文艺与手工</a></li>
                    <li><a id="492" onclick="_partyPostPC._changeStyle(this)">公益与慈善</a></li>
                    <li><a id="489" onclick="_partyPostPC._changeStyle(this)">体验与促销</a></li>
                  </ul>
                </div>
              </div>


            </div>
            <div class="post_main_note">
              <p><img src="http://cdn.hudongba.com/static_v4/images/post/tan_icon.png" alt=""><span>活动类型</span></p>
            </div>
          </div>
        </li>

	<li class="post_main_li hdRichtext">
          <div class="post_main_l_tit"><b class="red">*</b><span>活动详情</span></div>
	<div class="content" style=" width:1200px; height:auto; margin-bottom:30px;">
	        <div class="container-fluid">
	        	<div id='pad-wrapper'>
					<div id="editparent">

						<div >
							<textarea id='editor' class='span9' style="margin-left:-120px; border:1px solid #CCC; height:200px;" name="ad_content">
							</textarea>
						</div>

					</div>
				</div>
			</div>
		</div>
     </li>


        <li class="post_main_li hdFy">
          <div class="post_main_l_tit"><b class="red"></b><span>报名费用</span></div>
          <div class="post_main_r">


            <div id="payitemDiv">
              <div class="post_pay_item">
                <div class="post_pay_item_top"><span class="tit01">编号</span><span class="tit02">费用名称</span><span class="tit03">金额</span><span class="tit04">人数上限</span></div>
                <div class="cost_content" id="party_101_pay_item_1" busid="">
                  <div class="form_input_number">1</div>
                  <div class="form_input_cost form_input_cost_type">
                    <input type="text" oninput="_setTicket._init()" onpropertychange="_setTicket._init()" onchange="_setTicket._init()" placeholder="费用名称1" maxlength="20" class="input cost_name" id="party_101_pay_item_name_1" name="ad_payname">
                  </div>
                  <div class="form_input_cost form_input_cost_money">
                    <input type="text" oninput="_setTicket._init()" onpropertychange="_setTicket._init()" onchange="_setTicket._init()" placeholder="金额，免费请填0" maxlength="7" class="input" id="party_101_pay_item_price_1" name="ad_pay">
                  </div>
                  <div class="form_input_cost form_input_cost_people">
                    <input type="text" oninput="_setTicket._init()" onpropertychange="_setTicket._init()" onchange="_setTicket._init()" placeholder="人数，不填则无限制" maxlength="7" class="input" id="party_101_pay_item_num_1" name="ad_maxnum">
                  </div>
                  </div>

              </div>
            </div>
          </div>
        </li>

        <li class="post_main_li bmtxxx">
          <div class="post_main_l_tit"><b class="red"></b><span>报名填写信息</span></div>
          <div class="post_main_r">
            <div class="joinxx_px" id="joinxx_px">
              <ol class="joinxx_px_list ui-sortable" id="join_ol">
                <li class="joinxx_px_item name" id="101pary_sort_1" businessid="1" sortid="1" datatype="text">
                  <div class="joinxx_px_handle">
                    <div class="yinyingQu"> <span class="icon"></span>
                      <div class="bdNr" datatitle="">姓名</div>
                      <input name="ad_person" type="text" style="width:400px;height:20px;margin-left:30px;margin-top:10px;">
                    </div>

                  </div>
                </li>
                <li class="joinxx_px_item phone" id="101pary_sort_2" businessid="2" sortid="2" datatype="text">
                  <div class="joinxx_px_handle">
                    <div class="yinyingQu"> <span class="icon"></span>
                      <div class="bdNr" datatitle="">手机</div>


                          <input name="ad_tel" type="text" style="width:400px;height:20px;margin-left:30px;margin-top:10px;">

                    </div>
                    <div class="czQu"><a href="javascript:void(0)" class="sel thisOver" onclick="isFetchJoinOpt(this);_setJoinobj._init();"></a></div>
                  </div>
                </li>
              </ol>

            </div>
          </div>
        </li>

      </ul>
      <div class="clear"></div>
      <div class="fb_Btn">
         <input type="submit"  value="发 布" style="width:80px;height:30px;background-color:blue;color:#ffffff;font-size:20px;">
      </div>
    </div>
  </div>
  <div class="sidebar"></div>

</div>
</form>
<script src="../../Public/js/lib/comm.20160512_195352.min.js"></script>
<script src="../../Public/js/lib/jquery_date.js"></script>
<script src="../../Public/js/lib/kindeditor_160119.js"></script>
<script src="../../Public/js/lib/hdb_richtext_160114.js"></script>
<script src="../../Public/js/lib/post.20160512_195352.min.js"></script>
<script src="../../Public/js/lib/notice.js"></script>
<script src="../../Public/js/lib/json2.js"></script>
<script src="../../Public/js/lib/jquery-ui.js"></script>
<script src="../../Public/js/lib/jquery.sly.min.js"></script>
<script src="../../Public/js/lib/jquery.easing-1.3.min.js"></script>
<script>
var editor = KindEditor.create('#post_party_content', {
    items:['fontsize','forecolor','bold','underline','multiimage','image','media'],
    htmlTags:{
    span : ['.color','.font-size','.font-weight','.text-decoration'],
    img : ['src', 'width', 'height','class'],
    'br,strong,p,u' : [],
    embed:['id','class','height','src','width','wmode','imgsrc']
    },
    pasteType:1,
    resizeType:1,
    resizeMode:1,
    useContextmenu:true,
    formatUploadUrl:false,//表情是否保存域名
    uploadJson : _domain + 'post/api:img?returnType=json&infoType=' + _post._type,
    afterFocus:function(){
      _richText._onFocus();
      $(".hdRichtext").addClass("blue");
      $(".k_site_K,.k_site_K3,.k_site_K7,.date_selector").hide();
      $(".k_site,.k_style,.post_style_K,.k_time_date").removeClass("blue");
      $("#sDateYMD,#eDateYMD,#endtimeYMD,#vote_end_ymd").parent().children(".date_selector").remove();
      $('.post_tiMe1,.post_tiMe2,.post_tiMe3').date_input();
    },
    afterBlur:function(){
      _richText._onBlur();
      $(".hdRichtext").removeClass("blue");
    },
    afterCreate:function(){
      _richText._black();
    },
    afterChange:function(){
       _partyPostPC._btnShow();
       _checkRed._richText();
    }
  });

</script>
<script>
DateInput.prototype.changeInput = function(dateString) {
  this.input.val(dateString).change();
  this.hide();
  _qkInput._show();
  _checkRed._partyTime();
};
DateInput.prototype.show = function(){
  this.rootLayers.css("display", "block");
  $([window, document.body]).click(this.hideIfClickOutside);
  this.input.unbind("focus", this.show);
  $(document.body).keydown(this.keydownHandler);
  this.setPosition();
  if($(this.input).attr("id")=="sDateYMD"){
    $("#sDateYMD").parent(".k_time_date").addClass("blue");
  }else if($(this.input).attr("id")=="eDateYMD"){
    $("#eDateYMD").parent(".k_time_date").addClass("blue");
  }
  $(".k_time_hour").removeClass("blue");
}
DateInput.prototype.hide = function(){
  this.rootLayers.css("display", "none");
  $([window, document.body]).unbind("click", this.hideIfClickOutside);
  this.input.focus(this.show);
  $(document.body).unbind("keydown", this.keydownHandler)
  if($(this.input).attr("id")=="sDateYMD"){
    $("#sDateYMD").parent(".k_time_date").removeClass("blue");
  }else if($(this.input).attr("id")=="eDateYMD"){
    $("#eDateYMD").parent(".k_time_date").removeClass("blue");
  }
}

</script>
<!-- <script type="text/javascript" src="js/maps.js"></script> -->
<script charset="utf-8" src="../../Public/js/lib/main.js"></script>
<script charset="utf-8" src="../../Public/js/lib/modules.js"></script>
<script src="../../Public/js/lib/simplejs/jquery.min.js"></script>
<script src="../../Public/js/lib/simplejs/bootstrap.min.js"></script>
<script>

			$(function() {
				$('#editControls a').click(function(e) {
					switch($(this).data('role')) {
						case 'h1':
						case 'h2':
						case 'p':
							document.execCommand('formatBlock', false, '<' + $(this).data('role') + '>');
							break;
						default:
							document.execCommand($(this).data('role'), false, null);
							break;
					}

				})
			});

</script>

</body>
</html>