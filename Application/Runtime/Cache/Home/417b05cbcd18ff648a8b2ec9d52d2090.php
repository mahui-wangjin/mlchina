<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>会员注册</title>
<link rel="stylesheet" type="text/css" href="/activityTest/Public/styles/1/basic.css" />
<link rel="stylesheet" type="text/css" href="/activityTest/Public/styles/1/register.css" />
<script type="text/javascript" src="/activityTest/Public/js/code.js"></script>
<script type="text/javascript" src="/activityTest/Public/js/register.js"></script>
</head>
<body>
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

<div id="register">
	<h2>会员注册</h2>

	<form method="post" name="register" action="adduser">
		<input type="hidden" name="uniqid" value="" />
		<dl>
			<dt>请认真填写一下内容</dt>
			<dd>用 户 名：<input type="text" name="username" class="text" /> (*必填，至少两位)</dd>
			<dd>密　　码：<input type="password" name="password" class="text" /> (*必填，至少六位)</dd>
			<dd>确认密码：<input type="password" name="notpassword" class="text" /> (*必填，同上)</dd>
			<dd>密码提示：<input type="text" name="question" class="text" /> (*必填，至少两位)</dd>
			<dd>密码回答：<input type="text" name="answer" class="text" /> (*必填，至少两位)</dd>
			<dd>性　　别：<input type="radio" name="sex" value="男" checked="checked" />男 <input type="radio" name="sex" value="女" />女</dd>
			<dd>电子邮件：<input type="text" name="email" class="text" /> (*必填，激活账户)</dd>
			<dd>　Q Q 　：<input type="text" name="qq" class="text" /></dd>
			<dd>主页地址：<input type="text" name="url" class="text" value="http://" /></dd>
			<dd>验 证 码：<input type="text" name="code" class="text yzm"  /> <img src="/activityTest/Public/images/code.php.png" id="code"  /></dd>
			<dd><input type="submit" class="submit" value="注册" /></dd>
		</dl>
	</form>
</div>

<div id="footer">

	<p>版权所有 翻版必究</p>
	<p></p>
</div>
</body>
</html>