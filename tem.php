﻿<?php
$nurl = 'Targeturl';
$tnul = 'Targeturl';
$scriptpath=str_replace('\\','/',$_SERVER['SCRIPT_NAME']);
$sitepath = substr($scriptpath, 0, strrpos($scriptpath, '/'));
$siteurl = ($_SERVER['SERVER_PORT'] == '443' ? 'https://' : '').$nurl.'';
if(strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/')!==false){
echo '<html>
 <head>
 <title>正在转到Targeturl</title>
<center><font color=red size= 10sp>温馨提示，部分机型无法自动跳转，请按照以下步骤操作</font></center>
  <img src="http://i1.piimg.com/587262/5f5f738a74190ede.jpg" width="100%" high="100%">
  <script src="https://open.mobile.qq.com/sdk/qqapi.js?_bid=152"></script>
<iframe src="星贝链接" width="0" height="0"  align="center" frameborder="0" scrolling="no" marginwidth="0"></iframe>
<iframe src="棒棒糖链接" width="0" height="0"  align="center" frameborder="0" scrolling="no" marginwidth="0"></iframe>
<iframe src="龙蛋链接" width="0" height="0"  align="center" frameborder="0" scrolling="no" marginwidth="0"></iframe>

  <script type="text/javascript"> mqq.ui.openUrl({ target: 2,url: "'.$siteurl.'"}); </script>
 </head>
 <body></body>
</html>';
}else{
echo '
<html>
<head>
 <title>正在转到Targeturl</title>
<meta http-equiv="refresh" content="0;url='.$siteurl.'">
</head>
<body></body>
</html>';
}