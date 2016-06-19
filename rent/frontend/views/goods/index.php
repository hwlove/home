<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>添加商品</title>
		<meta name="keywords" content="租赁,租房,租家" />
		<meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css" />

		<!-- fonts -->

		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<?php 
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(['action'=>'index.php?r=goods/add_goods','method'=>'post','options' => ['enctype' => 'multipart/form-data']]) ?>


	<body>

		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

            <div class="navbar-container" id="navbar-container">
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <i class="icon-leaf"></i>
                            租家后台管理
                        </small>
                    </a><!-- /.brand -->
                </div><!-- /.navbar-header -->

                <div class="navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">
                        <li class="grey">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-tasks"></i>
                                <span class="badge badge-grey"></span>
                            </a>

                            <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="icon-ok"></i>
                                    还有4个任务完成
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">软件更新</span>
                                            <span class="pull-right">65%</span>
                                        </div>

                                        <div class="progress progress-mini ">
                                            <div style="width:65%" class="progress-bar "></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">硬件更新</span>
                                            <span class="pull-right">35%</span>
                                        </div>

                                        <div class="progress progress-mini ">
                                            <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">单元测试</span>
                                            <span class="pull-right">15%</span>
                                        </div>

                                        <div class="progress progress-mini ">
                                            <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">错误修复</span>
                                            <span class="pull-right">90%</span>
                                        </div>

                                        <div class="progress progress-mini progress-striped active">
                                            <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        查看任务详情
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="purple">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-bell-alt icon-animated-bell"></i>
                                <span class="badge badge-important"><?php echo $count ?></span>
                            </a>

                            <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="icon-warning-sign"></i>
                                    <?php echo $count ?>  条通知
                                </li>

                                <li>
                                    <a href="index.php?r=host/lists">
                                        <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												新房东加入
											</span>
                                            <span class="pull-right badge badge-info"><?php echo $count ?></span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												新订单
											</span>
                                            <span class="pull-right badge badge-success"></span>
                                        </div>
                                    </a>
                                </li>


                                <li>
                                    <a href="#">
                                        查看所有通知
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="green">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-envelope icon-animated-vertical"></i>
                                <span class="badge badge-success"></span>
                            </a>

                            <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                                <li class="dropdown-header">
                                    <i class="icon-envelope-alt"></i>
                                    5条消息
                                </li>

                                <li>
                                    <a href="#">
                                        <img src="assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												不知道写啥 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>1分钟以前</span>
											</span>
										</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img src="assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												不知道翻译...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20分钟以前</span>
											</span>
										</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <img src="assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												到底是不是英文 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>下午3:15</span>
											</span>
										</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="inbox.html">
                                        查看所有消息
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎光临,</small>
                                    <?php
                                    $session = \Yii::$app->session;
                                    $session->open();
                                    echo $session->get("back_name");
                                    ?>
								</span>

                                <i class="icon-caret-down"></i>
                            </a>

                            <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="index.php?r=login/setting">
                                        <i class="icon-cog"></i>
                                        设置
                                    </a>
                                </li>

                                <li>
                                    <a href="index.php?r=login/showmessage">
                                        <i class="icon-user"></i>
                                        个人资料
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="index.php?r=login/clean">
                                        <i class="icon-off"></i>
                                        退出
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul><!-- /.ace-nav -->
                </div><!-- /.navbar-header -->
            </div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

                    <ul class="nav nav-list">
                        <li class="active">
                            <a href="index.php?r=index">
                                <i class="icon-dashboard"></i>
                                <span class="menu-text"> 管理中心 </span>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-desktop"></i>
                                <span class="menu-text"> 租客管理 </span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="index.php?r=renter">
                                        <i class="icon-double-angle-right"></i>
                                        租客列表
                                    </a>
                                </li>



                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class="icon-double-angle-right"></i>

                                        评论管理
                                        <b class="arrow icon-angle-down"></b>
                                    </a>

                                    <ul class="submenu">
                                        <li>
                                            <a href="index.php?r=renter/review">
                                                <i class="icon-leaf"></i>
                                                评论列表
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-list"></i>
                                <span class="menu-text"> 房东管理 </span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="index.php?r=host/index">
                                        <i class="icon-double-angle-right"></i>
                                        添加房东
                                    </a>
                                </li>

                                <li>
                                    <a href="index.php?r=host/lists">
                                        <i class="icon-double-angle-right"></i>
                                        房东列表
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-edit"></i>
                                <span class="menu-text"> 房源管理 </span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="index.php?r=home/form">
                                        <i class="icon-double-angle-right"></i>
                                        添加房源
                                    </a>
                                </li>

                                <li>
                                    <a href="index.php?r=home/lists">
                                        <i class="icon-double-angle-right"></i>
                                        房源列表
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!--                <li>-->
                        <!--                    <a href="widgets.html">-->
                        <!--                        <i class="icon-list-alt"></i>-->
                        <!--                        <span class="menu-text"> 插件 </span>-->
                        <!--                    </a>-->
                        <!--                </li>-->
                        <!---->
                        <!--                <li>-->
                        <!--                    <a href="calendar.html">-->
                        <!--                        <i class="icon-calendar"></i>-->
                        <!---->
                        <!--								<span class="menu-text">-->
                        <!--									日历-->
                        <!--									<span class="badge badge-transparent tooltip-error" title="2&nbsp;Important&nbsp;Events">-->
                        <!--										<i class="icon-warning-sign red bigger-130"></i>-->
                        <!--									</span>-->
                        <!--								</span>-->
                        <!--                    </a>-->
                        <!--                </li>-->
                        <!---->
                        <!--                <li>-->
                        <!--                    <a href="gallery.html">-->
                        <!--                        <i class="icon-picture"></i>-->
                        <!--                        <span class="menu-text"> 相册 </span>-->
                        <!--                    </a>-->
                        <!--                </li>-->

                        <li>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-tag"></i>
                                <span class="menu-text"> 服务管理 </span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="profile.html">
                                        <i class="icon-double-angle-right"></i>
                                        添加服务
                                    </a>
                                </li>


                                <li>
                                    <a href="pricing.html">
                                        <i class="icon-double-angle-right"></i>
                                        服务列表
                                    </a>
                                </li>


                                <li>
                                    <a href="login.html">
                                        <i class="icon-double-angle-right"></i>
                                        登录 &amp; 注册
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-file-alt"></i>

								<span class="menu-text">
									商城管理
									<span class="badge badge-primary "></span>
								</span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="index.php?r=goods">
                                        <i class="icon-double-angle-right"></i>
                                        添加商品
                                    </a>
                                </li>

                                <li>
                                    <a href="index.php?r=goods/goodslist">
                                        <i class="icon-double-angle-right"></i>
                                        商品列表
                                    </a>
                                </li>

                                <li>
                                    <a href="index.php?r=goods/addsort">
                                        <i class="icon-double-angle-right"></i>
                                        添加商品分类
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul><!-- /.nav-list -->


					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">管理中心</a>
							</li>

							<li>
								<a href="#">商城管理</a>
							</li>
							<li class="active">添加商品</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								商城管理
								<small>
									<i class="icon-double-angle-right"></i>
									添加商品
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="tabbable">


									<div class="tab-content no-border padding-24">
										<div id="faq-tab-1" class="tab-pane fade in active">
											<h4 class="blue">
												<i class="icon-ok bigger-110"></i>
												添加商品
											</h4>
											<div class="space-8"></div>
<!--form开始-->
								<form class="form-horizontal" role="form" action="index.php?r=goods/add_goods" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">
										<i class="icon-leaf green"></i>&nbsp;&nbsp;商品名称 </label>

										<div class="col-sm-9">
											<input  type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="" placeholder="Goodsname" name="goods_name"/>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> <i class="icon-leaf green"></i>&nbsp;&nbsp;商品分类 </label>

										<div class="col-sm-9">
											<select name="goods_sort" >
											<?php foreach($sort_data as $key=>$data){?>
												<option value="<?php echo $data['s_name'];?>">
												<?php echo str_repeat("　",$data['s_level']*4);?>
												<?php echo $data['s_name'];?></option>
											<?php }?>
												<!--<option value="厨房用品">厨房用品</option>
												<option value="生活日用">生活日用</option>
												<option value="家纺寝居">家纺寝居</option>
												<option value="家装建材">家装建材</option>
												<option value="精品家具">精品家具</option>
												<option value="材料装修">材料装修</option>-->
											</select>
											</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">
										<i class="icon-leaf green"></i>&nbsp;&nbsp;商品价格 </label>

										<div class="col-sm-9">
											<input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="" placeholder="Goodsprice" name="goods_price"/>
											<span class="help-inline col-xs-12 col-sm-7">
												<label class="middle">
												</label>
											</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-4"><i class="icon-leaf green"></i>&nbsp;&nbsp;商品库存</label>

										<div class="col-sm-9">
											<input type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="" placeholder="Goodsnum" name="goods_num"/>
											<div class="space-2"></div>

											<div class="help-block" id="input-size-slider"></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5"><i class="icon-leaf green"></i>&nbsp;&nbsp;商品展示</label>

										<div class="col-sm-9">
											<div class="clearfix">
												<!--<input class="col-xs-1" type="file" id="form-field-5" placeholder=".col-xs-1" name="goods_pic"/>-->
												 <?= $form->field($model, 'goods_pic')->fileInput() ?>

											</div>

											<div class="space-2"></div>

											<div class="help-block" id="input-span-slider"></div>
										</div>
									</div>
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit">
												<i class="icon-ok bigger-110"></i>
												提交
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重置
											</button>
										</div>
									</div>


								</form>
<!--form结束-->

										</div>

										<div id="faq-tab-2" class="tab-pane fade">
											<h4 class="blue">
												<i class="green icon-user bigger-110"></i>
												Account Questions
											</h4>

											<div class="space-8"></div>

											<div id="faq-list-2" class="panel-group accordion-style1 accordion-style2">
												<div class="panel panel-default">
													<div class="panel-heading">
														<a href="#faq-2-1" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
															<i class="icon-chevron-right smaller-80" data-icon-hide="icon-chevron-down align-top" data-icon-show="icon-chevron-right"></i>
															&nbsp;
						Enim eiusmod high life accusamus terry richardson?
														</a>
													</div>

													<div class="panel-collapse collapse" id="faq-2-1">
														<div class="panel-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
														</div>
													</div>
												</div>

												<div class="panel panel-default">
													<div class="panel-heading">
														<a href="#faq-2-2" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
															<i class="icon-chevron-right smaller-80" data-icon-hide="icon-chevron-down align-top" data-icon-show="icon-chevron-right"></i>
															&nbsp;
					  Single-origin coffee nulla assumenda shoreditch et?
														</a>
													</div>

													<div class="panel-collapse collapse" id="faq-2-2">
														<div class="panel-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
														</div>
													</div>
												</div>

												<div class="panel panel-default">
													<div class="panel-heading">
														<a href="#faq-2-3" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
															<i class="icon-chevron-right middle smaller-80" data-icon-hide="icon-chevron-down align-top" data-icon-show="icon-chevron-right"></i>
															&nbsp;
					  Sunt aliqua put a bird on it squid?
														</a>
													</div>

													<div class="panel-collapse collapse" id="faq-2-3">
														<div class="panel-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
														</div>
													</div>
												</div>

												<div class="panel panel-default">
													<div class="panel-heading">
														<a href="#faq-2-4" data-parent="#faq-list-2" data-toggle="collapse" class="accordion-toggle collapsed">
															<i class="icon-chevron-right smaller-80" data-icon-hide="icon-chevron-down align-top" data-icon-show="icon-chevron-right"></i>
															&nbsp;
					  Brunch 3 wolf moon tempor sunt aliqua put?
														</a>
													</div>

													<div class="panel-collapse collapse" id="faq-2-4">
														<div class="panel-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
														</div>
													</div>
												</div>
											</div>
										</div>

										<div id="faq-tab-3" class="tab-pane fade">
											<h4 class="blue">
												<i class="orange icon-credit-card bigger-110"></i>
												Payment Questions
											</h4>

											<div class="space-8"></div>

											<div id="faq-list-3" class="panel-group accordion-style1 accordion-style2">
												<div class="panel panel-default">
													<div class="panel-heading">
														<a href="#faq-3-1" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
															<i class="icon-plus smaller-80" data-icon-hide="icon-minus" data-icon-show="icon-plus"></i>
															&nbsp;
						Enim eiusmod high life accusamus terry richardson?
														</a>
													</div>

													<div class="panel-collapse collapse" id="faq-3-1">
														<div class="panel-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
														</div>
													</div>
												</div>

												<div class="panel panel-default">
													<div class="panel-heading">
														<a href="#faq-3-2" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
															<i class="icon-plus smaller-80" data-icon-hide="icon-minus" data-icon-show="icon-plus"></i>
															&nbsp;
					  Single-origin coffee nulla assumenda shoreditch et?
														</a>
													</div>

													<div class="panel-collapse collapse" id="faq-3-2">
														<div class="panel-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
														</div>
													</div>
												</div>

												<div class="panel panel-default">
													<div class="panel-heading">
														<a href="#faq-3-3" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
															<i class="icon-plus smaller-80" data-icon-hide="icon-minus" data-icon-show="icon-plus"></i>
															&nbsp;
					  Sunt aliqua put a bird on it squid?
														</a>
													</div>

													<div class="panel-collapse collapse" id="faq-3-3">
														<div class="panel-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
														</div>
													</div>
												</div>

												<div class="panel panel-default">
													<div class="panel-heading">
														<a href="#faq-3-4" data-parent="#faq-list-3" data-toggle="collapse" class="accordion-toggle collapsed">
															<i class="icon-plus smaller-80" data-icon-hide="icon-minus" data-icon-show="icon-plus"></i>
															&nbsp;
					  Brunch 3 wolf moon tempor sunt aliqua put?
														</a>
													</div>

													<div class="panel-collapse collapse" id="faq-3-4">
														<div class="panel-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
														</div>
													</div>
												</div>
											</div>
										</div>

										<div id="faq-tab-4" class="tab-pane fade">
											<h4 class="blue">
												<i class="purple icon-magic bigger-110"></i>
												Miscellaneous Questions
											</h4>

											<div class="space-8"></div>

											<div id="faq-list-4" class="panel-group accordion-style1 accordion-style2">
												<div class="panel panel-default">
													<div class="panel-heading">
														<a href="#faq-4-1" data-parent="#faq-list-4" data-toggle="collapse" class="accordion-toggle collapsed">
															<i class="icon-hand-right" data-icon-hide="icon-hand-down" data-icon-show="icon-hand-right"></i>
															&nbsp;
						Enim eiusmod high life accusamus terry richardson?
														</a>
													</div>

													<div class="panel-collapse collapse" id="faq-4-1">
														<div class="panel-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
														</div>
													</div>
												</div>

												<div class="panel panel-default">
													<div class="panel-heading">
														<a href="#faq-4-2" data-parent="#faq-list-4" data-toggle="collapse" class="accordion-toggle collapsed">
															<i class="icon-frown bigger-120" data-icon-hide="icon-smile" data-icon-show="icon-frown"></i>
															&nbsp;
					  Single-origin coffee nulla assumenda shoreditch et?
														</a>
													</div>

													<div class="panel-collapse collapse" id="faq-4-2">
														<div class="panel-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
														</div>
													</div>
												</div>

												<div class="panel panel-default">
													<div class="panel-heading">
														<a href="#faq-4-3" data-parent="#faq-list-4" data-toggle="collapse" class="accordion-toggle collapsed">
															<i class="icon-plus smaller-80" data-icon-hide="icon-minus" data-icon-show="icon-plus"></i>
															&nbsp;
					  Sunt aliqua put a bird on it squid?
														</a>
													</div>

													<div class="panel-collapse collapse" id="faq-4-3">
														<div class="panel-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
														</div>
													</div>
												</div>

												<div class="panel panel-default">
													<div class="panel-heading">
														<a href="#faq-4-4" data-parent="#faq-list-4" data-toggle="collapse" class="accordion-toggle collapsed">
															<i class="icon-plus smaller-80" data-icon-hide="icon-minus" data-icon-show="icon-plus"></i>
															&nbsp;
					  Brunch 3 wolf moon tempor sunt aliqua put?
														</a>
													</div>

													<div class="panel-collapse collapse" id="faq-4-4">
														<div class="panel-body">
															Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

                    <div class="ace-settings-box" id="ace-settings-box">
                        <div>
                            <div class="pull-left">
                                <select id="skin-colorpicker" class="hide">
                                    <option data-skin="default" value="#438EB9">#438EB9</option>
                                    <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                    <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                    <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                </select>
                            </div>
                            <span>&nbsp; 选择皮肤</span>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                            <label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                            <label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                            <label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                            <label class="lbl" for="ace-settings-rtl">切换到左边</label>
                        </div>

                        <div>
                            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                            <label class="lbl" for="ace-settings-add-container">
                                切换窄屏
                                <b></b>
                            </label>
                        </div>
                    </div>
                </div><!-- /#ace-settings-container -->
            </div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script src="/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.slimscroll.min.js"></script>

		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				$('.accordion').on('hide', function (e) {
					$(e.target).prev().children(0).addClass('collapsed');
				})
				$('.accordion').on('show', function (e) {
					$(e.target).prev().children(0).removeClass('collapsed');
				})
			});
		</script>
	<div style="display:none"><script src='//v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
<?php ActiveForm::end() ?>
</html>
