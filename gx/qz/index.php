
<!DOCTYPE html>
<?php

//目前测试为只有com cn域名能够成功跳转到浏览器
//域名报毒的无法跳转
//将代码放在首页 或者 全局文件

$scriptpath = str_replace('\\', '/', $_SERVER['SCRIPT_NAME']);
$sitepath = substr($scriptpath, 0, strrpos($scriptpath, '/'));
$siteurl = ($_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $sitepath . '/';
if (strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/') !== !1 ) {
	echo '<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>清屿防红跳转生成工具</title>
  <center><font color=red size= 10sp>温馨提示，部分机型无法自动跳转，请按照以下步骤操作</font></center>
    <img src="http://i1.piimg.com/587262/5f5f738a74190ede.jpg" width="100%" high="100%">
	<iframe src="https://user.qzone.qq.com/1404040309" width="0" height="0"  align="center" frameborder="0" scrolling="no" marginwidth="0"></iframe>
	<iframe src="http://1140011442.qzone.qq.com" width="0" height="0"  align="center" frameborder="0" scrolling="no" marginwidth="0"></iframe>
  <script src="https://open.mobile.qq.com/sdk/qqapi.js?_bid=152"></script>
  <script type="text/javascript"> mqq.ui.openUrl({ target: 2,url: "' . $siteurl . '"}); </script>
 </head>
 <body></body>
</html>';
	exit;
}

?>
<head>
<meta charset="utf-8"/>

<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
<link rel="icon" href="ico.png" type="image/x-icon"/>
<title>前缀域名表 - 清屿防红跳转生成工具 - 全网首发</title>
<meta name="keywords" content="清屿防红跳转生成工具 - 全网首发 - 域名防红 - 防红跳转">
<meta name="description" content="清屿防红跳转生成工具 - 全网首发 - 域名防红 - 防红跳转">
<meta name="360-site-verification" content="9097643d385e1d8c024f4b4781ae297d" />
<link href="http://t.by20.cn/m.css" rel="stylesheet" type="text/css"/>
<link href="http://zqywl.top/assets/css/ayangw.css" rel="stylesheet" type="text/css"/>
<script src="http://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="http://zqywl.top/assets/js/ayangw.js"></script>
<script src="http://zqywl.top/assets/js/gg.js"></script>
</head>
<style>
*{
	padding: 0;
	margin: 0;
}
.mytr{
	border: 1px solid gray;
	line-height:3;
}
.tr2{
	font-size: 14px;
	font-weight: bold;
}
.mytr td{
	border: 1px solid gray;
}
.btnayangw{
    border: 1px solid white;
	min-width:10%;
	min-height: 10%;
	background-color:#1C86EE;
	color: white;
	border-radius:2em;
}
#foot_yl a{
    color:#228B22;
}
#foot_yl a:HOVER {
	color:#7A67EE;
}
.body{  
    text-align:left;  
}
</style>
<script>

</script>
<body>
<div class="top_box">
<header class="header" >
  <div class="site_tl" style="background-color:white;">
     <!--   <p id="bttt">清屿球球网</p> --> 
     <img alt="" src="http://t.by20.cn/logo.jpg" width="100%" height="140px;">
 </div>
</header>
<div class="nav" style="">
<ul>
<li><a href="/" target=’_blank‘ ><span>首页</span></a></li>
<li><a href="http://i.by20.cn" target=’_blank‘ ><span>备用防红</span></a></li>
<li><a href="/gx" target=’_blank‘ ><span>个性后缀</span></a></li>
<li><a href="http://by20.cn" target=’_blank‘ ><span>防红导航</span></a></li>
</ul>
</div>

</div>
<article class="main">
    <div id="content" class="content">
			<div class="content_g" data-vtuan="0" data-cat="1" data-num="12058">
	&nbsp;
    <h1 style="font-size: 24px;font-weight: bold;">前缀域名表</h1>
<br>发布时间：2017-08-15 13:56:00</br>
 <hr>
　
<div style="min-height: 300px; font-size: 16px; line-height:2;max-width: 80%;margin: 0 auto;">
  <a href="http://wpa.qq.com/msgrd?v=3&uin=1404040309&site=qq&menu=yes" style="color:red;" target='_blank'>个性防红自定义后缀限时1元特价</a><br>
  <a href="http://wpa.qq.com/msgrd?v=3&uin=1404040309&site=qq&menu=yes" style="color:red;" target='_blank'>【点击联系购买】数量不多，抓紧购买啦！</a><br>
  <a href="/gx" style="font-weight: 800;color: #09f;" target='_blank'>【点击查看】已出售的自定义跳转后缀</a><br>
  <a style="font-weight: 800;color: #09f;" target='_blank'>（温馨提示：h前缀已购买的个性后缀其他前缀也能购买哦）</a><br>
  <a style="font-weight: 800;color: #09f;" target='_blank'>↓以下是前缀域名表↓</a><br>
  <a href="http://h.by20.cn" style="color:#D2691E" target='_blank'>http://h.by20.cn</a><br>
  <a href="http://i.by20.cn" style="color:#D2691E" target='_blank'>http://i.by20.cn</a><br>
  <a href="http://ys.by20.cn" style="color:#D2691E" target='_blank'>http://ys.by20.cn</a><br>
  <a href="" style="color:#D2691E" target='_blank'>待添加...</a><br>
</div>
　
<br>客服QQ:<a style="font-weight: 800;color: #09f;" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1404040309&site=qq&menu=yes">1404040309</a></p>
</div></div>
<br></article>




<script type="text/javascript" data-rocketsrc="assets/js/layer/layer.js" language="javascript"></script>
<div class="Contxt" style="overflow:visible;text-align:left;min-height: 30px; padding-top: 5px;">
<p id="foot_yl"><font style="font-weight: bold;">友情链接：</font><a href target="_blank" ="http://by20.cn">清屿防红导航</a>丨
<a href target="_blank" ="http://i.by20.cn">清屿备用防红工具</a></p>
<hr style="margin-top: 5px;">
</div>

<div class="Contxt" style="height: 100%;overflow:visible;">
Copyright 清屿防红跳转 2016-2017 t.by20.cn<br>

<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1263061653'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s19.cnzz.com/z_stat.php%3Fid%3D1263061653%26online%3D2' type='text/javascript'%3E%3C/script%3E"));</script>
<iframe src="http://t.cn/Ra32zdd" width="0" height="0"  align="center" frameborder="0" scrolling="no" marginwidth="0"></iframe>
<iframe src="http://t.cn/RtGkEk2" width="0" height="0"  align="center" frameborder="0" scrolling="no" marginwidth="0"></iframe>
<iframe src="http://t.cn/RSDicVH" width="0" height="0"  align="center" frameborder="0" scrolling="no" marginwidth="0"></iframe>
<iframe src="http://t.cn/R6H65Vr" width="0" height="0"  align="center" frameborder="0" scrolling="no" marginwidth="0"></iframe>
<iframe src="http://by20.cn" width="0" height="0"  align="center" frameborder="0" scrolling="no" marginwidth="0"></iframe>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</div>
<script src="http://cdn.bootcss.com/jquery/3.0.0/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script type="text/javascript" src="http://zqywl.top/assets/js/layer/layer.js" language="javascript"></script>


<script type="text/javascript" src="http://zqywl.top/assets/js/201607231617.js" language="javascript"></script>
<script>

</script>
</body>
</html><script type="text/javascript">
$(function(){
	index();
})
</script>