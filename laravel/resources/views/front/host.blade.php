<!DOCTYPE html>
<html>
<head>
    <title>成为房东</title>
    <link href="../front/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../front/js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <!--menu-->
    <script src="../front/js/scripts.js"></script>
    <link href="../front/css/styles.css" rel="stylesheet">
    <!--//menu-->
    <!--theme-style-->
    <link href="../front/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
<!--header-->
<div class="navigation">
    <div class="container-fluid">
        <nav class="pull">
           <ul>
						<li><a  href="/">首页</a></li>
						<li><a  href="search">房屋信息</a></li>
						<li><a  href="{{URL('goods')}}">积分商城</a></li>
						<li><a  href="{{URL('host')}}">成为房东</a></li>
						<li><a  href="userexit">退出</a></li>
			</ul>
        </nav>
    </div>
</div>

<div class="header">
    <div class="container">
        <!--logo-->
        <div class="logo">
            <h1><a href="index.html">租家</a></h1>
        </div>
        <!--//logo-->
        <div class="top-nav">
            <ul class="right-icons">
                <?php if(@Session::get('usertel')){?>
                <li><span ><i class="glyphicon glyphicon-phone"> </i>+{{@Session::get('usertel')}}</span></li>
                <?php }?>
                <li><a  href="login"><i class="glyphicon glyphicon-user"> </i><?php if(Session::get('username')){?>
                        {{Session::get('username')}}
                        <?php }else{?>
                        登录
                        <?php }?></a></li>
                <li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a></li>

            </ul>
            <div class="nav-icon">
                <div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
                    <a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
                </div>
                <!---
                <a href="#" class="right_bt" id="activator"><i class="glyphicon glyphicon-menu-hamburger"></i>  </a>
            --->
            </div>
            <div class="clearfix"> </div>
            <!---pop-up-box---->

            <link href="../front/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
            <script src="../front/js/jquery.magnific-popup.js" type="text/javascript"></script>
            <!---//pop-up-box---->
            <div id="small-dialog" class="mfp-hide">
                <!----- tabs-box ---->
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>All Homes</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>For Sale</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>For Rent</span></li>
                            <div class="clearfix"></div>
                        </ul>
                        <div class="resp-tabs-container">
                            <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>All Homes</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                                <div class="facts">
                                    <div class="login">
                                        <input type="text" value="Search Address, Neighborhood, City or Zip" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">
                                        <input type="submit" value="">
                                    </div>
                                </div>
                            </div>
                            <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>For Sale</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                <div class="facts">
                                    <div class="login">
                                        <input type="text" value="Search Address, Neighborhood, City or Zip" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">
                                        <input type="submit" value="">
                                    </div>
                                </div>
                            </div>
                            <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>For Rent</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                                <div class="facts">
                                    <div class="login">
                                        <input type="text" value="Search Address, Neighborhood, City or Zip" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Address, Neighborhood, City or Zip';}">
                                        <input type="submit" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="../front/js/easyResponsiveTabs.js" type="text/javascript"></script>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#horizontalTab').easyResponsiveTabs({
                                type: 'default', //Types: default, vertical, accordion
                                width: 'auto', //auto or any width like 600px
                                fit: true   // 100% fit in a container
                            });
                        });
                    </script>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $('.popup-with-zoom-anim').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                    });

                });
            </script>


        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!--//-->
<div class=" banner-buying">
    <div class=" container">
        <h3><span>家</span>的梦想</h3>
        <!---->
        <div class="menu-right">
            <ul class="menu">
                <li class="item1"><a href="#"> 菜单<i class="glyphicon glyphicon-menu-down"> </i> </a>
                    <ul class="cute">
                        <li class="subitem1"><a href="buy.html">个人找房 </a></li>
                        <li class="subitem2"><a href="buy.html">房屋贷款 </a></li>
                        <li class="subitem3"><a href="buy.html">公寓 </a></li>
                        <li class="subitem1"><a href="buy.html">企业找房</a></li>
                        <li class="subitem2"><a href="{{URL('goods')}}">积分商城</a></li>
                        <li class="subitem3"><a href="{{URL('index.php/personal')}}">个人中心 </a></li>
                        <li class="subitem3"><a href="dealers.html">租家服务</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
        <!--initiate accordion-->
        <script type="text/javascript">
            $(function() {
                var menu_ul = $('.menu > li > ul'),
                        menu_a  = $('.menu > li > a');
                menu_ul.hide();
                menu_a.click(function(e) {
                    e.preventDefault();
                    if(!$(this).hasClass('active')) {
                        menu_a.removeClass('active');
                        menu_ul.filter(':visible').slideUp('normal');
                        $(this).addClass('active').next().stop(true,true).slideDown('normal');
                    } else {
                        $(this).removeClass('active');
                        $(this).next().stop(true,true).slideUp('normal');
                    }
                });

            });
        </script>

    </div>
</div>
<!--//header-->
<!--contact-->
<div class="contact">
    <div class="container">
        <h3>成为房东</h3>
        <div class="contact-top">
            <div class="col-md-6 contact-top1">
                <h4 > 信息</h4>
                <span class="text-contact" style="font-size: 20px">当你的家成为千万人的家，家的梦想便得以相传.</span>
                <div class="contact-address">
                    <div class="col-md-6 contact-address1">
                        <h5>地址</h5>
                        <p><b>用友科技有限公司</b></p>
                        <p>北京市海淀区</p>
                        <p>中关村软件园南站57号</p>
                    </div>
                    <div class="col-md-6 contact-address1">
                        <h5>电子邮件地址 </h5>
                        <p>经理 :<a href="malito:mail@demolink.org"> 15090101578@163.com</a></p>
                        <p>办公室 :<a href="malito:mail@demolink.org">yongyou@sina.com</a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="contact-address">
                    <div class="col-md-6 contact-address1">
                        <h5 >电话 </h5>
                        <p>固定电话 : 254-8974-5847</p>
                        <p>手机 : +174 1478 74755</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 contact-right">

                <form action="hostname" method="post">
                    <input type="text"  placeholder="姓名" name="h_name" required="" id="name">
                    <input type="text" placeholder="手机号" name="h_tel" required="" id="phone">
                    <input type="text" style="width: 300px" placeholder="手机验证码" required="" id="code">
                    <label class="hvr-sweep-to-right">
                    <input type="button" value="获取手机验证码" onclick="reCaptcha()">
                    </label>
                    <br/>
                    <label class="hvr-sweep-to-right">
                        <input type="submit" value="提交">
                    </label>
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="map">
        <iframe src=""> </iframe>
    </div>
</div>
<!--//contact-->
<!--footer-->
<div class="footer">
    
    <div class="footer-bottom">
        <div class="container">
            <div class="col-md-4 footer-logo">
                <h2><a href="front">租家</a></h2>
            </div>
            <div class="col-md-8 footer-class">
                <p >Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://www.laravel.com/index.php/front">租家网</a></p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--//footer-->
</body>
</html>
<script>
    var num=60;
    var kaiguan=null
    var code=null
    function reCaptcha(){
        var phone= $("#phone").val()
        if(phone!=""){
            kaiguan=setInterval("run()",1000)
            $("input:button").attr("disabled",true);
            $.ajax({
                type: "POST",
                url: "{{URL('phone')}}",
                data: "phone="+phone,
                success: function(msg){
                    code=msg
                }
            });
        }
    }

    //验证码倒计时
    function run(){
        num--
        $("input:button").val(num+"秒后重新获取短信");
        if(num==1){
            clearInterval(kaiguan);
            $("input:button").val("获取验证码");
            $("input:button").attr("disabled",false);
        }
    }
    //姓名验证
    $("#name").blur(function(){

    })
    //手机验证码验证
   $("#code").blur(function(){
       var phone=$("#code").val();
       if(code!=phone){
           $("input:submit").attr("disabled",true);
       }else{
           $("input:submit").attr("disabled",false);
       }
   })
</script>