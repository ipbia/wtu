<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>







<html>







<head>







<title><?php echo ($Xitie['title']); ?></title>







<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">







<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">







<meta name="apple-mobile-web-app-capable" content="yes">







<meta name="apple-mobile-web-app-status-bar-style" content="black">







<meta name="format-detection" content="telephone=no">







<meta name="description" content="<?php echo ($Xitie['title']); ?>">







<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/xitie/wedding.css" media="all">







<script src="<?php echo STATICS;?>/xitie/jquery-1.10.1.min.js" type="text/javascript"></script>







<script src="<?php echo STATICS;?>/xitie/wedding.js" type="text/javascript"></script>







<script src="<?php echo STATICS;?>/xitie/jquery_easing.js" type="text/javascript"></script>







<script src="<?php echo STATICS;?>/xitie/wedding_sys.js" type="text/javascript"></script>







<style type="text/css">







.loading {







    position: absolute;







    width: 100%;







    height: 100%;







    text-align: center;







    top: 0;







    left: 0;







    line-height: 100%;







    border: none;







    z-index: 9999;







}







.loading-part {







    position: absolute;







    padding: 0;







    margin: 0;







    width: 100%;







    height: 50%;







    background-color: #FFFFFF;







    z-index: 1;







}







.loading-part.top {







    top: 0;







}







.loading-part.bottom {







    bottom: 0;







}







.loading-panel {







    position: absolute;







    width: 200px;







    height: 82px;







    top: 50%;







    left: 50%;







    margin-top: -41px;







    margin-left: -100px;







    z-index: 2;







}







.loading-icon {







    position: relative;







    width: 50px;







    height: 50px;







    background: url(/tpl/static/xitie/love.gif) center center no-repeat;







    margin: auto;







}







.loading-text {







    position: relative;







    width: 200px;







    height: 32px;







    color: #fc8e65;







    text-align: center;







    line-height: 32px;







    margin: auto;







}.cover {







    display: none;







    position: absolute;







    position: fixed;







    top: 0;







    left: 0;







    width: 100%;







    height: 100%;







    padding: 0;







    margin: 0;







    background-color: #A00908;







    box-shadow: 5px 5px 5px 10px rgba(0,0,0,.6);







    z-index: 999;







}







/*封面模版:t1*/







.cover.t1 {







    min-height: 330px;







    background-color: #A00908;







}







.cover.t1 .slogan {







    position: absolute;







    width: 266px;







    height: 290px;







    left: 50%;







    margin-left: -133px;







    top: 50%;







    margin-top: -145px;







}







.cover.t1 .mask {







    position: absolute;







    width: 100%;







    height: 100%;







    background: url(/tpl/static/xitie/icons.png) 0 0 no-repeat;







    top: 0;







    left: 0; 







}







.cover.t1 .head {







    position: absolute;







    width: 158px;







    height: 153px;







    top: 68px;







    left: 48px;







    background-repeat: no-repeat;







    background-size: cover;







    background-position: center;







}







</style>







</head>







<body onselectstart="return true;" ondragstart="return false;">







<script>







	        $().ready(function(){







	        	playbox.init("playbox");















	        	$("#overlay_ul").bind("click", function(evt){







	        		if("UL" == evt.target.nodeName){







	        		this.className = 'overlay_ul';







	        		$(this).find('li').removeClass('on');







	        		}







	        		







	        	});







	        });















	        function show(i){







	        	$("#overlay_ul>li").removeClass("on")[i].className = "on";







	        	$("#overlay_ul").addClass("on");







	        }















	        function submit1(){







	        	var form1 = document.getElementById("form1");







	        	var userName = form1.userName.value;







	        	var telephone = form1.telephone.value;







	        	var count = form1.count.value;







	        	var token = form1.token.value;







	        	if(userName.length<1){







	        		alert("请输入姓名！");







	        		return;







	        	}







	        	if(telephone.length<6){







	        		alert("请输入电话号码！");







	        		return;







	        	}







	        	if(count.length<1){







	        		alert("请输入人数！");







	        		return;







	        	}







	        	var obj = {







					id:	<?php echo ($id); ?>,		







					token: token,







	        		userName: userName,







	        		telephone: telephone,







	        		count: count,







	        		action 	: "add"







	        	}







	        	$.post("index.php?g=Wap&m=Xitie&a=add", obj,function(result){







				   	alert(result);







				   	form1.reset();







					$("#overlay_ul").removeClass("on");















				});







				







	        }







	        //







	       function submit2(){







	        	var form2 = document.getElementById("form2");







	        	var userName = form2.userName.value;







	        	var telephone = form2.telephone.value;







	        	var content = form2.content.value;







	        	var token = form2.token.value;







	        	if(userName.length<1){







	        		alert("请输入姓名！");







	        		return;







	        	}







	        	if(telephone.length<6){







	        		alert("请输入电话号码！");







	        		return;







	        	}







	        	if(content.length>50){w







	        		alert("内容不能大于50个字！");







	        		return;







	        	}







	        	if(content.length<1){







	        		alert("请输入祝福内容！");







	        		return;







	        	}







	        	var obj = {







	        		id:	<?php echo ($id); ?>,		







					token: token,







	        		userName: userName,







	        		telephone: telephone,







	        		content: content,







	        		action 	: "add2"







	        	}







	        	$.post("index.php?g=Wap&m=Xitie&a=add2", obj,function(result){







				   	alert(result);







				   	form2.reset();







					$("#overlay_ul").removeClass("on");







				});







	        }







</script>







 







    <script type="text/javascript">







    $(function () {







             var loading = $('.loading'),







                parts = $('.loading-part', loading),







                height = parts.height();







            var loadingpanel = $('.loading-panel', loading);







            var cover = $('.cover'); 







            function closeLoading(callback) {







                loadingpanel.fadeOut(function () {







                    loading.remove();







                });







                if (typeof callback === 'function') {







                    callback.call(this);







                }







            }







            function closeCover() { 







                cover.animate({







                    'top': -cover.height()







                }, 'linear', function () {







                    cover.remove();







                });







            }







            var handler_touch = function (e) {







                closeCover();







                e.preventDefault();







                return false;







            };







            //处理封面







            function initCover() {







                cover.one('touchstart MSPointerDown', handler_touch); 







                 ///if (window.navigator.msPointerEnabled !== undefined) {







                    window.setTimeout(function () {







                        closeCover();







                    }, 2000);







                //}







            }







            closeLoading(function () {







                initCover();







                cover.fadeIn(1500, function () {







                    cover.animate({







                        top: '-120px'







                    }, 'easeOutBack', function () {







                        cover.animate({







                            top: 0







                        }, 500, 'easeOutElastic', function () { });







                    });







                });







            });







        });







    </script>







	







    <div class="cover t1" style="display: block; top: 0px;">







    <div class="slogan">







        <div class="head" style="background-image:url(<?php echo ($Xitie['pic']); ?>)"></div>







        <div class="mask"></div>







    </div>







</div>







<div class="container">







<header>







<div>







<ul class="box">







<li class="relative"><span class="pic"><img src="<?php echo ($Xitie['pic']); ?>"></span></li>







<li>







<div class="name">  <?php echo ($Xitie['name_xn']); ?>  <img src="<?php echo STATICS;?>/xitie/04.png" style="width:30px;">  <?php echo ($Xitie['name_xl']); ?>   <div>







</div></div></li>







<li>







<span id="playbox" class="btn_music on" onClick="playbox.init(this).play();"><audio id="audio" loop="" src="<?php echo ($Xitie['bg_mp3']); ?>"></audio></span>







</li>







</ul>







</div>







</header>







            <div style=" height:70px"></div>







<section class="body">







            <!--视频-->







            <div >







            	<div class="video-box tpl-video"   id="content" style="display:block;"><?php echo ($Xitie['video']); ?></div>







                 <script src="<?php echo STATICS;?>/xitie/play.js" type="text/javascript"></script>







            </div>







            <!--图片-->







<div style=" margin-top:10px">







<ul>







                        <li class="pb_10"><img src="<?php echo ($Xitie['pic1']); ?>" style="width:100%;"></li>







                        <li class="pb_10"><img src="<?php echo ($Xitie['pic2']); ?>" style="width:100%;"></li>    







                       







                    </ul>







</div>







              <!--想说的话-->







<div class="des">







<h3 class="align_center">想说的话</h3>







<p><?php echo ($Xitie['hua']); ?></p>







</div>







                <!--宴会时间地址电话-->







<div>







<ul class="list_font">







<li>







<a href="javascript:;" class="tbox">







<div class="dat"><?php echo ($Xitie['time']); ?></div>







<div>







<figure>







<p><span><img src="<?php echo STATICS;?>/xitie/08.png"></span></p>







<figcaption>宴会时间</figcaption>







</figure>







</div>







</a>







</li>







<li>







<a href="http://map.baidu.com/?latlng=31.308687,121.525449&title=<?php echo ($Xitie['address']); ?>&content=<?php echo ($Xitie['address']); ?>&autoOpen=true&l=" class="tbox">







<div class="add"><?php echo ($Xitie['address']); ?></div>







<div>







<figure>







<p><span><img src="<?php echo STATICS;?>/xitie/06.png"></span></p>







<figcaption>点此导航</figcaption>







</figure>







</div>







</a>







</li>







<li>







<a href="tel:<?php echo ($Xitie['tel']); ?>" class="tbox">







<div class="tel"><?php echo ($Xitie['tel']); ?></div>







<div>







<figure>







<p><span><img src="<?php echo STATICS;?>/xitie/07.png"></span></p>







<figcaption>接待电话</figcaption>







</figure>







</div>







</a>







</li>







</ul>







</div>







<div>







<ul class="btns_1 box">







<li><a href="javascript:show(0);" class="px">我要赴宴</a></li>







<li><a href="javascript:show(1);" class="px">送上祝福</a></li>







<li><a href="javascript:show(2);" class="px">分享喜帖</a></li>







</ul>







<ul id="overlay_ul" class="overlay_ul">







<li id="fuyan">







<form id="form1" action="javascript:;" method="post">







<input type="hidden" name="token" value="<?php echo ($Token); ?>" />







<table>







<tbody><tr><th colspan="2"><label>我要赴宴</label></th></tr>







<tr><td style="width:45px;">姓名</td><td><input type="text" name="userName"></td></tr>







<tr><td>手机</td><td><input type="tel" name="telephone"></td></tr>







<tr><td>人数</td><td><input type="number" name="count"></td></tr>







<tr><td colspan="2" style="text-align:center;" class="btns_1"><a href="javascript:submit1();" class="px">提交</a></td></tr>







</tbody></table>







</form>







</li>







<li id="zhufu">







<form id="form2" action="javascript:;" method="post">







<input type="hidden" name="token" value="<?php echo ($Token); ?>" />







<table>







<tbody><tr><th colspan="2"><label>送上祝福</label></th></tr>







<tr><td style="width:45px;">姓名</td><td><input type="text" name="userName"></td></tr>







<tr><td>手机</td><td><input type="tel" name="telephone"></td></tr>







<tr><td colspan="2"><textarea placeholder="这里写一些祝福语给男方和女方" style="width:100%;height:50px;" maxlength="100" name="content"></textarea></td></tr>







<tr><td colspan="2" style="text-align:center;" class="btns_1"><a href="javascript:submit2();" class="px">提交</a></td></tr>







</tbody></table>







</form>







</li>







<li style="text-align: right;margin-left: 0;top: 0;background-color: transparent; left:auto;right: 0; width:291px; height:169px;" onClick="$(#overlay_ul).click();event.preventDefault(); return false;">







<img src="<?php echo STATICS;?>/xitie/09.png">







</li>







<li style="text-align: right;margin-left: 0;top: 0;background-color: transparent; left:auto;right: 0; width:291px; height:169px;" onClick="$(#overlay_ul).click();event.preventDefault(); return false;">







<img src="<?php echo STATICS;?>/xitie/10.png">







</li>







</ul>







</div>







</section>







 	







 </div>







<?php if($Xitie['copyright'] == ''): ?><footer>2013 &copy;云微科技版权所有</footer>







<?php else: ?>







<footer><?php echo ($Xitie['copyright']); ?></footer><?php endif; ?>















</body>







</html>