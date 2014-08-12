<?php if (!defined('THINK_PATH')) exit();?>﻿﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo C('site_title');?> <?php echo C('site_name');?></title>
  <link href="<?php echo RES;?>/css/ss.css" rel="stylesheet" type="text/css"  />
  <link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="./wm-xin-a/font-awesome.css" media="all" />
  <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/stylet.css" />
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/common.js"></script>
<script type="text/javascript" charset="utf-8" src="./tpl/static/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="./tpl/static/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="./tpl/static/ueditor/lang/zh-cn/zh-cn.js"></script>

<style>

/*UP*/ 

a.a_upload,a.a_choose{border:1px solid #3d810c;box-shadow:0 1px #CCCCCC;-moz-box-shadow:0 1px #CCCCCC;-webkit-box-shadow:0 1px #CCCCCC;cursor:pointer;display:inline-block;text-align:center;vertical-align:bottom;overflow:visible;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;vertical-align:middle;background-color:#f1f1f1;background-image: -webkit-linear-gradient(bottom, #CCC 0%, #2F8BC9 3%, #2F8BC9 97%, #FFF 100%); background-image: -moz-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); background-image: -ms-linear-gradient(bottom, #CCC 0%, #E5E5E5 3%, #FFF 97%, #FFF 100%); color:white;border:1px solid #AAA;padding:2px 8px 2px 8px;font-size: 14px;line-height: 1.5;

}

</style>
</head>

<body style="background-color:#3B82B8">
  <div class=" w top">
    <div class="left">
      <a>
        <img src="<?php echo RES;?>/images/logo.png" />
      </a>
    </div>
    <div class="right">
      <img src="<?php echo RES;?>/images/portrait2.png" width="28" height="29" />
      <a><?php echo (session('uname')); ?></a>
      |
       <a href="<?php echo C('site_url');?>">返回首页</a>
      |
      <a href="#" onclick="Javascript:window.open('<?php echo U('System/Admin/logout');?>')" onLoad=setTimeout("abc.style.display='none'",5000) >安全退出</a>
    </div>
  </div>


<div id="Frame">
    <div id="nav">
        <div class="top"></div>
        <div class="account">
            <div class="uname">
              <img src="<?php echo RES;?>/images/portrait2.png" />
              <span><?php echo (session('uname')); ?></span>  
            </div>
            <ul>
                <li>
                    用户等级：VIP<?php if($_SESSION['gid']>1){echo $_SESSION['gid']-1;}else{echo 0;}?>
                </li>
                <li>会员余额</li>
                <li>
                    VIP有效时间：
                    <?php if($_SESSION['viptime'] != 0): echo (date("Y-m-d",$thisUser["viptime"])); ?>
                    <?php else: ?>
                    vip0不限时间<?php endif; ?>
                </li>
                <li>
                  <span>
                    <a href="<?php echo U('Index/useredit');?>">修改密码</a>
                  </span>
                  <span>
                    <a href="<?php echo U('Alipay/index');?>">会员充值</a>
                  </span>
                  <span>
                    <a href="#" onclick="Javascript:window.open('<?php echo U('System/Admin/logout');?>')" onLoad=setTimeout("abc.style.display='none'",5000) >安全退出</a>
                  </span>                    
                </li>
            </ul>
            
        </div>
        <div>
            <div class="public">
                <img src="<?php echo RES;?>/images/title1.jpg" width="71" height="28" />
                <div>
                    <div class="img">
                        <img src="<?php echo ($wecha["headerpic"]); ?>"/>
                    </div>
                    <ul>
                        <li>公众账号:<?php echo ($wecha["weixin"]); ?></li>
                        <li>VIP等级:VIP<?php if($_SESSION['gid']>1){echo $_SESSION['gid']-1;}else{echo 0;}?></li>
                        <li>图文数量:<?php echo ($thisUser["diynum"]); ?>/<?php echo ($userinfo["diynum"]); ?></li>
                        <li>请求数量:<?php echo $_SESSION['diynum']; ?>/<?php echo ($userinfo["connectnum"]); ?>
                            <span>
                            <a href="<?php echo U('Index/edit',array('id'=>$_GET['id']));?>">编辑</a>
                            <a href="<?php echo U('Index/del',array('id'=>$_GET['id']));?>">删除</a>
                            </span>      
                        </li>
                    </ul>
                                          
                </div>
            </div>
            <div class="analyse">
                <img src="<?php echo RES;?>/images/title2.jpg" width="71" height="28" />
                <div>
                    <ul>
                        <li>日期:2012-12-12</li>
                        <li>文本请求数: 0/4000 &nbsp;&nbsp;&nbsp; 关注人数：100</li>
                        <li>图文请求数: 0/4000 &nbsp;&nbsp;&nbsp; 取消关注：100</li>
                        <li>语音请求数: 0/4000</li>
                        
                    </ul>                     
                </div>
                <span class="add">
                    <a href="<?php echo U('Index/add');?>"><img src="<?php echo RES;?>/images/jia.png" /></a>                        
                </span>                                 
            </div>
        </div>
    </div><!--nav 结束-->


    <div id="floatline"></div>

    <div class="Menu">
        <div class="TwoMenu">
            <a href="<?php echo U('Function/index',array('token'=>$token,'id'=>session('wxid')));?>" >
                <img src="<?php echo RES;?>/images/jichu.jpg" />
        
            </a>
            <div id="TwoMenu-01" <?php if(in_array(MODULE_NAME,array('Function','Areply','Text','Voiceresponse','Call','Company','Other','Requerydata','Alipay_config','Index'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <img src="<?php echo RES;?>/images/jichu2.jpg" />
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <a href="<?php echo U('Home/set',array('token'=>$token));?>" >
                <img src="<?php echo RES;?>/images/3g.jpg" />
                
            </a>
            <div id="TwoMenu-02" <?php if(in_array(MODULE_NAME,array('Home','Tmpls','Classify','Img','Diymen','Flash','Photo','Catemenu','Plugin'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <img src="<?php echo RES;?>/images/3g2.jpg" />
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <a href="<?php echo U('Lottery/index',array('token'=>$token));?>" >
                <img src="<?php echo RES;?>/images/yingxiao.jpg" />
            </a>
            <div id="TwoMenu-03" <?php if(in_array(MODULE_NAME,array('Lottery','Coupon','Guajiang','Zadan','Yaoqing','Wxusermeasage'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <img src="<?php echo RES;?>/images/yingxiao2.jpg" />
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <a href="<?php echo U('Product/index',array('token'=>$token));?>" >
                <img src="<?php echo RES;?>/images/shangwu.jpg" />
            </a>
            <div id="TwoMenu-04" <?php if(in_array(MODULE_NAME,array('Product','Groupon','orders','Host','Selfform','Adma','Panorama','Reply_info','Wall','Dining'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <img src="<?php echo RES;?>/images/shangwu2.jpg" />
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <a href="<?php echo U('Estate/index',array('token'=>$token));?>" >
                <img src="<?php echo RES;?>/images/hangye.jpg" />
            </a>
            <div id="TwoMenu-05" <?php if(in_array(MODULE_NAME,array('Estate','Jiudian','Reservation','Yiliao','Wedding','Meirong','Lvyou','Jianshen','Zhengwu','Wuye','Ktv','Jiuba','Hunqing','Zhuangxiu','Jiaoyu','Huadian'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <img src="<?php echo RES;?>/images/hangye2.jpg" />
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <a href="<?php echo U('Member_card/index',array('token'=>$token));?>" >
                <img src="<?php echo RES;?>/images/huiyuan.jpg" />
            </a>
            <div id="TwoMenu-06" <?php if(in_array(MODULE_NAME,array('info','Member_card','privilege','create','exchange','Member'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <img src="<?php echo RES;?>/images/huiyuan2.jpg" />
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <a href="<?php echo U('Taobao/index',array('token'=>$token));?>" >
                <img src="<?php echo RES;?>/images/hudong.jpg" />
            </a>
            <div id="TwoMenu-07" <?php if(in_array(MODULE_NAME,array('Taobao','Api','Liuyan','Heka','Diaoyan','Shake','Wewall','Vote','Yuyue','Wai','Wxq'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <img src="<?php echo RES;?>/images/hudong2.jpg" />
            </div>
        </div><!-- TwoMenu   end-->
</div>


<div class="Menu">
        <div class="ThreeMenu">
            <div class="contab" <?php if(in_array(MODULE_NAME,array('Function','Areply','Text','Voiceresponse','Call','Company','Other','Requerydata','Alipay_config','Index'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <a href="<?php echo U('Function/index',array('token'=>$token,'id'=>session('wxid')));?>" class="Red" >
                    <img src="<?php echo RES;?>/images/coin6.jpg" /><span>互联网接入</span><span class="introduction">这里您可以开启想接入的互联网应用</span>
                </a>
                <a href="<?php echo U('Areply/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/guanzhuhuifu_34.jpg" /><span>关注回复</span><span class="introduction">设置新客户关注后第一条信息</span>
                </a>
                <a href="<?php echo U('Text/index',array('token'=>$token));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/wannengbiaoge_34.jpg" /><span>内容回复</span><span class="introduction">您可以设置图文关键字回复</span>
                </a>
                <a href="<?php echo U('Voiceresponse/index',array('token'=>$token));?>" class="DarkGreen" >
                    <img src="<?php echo RES;?>/images/yuyinhuifu_33.jpg" /><span>语音回复</span><span class="introduction">设置语音关键字回复</span>
                </a>

                     <a href="<?php echo U('Other/index',array('token'=>$token));?>" class="LightRed" >
                    <img src="<?php echo RES;?>/images/coin8.jpg" /><span>自定义回复</span><span class="introduction">关闭聊天后回复信息</span>
                </a>

                <a href="<?php echo U('Index/editsms',array('token'=>$token));?>" class="LightBlue" >
                    <img src="<?php echo RES;?>/images/coin9.jpg" /><span>短信设置</span><span class="introduction">系统短信接口配置</span>
                </a>
               
                <a href="<?php echo U('Company/index',array('token'=>$token));?>" class="Brown" >
                    <img src="<?php echo RES;?>/images/lbshuifu_34.jpg" /><span>LBS回复</span><span class="introduction">LBS回复设置</span>
                </a>
                <a href="<?php echo U('Alipay_config/index',array('token'=>$token));?>" class="LightPurple" >
                    <img src="<?php echo RES;?>/images/zhifuguanli_34.jpg" /><span>支付系统配置</span><span class="introduction">电子商务支付系统配置</span>
                </a>
                <a href="<?php echo U('Requerydata/index',array('token'=>$token));?>" class="LightRed" >
                    <img src="<?php echo RES;?>/images/coin12.jpg" /><span>统计分析</span><span class="introduction">提供站点数据分析</span>

                </a>

            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="contab" <?php if(in_array(MODULE_NAME,array('Home','Tmpls','Classify','Img','Diymen','Flash','Photo','plugmenu','Catemenu','Plugin'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                 <a href="<?php echo U('Home/set',array('token'=>$token));?>" class="Red" >
                     <img src="<?php echo RES;?>/images/coin7.jpg" /><span>微网站基本设置</span><span class="introduction">在这里您需要设置微网站基本信息</span>
                 </a>
                <a href="<?php echo U('Tmpls/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin14.jpg" /><span>微网站模版管理</span><span class="introduction">在这里您可以自由切换微信站风格</span>
                </a>
                <a href="<?php echo U('Classify/index',array('token'=>$token));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/coin1.jpg" /><span>微网站板块分类管理</span><span class="introduction">这里您可以设置微网站的分类</span>
                </a>
                <a href="<?php echo U('Img/index',array('token'=>$token));?>" class="DarkGreen" >
                    <img src="<?php echo RES;?>/images/coin2.jpg" /><span>微网站内容管理</span><span class="introduction">在这里您可以添加微网站内容</span>
                </a>
                <a href="<?php echo U('Diymen/index',array('token'=>$token));?>" class="LightBlue" >
                    <img src="<?php echo RES;?>/images/coin15.jpg" /><span>微信导航菜单管理</span><span class="introduction">添加微信底部菜单（需开通接口服务）</span>
                </a>
                <a href="<?php echo U('Flash/index',array('token'=>$token));?>" class="Orange" >
                    <img src="<?php echo RES;?>/images/coin4.jpg" /><span>幻灯片</span><span class="introduction">微网站头部幻灯片管理</span>
                </a>
                <a href="<?php echo U('Photo/index',array('token'=>$token));?>" class="Brown" >
                    <img src="<?php echo RES;?>/images/xiangce_34.jpg" /><span>相册</span><span class="introduction">微网站相册图片管理</span>
                </a>
               <a href="<?php echo U('Catemenu/index',array('token'=>$token));?>" class="LightPurple" >
                    <img src="<?php echo RES;?>/images/bohaobanquan_34.jpg" /><span>底部导航菜单</span><span class="introduction">设置微网站版权信息及底部菜单</span>
                </a>
		<a href="<?php echo U('Plugin/index',array('token'=>$token));?>" class="LightPurple" >
                    <img src="<?php echo RES;?>/images/bohaobanquan_34.jpg" /><span>实用小工具外链</span><span class="introduction">实用小工具外链</span>
                </a>
                                <a target="_blank" href="<?php echo U('Yulan/index',array('token'=>$token));?>" class="LightPurple" >
                    <img src="<?php echo RES;?>/images/coin18.JPG" /><span>在线预览</span><span class="introduction">您可以用通过PC浏览器进行3G站的预览</span>
                </a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="contab" <?php if(in_array(MODULE_NAME,array('Lottery','Coupon','Guajiang','Research','Zadan','Yaoqing','Wxusermeasage'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <a href="<?php echo U('Lottery/index',array('token'=>$token));?>" class="Red"  >
                    <img src="<?php echo RES;?>/images/dazhuanpan_34.jpg" /><span>大转盘</span><span class="introduction">发布大转盘营销活动</span>
                </a>
                <a href="<?php echo U('Coupon/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/youhuiquan_34.jpg" /><span>优惠券</span><span class="introduction">发布优惠券营销活动</span>
                </a>
                <a href="<?php echo U('Guajiang/index',array('token'=>$token));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/guaguaka_34.jpg" /><span>刮刮卡</span><span class="introduction">发布刮刮卡营销活动</span>
                </a>
                 <a href="<?php echo U('Zadan/index',array('token'=>$token));?>" class="DarkGreen">
                    <img src="<?php echo RES;?>/images/zajindan_34.jpg" /><span>砸金蛋</span><span class="introduction">发布砸金蛋营销活动</span>
                </a>
<!-- <a href="<?php echo U('LuckyFruit/index',array('token'=>$token));?>" class="DarkGreen">
                    <img src="<?php echo RES;?>/images/zajindan_34.jpg" /><span>水果机</span><span class="introduction">发布水果机营销活动</span>
                </a>-->


               <!-- <a href="<?php echo U('Xitie/index',array('token'=>$token));?>" class="LightBlue">
                    <img src="<?php echo RES;?>/images/weixitie_34.jpg" /><span>微喜帖</span><span class="introduction">电子喜帖发布 可用于结婚等场合</span>
                </a>
                <a href="<?php echo U('Yaoqing/index',array('token'=>$token));?>" class="Orange" >
                    <img src="<?php echo RES;?>/images/yaoqinghan_34.jpg" /><span>邀请函</span><span class="introduction">电子邀请函（会议，开业，店庆，活动等邀请）</span>
                </a>
              <a href="<?php echo U('Heka/index',array('token'=>$token));?>" class="Orange" >
                    <img src="<?php echo RES;?>/images/yaoqinghan_34.jpg" /><span>微贺卡</span><span class="introduction">可用于拜年</span>
                </a>  -->              
                               <a href="<?php echo U('Wxusermeasage/index',array('token'=>$token));?>" class="Orange" >
                    <img src="<?php echo RES;?>/images/kefu.jpg" /><span>人工客服</span><span class="introduction">这里您可以开通人工客户服务</span>
                </a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="contab" <?php if(in_array(MODULE_NAME,array('Product','Groupon','orders','Host','Selfform','Adma','Panorama','Reply_info','Wall','Xitie','Dining'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <a href="<?php echo U('Product/index',array('token'=>$token));?>" class="Red"  >
                    <img src="<?php echo RES;?>/images/weishangcheng_34.jpg" /><span>微商城</span><span class="introduction">移动端电子商务平台</span>
                </a>
                <a href="<?php echo U('Groupon/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/weituangou_34.jpg" /><span>微团购</span><span class="introduction">移动端团购平台</span>
                </a>
                <a href="<?php echo U('Dining/orders',array('token'=>$token,'dining'=>1));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/wuxiandingcan_34.jpg" /><span>无线订餐</span><span class="introduction">移动端无线订餐</span>
                </a>
                <a href="<?php echo U('Host/index',array('token'=>$token));?>"  class="DarkGreen" >
                    <img src="<?php echo RES;?>/images/tongyongdingcan_34.jpg" /><span>通用订单</span><span class="introduction">电子商务平台订单管理</span>
                </a>
                <a href="<?php echo U('Selfform/index',array('token'=>$token));?>" class="LightBlue" >
                    <img src="<?php echo RES;?>/images/wannengbiaoge_34.jpg" /><span>万能表单</span><span class="introduction">自定义万能表单工具可发布预约等功能</span>
                </a>
                <a href="<?php echo U('Adma/index',array('token'=>$token));?>"  class="Orange" >
                    <img src="<?php echo RES;?>/images/diyxuanchuan_34.jpg" /><span>DIY宣传</span><span class="introduction">制作自己的二维码宣传页面</span>
                </a>
                <a href="<?php echo U('Panorama/index',array('token'=>$token));?>" class="LightPurple" >
                    <img src="<?php echo RES;?>/images/360quanjing_34.jpg" /><span>360全景</span><span class="introduction">3D全景展示</span>
                </a>
                <a href="<?php echo U('Xitie/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/shangjiashezhi_34.jpg" /><span>微喜帖</span><span class="introduction">微喜帖</span>
                </a>
				  <!--   <a href="<?php echo U('Wedding/index',array('token'=>$token));?>" class="Highland" >
                 <img src="<?php echo RES;?>/images/shangjiashezhi_34.jpg" /><span>新喜帖</span><span class="introduction">新喜帖</span>
                </a>-->
            </div>
			
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="contab" <?php if(in_array(MODULE_NAME,array('Estate','Jiudian','Reservation','Yiliao','Wedding','Meirong','Lvyou','Jianshen','Zhengwu','Wuye','Ktv','Jiuba','Hunqing','Zhuangxiu','Jiaoyu','Huadian'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                 <a href="<?php echo U('Estate/index',array('token'=>$token));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/coin22.jpg" /><span>微房产</span><span class="introduction">微房产</span>
                </a>
                 <a href="<?php echo U('Jiudian/index',array('token'=>$token));?>" class="Orange" >
                    <img src="<?php echo RES;?>/images/coin24.jpg" /><span>微酒店</span><span class="introduction">微酒店</span>
                </a>
				  <a href="<?php echo U('Reservation/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin23.jpg" /><span>微预约</span><span class="introduction">微预约</span>
                </a>
				  <a href="<?php echo U('Yiliao/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin25.jpg" /><span>微医疗</span><span class="introduction">微医疗</span>
                </a>
   <a href="<?php echo U('Meirong/index',array('token'=>$token));?>" class="Highland" >
                 <img src="<?php echo RES;?>/images/weituangou_34.jpg" /><span>微美容</span><span class="introduction">微美容</span>
                </a>
				 <a href="<?php echo U('Lvyou/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin6.jpg" /><span>微旅游</span><span class="introduction">微旅游</span>
                </a>
				<a href="<?php echo U('Jianshen/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin7.jpg" /><span>微健身</span><span class="introduction">微健身</span>
                </a>
				 <a href="<?php echo U('Zhengwu/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin18.JPG" /><span>微政务</span><span class="introduction">微政务</span>
                </a>
				<a href="<?php echo U('Wuye/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin1.jpg" /><span>微物业</span><span class="introduction">微物业</span>
                </a>
				 <a href="<?php echo U('Ktv/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/yuyinhuifu_33.jpg" /><span>微KTV</span><span class="introduction">微KTV</span>
                </a>
				<a href="<?php echo U('Jiuba/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/disanfang_34.jpg" /><span>微酒吧</span><span class="introduction">微酒吧</span>
                </a>
				 <a href="<?php echo U('Hunqing/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/zajindan_34.jpg" /><span>微婚庆</span><span class="introduction">微婚庆</span>
                </a>
				 <a href="<?php echo U('Zhuangxiu/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin15.jpg" /><span>微装修</span><span class="introduction">微装修</span>
                </a>
				<a href="<?php echo U('Jiaoyu/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin2.jpg" /><span>微教育</span><span class="introduction">微教育</span>
                </a>
				<a href="<?php echo U('Huadian/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/email.jpg" /><span>微花店</span><span class="introduction">微花店</span>
                </a>
				
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="contab" <?php if(in_array(MODULE_NAME,array('info','Member_card','privilege','create','exchange','Member'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <a href="<?php echo U('Member_card/info',array('token'=>$token));?>"  class="Red"  >
                    <img src="<?php echo RES;?>/images/shangjiashezhi_34.jpg" /><span>会员卡商家设置</span><span class="introduction">设置商户信息</span>
                </a>
                <a href="<?php echo U('Member_card/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/huiyuanka_34.jpg" /><span>会员卡</span><span class="introduction">会员卡样式名称等信息设置</span>
                </a>
                <a href="<?php echo U('Member_card/replyInfoSet',array('token'=>$token));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/huiyuantequan_34.jpg" /><span>回复设置</span><span class="introduction">回复设置</span>
                </a>
             <!--   <a href="<?php echo U('Member_card/create',array('token'=>$token));?>" class="DarkGreen" >
                    <img src="<?php echo RES;?>/images/zaixiankaika_34.jpg" /><span>在线开卡</span><span class="introduction">在线会员卡开卡管理</span>
                </a>
                <a href="<?php echo U('Member_card/exchange',array('token'=>$token));?>" class="LightBlue" >
                    <img src="<?php echo RES;?>/images/jifenguanli_34.jpg" /><span>积分设置</span><span class="introduction">会员积分功能设置</span>
                </a>
                <a href="<?php echo U('Member/index',array('token'=>$token));?>" class="Orange" >
                    <img src="<?php echo RES;?>/images/ziliaoguanli_34.jpg" /><span>资料管理</span><span class="introduction">会员资料管理</span>
                </a>-->
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="contab" <?php if(in_array(MODULE_NAME,array('Taobao','Api','Liuyan','Heka','Diaoyan','Shake','Wewall','Vote','Yuyue','Wai','Wxq'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <a href="<?php echo U('Taobao/index',array('token'=>$token));?>"  class="Red"  >
                    <img src="<?php echo RES;?>/images/taobaotianmao_34.jpg" /><span>淘宝天猫</span><span class="introduction">功能失效</span>
                </a>
                <a href="<?php echo U('Api/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/disanfang_34.jpg" /><span>第三方</span><span class="introduction">调用第三方插件</span>
                </a>
				<a href="<?php echo U('Heka/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin14.jpg" /><span>微贺卡</span><span class="introduction">微贺卡</span>
                </a>
				<a href="<?php echo U('Diaoyan/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin2.jpg" /><span>微调研</span><span class="introduction">微调研</span>
                </a>
				<a href="<?php echo U('Vote/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin2.jpg" /><span>微投票</span><span class="introduction">微投票</span>
                </a>
				<a href="<?php echo U('Yuyue/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin23.jpg" /><span>微预约</span><span class="introduction">微预约</span>
                </a>
				<a href="<?php echo U('Shake/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin19.jpg" /><span>摇一摇</span><span class="introduction">摇一摇</span>
                </a>
				<a href="<?php echo U('Wewall/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/coin20.jpg" /><span>微信墙</span><span class="introduction">微信墙</span>
                </a>

				<a href="<?php echo U('Liuyan/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/diyxuanchuan_34.jpg" /><span>留言板</span><span class="introduction">留言板</span>
                </a>

            </div>
        </div><!-- ThreeMenu end-->
    </div><!--Menu   end -->

<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/stylet.css" rel="stylesheet" type="text/css" />
<style>
#sideBar ul .ckit{display:none;}
</style>
        <script type="text/javascript">

 $(".nav-header").click(function(){
  $(".ckit").each(function(){
     $(this).slideUp('normal');
  }); 
  $(this).next(".ckit").slideDown('normal');
});
  
   
 $(".selected").parent(".ckit").slideDown(0);

 
    
</script>
<script src="<?php echo RES;?>/js/jquery.tools.min.js" type="text/javascript"></script> 
<script src="<?php echo RES;?>/js/jquery.mixitup.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/themes/default/default.css" />

<link rel="stylesheet" href="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.css" />

<script src="<?php echo STATICS;?>/kindeditor/kindeditor.js" type="text/javascript"></script>

<script src="<?php echo STATICS;?>/kindeditor/lang/zh_CN.js" type="text/javascript"></script>

<script src="<?php echo STATICS;?>/kindeditor/plugins/code/prettify.js" type="text/javascript"></script>

<div class="content"  >



    <div class="cLineB">

        <h4>模板管理 <span class="FAQ">选择适合您的模版风格，手机输入“首页”测试效果。</span></h4>

    </div>



    <div class="msgWrap form">

        <ul id="tags" style="width:920px;">

            <li class="selectTag"><a onclick="selectTag('tagContent0',this)" href="javascript:void(0)">1. 栏目首页模板风格</a> </li>

            <li><a onclick="selectTag('tagContent1',this)" href="javascript:void(0)">2.图文列表模板风格</a> </li>

            <li><a onclick="selectTag('tagContent2',this)" href="javascript:void(0)">3.图文详细页模板风格</a> </li>

            <li><a onclick="selectTag('tagContent3',this)" href="javascript:void(0)">4.颜色风格&预览</a> </li>

        </ul>



        <div id="tagContent">

            <div class="tagContent selectTag" id="tagContent0">

                <fieldset>

                    <ul class="cateradio">
					
					<li <?php if(($info["tpltypeid"]) == "85"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>
							
                                <img src="<?php echo RES;?>/images/cate85.png" onclick="javascript:alert('已选择模板85')" />

                                <input class="radio" type="radio" name="optype" value="85" <?php if(($info["tpltypeid"]) == "85"): ?>checked<?php endif; ?> /> 模板85

                            </label>

                        </li>

					

						<li <?php if(($info["tpltypeid"]) == "82"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate82.png" onclick="javascript:alert('已选择模板82')" />

                                <input class="radio" type="radio" name="optype" value="82" <?php if(($info["tpltypeid"]) == "82"): ?>checked<?php endif; ?> /> 模板82

                            </label>

                        </li>

						


						<li <?php if(($info["tpltypeid"]) == "79"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate79.png" onclick="javascript:alert('已选择模板79')" />

                                <input class="radio" type="radio" name="optype" value="79" <?php if(($info["tpltypeid"]) == "79"): ?>checked<?php endif; ?> /> 模板79

                            </label>

                        </li>

					<li <?php if(($info["tpltypeid"]) == "78"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate78.png" onclick="javascript:alert('已选择模板78')" />

                                <input class="radio" type="radio" name="optype" value="78" <?php if(($info["tpltypeid"]) == "78"): ?>checked<?php endif; ?> /> 模板78

                            </label>

                        </li>
					

					<li <?php if(($info["tpltypeid"]) == "77"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate77.png" onclick="javascript:alert('已选择模板77')" />

                                <input class="radio" type="radio" name="optype" value="77" <?php if(($info["tpltypeid"]) == "77"): ?>checked<?php endif; ?> /> 模板77

                            </label>

                        </li>

						<li <?php if(($info["tpltypeid"]) == "76"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate76.png" onclick="javascript:alert('已选择模板76')" />

                                <input class="radio" type="radio" name="optype" value="76" <?php if(($info["tpltypeid"]) == "76"): ?>checked<?php endif; ?> /> 模板76

                            </label>

                        </li>

						<li <?php if(($info["tpltypeid"]) == "75"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate75.png" onclick="javascript:alert('已选择模板75')" />

                                <input class="radio" type="radio" name="optype" value="75" <?php if(($info["tpltypeid"]) == "75"): ?>checked<?php endif; ?> /> 模板75

                            </label>

                        </li>

			

						<li <?php if(($info["tpltypeid"]) == "73"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate73.png" onclick="javascript:alert('已选择模板73')" />

                                <input class="radio" type="radio" name="optype" value="73" <?php if(($info["tpltypeid"]) == "73"): ?>checked<?php endif; ?> /> 模板73

                            </label>

                        </li>

						<li <?php if(($info["tpltypeid"]) == "72"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate72.png" onclick="javascript:alert('已选择模板72')" />

                                <input class="radio" type="radio" name="optype" value="72" <?php if(($info["tpltypeid"]) == "72"): ?>checked<?php endif; ?> /> 模板72

                            </label>

                        </li>

						<li <?php if(($info["tpltypeid"]) == "71"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate71.png" onclick="javascript:alert('已选择模板71')" />

                                <input class="radio" type="radio" name="optype" value="71" <?php if(($info["tpltypeid"]) == "71"): ?>checked<?php endif; ?> /> 模板71

                            </label>

                        </li>

				
						
						
						

						

						<li <?php if(($info["tpltypeid"]) == "68"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate68.png" onclick="javascript:alert('已选择模板68')" />

                                <input class="radio" type="radio" name="optype" value="68" <?php if(($info["tpltypeid"]) == "68"): ?>checked<?php endif; ?> /> 模板68

                            </label>

                        </li>

						<li <?php if(($info["tpltypeid"]) == "67"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate67.png" onclick="javascript:alert('已选择模板67')" />

                                <input class="radio" type="radio" name="optype" value="67" <?php if(($info["tpltypeid"]) == "67"): ?>checked<?php endif; ?> /> 模板67

                            </label>

                        </li>

						

						<li <?php if(($info["tpltypeid"]) == "66"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate66.png" onclick="javascript:alert('已选择模板66')" />

                                <input class="radio" type="radio" name="optype" value="66" <?php if(($info["tpltypeid"]) == "66"): ?>checked<?php endif; ?> /> 模板66

                            </label>

                        </li>

						<li <?php if(($info["tpltypeid"]) == "65"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate65.png" onclick="javascript:alert('已选择模板65')" />

                                <input class="radio" type="radio" name="optype" value="65" <?php if(($info["tpltypeid"]) == "65"): ?>checked<?php endif; ?> /> 模板65

                            </label>

                        </li>

						<li <?php if(($info["tpltypeid"]) == "64"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate64.png" onclick="javascript:alert('已选择模板64')" />

                                <input class="radio" type="radio" name="optype" value="64" <?php if(($info["tpltypeid"]) == "64"): ?>checked<?php endif; ?> /> 模板64

                            </label>

                        </li>

						<li <?php if(($info["tpltypeid"]) == "63"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate63.png" onclick="javascript:alert('已选择模板63')" />

                                <input class="radio" type="radio" name="optype" value="63" <?php if(($info["tpltypeid"]) == "63"): ?>checked<?php endif; ?> /> 模板63

                            </label>

                        </li>

						

						<li <?php if(($info["tpltypeid"]) == "61"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate61.png" onclick="javascript:alert('已选择模板61')" />

                                <input class="radio" type="radio" name="optype" value="61" <?php if(($info["tpltypeid"]) == "61"): ?>checked<?php endif; ?> /> 模板61

                            </label>

                        </li>

					

					<li <?php if(($info["tpltypeid"]) == "60"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate60.png" onclick="javascript:alert('已选择模板60')" />

                                <input class="radio" type="radio" name="optype" value="60" <?php if(($info["tpltypeid"]) == "60"): ?>checked<?php endif; ?> /> 模板60

                            </label>

                        </li>

						

						<li <?php if(($info["tpltypeid"]) == "58"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate58.png" onclick="javascript:alert('已选择模板58')" />

                                <input class="radio" type="radio" name="optype" value="58" <?php if(($info["tpltypeid"]) == "58"): ?>checked<?php endif; ?> /> 模板58

                            </label>

                        </li>

						<li <?php if(($info["tpltypeid"]) == "57"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate57.png" onclick="javascript:alert('已选择模板57')" />

                                <input class="radio" type="radio" name="optype" value="57" <?php if(($info["tpltypeid"]) == "57"): ?>checked<?php endif; ?> /> 模板57

                            </label>

                        </li>

						<li <?php if(($info["tpltypeid"]) == "55"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate55.png" onclick="javascript:alert('已选择模板55')" />

                                <input class="radio" type="radio" name="optype" value="55" <?php if(($info["tpltypeid"]) == "55"): ?>checked<?php endif; ?> /> 模板55

                            </label>

                        </li>

					

					  <li <?php if(($info["tpltypeid"]) == "52"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate52.png" onclick="javascript:alert('已选择模板52')" />

                                <input class="radio" type="radio" name="optype" value="52" <?php if(($info["tpltypeid"]) == "52"): ?>checked<?php endif; ?> /> 模板52

                            </label>

                        </li>

					



						 <li <?php if(($info["tpltypeid"]) == "56"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate56.png" onclick="javascript:alert('已选择模板56')" />

                                <input class="radio" type="radio" name="optype" value="56" <?php if(($info["tpltypeid"]) == "56"): ?>checked<?php endif; ?> /> 模板50

                            </label>

                        </li>

						 <li <?php if(($info["tpltypeid"]) == "51"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate51.png" onclick="javascript:alert('已选择模板51')" />

                                <input class="radio" type="radio" name="optype" value="51" <?php if(($info["tpltypeid"]) == "51"): ?>checked<?php endif; ?> /> 模板49

                            </label>

                        </li>

	  <li <?php if(($info["tpltypeid"]) == "48"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate48.png" onclick="javascript:alert('已选择模板48')" />

                                <input class="radio" type="radio" name="optype" value="48" <?php if(($info["tpltypeid"]) == "48"): ?>checked<?php endif; ?> /> 模板48

                            </label>

                        </li>

						  <li <?php if(($info["tpltypeid"]) == "47"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate47.png" onclick="javascript:alert('已选择模板47')" />

                                <input class="radio" type="radio" name="optype" value="47" <?php if(($info["tpltypeid"]) == "52"): ?>checked<?php endif; ?> /> 模板47

                            </label>

                        </li>

						  <li <?php if(($info["tpltypeid"]) == "46"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate46.png" onclick="javascript:alert('已选择模板46')" />

                                <input class="radio" type="radio" name="optype" value="46" <?php if(($info["tpltypeid"]) == "46"): ?>checked<?php endif; ?> /> 模板46

                            </label>

                        </li>

						  <li <?php if(($info["tpltypeid"]) == "45"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate45.png" onclick="javascript:alert('已选择模板45')" />

                                <input class="radio" type="radio" name="optype" value="45" <?php if(($info["tpltypeid"]) == "45"): ?>checked<?php endif; ?> /> 模板45

                            </label>

                        </li>

						  <li <?php if(($info["tpltypeid"]) == "44"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate44.png" onclick="javascript:alert('已选择模板44')" />

                                <input class="radio" type="radio" name="optype" value="44" <?php if(($info["tpltypeid"]) == "44"): ?>checked<?php endif; ?> /> 模板44

                            </label>

                        </li>

										<li <?php if(($info["tpltypeid"]) == "43"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/home-17.png" onclick="javascript:alert('已选择模板43')" />

                                <input class="radio" type="radio" name="optype" value="43" <?php if(($info["tpltypeid"]) == "43"): ?>checked<?php endif; ?> /> 精品43

                            </label>

                        </li>

										<li <?php if(($info["tpltypeid"]) == "42"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/home-0.png" onclick="javascript:alert('已选择模板42')" />

                                <input class="radio" type="radio" name="optype" value="42" <?php if(($info["tpltypeid"]) == "42"): ?>checked<?php endif; ?> /> 精品42

                            </label>

                        </li>

					<li <?php if(($info["tpltypeid"]) == "41"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/home-58.png" onclick="javascript:alert('已选择模板41')" />

                                <input class="radio" type="radio" name="optype" value="41" <?php if(($info["tpltypeid"]) == "41"): ?>checked<?php endif; ?> /> 精品41

                            </label>

                        </li>

					<li <?php if(($info["tpltypeid"]) == "40"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/home-21.png" onclick="javascript:alert('已选择模板40')" />

                                <input class="radio" type="radio" name="optype" value="40" <?php if(($info["tpltypeid"]) == "40"): ?>checked<?php endif; ?> /> 精品40

                            </label>

                        </li>

    <li <?php if(($info["tpltypeid"]) == "39"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/home-48.png" onclick="javascript:alert('已选择模板39')" />

                                <input class="radio" type="radio" name="optype" value="39" <?php if(($info["tpltypeid"]) == "39"): ?>checked<?php endif; ?> /> 精品39

                            </label>

                        </li>																															    <li <?php if(($info["tpltypeid"]) == "38"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/home-49.png" onclick="javascript:alert('已选择模板38')" />

                                <input class="radio" type="radio" name="optype" value="38" <?php if(($info["tpltypeid"]) == "38"): ?>checked<?php endif; ?> /> 精品38

                            </label>

                        </li>

																														    <li <?php if(($info["tpltypeid"]) == "37"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/home-26.png" onclick="javascript:alert('已选择模板37')" />

                                <input class="radio" type="radio" name="optype" value="37" <?php if(($info["tpltypeid"]) == "37"): ?>checked<?php endif; ?> /> 精品37

                            </label>

                        </li>

																									    <li <?php if(($info["tpltypeid"]) == "36"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/home-28.png" onclick="javascript:alert('已选择模板36')" />

                                <input class="radio" type="radio" name="optype" value="36" <?php if(($info["tpltypeid"]) == "36"): ?>checked<?php endif; ?> /> 精品36

                            </label>

                        </li>

																				    <li <?php if(($info["tpltypeid"]) == "35"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/home17.png" onclick="javascript:alert('已选择模板35')" />

                                <input class="radio" type="radio" name="optype" value="35" <?php if(($info["tpltypeid"]) == "35"): ?>checked<?php endif; ?> /> 精品35

                            </label>

                        </li>

															    <li <?php if(($info["tpltypeid"]) == "34"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/home-32.png" onclick="javascript:alert('已选择模板34')" />

                                <input class="radio" type="radio" name="optype" value="34" <?php if(($info["tpltypeid"]) == "34"): ?>checked<?php endif; ?> /> 精品34

                            </label>

                        </li>

										    <li <?php if(($info["tpltypeid"]) == "33"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate-home001.png" onclick="javascript:alert('已选择模板33')" />

                                <input class="radio" type="radio" name="optype" value="33" <?php if(($info["tpltypeid"]) == "33"): ?>checked<?php endif; ?> /> 精品33

                            </label>

                        </li>

					    <li <?php if(($info["tpltypeid"]) == "32"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate137.png" onclick="javascript:alert('已选择模板32')" />

                                <input class="radio" type="radio" name="optype" value="32" <?php if(($info["tpltypeid"]) == "32"): ?>checked<?php endif; ?> /> 模板32

                            </label>

                        </li>

					    <li <?php if(($info["tpltypeid"]) == "31"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate136.png" onclick="javascript:alert('已选择模板31')" />

                                <input class="radio" type="radio" name="optype" value="31" <?php if(($info["tpltypeid"]) == "31"): ?>checked<?php endif; ?> /> 模板31

                            </label>

                        </li>

					    <li <?php if(($info["tpltypeid"]) == "30"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate133.png" onclick="javascript:alert('已选择模板30')" />

                                <input class="radio" type="radio" name="optype" value="30" <?php if(($info["tpltypeid"]) == "30"): ?>checked<?php endif; ?> /> 模板30

                            </label>

                        </li>

					    <li <?php if(($info["tpltypeid"]) == "29"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate132.png" onclick="javascript:alert('已选择模板29')" />

                                <input class="radio" type="radio" name="optype" value="29" <?php if(($info["tpltypeid"]) == "29"): ?>checked<?php endif; ?> /> 模板29

                            </label>

                        </li>

					    <li <?php if(($info["tpltypeid"]) == "28"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate131.png" onclick="javascript:alert('已选择模板28')" />

                                <input class="radio" type="radio" name="optype" value="28" <?php if(($info["tpltypeid"]) == "28"): ?>checked<?php endif; ?> /> 模板28

                            </label>

                        </li>

					    <li <?php if(($info["tpltypeid"]) == "27"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate130.png" onclick="javascript:alert('已选择模板27')" />

                                <input class="radio" type="radio" name="optype" value="27" <?php if(($info["tpltypeid"]) == "27"): ?>checked<?php endif; ?> /> 模板27

                            </label>

                        </li>

					    <li <?php if(($info["tpltypeid"]) == "26"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate128.png" onclick="javascript:alert('已选择模板26')" />

                                <input class="radio" type="radio" name="optype" value="26" <?php if(($info["tpltypeid"]) == "26"): ?>checked<?php endif; ?> /> 模板26

                            </label>

                        </li>

					    <li <?php if(($info["tpltypeid"]) == "25"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate127.png" onclick="javascript:alert('已选择模板25')" />

                                <input class="radio" type="radio" name="optype" value="25" <?php if(($info["tpltypeid"]) == "25"): ?>checked<?php endif; ?> /> 模板25

                            </label>

                        </li>

					    <li <?php if(($info["tpltypeid"]) == "24"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate124.png" onclick="javascript:alert('已选择模板24')" />

                                <input class="radio" type="radio" name="optype" value="24" <?php if(($info["tpltypeid"]) == "24"): ?>checked<?php endif; ?> /> 模板24

                            </label>

                        </li>

					    <li <?php if(($info["tpltypeid"]) == "23"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate123.png" onclick="javascript:alert('已选择模板23')" />

                                <input class="radio" type="radio" name="optype" value="23" <?php if(($info["tpltypeid"]) == "23"): ?>checked<?php endif; ?> /> 模板23

                            </label>

                        </li>

					    <li <?php if(($info["tpltypeid"]) == "22"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate122.png" onclick="javascript:alert('已选择模板22')" />

                                <input class="radio" type="radio" name="optype" value="22" <?php if(($info["tpltypeid"]) == "22"): ?>checked<?php endif; ?> /> 模板22

                            </label>

                        </li>

					   

					    <li <?php if(($info["tpltypeid"]) == "20"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate120.png" onclick="javascript:alert('已选择模板20')" />

                                <input class="radio" type="radio" name="optype" value="20" <?php if(($info["tpltypeid"]) == "20"): ?>checked<?php endif; ?> /> 模板20

                            </label>

                        </li>

					    <li <?php if(($info["tpltypeid"]) == "19"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate119.png" onclick="javascript:alert('已选择模板19')" />

                                <input class="radio" type="radio" name="optype" value="19" <?php if(($info["tpltypeid"]) == "19"): ?>checked<?php endif; ?> /> 模板19

                            </label>

                        </li>

					    <li <?php if(($info["tpltypeid"]) == "118"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate118.png" onclick="javascript:alert('已选择模板18')" />

                                <input class="radio" type="radio" name="optype" value="18" <?php if(($info["tpltypeid"]) == "18"): ?>checked<?php endif; ?> /> 模板18

                            </label>

                        </li>

					    <li <?php if(($info["tpltypeid"]) == "17"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate117.png" onclick="javascript:alert('已选择模板17')" />

                                <input class="radio" type="radio" name="optype" value="17" <?php if(($info["tpltypeid"]) == "17"): ?>checked<?php endif; ?> /> 模板17

                            </label>

                        </li>

					    <li <?php if(($info["tpltypeid"]) == "16"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate116.png" onclick="javascript:alert('已选择模板16')" />

                                <input class="radio" type="radio" name="optype" value="16" <?php if(($info["tpltypeid"]) == "16"): ?>checked<?php endif; ?> /> 模板16

                            </label>

                        </li>

					    <li <?php if(($info["tpltypeid"]) == "15"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate115.png" onclick="javascript:alert('已选择模板15)" />

                                <input class="radio" type="radio" name="optype" value="15" <?php if(($info["tpltypeid"]) == "15"): ?>checked<?php endif; ?> /> 模板15

                            </label>

                        </li>

                        <li <?php if(($info["tpltypeid"]) == "14"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate114.png" onclick="javascript:alert('已选择模板14')" //>

                                <input class="radio" type="radio" name="optype" value="14" <?php if(($info["tpltypeid"]) == "14"): ?>checked<?php endif; ?> /> 模板14

                            </label>

                        </li>

                        <li <?php if(($info["tpltypeid"]) == "13"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate113.png" onclick="javascript:alert('已选择模板13')" />

                                <input class="radio" type="radio" name="optype" value="13" <?php if(($info["tpltypeid"]) == "13"): ?>checked<?php endif; ?> /> 模板13

                            </label>

                        </li>

                        <li <?php if(($info["tpltypeid"]) == "12"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate112.png" onclick="javascript:alert('已选择模板12')" />

                                <input class="radio" type="radio" name="optype" value="12" <?php if(($info["tpltypeid"]) == "12"): ?>checked<?php endif; ?> /> 模板12

                            </label>

                        </li>

                        <li <?php if(($info["tpltypeid"]) == "11"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate111.png" onclick="javascript:alert('已选择模板11')" />

                                <input class="radio" type="radio" name="optype" value="11" <?php if(($info["tpltypeid"]) == "11"): ?>checked<?php endif; ?> /> 模板11

                            </label>

                        </li>

                        <li <?php if(($info["tpltypeid"]) == "10"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate110.png" onclick="javascript:alert('已选择模板10')" />

                                <input class="radio" type="radio" name="optype" value="10" <?php if(($info["tpltypeid"]) == "10"): ?>checked<?php endif; ?> /> 模板10 

                            </label>

                        </li>

                        <li <?php if(($info["tpltypeid"]) == "9"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate109.png" onclick="javascript:alert('已选择模板9')" />

                                <input class="radio" type="radio" name="optype" value="9" <?php if(($info["tpltypeid"]) == "9"): ?>checked<?php endif; ?> /> 模板9 

                            </label>

                        </li>

                        <li <?php if(($info["tpltypeid"]) == "8"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate108.png" onclick="javascript:alert('已选择模板8')" />

                                <input class="radio" type="radio" name="optype" value="8" <?php if(($info["tpltypeid"]) == "8"): ?>checked<?php endif; ?> /> 模板8

                            </label>

                        </li>

                        <li <?php if(($info["tpltypeid"]) == "7"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate107.png" onclick="javascript:alert('已选择模板7')" />

                                <input class="radio" type="radio" name="optype" value="7" <?php if(($info["tpltypeid"]) == "7"): ?>checked<?php endif; ?> /> 模板7 

                            </label>

                        </li>

                        <li <?php if(($info["tpltypeid"]) == "6"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate106.png" onclick="javascript:alert('已选择模板6')" />

                                <input class="radio" type="radio" name="optype" value="6" <?php if(($info["tpltypeid"]) == "6"): ?>checked<?php endif; ?> /> 模板6 

                            </label>

                        </li>

                        <li <?php if(($info["tpltypeid"]) == "5"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                        	<label>

                                <img src="<?php echo RES;?>/images/cate9.png" onclick="javascript:alert('已选择模板5')" />

                                <input class="radio" type="radio" name="optype" value="5" <?php if(($info["tpltypeid"]) == "5"): ?>checked<?php endif; ?> /> 模板5 

                            </label>

                        </li>

                        <li <?php if(($info["tpltypeid"]) == "4"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate4.png" onclick="javascript:alert('已选择模板4')" />

                                <input class="radio" type="radio" name="optype" value="4" <?php if(($info["tpltypeid"]) == "4"): ?>checked<?php endif; ?> /> 模板4 

                            </label>

                        </li>

                        <li <?php if(($info["tpltypeid"]) == "3"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate3.png" onclick="javascript:alert('已选择模板3')" />

                                <input class="radio" type="radio" name="optype" value="3" <?php if(($info["tpltypeid"]) == "3"): ?>checked<?php endif; ?> /> 模板3 

                            </label>

                        </li>

                        <li <?php if(($info["tpltypeid"]) == "2"): ?>class="active"<?php endif; ?> style="margin:10px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate2.png" onclick="javascript:alert('已选择模板2')" />

                                <input class="radio" type="radio" name="optype" value="2" <?php if(($info["tpltypeid"]) == "2"): ?>checked<?php endif; ?> /> 模板2 

                            </label>

                        </li>

                        <li <?php if(($info["tpltypeid"]) == "1"): ?>class="active"<?php endif; ?> style="margin:10px 30px 30px 30px;" >

                            <label>

                                <img src="<?php echo RES;?>/images/cate1.png" onclick="javascript:alert('已选择模板1')" />

                                <input class="radio" type="radio" name="optype" value="1" <?php if(($info["tpltypeid"]) == "1"): ?>checked<?php endif; ?> /> 模板1 

                            </label>

                        </li>

                    </ul>

                </fieldset>

            </div>

            <div class="tagContent" id="tagContent1">

                <fieldset>

                    <ul class="cateradio2">

                        <li style="display:none" <?php if(($info["tpllistid"]) == "103"): ?>class="active"<?php endif; ?> style="margin:10px 30px 30px 30px;"  >

                            <label><img src="<?php echo RES;?>/images/list103.png" onclick="javascript:alert('已选择模板3')" />

                                <input class="radio2" type="radio" name="optype2" value="103" <?php if(($info["tpllistid"]) == "103"): ?>checked<?php endif; ?> /> 模板3

                            </label>

                        </li>

                        <li <?php if(($info["tpllistid"]) == "4"): ?>class="active"<?php endif; ?>  style="margin:10px 30px 30px 30px;"  >

                            <label><img src="<?php echo RES;?>/images/list4.png" onclick="javascript:alert('已选择模板4')" />

                                <input class="radio2" type="radio" name="optype2" <?php if(($_SESSION['gid']) == "4"): ?>disabled="disabled"<?php endif; ?> value="4" <?php if(($info["tpllistid"]) == "4"): ?>checked<?php endif; ?> /> 模板2(省流量)

                            </label>

                        </li>

                        <li <?php if(($info["tpllistid"]) == "1"): ?>class="active"<?php endif; ?> style="margin:10px 30px 30px 30px;"  >

                            <label><img src="<?php echo RES;?>/images/list1.png" onclick="javascript:alert('已选择模板1')" />

                                <input class="radio2" type="radio" name="optype2" value="1" <?php if(($info["tpllistid"]) == "1"): ?>checked<?php endif; ?> /> 模板1(美观)

                            </label>

                        </li>

						                        <li <?php if(($info["tpllistid"]) == "5"): ?>class="active"<?php endif; ?> style="margin:10px 30px 30px 30px;"  >

                            <label><img src="<?php echo RES;?>/images/list-3.png" onclick="javascript:alert('已选择格状酷似微信列表')" />

                                <input class="radio2" type="radio" name="optype2" value="5" <?php if(($info["tpllistid"]) == "5"): ?>checked<?php endif; ?> />格状酷似微信列表

                            </label>

                        </li>

												                        <li <?php if(($info["tpllistid"]) == "6"): ?>class="active"<?php endif; ?> style="margin:10px 30px 30px 30px;"  >

                            <label><img src="<?php echo RES;?>/images/list-7.png" onclick="javascript:alert('已选择新闻图文列表模式')" />

                                <input class="radio2" type="radio" name="optype2" value="6" <?php if(($info["tpllistid"]) == "6"): ?>checked<?php endif; ?> /> 新闻图文列表模式

                            </label>

                        </li>

												                        <li <?php if(($info["tpllistid"]) == "7"): ?>class="active"<?php endif; ?> style="margin:10px 30px 30px 30px;"  >

                            <label><img src="<?php echo RES;?>/images/list-10.png" onclick="javascript:alert('已选择切图列表模式')" />

                                <input class="radio2" type="radio" name="optype2" value="7" <?php if(($info["tpllistid"]) == "7"): ?>checked<?php endif; ?> /> 切图列表模式

                            </label>

                        </li>

												                        <li <?php if(($info["tpllistid"]) == "8"): ?>class="active"<?php endif; ?> style="margin:10px 30px 30px 30px;"  >

                            <label><img src="<?php echo RES;?>/images/list-0.png" onclick="javascript:alert('已选择简洁列表模式A')" />

                                <input class="radio2" type="radio" name="optype2" value="8" <?php if(($info["tpllistid"]) == "8"): ?>checked<?php endif; ?> /> 简洁列表模式A

                            </label>

                        </li>
 <li 
            <?php if(($info["tpllistid"]) == "9"): ?>class="active"<?php endif; ?>
            style="margin:10px 30px 30px 30px;"  >
            <label><img src="<?php echo RES;?>/img/list-0.png" onclick="javascript:alert('列表0')" /> <input class="radio2" type="radio" name="optype2" value="9" 
              <?php if(($info["tpllistid"]) == "9"): ?>checked<?php endif; ?>
              /> 列表0 </label>
            </li>
            <li 
            <?php if(($info["tpllistid"]) == "10"): ?>class="active"<?php endif; ?>
            style="margin:10px 30px 30px 30px;"  >
            <label><img src="<?php echo RES;?>/img/list-1.png" onclick="javascript:alert('列表1')" /> <input class="radio2" type="radio" name="optype2" 
              <?php if(($_SESSION['gid']) == "10"): ?>disabled="disabled"<?php endif; ?>
              value="10"
              <?php if(($info["tpllistid"]) == "10"): ?>checked<?php endif; ?>
              /> 列表1</label>
            </li>
            <li 
            <?php if(($info["tpllistid"]) == "11"): ?>class="active"<?php endif; ?>
            style="margin:10px 30px 30px 30px;"  >
            <label><img src="<?php echo RES;?>/img/list-2.png" onclick="javascript:alert('列表2')" /> <input class="radio2" type="radio" name="optype2" value="11" 
              <?php if(($info["tpllistid"]) == "11"): ?>checked<?php endif; ?>
              /> 列表2</label>
            </li>
            <li 
            <?php if(($info["tpllistid"]) == "12"): ?>class="active"<?php endif; ?>
            style="margin:10px 30px 30px 30px;"  >
            <label><img src="<?php echo RES;?>/img/list-3.png" onclick="javascript:alert('列表3')" /> <input class="radio2" type="radio" name="optype2" value="12" 
              <?php if(($info["tpllistid"]) == "12"): ?>checked<?php endif; ?>
              />列表3</label>
            </li>
            <li 
            <?php if(($info["tpllistid"]) == "13"): ?>class="active"<?php endif; ?>
            style="margin:10px 30px 30px 30px;"  >
            <label><img src="<?php echo RES;?>/img/list-4.png" onclick="javascript:alert('列表4')" /> <input class="radio2" type="radio" name="optype2" value="13" 
              <?php if(($info["tpllistid"]) == "13"): ?>checked<?php endif; ?>
              /> 列表4 </label>
            </li>
            <li 
            <?php if(($info["tpllistid"]) == "14"): ?>class="active"<?php endif; ?>
            style="margin:10px 30px 30px 30px;"  >
            <label><img src="<?php echo RES;?>/img/list-5.png" onclick="javascript:alert('列表5')" /> <input class="radio2" type="radio" name="optype2" value="14" 
              <?php if(($info["tpllistid"]) == "14"): ?>checked<?php endif; ?>
              /> 列表5 </label>
            </li>
            <li 
            <?php if(($info["tpllistid"]) == "15"): ?>class="active"<?php endif; ?>
            style="margin:10px 30px 30px 30px;"  >
            <label><img src="<?php echo RES;?>/img/list-6.png" onclick="javascript:alert('列表6')" /> <input class="radio2" type="radio" name="optype2" value="15" 
              <?php if(($info["tpllistid"]) == "15"): ?>checked<?php endif; ?>
              /> 列表6 </label>
            </li>
            <li 
            <?php if(($info["tpllistid"]) == "16"): ?>class="active"<?php endif; ?>
            style="margin:10px 30px 30px 30px;"  >
            <label><img src="<?php echo RES;?>/img/list-7.png" onclick="javascript:alert('列表7')" /> <input class="radio2" type="radio" name="optype2" value="16" 
              <?php if(($info["tpllistid"]) == "16"): ?>checked<?php endif; ?>
              /> 列表7 </label>
            </li>
            <li 
            <?php if(($info["tpllistid"]) == "17"): ?>class="active"<?php endif; ?>
            style="margin:10px 30px 30px 30px;"  >
            <label><img src="<?php echo RES;?>/img/list-8.png" onclick="javascript:alert('列表8')" /> <input class="radio2" type="radio" name="optype2" value="17" 
              <?php if(($info["tpllistid"]) == "17"): ?>checked<?php endif; ?>
              /> 列表8 </label>
            </li>
                    </ul>

                </fieldset>

            </div>

            <div class="tagContent" id="tagContent2">

                <fieldset>

                    <ul class="cateradio3">

                        <li <?php if(($info["tplcontentid"]) == "1"): ?>class="active"<?php endif; ?> style="margin:10px 30px 30px 30px;"   ><label><img src="<?php echo RES;?>/images/news1.png" onclick="javascript:alert('已选择模板1')" /><input class="radio3" type="radio" name="optype3" value="1" <?php if(($info["tplcontentid"]) == "1"): ?>checked<?php endif; ?>/>模板1(有头像) </label></li>

                         <li <?php if(($info["tplcontentid"]) == "3"): ?>class="active"<?php endif; ?> style="margin:10px 30px 30px 30px;"   ><label><img src="<?php echo RES;?>/images/news3.png" onclick="javascript:alert('已选择模板2')"/ ><input class="radio3" type="radio" name="optype3" value="3" <?php if(($info["tplcontentid"]) == "3"): ?>checked<?php endif; ?>/>模板3(无头像)</label></li>
						 <li 
            <?php if(($info["tplcontentid"]) == "11"): ?>class="active"<?php endif; ?>
            style="margin:10px 30px 30px 30px;"   >
            <label><img src="<?php echo RES;?>/img/detail-0.png" onclick="javascript:alert('已选择详情1')" /><input class="radio3" type="radio" name="optype3" value="11" 
              <?php if(($info["tplcontentid"]) == "11"): ?>checked<?php endif; ?>
              />详情1</label>
            </li>
            <li 
            <?php if(($info["tplcontentid"]) == "12"): ?>class="active"<?php endif; ?>
            style="margin:10px 30px 30px 30px;"   >
            <label><img src="<?php echo RES;?>/img/detail-1.png" onclick="javascript:alert('已选择详情2')" /><input class="radio3" type="radio" name="optype3" value="12" 
              <?php if(($info["tplcontentid"]) == "12"): ?>checked<?php endif; ?>
              />详情2</label>
            </li>
            <li 
            <?php if(($info["tplcontentid"]) == "13"): ?>class="active"<?php endif; ?>
            style="margin:10px 30px 30px 30px;"   >
            <label><img src="<?php echo RES;?>/img/detail-2.png" onclick="javascript:alert('已选择详情3')"/ ><input class="radio3" type="radio" name="optype3" value="13" 
              <?php if(($info["tplcontentid"]) == "13"): ?>checked<?php endif; ?>
              />详情3</label>
            </li>
            <li 
            <?php if(($info["tplcontentid"]) == "14"): ?>class="active"<?php endif; ?>
            style="margin:10px 30px 30px 30px;"   >
            <label><img src="<?php echo RES;?>/img/detail-3.png" onclick="javascript:alert('已选择详情4')"/ ><input class="radio3" type="radio" name="optype3" value="14" 
              <?php if(($info["tplcontentid"]) == "14"): ?>checked<?php endif; ?>
              />详情4</label>
            </li>
                    </ul>

                </fieldset>

            </div>

            <div class="tagContent" id="tagContent3">

                <fieldset>

                    <div class="cateradio4">

                        <table width="100%" border="0" cellspacing="0" cellpadding="0">

                            <tbody>

                                <tr>

                                    <td width="400" rowspan="2" valign="top">

                                        <div class="samsung-render">

                                            <iframe src="index.php?g=Wap&m=Index&token=<?php echo ($info["token"]); ?>&show=1" id="myiframe" width="320" height="406" frameborder="0" style="overflow-x:hidden;"></iframe>

                                        </div>

                                    </td>

                                    <td valign="top"><h3>请选择你喜欢的颜色风格，实时预览 (<span style="color:#c30">注意：只有在手机上才能获得最佳浏览效果，电脑浏览并不一定是最终显示效果，并且仅部分模板支持更换颜色风格</span>)</h3>

                                        <ul>

                                            <li><label><input class="radio4" type="radio" name="optype4" value="0" <?php if(($info["color_id"]) == "0"): ?>checked="checked"<?php endif; ?>> 默认风格</label></li>

                                            <li><label><input class="radio4" type="radio" name="optype4" value="1" <?php if(($info["color_id"]) == "1"): ?>checked="checked"<?php endif; ?>> 黑色风格</label></li>

                                            <li><label><input class="radio4" type="radio" name="optype4" value="2" <?php if(($info["color_id"]) == "2"): ?>checked="checked"<?php endif; ?>> 蓝色风格</label></li>

                                            <li><label><input class="radio4" type="radio" name="optype4" value="3" <?php if(($info["color_id"]) == "3"): ?>checked="checked"<?php endif; ?>> 木纹风格</label></li>

                                            <li><label><input class="radio4" type="radio" name="optype4" value="4" <?php if(($info["color_id"]) == "4"): ?>checked="checked"<?php endif; ?>> 橙色风格</label></li>

                                            <li><label><input class="radio4" type="radio" name="optype4" value="5" <?php if(($info["color_id"]) == "5"): ?>checked="checked"<?php endif; ?>> 紫色风格</label></li>

                                            <li><label><input class="radio4" type="radio" name="optype4" value="6" <?php if(($info["color_id"]) == "6"): ?>checked="checked"<?php endif; ?>> 绿色风格</label></li>

                                        </ul>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                        <div class="clr"></div>

                    </div>

                </fieldset>

            </div>

        </div>



        <script type="text/javascript">

            function selectTag(showContent,selfObj){

                // 操作标签

                var tag = document.getElementById("tags").getElementsByTagName("li");

                var taglength = tag.length;

                for(i=0; i<taglength; i++){

                    tag[i].className = "";

                }

                selfObj.parentNode.className = "selectTag";

                // 操作内容

                for(i=0; j=document.getElementById("tagContent"+i); i++){

                    j.style.display = "none";

                }

                document.getElementById(showContent).style.display = "block";





            }

        </script>





        <script>



            $(".radio").click(function(){

                $(".cateradio li").each(function(){

                    $(this).removeClass("active");

                });

                $(this).parents("li").addClass("active");

                var myurl='index.php?g=User&m=Tmpls&a=add&style='+$(this).val()+'&r='+Math.random(); 

                $.ajax({url:myurl,async:false});



//                $("#homeurl").attr("href","http://baidu.com/index.php?ac=cate"+$(this).val()+"&tid=9379&w=1");

                $("#myiframe").attr("src",$("#myiframe").attr("src")+'&r='+Math.random());





            });

            $(".radio2").click(function(){

                $(".cateradio2 li").each(function(){

                    $(this).removeClass("active");

                });

                $(this).parents("li").addClass("active");

  

                var myurl ='index.php?g=User&m=Tmpls&a=lists&style='+$(this).val()+'&r='+Math.random(); 

                $.ajax({url:myurl,async:false});





            });

            $(".radio3").click(function(){

                $(".cateradio3 li").each(function(){

                    $(this).removeClass("active");

                });

                $(this).parents("li").addClass("active");

  

                var myurl='index.php?g=User&m=Tmpls&a=content&style='+$(this).val()+'&r='+Math.random(); 

                $.ajax({url:myurl,async:false});



            });

            $(".radio4").click(function(){

                var myurl='index.php?g=User&m=Tmpls&a=background&style='+$(this).val()+'&r='+Math.random(); 

                $.ajax({url:myurl,async:false});

                $("#myiframe").attr("src",$("#myiframe").attr("src")+'&r='+Math.random());

            });

            function changeapp(obj,gid){

                if(obj.checked==true){

                    //var image=new Image();   

                    var myurl='index.php?ac=app&op=open&value=1&id=9379&wxid=gh_858dwjkeww5&openid='+gid+'&r='+Math.random(); 

                    $.ajax({url:myurl,async:false});



                }else{

 

                    var myurl='index.php?ac=app&op=open&value=0&id=9379&wxid=gh_858dwjkeww5&openid='+gid+'&r='+Math.random(); 

                    $.ajax({url:myurl,async:false});



                }

            }



        </script>





    </div>



</div>



</div>

</div>

</div> 

<!--底部-->

</div>


	<div style="clear:both;"></div>
</div>



</body>
</html>