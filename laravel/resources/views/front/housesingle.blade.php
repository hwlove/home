<!DOCTYPE html>
<html>
<head>
<title>Buy_Single</title>
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


<!---->
<div class="container">
	<div class="buy-single">
		<h3>房屋展示</h3>
		<div class="box-sin">
			<div class="col-md-9 single-box">
				@foreach($house as $v)
				<div class="box-col">
				     <div class=" col-sm-7 left-side ">
						<a href="contact?hou_id={{$v->h_id}}"> <img class="img-responsive" src="../uploads/<?php $img=explode('|',$v->imageFile);echo $img[0];?>" alt=""></a>
					</div>
					<div class="  col-sm-5 middle-side">
					     <h4>房屋信息</h4>
						 <p><span class="bath">房&nbsp;&nbsp;名 &nbsp;&nbsp;</span>: <span style="float:right">{{$v->h_name}}</span></p>
					     <p><span class="bath2">床 &nbsp;&nbsp;数&nbsp;&nbsp;&nbsp;&nbsp;</span>: <span style="float:right">{{$v->h_bed}} 个</span></p>
					     <p><span class="bath3">房屋面积</span>: <span style="float:right">{{$v->h_acreage}}㎡</span></p>
					     <p><span class="bath4">地理位置 </span>: <span style="float:right"> {{$v->h_site}}</span></p>
						 <p><span class="bath5">价&nbsp;&nbsp;格&nbsp;&nbsp; </span>: <span style="float:right">￥{{$v->h_price}}元</span></p>				 
						<div class="   right-side">
							 <a href="contact?hou_id={{$v->h_id}}" class="hvr-sweep-to-right more" >详情</a>     
						 </div>
					 </div>
				 <div class="clearfix"> </div>
				</div>
				@endforeach
				<!--
				<div class="box-col">
				     <div class=" col-sm-7 left-side ">
						 <a href="single.html"><img class="img-responsive" src="../front/images/sb1.jpg" alt=""></a>
					</div>				
					<div class="  col-sm-5 middle-side">
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
				 <div class="clearfix"> </div>
				</div>
				<div class="box-col">
				     <div class=" col-sm-7 left-side ">
						<a href="single.html"> <img class="img-responsive" src="../front/images/sb2.jpg" alt=""></a>
					</div>				
					<div class="  col-sm-5 middle-side">
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
				 <div class="clearfix"> </div>
				</div>
				<div class="box-col">
				     <div class=" col-sm-7 left-side ">
						<a href="single.html"> <img class="img-responsive" src="../front/images/sb3.jpg" alt=""></a>
					</div>				
					<div class="  col-sm-5 middle-side">
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
				 <div class="clearfix"> </div>
				</div>
				<div class="box-col">
				     <div class=" col-sm-7 left-side ">
						<a href="single.html"> <img class="img-responsive" src="../front/images/sb4.jpg" alt=""></a>
					</div>				
					<div class="  col-sm-5 middle-side">
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
				 <div class="clearfix"> </div>
				</div>
				<div class="box-col">
				     <div class=" col-sm-7 left-side ">
						 <a href="single.html"><img class="img-responsive" src="../front/images/sb5.jpg" alt=""></a>
					</div>				
					<div class="  col-sm-5 middle-side">
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
				 <div class="clearfix"> </div>
				</div>-->
			</div>
		</div>
		<div class="col-md-3 map-single-bottom">
			
			<div class="single-box-right">
		     	<h4>房屋特色</h4>
				@foreach($house as $vv)
				<?php $img=explode('|',$vv->imageFile);if(count($img)>2){?>
				<div class="single-box-img">
					<div class="box-img">
						<a href="contact?hou_id={{$vv->h_id}}"><img class="img-responsive" src="../uploads/<?php for($i=2;$i<count($img);$i++){
						 if($i==2){echo $img[2];}
						};?>" alt=""></a>
					</div>
					<div class="box-text">
						<p><a href="contact?hou_id={{$vv->h_id}}">房屋名:{{$vv->h_name}}</a></p>
						<a href="contact?hou_id={{$vv->h_id}}" class="in-box">更多</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<?php }?>
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
		<div class="nav-page">
		<nav>

		{!!$house->render()!!}

   </nav>
   </div>
		</div>
		
	</div>
	
</div>
<!---->
<!--footer-->
<div class="footer">
	
	<div class="footer-bottom">
		<div class="container">
			<div class="col-md-4 footer-logo">
				<h2><a href="index.html">租家</a></h2>
			</div>
			<div class="col-md-8 footer-class">
				<p >Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://www.laravel.com/index.php/front">租家网</a></p>
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