<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��Ŀ����ϵͳ</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.tabfont01 {	
	font-family: "����";
	font-size: 9px;
	color: #555555;
	text-decoration: none;
	text-align: center;
}
.font051 {font-family: "����";
	font-size: 12px;
	color: #333333;
	text-decoration: none;
	line-height: 20px;
}
.font201 {font-family: "����";
	font-size: 12px;
	color: #FF0000;
	text-decoration: none;
}
.button {
	font-family: "����";
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

<link href="../css/css.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">

</script>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery.min.js"></script>
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
          <td height="62" background="../images/nav04.gif">
            
		   <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
		    <tr>
			  <td width="21"><img src="../images/ico07.gif" width="20" height="18" /></td>
			  <td width="538">��������ʱ�䣺
                <input name="textfield" type="text" size="12" />
                <span class="newfont06"></span><input name="Submit4" type="button" class="right-button02" value="�� ѯ" />
                 ���������ص㣺
                <input name="textfield" type="text" size="12" />
                <input name="Submit4" type="button" class="right-button02" value="�� ѯ" /></td>
		    </tr>
          </table></td>
        </tr>
    </table></td></tr>
  <tr>
    <td><table id="subtree1" style="DISPLAY: " width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
          	 <tr>
               <td height="20"><span class="newfont07">ѡ��<a href="#" class="right-font08" onclick="selectAll();">ȫѡ</a>-<a href="#" class="right-font08" onclick="unselectAll();">��ѡ</a></span>
	              <input name="Submit" type="button" class="right-button08" value="ɾ����ѡ�" id="deletetable" />
	              <input name="Submit2" type="button" class="right-button08" value="��ӻ" onclick="link();"/></td>
          	 </tr>
              <tr>
                <td height="40" class="font42">
                    <table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#464646" class="newfont03" id="huodongbiao">
                     <tr class="CTitle" >
                            <td height="22" colspan="7" align="center" style="font-size:16px">�ѷ�����б�</td>
                      </tr>
                      <tr bgcolor="#EEEEEE">
                        <td width="2%" align="center" height="30">ѡ��</td>
                        <td width="10%">�����</td>
                        <td width="5%">�����ʱ��</td>
                        <td width="10%">��ص�</td>
                        <td width="5%">�ѱ�������</td>
                        <form name="search_form" method="post" action="#">
                            <td width="10%">�����
                             <select name="select">
                                  <option  selected="selected">==��ѡ��==</option>
                                  <option value="1">�˶��뽡��</option>
                                  <option value="2">������չ��</option>
                                  <option value="3">�ɶ�������</option>
                                  <option value="4">��ҵ��Ͷ��</option>
                                  <option value="5">�������ֹ�</option>
                                  <option value="6">ְҵ����ѵ</option>
                                  <option value="7">�������׽�</option>
                                  <option value="8">IT�뻥����</option>
                                  <option value="9">�����뻧��</option>
                                  <option value="10">���������</option>
                                  <option value="11">���������</option>                         
                                </select>
                                <input type="submit" name="searchbtn" value="��ʼɸѡ" class="shaixuan"style=""/>
                               </td>
                          </form>
                            
                        <td width="12%">����</td>
                      </tr>
                      <tr bgcolor="#FFFFFF">
                        <td height="20"><input type="checkbox" name="delid"/></td>
                        <td ><a href="listmokuaimingxi.htm" onclick=""></a>����XXX</td>
                        <td>2007-11-11</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>��</td>
                        <td><a href="editrenwu.htm">�༭|</a><a href="listrenwumingxi.htm">�鿴|</a>
                        <a href="#" class="delete_1">ɾ��</a></td>
                      </tr>
                      <tr bgcolor="#FFFFFF">
                        <td height="20"><input type="checkbox" name="delid"/></td>
                        <td ><a href="listmokuaimingxi.htm" onclick=""></a>����XXX</td>
                        <td>2007-11-11</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>��</td>
                        <td><a href="editrenwu.htm">�༭|</a><a href="listrenwumingxi.htm">�鿴|</a>
                        <a href="#" class="delete_1">ɾ��</a></td>
                      </tr>
                      <tr bgcolor="#FFFFFF">
                        <td height="20"><input type="checkbox" name="delid"/></td>
                        <td ><a href="listmokuaimingxi.htm" onclick=""></a>����XXX</td>
                        <td>2007-11-11</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>��</td>
                        <td><a href="editrenwu.htm">�༭|</a><a href="listrenwumingxi.htm">�鿴|</a>
                        <a href="#" class="delete_1">ɾ��</a></td>
                      </tr>
                      <tr bgcolor="#FFFFFF">
                        <td height="20"><input type="checkbox" name="delid"/></td>
                        <td ><a href="listmokuaimingxi.htm" onclick=""></a>����XXX</td>
                        <td>2007-11-11</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>��</td>
                        <td><a href="editrenwu.htm">�༭|</a><a href="listrenwumingxi.htm">�鿴|</a>
                        <a href="#" class="delete_1">ɾ��</a></td>
                      </tr>
                      <tr bgcolor="#FFFFFF" id="newtr">
                        <td height="20"><input type="checkbox" name="delid"/></td>
                        <td ><a href="listmokuaimingxi.htm" onclick=""></a>����XXX</td>
                        <td>2007-11-11</td>
                        <td>XXXXXX</td>
                        <td>XXXXXX</td>
                        <td>��</td>
                        <td><a href="editrenwu.htm">�༭|</a><a href="listrenwumingxi.htm">�鿴|</a>
                        <a href="#" class="delete_1">ɾ��</a></td>
                      </tr>
                </table>
            </td>
        </tr>
      </table>
      <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="6"><img src="../images/spacer.gif" width="1" height="1" /></td>
        </tr>
        <tr>
          <td height="33"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="right-font08">
              <tr>
                <td width="50%">�� <span class="right-text09">5</span> ҳ | �� <span class="right-text09">1</span> ҳ</td>
                <td width="49%" align="right">[<a href="#" class="right-font08">��ҳ</a> | <a href="#" class="right-font08">��һҳ</a> | <a href="#" class="right-font08">��һҳ</a> | <a href="#" class="right-font08">ĩҳ</a>] ת����</td>
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
	var table = $('#huodongbiao');//��ȡ�����ڵı��
	
	$('#deletetable').click(function());
	});
	
});

$(function($){
	var table = $('#huodongbiao');	
	$('.delete_1').click(function(){
		var shanchu =confirm('ȷ��ɾ����');
		if(shanchu){
			$(this).closest('tr').remove();
		}
	});
});
</script>
</body>
</html>