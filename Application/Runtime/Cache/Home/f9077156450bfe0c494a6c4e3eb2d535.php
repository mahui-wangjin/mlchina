<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>会员登录</title>
<link rel="stylesheet" type="text/css" href="/activityTest/Public/styles/1/basic.css" />
<link rel="stylesheet" type="text/css" href="/activityTest/Public/styles/1/login.css" />
<script type="text/javascript" src="/activityTest/Public/js/code.js"></script>
<script type="text/javascript" src="/activityTest/Public/js/login.js"></script>
</head>
<body>
<script type="text/javascript" src="/activityTest/Public/js/skin.js"></script>

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
<div id="login">
	<h2>登录</h2>
	<form method="post" name="login" action="auto">
		<dl>
			<dt></dt>
			<dd>用 户 名：<input type="text" name="username" class="text" /></dd>
			<dd>密　　码：<input type="password" name="password" class="text" /></dd>
			<dd>保　　留：<input type="radio" name="time" value="0" checked="checked" /> 不保留 <input type="radio" name="time" value="1" /> 一天 <input type="radio" name="time" value="2" /> 一周 <input type="radio" name="time" value="3" /> 一月</dd>

			<dd>验 证 码：<input type="text" name="code" class="text code"  /> <img src="/activityTest/Public/images/code.php.png" id="code"  /></dd>

			<dd><input type="submit" value="登录" class="button" /> <a href="user-register.html"><input type="button" value="注册" id="location" class="button location" /></a></dd>
		</dl>
	</form>
</div>

<div id="footer">

	<p>版权所有 翻版必究</p>
	<p></p>
</div>
</body>
</html>