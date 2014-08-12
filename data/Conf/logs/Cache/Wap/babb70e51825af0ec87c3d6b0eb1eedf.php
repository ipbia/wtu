<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/weimob-ui-1-1.css?2013-10-21-2" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/common.css?2013-10-21-2" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/car_reset.css?2013-10-21-2" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/list-8.css?2013-10-21-2" media="all" />
<script type="text/javascript" src="<?php echo RES;?>/js/jQuery.js?2013-10-21-2"></script>
<title><?php echo ($home['webname']); ?></title>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta name="keywords" content="<?php echo C('keyword');?>" />
<meta name="description" content="<?php echo C('content');?>" />
<!-- Mobile Devices Support @begin -->
<meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
<meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
<meta content="no-cache" http-equiv="pragma">
<meta content="0" http-equiv="expires">
<meta content="telephone=no, address=no" name="format-detection">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta name="apple-mobile-web-app-capable" content="yes" />
<!-- apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<!-- Mobile Devices Support @end -->
<link rel="shortcut icon" href="/tpl/static/favicon.ico" />
</head>
<body onselectstart="return true;" ondragstart="return false;">
<link rel="stylesheet" type="text/css" href="../../wm-xin-a/font-awesome.css?v=2013121903" media="all" />
<div class="body">
  <div style="height:35px!important;"></div>
  <div class="top_bar">
    <nav>
      <ul class="top_menu">
        <li onClick="window.history.go(-1);"><span class="icon-chevron-sign-left"></span></li>
        <li onClick="location.href='<?php echo U('Index/index',array('token'=>$tpl['token']));?>'"><span class="icon-home"></span></li>
        <li><a href="tel:<?php if($homeInfo["dianhua"] != false): echo ($homeInfo["dianhua"]); ?>
          <?php else: ?>
          没有留电话<?php endif; ?>
          "><span class="icon-phone"></span></a></li>
         <li onClick="$('#menu_font').toggleClass('hidden');"> <span class="icon-list-ul"></span>
          <ul id="menu_font" class="menu_font hidden" onClick="$('#menu_font').toggleClass('hidden');">
            <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li> <a href="<?php if($vo['url'] == ''): echo U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']));?>
                <?php else: ?>
                <?php echo (htmlspecialchars_decode($vo["url"])); endif; ?>
                " class="icon-smile">
                <?php echo ($vo["name"]); ?> </a> </li><?php endforeach; endif; else: echo "" ;endif; ?>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
  <?php if(is_array($res)): $b = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($b % 2 );++$b; if($b == 1): ?><header>
        <div class="head_news">
          <?php if($so['url']): ?><a  href="<?php echo ($so["url"]); ?>" class="tbox">
          <?php else: ?>
          <a  href="<?php echo U('Index/content',array('id'=>$so['id'],'token'=>$so['token'],'wecha_id'=>$wecha_id,'weiwin'=>'mp.weixin.qq.com'));?>" class="tbox"><?php endif; ?>
          <ul>
            <li><img src="<?php echo ($so["pic"]); ?>" style="width:100%; max-height:400px;" /></li>
          </ul>
          <ol>
            <?php echo ($so["title"]); ?>
          </ol>
          </a> </div>
      </header><?php endif; endforeach; endif; else: echo "" ;endif; ?>
  <section>
    <ul class="list_ul list_ul_news">
      <?php if(is_array($res)): $b = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$so): $mod = ($b % 2 );++$b; if($b > 1): ?><li>
            <?php if($so['url']): ?><a  href="<?php echo ($so["url"]); ?>" class="tbox">
            <?php else: ?>
            <a  href="<?php echo U('Index/content',array('id'=>$so['id'],'token'=>$so['token'],'wecha_id'=>$wecha_id,'weiwin'=>'mp.weixin.qq.com'));?>" class="tbox"><?php endif; ?>
            <div> <img src="<?php echo ($so["pic"]); ?>" style="width:60px!important; height:60px;"/> </div>
            <div>
              <p><?php echo ($so["title"]); ?></p>
              <p><?php echo (date("Y-m-d",$so["createtime"])); ?></p>
            </div>
            </a> </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </ul>
  </section>
</div>

</body>
</html>