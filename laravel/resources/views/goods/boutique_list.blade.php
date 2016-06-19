<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link href="../front/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="../front/css/styles.css" rel="stylesheet">
<!--//menu-->
<!--theme-style-->
<link href="../front/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->

<link rel="stylesheet" href="../calendar/date/jquery-ui.css">
<!-- <link href="../calendar/css/lyz.calendar.css" rel="stylesheet" type="text/css" /> -->
<style>
body {
font-size: 12px;
font-family: "微软雅黑", "宋体", "Arial Narrow";
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />


</head>
<body >
<!--header-->
	<div class="navigation">
			<div class="container-fluid">
				<nav class="pull">
					<ul>
						<li><a  href="/">首页</a></li>
						<li><a  href="goods">商品信息</a></li>
						<li><a  href="blog.html">博客</a></li>
						<li><a  href="terms.html">条款</a></li>
						<li><a  href="contact.html">联系</a></li>
						<li><a  href="userexit">退出</a></li>
					</ul>
				</nav>			
			</div>
		</div>
<div class="header">
	<div class="container">
		<!--logo-->
			<div class="logo">
				<h1><a href="index.html">精品家具展示</a></h1>
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

			<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
					    <!----- tabs-box ---->
						<form action="search" method="post">
				<div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>房屋位置</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>租用时间</span></li>
							  
							  <div class="clearfix"></div>
						  </ul>				  	 
					 </div>

				</div>
				</div>

					
	
		</div>
		<div class="clearfix"> </div>
		</div>	
</div>
	</div>
			<!--//-->
				
	<!--//header-bottom-->
	
	
<!--//header-->
<!--content-->
<div class="content">

	</div>
</div>
<!--service-->


	<div class="dealer-top">
	<div class="container">
		<h3></h3>
	</div>
			<div class="deal-top-top">
			@foreach($boutique_data as $val)
				<div class="col-md-3 top-deal-top">
					<div class=" top-deal">
						<a href="detail?goods_id={{$val->goods_id}}" class="mask"><img src="../goods/{{$val->goods_pic}}" class="img-responsive zoom-img" alt=""></a>
						<div class="deal-bottom">
							<div class="top-deal1">
								<h5><a href="detail?goods_id={{$val->goods_id}}">{{$val->goods_name}}</a></h5>
								<p>{{$val->goods_desc}}</p>
								<p>积分兑换: {{$val->goods_price}}</p>
							</div>
							<div class="top-deal2">
								<a href="detail?goods_id={{$val->goods_id}}" class="hvr-sweep-to-right more">更多>></a>
							</div>
						<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			@endforeach
			<div class="clearfix"> </div>
		</div>		
		<div class="deal-top-top">
			<div class="clearfix"> </div>
		</div>		
		<div class="deal-top-top">
			<div class="clearfix"> </div>
		</div>		
	</div>
<!--//services-->
<!--features-->
		<div class="content-middle" style="margin-top:100px;">
			<div class="container">
				<div class="mid-content">
					<h3>Back Goods</h3>
					<p>Contrary to popular belief
							, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
					<a class="hvr-sweep-to-right more-in" href="goods"> 返回<<</a>
				</div>
			</div>
		</div>
<!--//features-->
{{--<!--phone-->--}}
	{{--<div class="phone">--}}
		{{--<div class="container">--}}
			{{--<div class="col-md-6">--}}
				{{--<img src="../front/images/ph1.png" class="img-responsive" alt=""/>--}}
			{{--</div>--}}
			{{--<div class="col-md-6 phone-text">--}}
				{{--<h4>Search Homes Everywhere</h4>--}}
					{{--<div class="text-1">--}}
						{{--<h5>Custom Location Tracker</h5>--}}
						{{--<p>There are many variations of passages of Lorem Ipsum available, but the majorit</p>--}}
					{{--</div>--}}
					{{--<div class="text-1">--}}
						{{--<h5>Map Search</h5>--}}
						{{--<p>There are many variations of passages of Lorem Ipsum available, but the majorit</p>--}}
					{{--</div>--}}
					{{--<div class="text-1">--}}
						{{--<h5>Quick Details</h5>--}}
						{{--<p>There are many variations of passages of Lorem Ipsum available, but the majorit</p>--}}
					{{--</div>--}}
					{{--<a href="mobile_app.html" class="hvr-sweep-to-right more">Download the App</a>--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</div>--}}
<!--//phone-->
<!--project--->
	<div class="project">
	</div>
<!--//project-->
{{--<!--test-->--}}
		{{--<div class="content-bottom">--}}
			{{--<div class="container">--}}
				{{--<h3>客户评价</h3>--}}
					{{--<div class="col-md-6 name-in">--}}
						{{--<div class=" bottom-in">--}}
							{{--<p class="para-in">Duis aute irure dolor in reprehenderit in voluptate--}}
							{{--velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
						    {{--<i class="dolor"> </i>--}}
							{{--<div class="men-grid">--}}
								{{--<a href="#" class="men-top"><img class="img-responsive men-top" src="../front/images/te.jpg" alt=""></a>--}}
								{{--<div class="men">--}}
								{{--<span>Roger V. Coates</span>--}}
								{{--<p>Ut enim ad minim</p>--}}
							{{--</div>--}}
							{{--<div class="clearfix"> </div>--}}
						{{--</div>--}}
					{{--</div>--}}
						{{--<div class=" bottom-in">--}}
							{{--<p class="para-in">Duis aute irure dolor in reprehenderit in voluptate--}}
							{{--velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
							{{--<i class="dolor"> </i>--}}
							{{--<div class="men-grid">--}}
								{{--<a href="#" class="men-top"><img class="img-responsive " src="../front/images/te2.jpg" alt=""></a>--}}
								{{--<div class="men">--}}
									{{--<span>Ann K. Perez</span>--}}
									{{--<p>Ut enim ad minim</p>--}}
								{{--</div>--}}
								{{--<div class="clearfix"> </div>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="col-md-6  name-on">--}}
						{{--<div class="bottom-in ">--}}
							{{--<p class="para-in">Duis aute irure dolor in reprehenderit in voluptate--}}
							{{--velit esse cillum dolore eu fugiat nulla pariatur.</p>--}}
							{{--<i class="dolor"> </i>--}}
							{{--<div class="men-grid">--}}
								{{--<a href="#" class="men-top"><img class="img-responsive " src="../front/images/te1.jpg" alt=""></a>--}}
								{{--<div class="men">--}}
									{{--<span>Nancy M. Picker</span>--}}
									{{--<p>Ut enim ad minim</p>--}}
								{{--</div>--}}
								{{--<div class="clearfix"> </div>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="clearfix"> </div>--}}
			{{--</div>--}}
		{{--</div>		--}}
{{--<!--//test-->	--}}
<!--partners-->
	<div class="content-bottom1">
		<h3>合作伙伴</h3>
	 		<div class="container">
				<ul>
					<li><a href="#"><img class="img-responsive" src="../front/images/lg.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="../front/images/lg1.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="../front/images/lg2.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="../front/images/lg3.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="../front/images/lg4.png" alt=""></a></li>
				<div class="clearfix"> </div>
				</ul>
				<ul>
					<li><a href="#"><img class="img-responsive" src="../front/images/lg5.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="../front/images/lg6.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="../front/images/lg7.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="../front/images/lg8.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="../front/images/lg9.png" alt=""></a></li>	
				<div class="clearfix"> </div>
				</ul>
			</div>
		</div>	
<!--//partners-->	
	</div>
<!--footer-->
<div class="footer">
	
	<div class="footer-bottom">
		<div class="container">
			<div class="col-md-4 footer-logo">
				<h2><a href="front">实际房屋</a></h2>
			</div>
			<div class="col-md-8 footer-class">
				<p >受版权保护的&copy; 2016年。公司名称保留所有权利.<a target="_blank" href="http://www.laravel.com/index.php/front">租家网</a></p>
			</div>
		<div class="clearfix"> </div>
	 	</div>
	</div>
</div>
<!--//footer-->
</body>
</html>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- slide -->
<script src="../front/js/jquery.min.js"></script>
<script type="text/javascript">
    var $180 = $;
</script>
<!-- Custom Theme files -->
<!--menu-->
<script src="../front/js/scripts.js"></script>
<script src="../front/js/responsiveslides.min.js"></script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            speed: 500,
            namespace: "callbacks",
            pager: true
        });
    });
</script>

<script src="../front/js/jquery.magnific-popup.js" type="text/javascript"></script>
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
