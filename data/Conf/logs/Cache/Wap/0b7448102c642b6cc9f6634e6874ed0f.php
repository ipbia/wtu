<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo ($tpl["wxname"]); ?></title>
<base href="." />
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="<?php echo RES;?>/css/allcss/cate<?php echo ($tpl["tpltypeid"]); ?>_<?php echo ($tpl["color_id"]); ?>.css" rel="stylesheet" type="text/css" />
<!-- <link href="<?php echo RES;?>/css/148/cate25_.css" rel="stylesheet" type="text/css"> -->
<link href="<?php echo RES;?>/css/76/iscroll.css" rel="stylesheet" type="text/css">
<script src="<?php echo RES;?>/css/76/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/css/76/idangerous.swiper.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/css/76/iscroll.js" type="text/javascript"></script>
<script type="text/javascript">
var myScroll;

function loaded() {
myScroll = new iScroll('wrapper', {
snap: true,
momentum: false,
hScrollbar: false,
onScrollEnd: function () {
document.querySelector('#indicator > li.active').className = '';
document.querySelector('#indicator > li:nth-child(' + (this.currPageX+1) + ')').className = 'active';
}
 });
 
 
}

document.addEventListener('DOMContentLoaded', loaded, false);
</script>
</head>
<body id="cate25">
<?php if($homeInfo['play_audio'] == 'on'): if($homeInfo['musicurl'] != false): endif; endif; ?>
<div class="banner">
  <div id="wrapper" style="overflow: hidden;">
    <div id="scroller" style="width: <?php echo ($num*1366); ?>px; -webkit-transition: -webkit-transform 0ms; transition: -webkit-transform 0ms; -webkit-transform-origin: 0px 0px; -webkit-transform: translate3d(-2698px, 0px, 0px) scale(1);">
      <ul id="thelist">
        <?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li>
            <p><?php echo ($so["info"]); ?></p>
            <a href="<?php echo ($so["url"]); ?>"> <img src="<?php echo ($so["img"]); ?>" style="width: 1366px;"> </a> </li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
  </div>
  <div id="nav">
    <div id="prev" onClick="myScroll.scrollToPage(&#39;prev&#39;, 0,400,3);return false">← prev</div>
    <ul id="indicator">
      <?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li 
        <?php if($i == 1): ?>class="active"<?php endif; ?>
        >
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <div id="next" onClick="myScroll.scrollToPage(&#39;next&#39;, 0,400,3);return false">next →</div>
  </div>
  <div class="clr"></div>
</div>
<div id="insert1"></div>
<div class="imgmenu">
  <ul>
    <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i < 5): ?><li><a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']));?>
        <?php else: ?>
        <?php echo (htmlspecialchars_decode($vo["url"])); endif; ?>
        "><img src="<?php echo ($vo["img"]); ?>">
        <p><?php echo ($vo["name"]); ?></p>
        </a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
  </ul>
</div>
<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(!isset($_GET['classid']) && $vo['fid'] == 0): if($vo['key'] < 4): ?><div class="catemenu " >
    <div class="cname"><a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']));?>
      <?php else: ?>
      <?php echo (htmlspecialchars_decode($vo["url"])); endif; ?>
      "><img src="<?php echo ($vo["img"]); ?>">
      <p><?php echo ($vo["name"]); ?></p>
      </a></div>
    <ul>
      <li>
        <?php if(is_array($info2)): $i = 0; $__LIST__ = $info2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$zo): $mod = ($i % 2 );++$i; if($zo['fid'] != 0 && $zo['fid'] == $vo['id']): ?><a href="<?php if($res['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$res['id'],'token'=>$res['token']));?>
          <?php else: ?>
          <?php echo (htmlspecialchars_decode($res["url"])); endif; ?>
          "><?php echo ($zo["name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
        <div class="clr"></div>
      </li>
    </ul>
  </div><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
<script>


var count = document.getElementById("thelist").getElementsByTagName("img").length;  


for(i=0;i<count;i++){
 document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

}

document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";


 setInterval(function(){
myScroll.scrollToPage('next', 0,400,count);
},3500 );

window.onresize = function(){ 
for(i=0;i<count;i++){
document.getElementById("thelist").getElementsByTagName("img").item(i).style.cssText = " width:"+document.body.clientWidth+"px";

}

 document.getElementById("scroller").style.cssText = " width:"+document.body.clientWidth*count+"px";
} 

</script>
<div id="insert2"></div>
<div style="display:none"> </div>
<div class="copyright" style="text-align:center;padding:10px 0">
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