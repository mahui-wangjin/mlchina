<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>项目管理系统</title>
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
html { overflow-x: auto; overflow-y: auto; border:0;}
-->
</style>

<link href="/activityTest/Public/css/css.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">

</script>
<link href="/activityTest/Publiccss/style.css" rel="stylesheet" type="text/css" />
<script src="/activityTest/Publicjs/jquery.min.js"></script>
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
    document.getElementById("fom").action="kehu.htm";
   document.getElementById("fom").submit();
}

</SCRIPT>

<body>
<form name="fom" id="fom" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>
    <td height="30">      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="62" background="/activityTest/Publicimages/nav04.gif">

		   <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
		    <tr>
			  <td width="24"><img src="/activityTest/Publicimages/ico07.gif" width="20" height="18" /></td>
			  <td width="519"><label>管理员账号索引:
			      <input name="text" type="text" nam="gongs" />
			  </label>
			    </input>
			    <input name="Submit" type="button" class="right-button02" value="查 询" /></td>
			   <td width="679" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
		    </tr>
          </table>

         </td>
        </tr>
    </table></td></tr>
  <tr>
    <td><table id="subtree1" style="DISPLAY: " width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
          	 <tr>
               <td height="20"><span class="newfont07">选择：<a href="#" class="right-font08" onclick="selectAll();">全选</a>-<a href="#" class="right-font08" onclick="unselectAll();">反选</a></span>
		           <input name="Submit" type="button" class="right-button08" value="删除所选" id="deletetable" /> <input name="Submit" type="button" class="right-button08" value="添加新管理员" onclick="link();" />
		           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	              </td>
          </tr>
              <tr>
                <td height="40" class="font42"><table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#464646" class="newfont03">

					                  <tr>
                    <td height="20" colspan="14" align="center" bgcolor="#EEEEEE"class="tablestyle_title"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;管理员详细列表 &nbsp;</td>
                    </tr>
                  <tr>
				    <td width="8%" align="center" bgcolor="#EEEEEE">选择</td>
					 <td width="12%" height="20" align="center" bgcolor="#EEEEEE">管理员所在公司名称</td>
                    <td width="7%" align="center" bgcolor="#EEEEEE">管理员姓名</td>
                    <td width="10%" align="center" bgcolor="#EEEEEE">管理员电话</td>
                    <td width="14%" align="center" bgcolor="#EEEEEE">管理员账号</td>
					<td width="28%" align="center" bgcolor="#EEEEEE">公司联系地址</td>
					<td width="10%" align="center" bgcolor="#EEEEEE">添加时间</td>
                    <td width="11%" align="center" bgcolor="#EEEEEE">操作</td>
                  </tr>
                  <tr>
				    <td bgcolor="#FFFFFF"><input type="checkbox" name="delid"/></td>
					<td height="20" bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">深圳网上交易市场</a></td>
                    <td bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">张三</a></td>
                    <td height="20" bgcolor="#FFFFFF">55555555555</td>
                    <td bgcolor="#FFFFFF">11111</td>
                    <td bgcolor="#FFFFFF">该公司致力于电子商务的网上贸易，主要发展......</td>
                    <td bgcolor="#FFFFFF">2008-08-30</td>
					<td bgcolor="#FFFFFF"><a href="kehu.htm">编辑</a>&nbsp;|&nbsp;<a href="kehuminxi.html">查看</a></td>
                  </tr>
                  <tr>
				   	<td bgcolor="#FFFFFF"><input type="checkbox" name="delid"/></td>
					<td height="20" bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">深圳网上交易市场</a></td>
                    <td bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">张三</a></td>
                    <td height="20" bgcolor="#FFFFFF">55555555555</td>
                    <td bgcolor="#FFFFFF">11111</td>
                    <td bgcolor="#FFFFFF">该公司致力于电子商务的网上贸易，主要发展......</td>
                    <td bgcolor="#FFFFFF">2008-08-30</td>
					<td bgcolor="#FFFFFF"><a href="kehu.htm">编辑</a>&nbsp;|&nbsp;<a href="kehuminxi.html">查看</a></td>
                  </tr>
                  <tr>
				    <td bgcolor="#FFFFFF"><input type="checkbox" name="delid"/></td>
					<td height="20" bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">深圳网上交易市场</a></td>
                    <td bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">张三</a></td>
                    <td height="20" bgcolor="#FFFFFF">55555555555</td>
                    <td bgcolor="#FFFFFF">11111</td>
                    <td bgcolor="#FFFFFF">该公司致力于电子商务的网上贸易，主要发展......</td>
                    <td bgcolor="#FFFFFF">2008-08-30</td>
					<td bgcolor="#FFFFFF"><a href="kehu.htm">编辑</a>&nbsp;|&nbsp;<a href="kehuminxi.html">查看</a></td>
                  </tr>
                  <tr>
				    <td bgcolor="#FFFFFF"><input type="checkbox" name="delid"/></td>
					<td height="20" bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">深圳网上交易市场</a></td>
                    <td bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">张三</a></td>
                    <td height="20" bgcolor="#FFFFFF">55555555555</td>
                    <td bgcolor="#FFFFFF">11111</td>
                    <td bgcolor="#FFFFFF">该公司致力于电子商务的网上贸易，主要发展......</td>
                    <td bgcolor="#FFFFFF">2008-08-30</td>
					<td bgcolor="#FFFFFF"><a href="kehu.htm">编辑</a>&nbsp;|&nbsp;<a href="kehuminxi.html">查看</a></td>
                  </tr>
                  <tr>
				    <td bgcolor="#FFFFFF"><input type="checkbox" name="delid"/></td>
					<td height="20" bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">深圳网上交易市场</a></td>
                    <td bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">张三</a></td>
                    <td height="20" bgcolor="#FFFFFF">55555555555</td>
                    <td bgcolor="#FFFFFF">11111</td>
                    <td bgcolor="#FFFFFF">该公司致力于电子商务的网上贸易，主要发展......</td>
                    <td bgcolor="#FFFFFF">2008-08-30</td>
					<td bgcolor="#FFFFFF"><a href="kehu.htm">编辑</a>&nbsp;|&nbsp;<a href="kehuminxi.html">查看</a></td>
                  </tr>
                  <tr>
				    <td bgcolor="#FFFFFF"><input type="checkbox" name="delid"/></td>
					<td height="20" bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">深圳网上交易市场</a></td>
                    <td bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">张三</a></td>
                    <td height="20" bgcolor="#FFFFFF">55555555555</td>
                    <td bgcolor="#FFFFFF">11111</td>
                    <td bgcolor="#FFFFFF">该公司致力于电子商务的网上贸易，主要发展......</td>
                   <td bgcolor="#FFFFFF">2008-08-30</td>
				    <td bgcolor="#FFFFFF"><a href="kehu.htm">编辑</a>&nbsp;|&nbsp;<a href="kehuminxi.html">查看</a></td>
                  </tr>
                  <tr>
				   <td bgcolor="#FFFFFF"><input type="checkbox" name="delid"/></td>
					<td height="20" bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">深圳网上交易市场</a></td>
                    <td bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">张三</a></td>
                    <td height="20" bgcolor="#FFFFFF">55555555555</td>
                    <td bgcolor="#FFFFFF">11111</td>
                    <td bgcolor="#FFFFFF">该公司致力于电子商务的网上贸易，主要发展......</td>
                    <td bgcolor="#FFFFFF">2008-08-30</td>
					<td bgcolor="#FFFFFF"><a href="kehu.htm">编辑</a>&nbsp;|&nbsp;<a href="kehuminxi.html">查看</a></td>
                  </tr>
                  <tr>
				   	<td bgcolor="#FFFFFF"><input type="checkbox" name="delid"/></td>
					<td height="20" bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">深圳网上交易市场</a></td>
                    <td bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">张三</a></td>
                    <td height="20" bgcolor="#FFFFFF">55555555555</td>
                    <td bgcolor="#FFFFFF">11111</td>
                    <td bgcolor="#FFFFFF">该公司致力于电子商务的网上贸易，主要发展......</td>
                    <td bgcolor="#FFFFFF">2008-08-30</td>
					<td bgcolor="#FFFFFF"><a href="kehu.htm">编辑</a>&nbsp;|&nbsp;<a href="kehuminxi.html">查看</a></td>
                  </tr>
                  <tr>
				   	<td bgcolor="#FFFFFF"><input type="checkbox" name="delid"/></td>
					<td height="20" bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">深圳网上交易市场</a></td>
                    <td bgcolor="#FFFFFF"><a href="listyuangongmingxi.html">张三</a></td>
                    <td height="20" bgcolor="#FFFFFF">55555555555</td>
                    <td bgcolor="#FFFFFF">11111</td>
                    <td bgcolor="#FFFFFF">该公司致力于电子商务的网上贸易，主要发展......</td>
					<td bgcolor="#FFFFFF">2008-08-30</td>
                    <td bgcolor="#FFFFFF"><a href="kehu.htm">编辑</a>&nbsp;|&nbsp;<a href="kehuminxi.html">查看</a></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="6"><img src="/activityTest/Publicimages/spacer.gif" width="1" height="1" /></td>
        </tr>
        <tr>
          <td height="33"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="right-font08">
              <tr>
                <td width="50%">共 <span class="right-text09">5</span> 页 | 第 <span class="right-text09">1</span> 页</td>
                <td width="49%" align="right">[<a href="#" class="right-font08">首页</a> | <a href="#" class="right-font08">上一页</a> | <a href="#" class="right-font08">下一页</a> | <a href="#" class="right-font08">末页</a>] 转至：</td>
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
</table>
</form>
<script type="text/javascript">
$(function($){
	var table = $('#subtree1');//获取到所在的表格

	$('#deletetable').click(function());
		}
	});

});
</script>
</body>
</html>