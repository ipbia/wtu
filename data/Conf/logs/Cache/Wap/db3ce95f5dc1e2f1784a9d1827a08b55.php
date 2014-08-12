<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo ($tpl["wxname"]); ?></title>
        <base href="." />
		 <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/template/music-left.css" media="all" />

<script src="<?php echo RES;?>/css/flash/js/zepto.min.js" type="text/javascript"></script>
	<script src="<?php echo RES;?>/css/flash/js/plugmenu.js" type="text/javascript"></script>
        <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=no" />
<link href="<?php echo RES;?>/css/allcss/cate<?php echo ($tpl["tpltypeid"]); ?>_<?php echo ($tpl["color_id"]); ?>.css" rel="stylesheet" type="text/css" />
        
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/122/common.css" media="all"> -->
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/67/reset.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/67/font-awesome.css" media="all">
<!-- <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/122/home-42.css" media="all"> -->
<script type="text/javascript" src="<?php echo RES;?>/css/61/jQuery.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/css/67/zepto.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/css/67/swipe.js"></script>

    <body onselectstart="return true;" ondragstart="return false;">
    <!--背景音乐-->
<?php if($homeInfo['musicurl'] != false): endif; ?>
        <div class="body">
    <section>
        <!--img src="../images/v32_1.jpg" style="width:100%;" /-->
        <ul class="list_ul">
            <li class="box">
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i < 3): ?><a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>">
            <label><?php echo ($vo["name"]); ?></label>
                    <span>
                            <img src="<?php echo ($vo["img"]); ?>" class="icon-file-text" style="width:60px;height:40px;"align="right">
                        </span>
                </a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                       
            </li>
            <li class="box">   
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i == 3): ?><a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>">
                                <div class="imgBox fl">
                        <img src="<?php echo ($vo["img"]); ?>">
                    </div>
                    <label><?php echo ($vo["name"]); ?></label>
                </a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </li>
                <li class="box">
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($i > 3) and ($i < 6)): ?><a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>">
            <label><?php echo ($vo["name"]); ?></label>
                    <span>
                            <img src="<?php echo ($vo["img"]); ?>" class="icon-file-text" style="width:60px;height:40px;"align="right">
                        </span>
                </a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                       
            </li>
            <li class="box"> 
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i == 6): ?><a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token'])); else: echo (htmlspecialchars_decode($vo["url"])); endif; ?>">
                                <div class="imgBox fl">
                        <img src="<?php echo ($vo["img"]); ?>">
                    </div>
                    <label><?php echo ($vo["name"]); ?></label>
                </a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </li>       <ul>
    </ul></ul></section>
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
<style type="text/css">
body { margin-bottom:60px !important; }
a, button, input { -webkit-tap-highlight-color:rgba(255, 0, 0, 0); }
ul, li { list-style:none; margin:0; padding:0 }
.top_bar { position: fixed; z-index: 900; bottom: 0; left: 0; right: 0; margin: auto; font-family: Helvetica, Tahoma, Arial, Microsoft YaHei, sans-serif; }
.top_menu { display:-webkit-box; border-top: 1px solid #b3b3b3; display: block; width: 100%; background: rgba(255, 255, 255, 0.7); height: 40px; display: -webkit-box; display: box; margin:0; padding:0; -webkit-box-orient: horizontal; background: -webkit-gradient(linear, 0 0, 0 100%, from(#e7e4e7), to(#b9b9b9)); }
.top_bar .top_menu>li { -webkit-box-flex:1; background: -webkit-gradient(linear, 0 0, 0 100%, from(rgba(0, 0, 0, 0.1)), color-stop(50%, rgba(0, 0, 0, 0.2)), to(rgba(0, 0, 0, 0.2))), -webkit-gradient(linear, 0 0, 0 100%, from(rgba(255, 255, 255, 0.1)), color-stop(50%, rgba(255, 255, 255, 0.3)), to(rgba(255, 255, 255, 0.1))); -webkit-background-size:1px 100%, 1px 100%; background-size:1px 100%, 1px 100%; background-position: 1px center, 2px center; background-repeat: no-repeat; position:relative; text-align:center; }
.top_bar .top_menu li a label { padding: 3px 0 0 3px; font-size: 12px; overflow: hidden; }
.top_menu>li:first-child { background:none; }
.top_bar .top_menu>li>a { height:40px; line-height:40px; display:block; text-align:center; color:#4f4d4f; text-shadow: 0 1px rgba(255, 255, 255, 0.3); text-decoration:none; border-top: 1px solid #f9f9f9; -webkit-box-flex:1; }
.top_bar .top_menu>li>a p { overflow:hidden; margin: 0 0 0 0; font-size: 12px; display: block !important; line-height: 18px; text-align: center; }
.top_bar .top_menu>li>a img { padding: 0; height: 20px; width: 20px; color: #fff; line-height: 40px; vertical-align:middle; }
.top_bar li:first-child a { display: block; }
.menu_font { padding: 0; position: absolute; z-index: 500; bottom: 60px; right: 10px; width: 120px; background: #e4e3e2; border: 1px solid #afaeaf; border-radius: 5px; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2); }
.menu_font.hidden { display:none; }
.top_menu li:last-of-type a { background: none; }
.top_menu>li:last-of-type>a label { padding: 0 0 0 3px; }
.menu_font li:last-of-type { background: none; }
.menu_font li a { text-align: left !important; }
.top_menu li:last-of-type a { background: none; }
.menu_font:before, .menu_font:after { content:""; display:inline-block; position:absolute; z-index:240; bottom:0; left: 85%; margin-left:-8px; margin-bottom:-16px; width:0; height:0; border:8px solid red; border-color:#afaeaf transparent transparent transparent; }
.menu_font:after { z-index:501; border-color:#e4e3e2 transparent transparent transparent; margin-bottom:-15px; margin-left:-8px; }
.menu_font li { background:-webkit-gradient(linear, 0 0, 100% 0, from(#e4e3e2), to(#e4e3e2), color-stop(50%, #f3f3f2)), -webkit-gradient(linear, 0 0, 100% 0, from(#e4e3e2), to(#e4e3e2), color-stop(50%, #c6c5c5)); background-size:100% 1px, 100% 2px; background-repeat:no-repeat; background-position: center bottom; }
.menu_font li:first-of-type { border-top: 0; }
.menu_font li:last-of-type { border-bottom: 0; }
.menu_font li a { height: 40px; line-height: 40px !important; position: relative; color: #fff; display: block; width: 100%; text-indent: 10px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; text-decoration:none; color:#4f4d4f; text-shadow: 0 1px rgba(255, 255, 255, 0.3); }
.menu_font li a img { width: 20px; height:20px; display: inline-block; margin-top:-2px; color: #fff; line-height: 40px; vertical-align:middle; }
.menu_font>li>a label { padding:3px 0 0 3px; font-size:14px; overflow:hidden; margin: 0; }
#menu_list0 { right:0; left:10px; }
#menu_list0:before, #menu_list0:after { left: 15%; }
#menu_list0:after { margin-bottom:-15px; margin-left:-8px; }
#sharemcover { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7); display: none; z-index: 20000; }
#sharemcover img { position: fixed; right: 18px; top: 5px; width: 260px; height: 180px; z-index: 20001; border:0; }
.top_bar .top_menu>li>a:hover, .top_bar .top_menu>li>a:active { background-color:#CCCCCC; }
.menu_font li a:hover, .menu_font li a:active { background-color:#CCCCCC; }
.menu_font li:first-of-type a { border-radius:5px 5px 0 0; }
.menu_font li:last-of-type a { border-radius:0 0 5px 5px; }
#plug-wrap { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0); z-index:800; }
#cate18 .device {bottom: 49px;}
#cate18 #indicator {bottom: 240px;}
#cate19 .device {bottom: 49px;}
#cate19 #indicator {bottom: 330px;}
#cate19 .pagination {bottom: 60px;}
</style>
<div class="top_bar" style="-webkit-transform:translate3d(0,0,0)">
  <nav>
    <ul id="top_menu" class="top_menu">
    <?php if(is_array($catemenu)): $i = 0; $__LIST__ = $catemenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a <?php if($vo['vo']){echo 'onclick="javascript:displayit('.$vo['k'].')"';}else{echo 'href="'.$vo['url'].'"';}?>><img src="<?php echo ($vo["picurl"]); ?>"><label><?php echo ($vo["name"]); ?></label></a>
        <?php if ($vo['vo']){ ?>
            <ul id="menu_list<?php echo ($vo['k']); ?>" class="menu_font" style="display: none;">
            <?php if(is_array($vo['vo'])): $i = 0; $__LIST__ = $vo['vo'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li> <a href="<?php echo ($vo["url"]); ?>"><img src="<?php echo ($vo["picurl"]); ?>"><label><?php echo ($vo["name"]); ?></label></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
             <?php
 } ?>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>  
    </ul>
  </nav>
</div>
<div id="plug-wrap" onclick="closeall()" style=""></div>

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
</body></html>