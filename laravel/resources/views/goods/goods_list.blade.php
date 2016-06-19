<!DOCTYPE HTML>
<html>
<head>
    <title>Basic_tables</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="../personal/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="../personal/css/style.css" rel='stylesheet' type='text/css' />
    <link href="../personal/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="../personal/js/jquery.min.js"></script>
    <!----webfonts--->
    <link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Bootstrap Core JavaScript -->
    <script src="../personal/js/bootstrap.min.js"></script>
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
            <a class="navbar-brand" >个人中心</a>
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
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                    </li>
                    <li class="avatar">
                        <a href="#">
                            <img src="images/1.png" alt=""/>
                            <div>New message</div>
                            <small>1 minute ago</small>
                            <span class="label label-info">NEW</span>
                        </a>
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
                    {{--<li>--}}
                    {{--<a href="index.html"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="#"><i class="fa fa-laptop nav_icon"></i>Layouts<span class="fa arrow"></span></a>--}}
                    {{--<ul class="nav nav-second-level">--}}
                    {{--<li>--}}
                    {{--<a href="grids.html">Grid System</a>--}}
                    {{--</li>--}}
                    {{--</ul>--}}
                    {{--<!-- /.nav-second-level -->--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="#"><i class="fa fa-indent nav_icon"></i>Menu Levels<span class="fa arrow"></span></a>--}}
                    {{--<ul class="nav nav-second-level">--}}
                    {{--<li>--}}
                    {{--<a href="graphs.html">Graphs</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="typography.html">Typography</a>--}}
                    {{--</li>--}}
                    {{--</ul>--}}
                    {{--<!-- /.nav-second-level -->--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="#"><i class="fa fa-envelope nav_icon"></i>Mailbox<span class="fa arrow"></span></a>--}}
                    {{--<ul class="nav nav-second-level">--}}
                    {{--<li>--}}
                    {{--<a href="inbox.html">Inbox</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="compose.html">Compose email</a>--}}
                    {{--</li>--}}
                    {{--</ul>--}}
                    {{--<!-- /.nav-second-level -->--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="widgets.html"><i class="fa fa-flask nav_icon"></i>Widgets</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="#"><i class="fa fa-check-square-o nav_icon"></i>Forms<span class="fa arrow"></span></a>--}}
                    {{--<ul class="nav nav-second-level">--}}
                    {{--<li>--}}
                    {{--<a href="forms.html">Basic Forms</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<a href="validation.html">Validation</a>--}}
                    {{--</li>--}}
                    {{--</ul>--}}
                    {{--<!-- /.nav-second-level -->--}}
                    {{--</li>--}}
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
                        {{----}}
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
        <div class="col-md-12 graphs">
            <div class="xs">
                <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
                    <div class="panel-heading">
                        <h2>兑换列表</h2>
                        <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
                    </div>
                    <div class="panel-body no-padding" style="display: block;">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>兑换人</th>
                                <th>兑换时间</th>
                                <th>兑换商品名</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($list as $v)
                                    <tr>
                                        <td>{{ $v->s_name}}</td>
                                        <td>{{ $v->s_time }}</td>
                                        <td>{{ $v->goods_name}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="bs-example4" data-example-id="simple-responsive-table">
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- Nav CSS -->
<link href="../personal/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="../personal/js/metisMenu.min.js"></script>
<script src="../personal/js/custom.js"></script>
</body>
</html>
