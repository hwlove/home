<!DOCTYPE html>
<html>
<head>
<title>Single</title>
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
<!--日历-->
<link rel="stylesheet" href="../calendar/date/jquery-ui.css">
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
				<h1><a href="front">租家</a></h1>
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
<div class=" banner-buying">
	<div class=" container">
	<h3><span>Lor</span>em</h3> 
	<!---->
	<div class="menu-right">
		 <ul class="menu">
			<li class="item1"><a href="#"> 菜单<i class="glyphicon glyphicon-menu-down"> </i> </a>
			<ul class="cute">
				<li class="subitem1"><a href="buy.html">购买 </a></li>
				<li class="subitem2"><a href="buy.html">出租 </a></li>
				<li class="subitem3"><a href="buy.html">招待所 </a></li>
				<li class="subitem1"><a href="buy.html">转售 </a></li>
				<li class="subitem2"><a href="loan.html">房屋贷款 Loan</a></li>
				<li class="subitem3"><a href="buy.html">企划 </a></li>
				<li class="subitem3"><a href="dealers.html">经销商</a></li>
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
<!---->

<div class="container">
	
	<div class="buy-single-single">
	
			<div class="col-md-9 single-box">
				
       <div class=" buying-top">	
			<div class="flexslider">
  <ul class="slides">
    <li data-thumb="../front/images/ss.jpg">
      <img src="../front/images/ss.jpg" />
    </li>
    <li data-thumb="../front/images/ss1.jpg">
      <img src="../front/images/ss1.jpg" />
    </li>
    <li data-thumb="../front/images/ss2.jpg">
      <img src="../front/images/ss2.jpg" />
    </li>
    <li data-thumb="../front/images/ss3.jpg">
      <img src="../front/images/ss3.jpg" />
    </li>
  </ul>
</div>
<!-- FlexSlider -->
  <script defer src="../front/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="../front/css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
</div>
<div class="buy-sin-single">
			<div class="col-sm-5 middle-side immediate">
					     <h4>Possession: Immediate</h4>
					     <p><span class="bath">Bed </span>: <span class="two">2 BHK</span></p>
					     <p>  <span class="bath1">Baths </span>: <span class="two">2</span></p>
					     <p><span class="bath2">Built-up Area</span>: <span class="two">100 Sq.Yrds</span></p>
					     <p><span class="bath3">Plot Area </span>:<span class="two"> 150 Sq.Yrds</span></p>
						 <p><span class="bath4">Age of property</span> : <span class="two">4 - 10 Years</span></p>
						 <p><span class="bath5">Price </span>:<span class="two"> 30-40 Lacs</span></p>				 
						<div class="   right-side">
							 <a href="contact.html" class="hvr-sweep-to-right more" >Contact Builder</a>     
					 </div>
					</div>
					 <div class="col-sm-7 buy-sin">
					 	<h4>Description</h4>
					 	<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature</p>
					 	<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC </p>
					 </div>
					 <div class="clearfix"> </div>
					</div>
					 <div class="map-buy-single">
					 	<h4>Neighborhood Info</h4>
						 	<div class="map-buy-single1">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>
							
						</div>
					</div>
					<div class="video-pre">
						<h4>Video Presentation</h4>
						<iframe src="https://player.vimeo.com/video/63931426"  webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

					</div>
		</div>
	

			
		
		<div class="col-md-3">
			<div class="single-box-right right-immediate">
		     	<h4>Featured Communities</h4>
				@foreach($house as $v)
				<div class="single-box-img ">
					<div class="box-img">
						<a href="single.html"><img class="img-responsive" src="../front/images/{{$v->img_name}}" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.html">{{$v->h_name}}</a></p>
						<a href="single.html" class="in-box">￥{{$v->h_price}}</a>
					</div>
					<div class="box-text">
						<p><a href="single.html">{{$v->h_direction}}</a></p>
						<a href="special" class="in-box">详情</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				@endforeach
				<!-- <div class="single-box-img">
					<div class="box-img">
						<a href="single.html"><img class="img-responsive" src="../front/images/sl1.jpg" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.html">Lorem ipsum dolor sit amet</a></p>
						<a href="single.html" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="single-box-img">
					<div class="box-img">
						<a href="single.html"><img class="img-responsive" src="../front/images/sl2.jpg" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.html">Lorem ipsum dolor sit amet</a></p>
						<a href="single.html" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="single-box-img">
					<div class="box-img">
						<a href="single.html"><img class="img-responsive" src="../front/images/sl3.jpg" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.html">Lorem ipsum dolor sit amet</a></p>
						<a href="single.html" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="single-box-img">
					<div class="box-img">
						<a href="single.html"><img class="img-responsive" src="../front/images/sl4.jpg" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="single.html">Lorem ipsum dolor sit amet</a></p>
						<a href="single.html" class="in-box">More Info</a>
					</div>
					<div class="clearfix"> </div>
				</div> -->
		 </div>
			
	  </div>
		<div class="clearfix"> </div>
		</div>
	</div>

<!---->
<div class="container">
	<div class="future">
		<h3 >Related Projects</h3>
			<div class="content-bottom-in">
					<ul id="flexiselDemo1">			
						<li><div class="project-fur">
								<a href="single.html" ><img class="img-responsive" src="../front/images/pi.jpg" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
		                                    <span class="fur-money">$2.44 Lacs - 5.28 Lacs </span>
		                                    <h6 class="fur-name"><a href="single.html">Contrary to popular</a></h6>
		                                   	<span>Paris</span>
                               			</div>
			                            <div class="fur2">
			                               	<span>2 BHK</span>
			                             </div>
									</div>					
							</div></li>
							<li><div class="project-fur">
									<a href="single.html" ><img class="img-responsive" src="../front/images/pi1.jpg" alt="" />	</a>
										<div class="fur">
											<div class="fur1">
			                                    <span class="fur-money">$2.44 Lacs - 5.28 Lacs </span>
			                                   <h6 class="fur-name"><a href="single.html">Contrary to popular</a></h6>
			                                   	<span>Paris</span>
	                               			</div>
				                            <div class="fur2">
				                               	<span>2 BHK</span>
				                             </div>
										</div>					
								</div></li>
								<li><div class="project-fur">
								<a href="single.html" ><img class="img-responsive" src="../front/images/pi2.jpg" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
		                                    <span class="fur-money">$2.44 Lacs - 5.28 Lacs </span>
		                                   <h6 class="fur-name"><a href="single.html">Contrary to popular</a></h6>
		                                   	<span>Paris</span>
                               			</div>
			                            <div class="fur2">
			                               	<span>2 BHK</span>
			                             </div>
									</div>					
							</div></li>
							<li><div class="project-fur">
								<a href="single.html" ><img class="img-responsive" src="../front/images/pi3.jpg" alt="" />	</a>
									<div class="fur">
										<div class="fur1">
		                                    <span class="fur-money">$2.44 Lacs - 5.28 Lacs </span>
		                                    <h6 class="fur-name"><a href="single.html">Contrary to popular</a></h6>
		                                   	<span>Paris</span>
                               			</div>
			                            <div class="fur2">
			                               	<span>2 BHK</span>
			                             </div>
									</div>					
							</div></li>
					</ul>
					<script type="text/javascript">
						$(window).load(function() {
							$("#flexiselDemo1").flexisel({
								visibleItems: 4,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
						    	responsiveBreakpoints: { 
						    		portrait: { 
						    			changePoint:480,
						    			visibleItems: 1
						    		}, 
						    		landscape: { 
						    			changePoint:640,
						    			visibleItems: 2
						    		},
						    		tablet: { 
						    			changePoint:768,
						    			visibleItems: 3
						    		}
						    	}
						    });
						    
						});
			</script>
			<script type="text/javascript" src="../front/js/jquery.flexisel.js"></script>
		</div>
	</div>
	
</div>
<!--footer-->
<div class="footer">
	<div class="container">
		<div class="footer-top-at">
			<div class="col-md-3 amet-sed">
				<h4>Our Company</h4>
				<ul class="nav-bottom">
					<li><a href="about.html">About Us</a></li>
					<li><a href="blog.html">For Sale By Owner Blog</a></li>
					<li><a href="mobile_app.html">Mobile</a></li>
					<li><a href="terms.html">Terms & Conditions</a></li>
					<li><a href="privacy.html">Privacy Policy</a></li>	
					<li><a href="blog.html">Blog</a></li>
				</ul>	
			</div>
			<div class="col-md-3 amet-sed ">
				<h4>Work With Us</h4>
					<ul class="nav-bottom">
						<li><a href="single.html">Real Estate Brokers</a></li>
						<li><a href="single.html">Business Development</a></li>
						<li><a href="single.html">Affiliate Programs</a></li>
						<li><a href="contact.html">Sitemap</a></li>
						<li><a href="career.html">Careers</a></li>
						<li><a href="feedback.html">Feedback</a></li>	
					</ul>	
			</div>
			<div class="col-md-3 amet-sed">
				<h4>Customer Support</h4>
				<p>Mon-Fri, 7AM-7PM </p>
				<p>Sat-Sun, 8AM-5PM </p>
				<p>177-869-6559</p>
					<ul class="nav-bottom">
						<li><a href="#">Live Chat</a></li>
						<li><a href="faqs.html">Frequently Asked Questions</a></li>
						<li><a href="suggestion.html">Make a Suggestion</a></li>
					</ul>	
			</div>
			<div class="col-md-3 amet-sed ">
				<h4>Property Services</h4>
				   <ul class="nav-bottom">
						<li><a href="single.html">Residential Property</a></li>
						<li><a href="single.html">Commercial Property</a></li>
						<li><a href="login.html">Login</a></li>
						<li><a href="register.html">Register</a></li>
						<li><a href="typo.html">Short Codes</a></li>	
					</ul>	
					<ul class="social">
						<li><a href="#"><i> </i></a></li>
						<li><a href="#"><i class="gmail"> </i></a></li>
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="camera"> </i></a></li>
						<li><a href="#"><i class="dribble"> </i></a></li>
					</ul>
			</div>
		<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="col-md-4 footer-logo">
				<h2><a href="index.html">REAL HOME</a></h2>
			</div>
			<div class="col-md-8 footer-class">
				<p >Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
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
