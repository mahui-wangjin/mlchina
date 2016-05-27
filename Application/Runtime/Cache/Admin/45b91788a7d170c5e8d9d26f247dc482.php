<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>导航栏管理</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.tabfont01 {
	font-family: "宋体";
	font-size: 9px;
	color: #555555;
	text-decoration: none;
	text-align: center;
}
.font051 {font-family: "宋体";
	font-size: 12px;
	color: #333333;
	text-decoration: none;
	line-height: 20px;
}
.font201 {font-family: "宋体";
	font-size: 12px;
	color: #FF0000;
	text-decoration: none;
}
.button {
	font-family: "宋体";
	font-size: 14px;
	height: 37px;
}
.shaixuan{
	width:80px;
	height:20px;
	background-color:transparent;
	border-top-left-radius:10px;
	border-top-right-radius:10px;
	border-bottom-left-radius:10px;
	border-bottom-right-radius:10px;
}
html { overflow-x: auto; overflow-y: auto; border:0;}
-->
</style>

<link href="/activityTest/Public/css/css.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">

</script>
<link href="/activityTest/Public/css/style.css" rel="stylesheet" type="text/css" />
<script src="/activityTest/Public/js/jquery.min.js"></script>
</head>
<SCRIPT language=JavaScript>
function sousuo(){
	window.open("gaojisousuo.htm","","depended=0,alwaysRaised=1,width=800,height=510,location=0,menubar=0,resizable=0,scrollbars=0,status=0,toolbar=0");
}
function selectAll(){
	var obj = document.fom.elements;
	for (var i=0;i<obj.length;i++){
		if (obj[i].name == "delid"){
			obj[i].checked = true;
		}
	}
}

function unselectAll(){
	var obj = document.fom.elements;
	for (var i=0;i<obj.length;i++){
		if (obj[i].name == "delid"){
			if (obj[i].checked==true) obj[i].checked = false;
			else obj[i].checked = true;
		}
	}
}

function link(){
    document.getElementById("fom").action="addrenwu.htm";
   document.getElementById("fom").submit();
}

</SCRIPT>


<body>
<form name="fom" id="fom" method="post" action="">
<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>
    <td height="30">      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="62" background="/activityTest/Public/images/nav04.gif">

		   <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
		    <tr>
			  <td width="21"><img src="/activityTest/Public/images/ico07.gif" width="20" height="18" /></td>
			  <td width="538">索引：按时间：
                <input name="textfield" type="text" size="12" />
                <span class="newfont06"></span><input name="Submit4" type="button" class="right-button02" value="查 询" />
                 索引：按地点：
                <input name="textfield" type="text" size="12" />
                <input name="Submit4" type="button" class="right-button02" value="查 询" /></td>
		    </tr>
          </table></td>
        </tr>
    </table></td></tr>
  <tr>
    <td><table id="subtree1" style="DISPLAY: " width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
          	 <tr>
               <td height="20"><span class="newfont07">选择：<a href="#" class="right-font08" onclick="selectAll();">全选</a>-<a href="#" class="right-font08" onclick="unselectAll();">反选</a></span>
	              <input name="Submit" type="button" class="right-button08" value="删除所选" id="deletetable" />
<!--	              <input name="Submit2" type="button" class="right-button08" value="添加活动" onclick="link();"/></td>-->
          	 </tr>
              <tr>
                <td height="40" class="font42">
                    <table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#464646" class="newfont03" id="huodongbiao">
                     <tr class="CTitle" >
                            <td height="22" colspan="7" align="center" style="font-size:16px">导航栏列表</td>
                      </tr>
                      <tr bgcolor="#EEEEEE">
                        <td width="2%" align="center" height="30">选择</td>
                        <td width="10%">导航栏标题</td>
                        <td width="10%">导航栏创建/修改时间</td>
                        <td width="10%">创建/修改 人</td>
<!--                        <td width="5%">已报名人数</td>-->
<!--                        <form name="search_form" method="post" action="#">
                            <td width="10%">活动类型
                             <select name="select">
                                  <option  selected="selected">==请选择==</option>
                                  <option value="1">运动与健身</option>
                                  <option value="2">会议与展览</option>
                                  <option value="3">派对与娱乐</option>
                                  <option value="4">创业与投资</option>
                                  <option value="5">文艺与手工</option>
                                  <option value="6">职业与培训</option>
                                  <option value="7">亲子与幼教</option>
                                  <option value="8">IT与互联网</option>
                                  <option value="9">旅游与户外</option>
                                  <option value="10">公益与慈善</option>
                                  <option value="11">体验与促销</option>
                                </select>
                                <input type="submit" name="searchbtn" value="开始筛选" class="shaixuan" />
                               </td>
                          </form>
                            -->
                        <td width="12%">操作</td>
                      </tr>
                      <?php if(is_array($topdata)): foreach($topdata as $key=>$to): ?><tr bgcolor="#FFFFFF">
                        <td height="20"><input type="checkbox" name="delid"/></td>
                        <td ><a href="listmokuaimingxi.htm" onclick=""></a><?php echo ($to["at_name"]); ?></td>
                        <td><?php echo ($to["at_time"]); ?></td>
                        <td><?php echo ($to["aa_name"]); ?></td>
<!--                        <td>XXXXXX</td>
                        <td>急</td>-->
                        <td><!--<a href="editrenwu.htm">编辑|</a><a href="listrenwumingxi.htm">查看|</a>-->
                        <a href="delete?id=<?php echo ($to["at_id"]); ?>&&name=top" class="delete_1">删除</a></td>
                      </tr><?php endforeach; endif; ?>

                </table>
            </td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="33"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="right-font08">
              <tr>
              <?php echo ($page); ?>
                </td>
                <td width="1%"><table width="20" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="1%"><input name="textfield3" type="text" class="right-textfield03" size="1" /></td>
                      <td width="87%"><input name="Submit23222" type="submit" class="right-button06" value=" " />
                      </td>
                    </tr>
                </table></td>
              </tr>
                </table></td>
              </tr>
          </table></td>
        </tr>
      </table></td>
  </tr>
</table>

</form>
<script type="text/javascript">
$(function($){
	var table = $('#huodongbiao');//获取到所在的表格

	$('#deletetable').click(function());
		}
	});

});

$(function($){
	var table = $('#huodongbiao');
	$('.delete_1').click(function(){
		var shanchu =confirm('确认删除？');
		if(shanchu){
			$(this).closest('tr').remove();
		}
	});
});
</script>
</body>
</html>