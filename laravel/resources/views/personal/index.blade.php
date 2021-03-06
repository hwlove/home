<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="../personal/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../personal/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="../personal/css/lines.css" rel='stylesheet' type='text/css' />
<link href="../personal/css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="../personal/js/jquery.min.js"></script>
<!----webfonts-->

<!---//webfonts--->
<!-- Nav CSS -->
<link href="../personal/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="../personal/js/metisMenu.min.js"></script>
<script src="../personal/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="../personal/js/d3.v3.js"></script>
<script src="../personal/js/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">个人中心</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
			   <a  class="navbar-bran"  href="{{URL('/')}}">首页</a>
				<li class="dropdown">
	        		<ul class="dropdown-menu">
					
						<li class="dropdown-menu-header">
							<strong>Messages</strong>
							<div class="progress thin">
							  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							  </div>
							</div>
						</li>
						<li class="avatar">
							
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/2.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/3.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/4.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/5.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/pic1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="dropdown-menu-footer text-center">
							<a href="#">View all messages</a>
						</li>
	        		</ul>
	      		</li>
			    <li class="dropdown">
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
						<li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
						<li class="divider"></li>
						<li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>
	        		</ul>
	      		</li>
			</ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{URL('collect')}}"><i class="fa fa-table nav_icon"></i>收藏列表<span class="fa arrow"></span></a>
                            {{--<ul class="nav nav-second-level">--}}
                                {{--<li>--}}
                                    {{--<a href="basic_tables.html">Basic Tables</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{URL('subscribe')}}"><i class="fa fa-sitemap fa-fw nav_icon"></i>预约列表<span class="fa arrow"></span></a>
                            {{--<ul class="nav nav-second-level">--}}
                                {{--<li>--}}
                                    {{--<a href="media.html">Media</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a href="login.html">Login</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="{{ URL('lists') }}"><i class="fa fa-check-square-o nav_icon"></i>兑换列表<span class="fa arrow"></span></a>
                            {{--<ul class="nav nav-second-level">--}}
                            {{--<li>--}}
                            {{--<a href="media.html">Media</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                            {{--<a href="login.html">Login</a>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
     	<div class="col_3">
        	<div class="col-md-3 widget widget1">
        	</div>
        	<div class="col-md-3 widget widget1">
        	</div>
        	<div class="col-md-3 widget widget1">

        	</div>
            @foreach($u_message as $val)
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-dollar dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>您当前的积分：{{$val->front_score}}</strong></h5>
                      <span><a href="{{URL('goods')}}">点击这里，可以去商城换礼品哦！</a></span>
                    </div>
                </div>
        	 </div>
            @endforeach
        	<div class="clearfix"> </div>
      </div>
    @foreach($u_message as $val)
      <div class="col_1">
		    <div class="col-md-4 span_8">
		       <div class="activity_box">
		        <div class="scrollbar" id="style-2">
                   <div class="activity-row">
                    </div>
                    <div class="activity-row1">
	                 <div class="col-xs-1"><i class="fa fa-user text-info icon_12"></i></div>
	                 <div class="col-xs-3 activity-img"></div>
	                 <div class="col-xs-8 activity-desc" >
                         <img src="../uploads/{{ $val->front_img }}" alt="" style="height: 280px;width: 250px"/>
	                 </div>
	                 <div class="clearfix"> </div>
                     </div>
	  		        </div>
		          </div>
		    </div>
			<div class="col-md-4 stats-info">
                <div class="panel-heading">
                    <h4 class="panel-title">个人资料 </h4>
                    <img src="../uploads/{{ $val->front_img }}" alt="" style="height: 100px;width: 100px"/>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled">
                        <li>用户名<div class="text-success pull-right">{{ $val->front_name }}</div></li>
                        <li>手机号<div class="text-success pull-right">{{ $val->front_tel }}</div></li>
                        <li>积分<div class="text-success pull-right">{{ $val->front_score }}</div></li>
                        <li>年龄<div class="text-danger pull-right">{{ $val->front_age }}</div></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
	  </div>
   @endforeach

	  <div class="span_11">
		<div class="col-md-6 col_5">
		  <div id="chart_container">

<script>

var seriesData = [ [], [], [], [], [] ];
var random = new Rickshaw.Fixtures.RandomData(50);

for (var i = 0; i < 75; i++) {
	random.addData(seriesData);
}

var graph = new Rickshaw.Graph( {
	element: document.getElementById("chart"),
	renderer: 'multi',

	dotSize: 5,
	series: [
		{
			name: 'temperature',
			data: seriesData.shift(),
			color: '#AFE9FF',
			renderer: 'stack'
		}, {
			name: 'heat index',
			data: seriesData.shift(),
			color: '#FFCAC0',
			renderer: 'stack'
		}, {
			name: 'dewpoint',
			data: seriesData.shift(),
			color: '#555',
			renderer: 'scatterplot'
		}, {
			name: 'pop',
			data: seriesData.shift().map(function(d) { return { x: d.x, y: d.y / 4 } }),
			color: '#555',
			renderer: 'bar'
		}, {
			name: 'humidity',
			data: seriesData.shift().map(function(d) { return { x: d.x, y: d.y * 1.5 } }),
			renderer: 'line',
			color: '#ef553a'
		}
	]
} );


graph.render();

var detail = new Rickshaw.Graph.HoverDetail({
	graph: graph
});
</script>
</div>
            <!-- map -->
<link href="../personal/css/jqvmap.css" rel='stylesheet' type='text/css' />
<script src="../personal/js/jquery.vmap.js"></script>
<script src="../personal/js/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="../personal/js/jquery.vmap.world.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#vmap').vectorMap({
		    map: 'world_en',
		    backgroundColor: '#333333',
		    color: '#ffffff',
		    hoverOpacity: 0.7,
		    selectedColor: '#666666',
		    enableZoom: true,
		    showTooltip: true,
		    values: sample_data,
		    scaleColors: ['#C8EEFF', '#006491'],
		    normalizeFunction: 'polynomial'
		});
	});
</script>
<!-- //map -->
       </div>
       <div class="clearfix"> </div>
    </div>
    <div class="content_bottom">
     <div class="col-md-8 span_3">
	   </div>
		<div class="clearfix"> </div>
	    </div>
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="../personal/js/bootstrap.min.js"></script>
</body>
</html>
