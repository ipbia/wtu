<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo ($tpl['wxname']); ?></title>
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta charset="utf-8">

<link rel="stylesheet" href="<?php echo RES;?>/css/175/idangerous.swiper.css">
<link href="<?php echo RES;?>/css/175/iscroll.css" rel="stylesheet" type="text/css" />

<link href="<?php echo RES;?>/css/175/cate61_.css" rel="stylesheet" type="text/css" />
 <link href="<?php echo RES;?>/css/175/cate61kz1.css" rel="stylesheet" type="text/css" />
<style>
  
</style>

<script src="<?php echo RES;?>/css/175/iscroll.js" type="text/javascript"></script>
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

<body id="cate61" >
<div id="insert1" style="z-index:10000; position:fixed; top:20px;" ></div>
<?php if($homeInfo['play_audio'] == 'on'): if($homeInfo['musicurl'] != false): endif; endif; ?>
<div class="banner">
  <div id="wrapper" style="overflow: hidden; ">
    <div id="scroller" style="width: 3360px; -webkit-transition: -webkit-transform 0ms; -webkit-transform-origin: 0px 0px; -webkit-transform: translate3d(-1680px, 0px, 0px) scale(1); ">
      <ul id="thelist">
        <li>
          <p>1</p>
          <?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($i % 2 );++$i;?><li>
          <p><?php echo ($so["info"]); ?></p>
          <a href="<?php echo ($so["url"]); ?>"><img src="<?php echo ($so["img"]); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </li>
      </ul>
    </div>
  </div>
 

<div class="device">
  <div class="swiper-container" style="cursor: -webkit-grab; ">
    <div class="swiper-wrapper" style="width: 6720px; height: 185px; -webkit-transform: translate3d(-1680px, 0px, 0px); -webkit-transition: 0s; ">
      <div class="swiper-slide" style="width: 1680px; height: 185px; ">
        <div class="content-slide">
          <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']));?>
            <?php else: ?>
            <?php echo ($vo["url"]); endif; ?>
            ">
            <p class="ico"><img src="<?php echo ($vo["img"]); ?>" /></p>
            <p class="title"><?php echo ($vo["name"]); ?></p>
            </a><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
      </div>
    </div>
  <div class="pagination"></div>

</div>

</div>





<script src="<?php echo RES;?>/css/175/jquery-1.10.1.min.js" type="text/javascript"></script>
  <script src="<?php echo RES;?>/css/175/idangerous.swiper-2.1.min.js" type="text/javascript"></script>
  <script>
  var mySwiper = new Swiper('.swiper-container',{
    pagination: '.pagination',
    loop:true,
    grabCursor: true,
    paginationClickable: true
  })
  $('.arrow-left').on('click', function(e){

    e.preventDefault()
    mySwiper.swipePrev()
  })
  $('.arrow-right').on('click', function(e){
    e.preventDefault()
    mySwiper.swipeNext()
  })
  </script>


<script>
var count = document.getElementById("thelist").getElementsByTagName("img").length;	

var count2 = document.getElementsByClassName("menuimg").length;
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