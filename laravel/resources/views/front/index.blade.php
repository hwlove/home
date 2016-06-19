<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link href="../front/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../front/js/jquery.min.js"></script>
<script type="text/javascript">
var $180 = $;
</script>
<!-- Custom Theme files -->
<!--menu-->
<script src="../front/js/scripts.js"></script>
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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- slide -->
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
</head>
<body >
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
				<li><a class="play-icon popup-with-zoom" href="{{URL('personal')}}"> 个人中心</a></li>
				
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
						<form action="search" method="post">
				<div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>房屋位置</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>租用时间</span></li>
							  
							  <div class="clearfix"></div>
						  </ul>				  	 
						  <div class="resp-tabs-container">
						  		 <!--搜索-->
							
						  		<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>All Homes</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
								 	<div class="facts">
										<select name="h_provice" id="province" class="change_pa">
												<option value="">请选择</option>
												@foreach($region_province as $rp)
												<option value="{{$rp->region_id}}">{{$rp->region_name}}</option>
												@endforeach
												
										</select>
										<select name="h_city" id="city" class="change_pa">
												<option value="">请选择</option>
												
										</select>
										<select name="h_vill" id="vill">
												<option value="">请选择</option>
												
										</select>
									  	<div class="login">
											
											<input type="text" value="SearchAddress" name="searchposition" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'SearchAddress';}">		
									 		<input type="submit" value="">
									 	</div>        
							        </div>
						  		</div>
							     <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>For Sale</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">									
										<div class="login">
											
												 <font style="font-size:20px;font-height:2px;">时间</font>:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="starttime" style="border:1px black solid;width:100px">&nbsp;&nbsp;&nbsp;&nbsp;
												 --&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="endtime" style="border:1px black solid;width:100px">
											
											<input type="text" value="SearchAddress" name="searchtime" id="searchtime" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'SearchAddress';}">		
									 		<input type="submit" value="">
											
									 	</div> 
							        </div>	
								 </div>	
								</form>
								<!--搜索End-->
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
	<div class=" header-right">
		<div class=" banner">
			 <div class="slider">
			    <div class="callbacks_container">
			      <ul class="rslides" id="slider">
                     @foreach($img as $row)
					 <li>
			          	 <div class="banner1"  >
                           <img src="../front/images/{{$row->img_name}}" alt=""/>
			           		<div class="caption">
					          	<h3><span></span></h3>
					          	<p></p>
			          		</div>
			          	</div>
			         </li>
                     @endforeach
					 {{--<li>--}}
			          	 {{--<div class="banner2">--}}
			           		{{--<div class="caption">--}}
					          	{{--<h3><span></span></h3>--}}
					          	{{--<p></p>--}}
			          		{{--</div>--}}
			          	{{--</div>--}}
			         {{--</li>--}}
			         {{--<li>--}}
			          	 {{--<div class="banner3">--}}
			           		{{--<div class="caption">--}}
					          	{{--<h3><span></span></h3>--}}
					          	{{--<p></p>--}}
			          		{{--</div>--}}
			          	{{--</div>--}}
			         {{--</li>		--}}
			      </ul>
			  </div>
			</div>
		</div>
	</div>
	 
	<!--header-bottom-->
	<div class="banner-bottom-top">
			<div class="container">
			<div class="bottom-header">
				<div class="header-bottom">
					<div class=" bottom-head">
						<a href="search">
							<div class="buy-media">
								<i class="buy"> </i>
								<h6>找房</h6>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="host">
							<div class="buy-media">
							<i class="rent"> </i>
							<h6>成为房东</h6>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="#">
							<div class="buy-media">
							<i class="pg"> </i>
							<h6>招待所</h6>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="{{URL('goods')}}">
							<div class="buy-media">
							<i class="sell"> </i>
							<h6>积分商城</h6>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="#">
							<div class="buy-media">
							<i class="loan"> </i>
							<h6>房屋贷款</h6>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="#">
							<div class="buy-media">
							<i class="apart"> </i>
							<h6>企划</h6>
							</div>
						</a>
					</div>
					<div class="bottom-head">
						<a href="our">
							<div class="buy-media">
							<i class="deal"> </i>
							<h6>关于我们</h6>
							</div>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
	</div>
			<!--//-->
				
	<!--//header-bottom-->
	
	
<!--//header-->
<!--content-->
<div class="content">
	<div class="content-grid">
		<div class="container">
			<h3>最受欢迎的房屋</h3>
            @foreach($greet as $r)
				<div class="col-md-4 box_2">
			     	 <a href="housesingle" class="mask">
			     	   	<img class="img-responsive zoom-img" src="../front/images/{{$r->img_name}}" alt="">
			     	   	<span class="four">{{$r->h_price}}</span>
			     	 </a>
			     	   <div class="most-1">
			     	   	 <h5><a href="housesingle">查看详情</a></h5>
			     	   </div>
			    </div>
            @endforeach
			  {{--<div class="col-md-4 box_2">--}}
		     	 {{--<a href="housesingle" class="mask">--}}
			     	   	{{--<img class="img-responsive zoom-img" src="../front/images/pc5.jpg" alt="">--}}
			     	   	{{--<span class="four">40,000￥</span>--}}
			     	 {{--</a>--}}
		     	   {{--<div class="most-1">--}}
			     	   	{{--<h5><a href="housesingle">精品</a></h5>--}}
			     	    	{{--<p>问答</p>--}}
			     	   {{--</div>--}}
		     	{{----}}
		      {{--</div>--}}
			  {{--<div class="col-md-4 box_2">--}}
		     	 {{--<a href="housesingle" class="mask">--}}
			     	   	{{--<img class="img-responsive zoom-img" src="../front/images/pc3.jpg" alt="" >--}}
			     	   	{{--<span class="four">40,000￥</span>--}}
			     	 {{--</a>--}}
		     	   {{--<div class="most-1">--}}
			     	   	 {{--<h5><a href="housesingle">流行</a></h5>--}}
			     	    	{{--<p>问答</p>--}}
			     	   {{--</div>--}}
		     	{{----}}
		      {{--</div>--}}
		 	<div class="clearfix"> </div>
		</div>
	</div>
<!--service-->
	<div class="services">
		<div class="container">
			<div class="service-top">
				<h3>地图找房</h3>
			</div>
			<div class="services-grid">
		   		<div class="col-md-6 service-top1">
		   			<div class=" ser-grid">	
		   				<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-user"> </a>
		   			</div>
		   			<div  class="ser-top">
		   				<h4>客服</h4>
		   				<p>为您解决使用租家产品过程中遇到的问题,租家客服中心24小时待命。</p>
		   		    </div>
					<div class="clearfix"> </div>
		   	   </div>
				<div class="col-md-6 service-top1">
		   			<div class=" ser-grid">	
		   				<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-leaf"> </a>
		   			</div>
		   			<div  class="ser-top">
		   				<h4>房屋装修环保</h4>
		   				<p>绿色环保装修拒绝污染，让您住的放心，安心。 </p>
		   		    </div>
					<div class="clearfix"> </div>
		   		</div>
		   	<div class="clearfix"> </div>
		 </div>
		 <div class="services-grid">
			   	<div class="col-md-6 service-top1">
			   		<div class=" ser-grid">	
			   			<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-cog"> </a>
			   		</div>
			   		<div  class="ser-top">
			   			<h4>预约维修</h4>
			   				<p>租家网提供房屋维修，专业施工，贴心服务，是您首选。租家网房屋维修具有优秀的技术服务人才，优秀的专业施工队伍，优秀的一站式服务。</p>
			   		</div>
					<div class="clearfix"> </div>
			   	</div>
				<div class="col-md-6 service-top1">
			   		<div class=" ser-grid">	
			   			<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-file"> </a>
			   		</div>
			   		<div  class="ser-top">
			   			<h4>房屋协议</h4>
			   			<p>房屋租赁协议直接与客户签订合同</p>
			   		</div>
					<div class="clearfix"> </div>
			   	</div>
		   	  <div class="clearfix"> </div>
		 	</div>
		</div>
	</div>
<!--//services-->
<!--features-->
		<div class="content-middle">
			<div class="container">

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
		<div class="container">
			<h3>强力打造</h3>
				<div class="project-top">
                    @foreach($exemplary as $row)
					<div class="col-md-3 project-grid">
                        <div class="project-grid-top">
							 <a href="contact?hou_id={{$row->h_id}}" class="mask"><img src="../front/images/{{$row->img_name}}" class="img-responsive zoom-img" alt=""/></a>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 	<span class="star"> 4.5</span>
									 </div>
									 <div class="col-md4">
									 	<strong>{{$row->h_site}}</strong>
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <p>{{$row->h_plot}}小区</p>
								 <p class="cost">{{$row->h_price}}￥</p>
								 <a href="contact?hou_id={{$row->h_id}}" class="hvr-sweep-to-right more">查看详情</a>
							 </div>

						</div>
					</div>
                    @endforeach
					{{--<div class="col-md-3 project-grid">--}}
						{{--<div class="project-grid-top">--}}
							  {{--<a href="single.html" class="mask"><img src="../front/images/ga1.jpg" class="img-responsive zoom-img" alt=""/></a>--}}
							 {{--<div class="col-md1">--}}
								 {{--<div class="col-md2">--}}
									 {{--<div class="col-md3">--}}
									 	{{--<span class="star"> 4.5</span>--}}
									 {{--</div>--}}
									 {{--<div class="col-md4">--}}
									 	{{--<strong>北京丰台</strong>--}}
									 	{{--<small>50 好评 </small>--}}
									 {{--</div>--}}
									 {{--<div class="clearfix"> </div>--}}
								 {{--</div>--}}
								 {{--<p>宋家庄公寓 </p>--}}
								 {{--<p class="cost">$65,000</p>--}}
								 {{--<a href="single.html" class="hvr-sweep-to-right more">查看详情</a>--}}
							 {{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="col-md-3 project-grid">--}}
						{{--<div class="project-grid-top">--}}
							  {{--<a href="single.html" class="mask"><img src="../front/images/ga2.jpg" class="img-responsive zoom-img" alt=""/></a>--}}
							 {{--<div class="col-md1">--}}
								 {{--<div class="col-md2">--}}
									 {{--<div class="col-md3">--}}
									 	{{--<span class="star"> 4.5</span>--}}
									 {{--</div>--}}
									 {{--<div class="col-md4">--}}
									 	{{--<strong>北京朝阳</strong>--}}
									 	{{--<small>50 好评</small>--}}
									 {{--</div>--}}
									 {{--<div class="clearfix"> </div>--}}
								 {{--</div>--}}
								 {{--<p>蛋壳公寓</p>--}}
								 {{--<p class="cost">$65,000</p>--}}
								 {{--<a href="single.html" class="hvr-sweep-to-right more">查看详情</a>--}}
							 {{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="col-md-3 project-grid">--}}
						{{--<div class="project-grid-top">--}}
							  {{--<a href="single.html" class="mask"><img src="../front/images/ga3.jpg" class="img-responsive zoom-img" alt=""/></a>--}}
							 {{--<div class="col-md1">--}}
								 {{--<div class="col-md2">--}}
									 {{--<div class="col-md3">--}}
									 	{{--<span class="star"> 4.5</span>--}}
									 {{--</div>--}}
									 {{--<div class="col-md4">--}}
									 	{{--<strong>北京东城区</strong>--}}
									 	{{--<small>59好评</small>--}}
									 {{--</div>--}}
									 {{--<div class="clearfix"> </div>--}}
								 {{--</div>--}}
								 {{--<p>富贵小区</p>--}}
								 {{--<p class="cost">$65,000</p>--}}
								 {{--<a href="single.html" class="hvr-sweep-to-right more">查看详情</a>--}}
							 {{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					<div class="clearfix"> </div>
				</div>


		</div>
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
				<h2><a href="front">租家</a></h2>
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
<!--地区控制-->
<script type="text/javascript">
$(".change_pa").change(function () {
        var pro_id=$(this).val();
        var str="<option value=''>--请选择--</option>"
        var change_name=$(this).attr('id');
        if(change_name=='province'){
            next_name='city'
            $("#vill").html(str);
        }else if(change_name=='city'){
            next_name='vill'
        }
        $.ajax({
            url:"changeregion",
            data:"id="+pro_id,
            dataType:'json',
            success: function (data) {
                for(i in data){
                    str += "<option value="+data[i]['region_id']+">"+data[i]['region_name']+"</option>"
                }
                //console.log(str)
                $("#"+next_name).html(str);
                
            }
        })
    })
</script>
<!--地区end-->

<!--日历插件-->
<!--日历插件-->
<script src="../calendar/jq.js"></script>
<script src="../calendar/date/jquery-ui.js"></script>
<script type="text/javascript">
var $200 = $;
</script>
<!--日历end-->
<script>
jQuery.noConflict();
(function($) {
   $(function() {
    $( "#starttime" ).datepicker();
    $( "#endtime" ).datepicker();
  });
})(jQuery);
</script>


<!--时间戳http://www.cnblogs.com/yjf512/p/3796229.html-->
<script type="text/javascript">
	
$('#searchtime').blur(function(){
	var starttime=$("#starttime").val();
	var endtime=$("#endtime").val();
	//获取年
	st_year=starttime.substr(6,4);
	en_year=endtime.substr(6,4);
	//获取月
	st_mon=starttime.substr(0,2);
	en_mon=endtime.substr(0,2);
	//获取日
	st_day=starttime.substr(3,2);
	en_day=endtime.substr(3,2);

	
	var starttime=st_year+'-'+st_mon+'-'+st_day;
	var endtime=en_year+'-'+en_mon+'-'+en_day;


	var searchtime=starttime+','+endtime;
	timest = Date.parse(new Date(starttime))/1000;
	timeed = Date.parse(new Date(endtime))/1000;
	//后去当前时间戳
	timestr=Date.parse(new Date())/1000;
	if(timeed&timest){
		if(starttime!=endtime){
			
				if(timeed<=timestr){
					if(timest<timeed){
						$('#searchtime').val(searchtime);
					}else{
						alert('开始时间不能超过结束时间');
					}
				}else{
					alert('不能超过当前时间');
				}
			
			
		}else{
			alert('起止时间不可相同');
		}
	}else{
		alert('请选择或手动输入,格式为2016-01-01,2016-01-02');
	}
	
})

</script>
<!--日历结束-->