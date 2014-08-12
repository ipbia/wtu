<?php if (!defined('THINK_PATH')) exit();?>﻿﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo C('site_title');?> <?php echo C('site_name');?></title>
  <link href="<?php echo RES;?>/css/ss.css" rel="stylesheet" type="text/css"  />
  <link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../wm-xin-a/font-awesome.css" media="all" />
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
 
      <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/plugin.css" />
      <div class="content">
      <div class="cLine">
            <div class="alert">
            	<p><span class="bold">拷贝工具的网址和图标网址，粘帖到你需要的地方。</span></p>
            </div>
            </div>
            
        <div class="msgWrap">
          <div class="cLineD"><h4 class="left">查询工具</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://m.hao123.com/a/tianqi"><img src="http://demowx.duapp.com/tools/images/c01.png">
                      <p>天气报告</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.kuaidi100.com/uc/index.html"><img src="http://demowx.duapp.com/tools/images/c03.png" />
    <p>查快递证</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.46644.com/tool/idcard/?tpltype=uc"><img src="http://demowx.duapp.com/tools/images/c07.png" >
                <p>查身份证</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://baidu365.duapp.com/uc/Calendar.html"><img src="http://demowx.duapp.com/tools/images/c09.png" >
                      <p>万年历/黄历</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.wochacha.com/search?gcsid=a54dc4be344dcc0ecd1ed8df68fc5e8f"><img src="http://demowx.duapp.com/tools/images/c11.png" />
                        <p>查商品价</p>
                      </a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.46644.com/tool/aqi/?tpltype=uc"><img src="http://demowx.duapp.com/tools/images/c02.png" />
                        <p>查PM2.5</p>
                      </a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.46644.com/tool/shouji/?tpltype=uc"><img src="http://demowx.duapp.com/tools/images/c08.png" />
                        <p>手机归属地</p>
                      </a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.46644.com/tool/translate/?tpltype=uc"><img src="http://demowx.duapp.com/tools/images/c10.png" />
                        <p>在线翻译</p>
                      </a></td>
                    </tr>
                    <tr>
                      <td align="center"><a target="99" href="http://m.hao123.com/n/v/dianhua">常用电话</a></td>
                      <td align="center"><a target="99" href="http://m.46644.com/tool/zipcode/?tpltype=uc">查邮编</a></td>
                      <td align="center"><a target="99" href="http://m.dabizi.cn/wapsite">查购物返利</a></td>
                      <td align="center"><a target="99" href="http://m.46644.com/tool/areacode/?tpltype=uc">查区号</a></td>
                      <td align="center"><a target="99" href="http://health.sohu.com/eden/anquanqi/jump.html"><i></i>安全期</a></td>
                      <td align="center"><a href="http://fanyi.baidu.com/" target="99">翻译</a></td>
                      <td align="center"><a target="99" href="http://m.mtime.cn/">影讯</a></td>
                      <td align="center">&nbsp;</td>
                    </tr>
                  </tbody>
                </table>
<div class="cLineD"><h4 class="left">商旅 & 旅游</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://12306.uodoo.com"><img src="http://demowx.duapp.com/tools/images/a04.png" ><p>抢火车票</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://hao.uc.cn/bst/flight?uc_param_str=prdnfrpfbivelabtbmntpvsscp"><img src="http://demowx.duapp.com/tools/images/a01.png" ><p>机票预订</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://wx.133.cn/hbrobot/wap"><img src="http://demowx.duapp.com/tools/images/a02.png" >
            <p>航班动态</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.zhuna.cn/?agent_id=194"><img src="http://demowx.duapp.com/tools/images/a03.png" >
            <p>酒店查询</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.tuniu.com"><img src="http://demowx.duapp.com/tools/images/a07.png" >
            <p>旅游线路</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://wap.yikuaiqu.com/?s=uc"><img src="http://demowx.duapp.com/tools/images/a06.png" >
            <p>景点门票</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://lvyou.baidu.com/main/webapp/index"><img src="http://demowx.duapp.com/tools/images/a05.png" >
            <p>景点导览</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.mafengwo.cn/mdd"><img src="http://demowx.duapp.com/tools/images/a08.png" >
                      <p>攻略游记</p></a></td>
                    </tr>
                  </tbody>
                </table>
                
    <div class="cLineD"><h4 class="left">交通出行</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://cha.weiche.me/uc"><img src="http://demowx.duapp.com/tools/images/b08.png">
            <p>违章查询</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.46644.com/tool/bus/?tpltype=uc"><img src="http://demowx.duapp.com/tools/images/b03.png">
            <p>长途客运</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://gj.aibang.com"><img src="http://demowx.duapp.com/tools/images/b01.png">
            <p>公交换乘</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.8684.cn/dt_switch"><img src="http://demowx.duapp.com/tools/images/b02.png">
            <p>地铁线路</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/index/index/foo=bar/vt=map/?third_party=ucsearchbox"><img src="http://demowx.duapp.com/tools/images/b05.png">
            <p>地图导航</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/index/index/foo=bar/vt=map&amp;traffic=on&amp;viewmode=no_ad/?third_party=ucsearchbox"><img src="http://demowx.duapp.com/tools/images/b04.png">
            <p>交通路况</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E5%8A%A0%E6%B2%B9%E7%AB%99/needloc=1?third_party=ucsearchbox"><img src="http://demowx.duapp.com/tools/images/b07.png">
            <p>附近加油站</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E5%81%9C%E8%BD%A6%E5%9C%BA/needloc=1?third_party=ucsearchbox"><img src="http://demowx.duapp.com/tools/images/b06.png">
            <p>附近停车场</p></a></td>
                    </tr>
                  </tbody>
                </table>
          
          <div class="cLineD"><h4 class="left">健康医疗</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://3g.39.net/sex"><img src="http://demowx.duapp.com/tools/images/f08.png">
            <p>两性知识</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://3g.39.net/man"><img src="http://demowx.duapp.com/tools/images/f05.png">
            <p>男性健康</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://3g.39.net/woman"><img src="http://demowx.duapp.com/tools/images/f03.png">
            <p>女性健康</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.soujibing.com"><img src="http://demowx.duapp.com/tools/images/f01.png">
            <p>问医生</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://3g.39.net/care"><img src="http://demowx.duapp.com/tools/images/f06.png">
            <p>养生保健</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://3g.39.net/fitness/ydjf"><img src="http://demowx.duapp.com/tools/images/f07.png">
            <p>运动减肥</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://3g.yao.xywy.com"><img src="http://demowx.duapp.com/tools/images/f02.png">
            <p>用药指南</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://3g.yaolan.com/"><img src="http://demowx.duapp.com/tools/images/f04.png">
            <p>孕产妇婴</p></a></td>
                    </tr>
                    <tr>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E5%8C%BB%E9%99%A2/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近医院</a></td>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E8%8D%AF%E5%BA%97/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近药店</a></td>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E5%81%A5%E8%BA%AB%E5%9B%AD/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近健身苑</a></td>
                      <td align="center"><a target="99" href="http://3g.dxy.cn/">医疗论坛</a></td>
                      <td align="center"><a target="99" href="http://tv.uc.cn/#!/detail/5606">养生堂</a></td>
                      <td align="center"><a target="99" href="http://tv.uc.cn/#!/detail/1286381">我是大医生</a></td>
                      <td align="center"><a target="99" href="http://tv.uc.cn/#!/detail/109469">健康之路</a></td>
                      <td align="center"><a target="99" href="http://tv.uc.cn/#!/detail/129036">健康100FUN</a></td>
                    </tr>
                  </tbody>
                </table>
          
          <div class="cLineD"><h4 class="left">运势占卜</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://m.lnka.cn"><img src="http://demowx.duapp.com/tools/images/h03.png">
            <p>占卜算命</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://infoapp.3g.qq.com/g/s?aid=astro&amp;g_ut=3&amp;g_f=20585#home"><img src="http://demowx.duapp.com/tools/images/h01.png">
            <p>星座运势</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://3g.d1xz.net/sx"><img src="http://demowx.duapp.com/tools/images/h02.png">
            <p>生肖运势</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://3g.d1xz.net/jm"><img src="http://demowx.duapp.com/tools/images/h04.png">
            <p>周公解梦</p></a></td>
                      <td width="12%" align="center">&nbsp;</td>
                      <td width="12%" align="center">&nbsp;</td>
                      <td width="12%" align="center">&nbsp;</td>
                      <td width="12%" align="center"></td>
                    </tr>
                  </tbody>
                </table>
                
          <div class="cLineD"><h4 class="left">彩票购买</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://m.quecai.com/lotteryview/ssq.php?from=lottbst_cata&amp;uc_param_str=cpligiwisndnfrpfbivessupntlaminieisipi&amp;uc_common_param=true"><img src="http://demowx.duapp.com/tools/images/l01.png">
            <p>双色球</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.quecai.com/lotteryview/dlt.php?from=lottbst_cata&amp;uc_param_str=cpligiwisndnfrpfbivessupntlaminieisipi&amp;uc_common_param=true"><img src="http://demowx.duapp.com/tools/images/l02.png">
            <p>大乐透</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.quecai.com/lotteryview/k3.php?from=lottbst_cata&amp;uc_param_str=cpligiwisndnfrpfbivessupntlaminieisipi&amp;uc_common_param=true"><img src="http://demowx.duapp.com/tools/images/l03.png">
            <p>快3</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.quecai.com/lotteryview/syydj.php?from=lottbst_cata&amp;uc_param_str=cpligiwisndnfrpfbivessupntlaminieisipi&amp;uc_common_param=true"><img src="http://demowx.duapp.com/tools/images/l04.png">
            <p>11选5</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.quecai.com/lotteryview/jczq_ht.php?from=lottbst_cata&amp;uc_param_str=cpligiwisndnfrpfbivessupntlaminieisipi&amp;uc_common_param=true">竞足</a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.quecai.com/lotteryview/3d.php?from=lottbst_cata&amp;uc_param_str=cpligiwisndnfrpfbivessupntlaminieisipi&amp;uc_common_param=true">福彩3D</a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.quecai.com/lotteryview/ssc.php?from=lottbst_cata&amp;uc_param_str=cpligiwisndnfrpfbivessupntlaminieisipi&amp;uc_common_param=true">时时彩</a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.quecai.com/notice/index.php?from=lottbst_cata&amp;uc_param_str=cpligiwisndnfrpfbivessupntlaminieisipi&amp;uc_common_param=true">开奖</a></td>
                    </tr>
                  </tbody>
                </table>
                
          <div class="cLineD"><h4 class="left">便民服务</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://m.58.com/ershouche"><img src="http://demowx.duapp.com/tools/images/e02.png">
            <p>二手车辆</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.51job.com/?partner=uc3"><img src="http://demowx.duapp.com/tools/images/e05.png">
            <p>找工作</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.58.com/jianzhi.shtml"><img src="http://demowx.duapp.com/tools/images/e06.png">
            <p>找兼职</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.baihe.com/search.php"><img src="http://demowx.duapp.com/tools/images/e08.png">
            <p>去相亲</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.58.com/sale.shtml"><img src="http://demowx.duapp.com/tools/images/e01.png">
            <p>二手物品</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.soufun.com/zf?sf_source=ucbrowser04"><img src="http://demowx.duapp.com/tools/images/e03.png">
            <p>租房买房</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.58.com/zhongdiangong"><img src="http://demowx.duapp.com/tools/images/e04.png">
            <p>家政/钟点工</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.dianping.com/promo/shanghai"><img src="http://demowx.duapp.com/tools/images/e07.png">
            <p>优惠券</p></a></td>
                    </tr>
                    <tr>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E9%93%B6%E8%A1%8C/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近银行</a></td>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E8%90%A5%E4%B8%9A%E5%8E%85/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近营业厅</a></td>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E9%82%AE%E5%B1%80/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近邮局</a></td>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E7%BE%8E%E5%AE%B9/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近美容</a></td>
                      <td align="center"></td>
                      <td align="center"></td>
                      <td align="center"></td>
                      <td align="center"></td>
                    </tr>
                  </tbody>
                </table>   
                
          <div class="cLineD"><h4 class="left">快乐休闲</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://m.46644.com/tool/tv/?tpltype=u"><img src="http://demowx.duapp.com/tools/images/j01.png">
            <p>电视节目</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://infoapp.3g.qq.com/g/s?aid=astro&amp;g_ut=3&amp;g_f=20585#toplist?tab=new"><img src="http://demowx.duapp.com/tools/images/j11.png">
            <p>心理测试</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.pengfu.com"><img src="http://demowx.duapp.com/tools/images/j09.png">
            <p>幽默笑话</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://sms.waptw.com/lifesearch/ucsms/index?tpl=ucm_sms_index"><img src="http://demowx.duapp.com/tools/images/j12.png">
            <p>祝福短信</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://now.3g.cn?fr=uciapp"><img src="http://demowx.duapp.com/tools/images/j02.png">
            <p>节目直播</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.taoying.com/"><img src="http://demowx.duapp.com/tools/images/j03.png">
            <p>电影资讯</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.weibo.cn/pubs/radio?pos=63&amp;vt=4&amp;from=bst&amp;s2w=bst&amp;wm=ig_0001_bst"><img src="http://demowx.duapp.com/tools/images/j05.png">
            <p>在线广播</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://manhua.yicha.cn"><img src="http://demowx.duapp.com/tools/images/j08.png">
            <p>搞笑漫画</p></a></td>
                    </tr>
                    <tr>
                      <td align="center"><a target="99" href="http://douban.fm/partner/uc">音乐电台</a></td>
                      <td align="center"><a target="99" href="http://duopao.com">玩小游戏</a></td>
                      <td align="center"><a target="99" href="http://m.damai.cn">演出门票</a></td>
                      <td align="center"><a target="99" href="http://tuan.uc.cn/?keyword=%E7%94%B5%E5%BD%B1#!/index">电影票团购</a></td>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=ktv/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近KTV</a></td>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E7%BD%91%E5%90%A7/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近网吧</a></td>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E7%94%B5%E5%BD%B1%E9%99%A2/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近电影院</a></td>
                      <td align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E8%B6%B3%E7%96%97/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox">附近足疗</a></td>
                    </tr>
                  </tbody>
                </table>  
                       
          <div class="cLineD"><h4 class="left">吃货天地</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://home.meishichina.com/wap.php?ac=recipe&amp;t=3&amp;fr=ucapp#utm_source=wap3_popnav_recipe_0"><img src="http://demowx.duapp.com/tools/images/i01.png">
            <p>好吃菜谱</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.meishij.net/html5/list.php?cid=9"><img src="http://demowx.duapp.com/tools/images/i04.png">
            <p>食疗养生</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://tuan.uc.cn/?keyword=%E7%BE%8E%E9%A3%9F#!/index"><img src="http://demowx.duapp.com/tools/images/i03.png">
            <p>美食团购</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://map.baidu.com/mobile/webapp/search/search/qt=s&amp;wd=%E7%BE%8E%E9%A3%9F/needloc=1&amp;viewmode=no_ad/?third_party=ucsearchbox"><img src="http://demowx.duapp.com/tools/images/i02.png">
            <p>附近美食</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://tv.uc.cn/#!/detail/530114">美食地图</a></td>
                      <td width="12%" align="center"><a target="99" href="http://tv.uc.cn/#!/detail/1540713">爱尚美食</a></td>
                      <td width="12%" align="center"><a target="99" href="http://tv.uc.cn/#!/detail/13166">蔡澜叹名菜</a></td>
                      <td width="12%" align="center"><a target="99" href="http://tv.uc.cn/#!/detail/646165">名人厨房</a></td>
                    </tr>
                  </tbody>
                </table>
                
         <div class="cLineD"><h4 class="left">充值支付</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://wvs.m.taobao.com"><img src="http://demowx.duapp.com/tools/images/d01.png">
            <p>话费充值</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://wvs.m.taobao.com/game_card.htm?&amp;pds=qq%23h%23zhichong&amp;type=3&amp;unid=null"><img src="http://demowx.duapp.com/tools/images/d02.png">
            <p>QQ充值</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://wvs.m.taobao.com/game_card.htm?&amp;pds=qq%23h%23zhichong&amp;type=1&amp;unid=null"><img src="http://demowx.duapp.com/tools/images/d03.png">
            <p>游戏充值</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://pay.uc.cn"><img src="http://demowx.duapp.com/tools/images/d04.png">
            <p>U点充值</p></a></td>
                      <td width="12%" align="center"></td>
                      <td width="12%" align="center"></td>
                      <td width="12%" align="center"></td>
                      <td width="12%" align="center"></td>
                    </tr>
                  </tbody>
                </table>
                
          <div class="cLineD"><h4 class="left">教育培训</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://m.jxedt.com"><img src="http://demowx.duapp.com/tools/images/g04.png">
            <p>学车考驾照</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://app.sso56.com/webapp.html?dm=guoxue&amp;fr=uc"><img src="http://demowx.duapp.com/tools/images/g03.png">
            <p>国学经典</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.dm005.com/ergeshipin"><img src="http://demowx.duapp.com/tools/images/g01.png">
            <p>儿歌视频</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://www.gaokao.com/touch"><img src="http://demowx.duapp.com/tools/images/g02.png">
            <p>备战高考</p></a></td>
                      <td width="12%" align="center"></td>
                      <td width="12%" align="center"></td>
                      <td width="12%" align="center"></td>
                      <td width="12%" align="center"></td>
                    </tr>
                  </tbody>
                </table>
                
           <div class="cLineD"><h4 class="left">理财计算</h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <tbody>
                    <tr>
                      <td width="12%" align="center"><a target="99" href="http://dp.sina.cn/dpool/tools/money/single.php?flag=old_per&amp;pos=63&amp;vt=4"><img src="http://demowx.duapp.com/tools/images/k01.png">
            <p>养老险计算</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://auto.sina.com.cn/calculator/"><img src="http://demowx.duapp.com/tools/images/k07.png">
            <p>购车计算</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://house.sina.cn/touch/tools/house_loan.html"><img src="http://demowx.duapp.com/tools/images/k06.png">
            <p>房贷计算</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://dp.sina.cn/dpool/tools/money/single.php?flag=house_per&amp;pos=63&amp;vt=4"><img src="http://demowx.duapp.com/tools/images/k04.png">
            <p>公积金计算</p></a></td>
                      <td width="12%" align="center"><a target="99" href="http://dp.sina.cn/dpool/tools/money/single.php?city_id=1&amp;flag=per_tax&amp;pos=63&amp;vt=4">个税计算</a></td>
                      <td width="12%" align="center"><a target="99" href="http://dp.sina.cn/dpool/tools/money/single.php?flag=health_per&amp;pos=63&amp;vt=4">医疗险计算</a></td>
                      <td width="12%" align="center"><a target="99" href="http://dp.sina.cn/dpool/tools/money/single.php?flag=lose_per&amp;pos=63&amp;vt=4">失业险计算</a></td>
                      <td width="12%" align="center"><a target="99" href="http://m.wap.soso.com/app/forex/index.jsp?g_ut=3&amp;biz=newHome">汇率换算</a></td>
                    </tr>
                  </tbody>
                </table>              
<div class="cLineD"><h4 class="left">网页小游戏 <span class="red">（点击复制按钮，拷贝网址）</span></h4></div>
                <table class="ListProduct" border="0" cellspacing="0" cellpadding="0" width="100%">
                  <thead>
                    <tr>
                      <th class="span2">小游戏</th>
                      <th class="span5">操作</th>
                      <th class="span2">其他工具</th>
                      <th class="span5">操作</th>
                      <th class="span2">其他工具</th>
                      <th class="span5">操作</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>问答游戏</td>
                      <td><input type='text' id='textid1_text' value='http://u.3g.cn/qasuperman/?fr=wdcr' />
                        <div id='textid1' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                      <td>爱星座</td>
                      <td><input type='text' id='textid301_text' value='http://infoapp.3g.qq.com/g/s?g_f=22207&amp;aid=astro#home' />
                        <div id='textid301' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                      <td>租房</td>
                      <td><input type='text' id='textid201_text' value='http://m.soufun.com' />
                        <div id='textid201' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                    </tr>
                    <tr>
                      <td>画画游戏</td>
                      <td><input type='text' id='textid2_text' value='http://hc.3g.cn/Index.aspx?fr=grzx' />
                        <div id='textid2' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                      <td>中国天气网</td>
                      <td><input type='text' id='textid302_text' value='http://mobile.weather.com.cn/' />
                        <div id='textid302' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                      <td>运势</td>
                      <td><input type='text' id='textid202_text' value='http://dp.sina.cn/dpool/astro/starent/xingyun.php' />
                        <div id='textid202' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                    </tr>
                    <tr>
                      <td>神器泡泡</td>
                      <td><input type='text' id='textid3_text' value='http://m.edianyou.com/h5game/bubbleHit.html' />
                        <div id='textid3' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                      <td>下厨房</td>
                      <td><input type='text' id='textid303_text' value='http://m.xiachufang.com/' />
                        <div id='textid303' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                      <td>算命</td>
                      <td><input type='text' id='textid203_text' value='http://www.aqioo.cn/free' />
                        <div id='textid203' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                    </tr>
                    <tr>
                      <td>一笔一划</td>
                      <td><input type='text' id='textid4_text' value='http://line.3g.cn/?fr=grzx' />
                        <div id='textid4' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                      <td>好大夫</td>
                      <td><input type='text' id='textid304_text' value='http://m.haodf.com/touch' />
                        <div id='textid304' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                      <td>解梦</td>
                      <td><input type='text' id='textid204_text' value='http://www.aqioo.cn/dream' />
                        <div id='textid204' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                    </tr>
                    <tr>
                      <td>你被点名了</td>
                      <td><input type='text' id='textid5_text' value='http://ltldev.sinaapp.com/wx_apps/dianming/index.php?from=wx_xlnl' />
                        <div id='textid5' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                      <td>艺龙酒店预订</td>
                      <td><input type='text' id='textid305_text' value='http://m.elong.com/hotel/' />
                        <div id='textid305' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                      <td>房贷计算</td>
                      <td><input type='text' id='textid205_text' value='http://house.sina.cn/touch/tools/house_loan.html' />
                        <div id='textid205' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                    </tr>
                    <tr>
                      <td>谁是卧底</td>
                      <td><input type='text' id='textid6_text' value='http://fanzhuo.sinaapp.com/wodiwx/creater.html' />
                        <div id='textid6' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                      <td>彩票开奖查询</td>
                      <td><input type='text' id='textid306_text' value='http://loto.sina.cn/index.do?vt=5&amp;sid=fc055b3a-d72c-41bf-96bc-b8e436ea79ea&amp;agentId=233258' />
                        <div id='textid306' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                      <td>股票</td>
                      <td><input type='text' id='textid206_text' value='http://finance.sina.cn/?sa=t60d13v512&amp;pos=63&amp;vt=4' />
                        <div id='textid206' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                    </tr>
                    <tr>
                      <td>斗地主</td>
                      <td><input type='text' id='textid7_text' value='http://h.lexun.com/game/DouDiZhu/play.aspx' />
                        <div id='textid7' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                      <td>快递查询</td>
                      <td><input type='text' id='textid307_text' value='http://m.kuaidi100.com/' />
                        <div id='textid307' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                      <td>个税计算</td>
                      <td><input type='text' id='textid207_text' value='http://dp.sina.cn/dpool/tools/money/single.php?city_id=1&amp;flag=per_tax&amp;pos=63&amp;vt=4' />
                        <div id='textid207' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                    </tr>
                    <tr>
                      <td>大家来找同</td>
                      <td><input type='text' id='textid8_text' value='http://resource.duopao.com/duopao/games/small_games/weixingame/sameclick/sameclick.htm' />
                        <div id='textid8' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                      <td>航班查询</td>
                      <td><input type='text' id='textid308_text' value='http://wx.133.cn/hbrobot/wap' />
                        <div id='textid308' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                      <td>医疗保险计算</td>
                      <td><input type='text' id='textid208_text' value='http://dp.sina.cn/dpool/tools/money/single.php?flag=health_per&amp;pos=63&amp;vt=4' />
                        <div id='textid208' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                    </tr>
                    <tr>
                      <td>神秘方块</td>
                      <td><input type='text' id='textid9_text' value='http://resource.duopao.com/duopao/games/small_games/weixingame/unitem/Unitem.htm' />
                        <div id='textid9' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                      <td>火车余票查询</td>
                      <td><input type='text' id='textid309_text' value='http://12306.uodoo.com/#!/index' />
                        <div id='textid309' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                      <td>养老保险</td>
                      <td><input type='text' id='textid209_text' value='http://dp.sina.cn/dpool/tools/money/single.php?flag=old_per&amp;pos=63&amp;vt=4' />
                        <div id='textid209' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                    </tr>
                    <tr>
                      <td>梦幻农场连连看</td>
                      <td><input type='text' id='textid10_text' value='http://resource.duopao.com/duopao/games/small_games/weixingame/DreamFarmLink/DreamFarmLink.htm' />
                        <div id='textid10' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>住房公积金计算</td>
                      <td><input type='text' id='textid210_text' value='http://dp.sina.cn/dpool/tools/money/single.php?flag=house_per&amp;pos=63&amp;vt=4' />
                        <div id='textid210' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                    </tr>
                    <tr>
                      <td>小怪物吃饼干</td>
                      <td><input type='text' id='textid11_text' value='http://resource.duopao.com/duopao/games/small_games/weixingame/bouffecookie/bouffecookie.htm' />
                        <div id='textid11' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>常用电话</td>
                      <td><input type='text' id='textid211_text' value='http://m.46644.com/tool/tel/' />
                        <div id='textid211' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>塔罗占卜</td>
                      <td><input type='text' id='textid212_text' value='http://ast.sina.cn/?sa=t282d771v166&amp;pos=19&amp;vt=4' />
                        <div id='textid212' onmouseover='move_swf(this)' class='clip_button btnGrayS'>复制</div></td>
                    </tr>
                  </tbody>
                </table>
                <div class="clr"></div>
        </div>
      </div>
<script src="/weimeng-js/ZeroClipboard.js" type="text/javascript"></script> 
<script language="JavaScript">
////copy to clip
    var clip = null;
   
    ZeroClipboard.setMoviePath("/weimeng-js/ZeroClipboard.swf")
      clip = new ZeroClipboard.Client();
      clip.setHandCursor( true );
   
 
   function move_swf(ee)
   {    
      copything = document.getElementById(ee.id+"_text").value;
      clip.setText(copything);
 
         if (clip.div)
         {    
            clip.receiveEvent('mouseout', null);
            clip.reposition(ee.id);
         }
         else{ clip.glue(ee.id);   }
  
         clip.receiveEvent('mouseover', null);
   }    
   clip.addEventListener( "complete", function(){  
    alert("复制网址成功,请粘帖到您需要的地方！");   
});  
</script> 

	<div style="clear:both;"></div>
</div>



</body>
</html>