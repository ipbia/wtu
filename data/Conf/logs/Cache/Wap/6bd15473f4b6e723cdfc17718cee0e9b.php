<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/template/snower.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/template/common.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/template/reset.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/template/home-28.css" media="all" />
<script type="text/javascript" src="<?php echo RES;?>/src/template/maivl.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/src/jQuery.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/src/template/swipe.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/src/template/zepto.js"></script>
<title><?php echo ($tpl["wxname"]); ?></title>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
        <meta name="Keywords" content="三一互联、温州微信营销、微信代运营、微信定制开发、微信托管、微网站、微商城、微营销" />
        <meta name="Description" content="三一互联微盟，国内最大的微信公众智能服务平台，温州八大微体系：微菜单、微官网、微会员、微活动、微商城、微推送、微服务、微统计，企业微营销必备。" />
        <!-- Mobile Devices Support @begin -->
            <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
            <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
            <meta content="no-cache" http-equiv="pragma">
            <meta content="0" http-equiv="expires">
            <meta content="telephone=no, address=no" name="format-detection">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <!-- Mobile Devices Support @end -->
        <link rel="shortcut icon" href="<?php echo RES;?>/img/favicon.ico" />
    </head>
    <body onselectstart="return true;" ondragstart="return false;">
<link rel="stylesheet" type="text/css" href="../../wm-xin-a/font-awesome.css" media="all" />
<div class="body" style="padding-bottom:52px;">
		<!--
	幻灯片管理
	-->
	<div style="-webkit-transform:translate3d(0,0,0);">
		<div id="banner_box" class="box_swipe">
			<ul>
			<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($so["url"]); ?>"><img src="<?php echo ($so["img"]); ?>" alt="<?php echo ($so["info"]); ?>" style="width:100%;" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ul>
			<ol>
									<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li   <?php if($i == 1): ?>class="active"<?php endif; ?>  ></li><?php endforeach; endif; else: echo "" ;endif; ?>
							</ol>
		</div>
	</div>
		<script>
		$(function(){
			new Swipe(document.getElementById('banner_box'), {
				speed:500,
				auto:3000,
				callback: function(){
					var lis = $(this.element).next("ol").children();
					lis.removeClass("on").eq(this.index).addClass("on");
				}
			});
		});
	</script>
<br/><header>
        <div class="snower">
            <script type="text/javascript"></script>
        </div>
    </header>
	    <section>
		<a href="tel:<?php echo ($homeInfo["dianhua"]); ?>" class="link_tel icon-phone"><?php if($homeInfo["dianhua"] != false): echo ($homeInfo["dianhua"]); else: ?>没有留电话<?php endif; ?> </a>
        </section>
<!--播放器开始-->	
				<script type="text/javascript" src="<?php echo RES;?>/js/heka/audio.js"></script>
				<script>
			window.addEventListener("DOMContentLoaded", function(){
				playbox.init("playbox");
			}, false);
		</script>
				<?php if($homeInfo["musicurl"] != false): ?><span id="playbox" class="btn_music" onClick="playbox.init(this).play();"><audio src="<?php echo ($homeInfo["musicurl"]); ?>" loop id="audio"></audio></span><?php else: endif; ?>	
        		<!--播放器结束-->	
		<section>
            <ul class="list_ul">
			<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
													<a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo ['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>">
						                           <figure>
								<div style="background-image:url(<?php echo ($vo["img"]); ?>);">&nbsp;</div>
								<figcaption style="height:33px; overflow:hidden;"><?php echo ($vo["name"]); ?></figcaption>
							</figure>
						</a>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
        </section>
    </div>


<!--
分享前控制
-->
	<script>
		document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
			window.shareData = {
				"imgUrl": "<?php if($homeInfo["picurl"] != false): ?>{weiwin:

$homeInfo.picurl}<?php else: ?>

<?php echo RES;?>/images/themes/huifu.jpg<?php endif; ?>",
				"timeLineLink": "<?php echo U('Index/index',array('token'=>$res['token']));?>",
				"sendFriendLink": "<?php echo U('Index/index',array('token'=>$res['token']));?>",
				"weiboLink": "<?php echo U('Index/index',array('token'=>$res['token']));?>",
				"tTitle": "欢迎访问<?php echo ($tpl["wxname"]); ?>微信版3G网站",
				"tContent": "欢迎访问<?php echo ($tpl["wxname"]); ?>微信版3G网站",
				"fTitle": "欢迎访问<?php echo ($tpl["wxname"]); ?>微信版3G网站",
				"fContent": "欢迎访问<?php echo ($tpl["wxname"]); ?>微信版3G网站",
				"wContent": "欢迎访问<?php echo ($tpl["wxname"]); ?>微信版3G网站"
			};

			// 发送给好友
			WeixinJSBridge.on('menu:share:appmessage', function (argv) {
				WeixinJSBridge.invoke('sendAppMessage', {
					"img_url": window.shareData.imgUrl,
					"img_width": "640",
					"img_height": "640",
					"link": window.shareData.sendFriendLink,
					"desc": window.shareData.fContent,
					"title": window.shareData.fTitle
				}, function (res) {
					_report('send_msg', res.err_msg);
				})
			});

			// 分享到朋友圈
			WeixinJSBridge.on('menu:share:timeline', function (argv) {
				WeixinJSBridge.invoke('shareTimeline', {
					"img_url": window.shareData.imgUrl,
					"img_width": "640",
					"img_height": "640",
					"link": window.shareData.timeLineLink,
					"desc": window.shareData.tContent,
					"title": window.shareData.tTitle
				}, function (res) {
					_report('timeline', res.err_msg);
				});
			});

			// 分享到微博
			WeixinJSBridge.on('menu:share:weibo', function (argv) {
				WeixinJSBridge.invoke('shareWeibo', {
					"content": window.shareData.wContent,
					"url": window.shareData.weiboLink
				}, function (res) {
					_report('weibo', res.err_msg);
				});
			});
		}, false)
	</script>
<div class="copyright" style="text-align:center; >
<?php if($iscopyright == 1): echo ($homeInfo["copyright"]); ?>
<?php else: ?>
<?php echo ($siteCopyright); endif; ?>
</div>
</div>              
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
<br>
<br>
<br>

<script>
function displayit(n){
	for(i=0;i<4;i++){
		if(i==n){
			var id='menu_list'+n;
			if(document.getElementById(id).style.display=='none'){
				document.getElementById(id).style.display='';
				document.getElementById("plug-wrap").style.display='';
			}else{
				document.getElementById(id).style.display='none';
				document.getElementById("plug-wrap").style.display='none';
			}
		}else{
			if($('#menu_list'+i)){
				$('#menu_list'+i).css('display','none');
			}
		}
	}
}
function closeall(){
	var count = document.getElementById("top_menu").getElementsByTagName("ul").length;
	for(i=0;i<count;i++){
		document.getElementById("top_menu").getElementsByTagName("ul").item(i).style.display='none';
	}
	document.getElementById("plug-wrap").style.display='none';
}

document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	WeixinJSBridge.call('hideToolbar');
});
</script>  
	</body>
</html>