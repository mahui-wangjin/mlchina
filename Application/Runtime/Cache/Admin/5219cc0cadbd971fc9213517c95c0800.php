<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理系统</title>
<link rel="stylesheet" rev="stylesheet" href="../css/style.css" type="text/css" media="all" />


<script language="JavaScript" type="text/javascript">
function tishi()
{
  var a=confirm('数据库中保存有该人员基本信息，您可以修改或保留该信息。');
  if(a!=true)return false;
  window.open("冲突页.htm","","depended=0,alwaysRaised=1,width=800,height=400,location=0,menubar=0,resizable=0,scrollbars=0,status=0,toolbar=0");
}

function check()
{
document.getElementById("aa").style.display="";
}


function link(){
alert('保存成功！');
    document.getElementById("fom").action="xuqiumingxi.htm";
   document.getElementById("fom").submit();
}



</script>
<style type="text/css">
<!--
.atten {font-size:12px;font-weight:normal;color:#F00;}
-->
</style>
</head>

<body class="ContentBody">
  <form action="addlogin" method="post" enctype="multipart/form-data" name="fom" id="fom" target="sypost" >
<div class="MainDiv">
<table width="99%" border="0" cellpadding="0" cellspacing="0" class="CContent">
  <tr>
      <th class="tablestyle_title" >活动添加页面</th>
  </tr>
  <tr>
    <td class="CPanel">

		<table border="0" cellpadding="0" cellspacing="0" style="width:100%">

		<TR>
			<TD width="100%">
				<fieldset style="height:100%;">
				<legend>添加活动</legend>
					  <table border="0" cellpadding="2" cellspacing="1" style="width:100%">

					  <tr>
					    <td nowrap align="right" width="13%">活动标题:</td>
					    <td width="41%"><input name="ad_title" class="text" style="width:250px" type="text" size="40" />
				        <span class="red"> *</span></td>
					    <td align="right" width="19%">活动发起人姓名:</td>
					    <td width="27%"><input name="ad_person" id="Input22" class="text" style="width:154px" /></td>
					    </tr>
					  <tr>
					    <td nowrap align="right">发起人电话:</td>
					    <td><input name="ad_tel" id="" class="text" style="width:154px" /></td>
					    <td align="right">活动费用名称:</td>
					    <td><input name="ad_payname" id="Input" class="text" style="width:154px" /></td>
					  </tr>
					  <tr>
					    <td nowrap align="right">活动费用:</td>
					    <td><input name="ad_pay" id="" class="text" style="width:154px" /></td>
					    <td align="right">报名人数上限:</td>
					    <td><input name="ad_maxnum" id="Input" class="text" style="width:154px" /></td>
					  </tr>
                      <tr>
					    <td nowrap align="right">活动开始时间:</td>
					    <td><input name="ad_starttime" id="" class="text" style="width:154px" /></td>
					    <td align="right">活动结束时间:</td>
					    <td><input name="ad_stoptime" id="Input" class="text" style="width:154px" /></td>
					  </tr>
					   <tr>
					    <td nowrap align="right">活动地点:</td>
					    <td><input name="ad_adress" id="" class="text" style="width:154px" /></td>
					    <td align="right">活动类型:</td>
					    <td><select name="ad_type" >
                          <option  selected="selected">==请选择==</option>
                          <option>运动与健身</option>
                          <option>会议与展览</option>
                          <option>派对与娱乐</option>
                          <option>创业与投资</option>
                          <option>文艺与手工</option>
                          <option>职业与培训</option>
                          <option>亲子与幼教</option>
                          <option>IT与互联网</option>
                          <option>旅游与户外</option>
                          <option>公益与慈善</option>
                          <option>体验与促销</option>

                        </select></td>
					  </tr>
					  <tr>
					    <td nowrap align="right" height="120px">活动详情:</td>
					    <td colspan="3"><textarea id="textarea" name="ad_content" rows="5" cols="80"></textarea></td>
					    </tr>
					  </table>
			 <br />
				</fieldset>			</TD>
		</TR>

		</TABLE>


	 </td>
  </tr>






		<TR>
			<TD colspan="2" align="center" height="50px">
			<input type="Submit" name="Submit" value="保存"/>　

			<input type="button" name="Submit2" value="返回" class="button" onclick="window.history.go(-1);"/></TD>
		</TR>
		</TABLE>


	 </td>
  </tr>




  </table>

</div>
</form>
</body>
</html>