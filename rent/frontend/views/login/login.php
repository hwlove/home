<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 2016/5/17
 * Time: 9:43
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>租家网后台登录</title>
    <meta name="keywords" content="Bootstrapģ��,Bootstrapģ������,Bootstrap�̳�,Bootstrap����" />
    <meta name="description" content="վ���ز��ṩBootstrapģ��,Bootstrap�̳�,Bootstrap���ķ�������Bootstrap�������" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- basic styles -->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
    <![endif]-->

    <!-- page specific plugin styles -->

    <!-- fonts -->

    <!-- ace styles -->

    <link rel="stylesheet" href="assets/css/ace.min.css" />
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-layout">
<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center">
                        <h1>
                            <i class="icon-leaf green"></i>
                            <span class="red">租家网</span>
                            <span class="white">后台管理</span>
                        </h1>
                        <h4 class="blue">&copy; five 精英</h4>
                    </div>

                    <div class="space-6"></div>

                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger">
                                        <i class="icon-coffee green"></i>
                                        请输入您的信息
                                    </h4>

                                    <div class="space-6"></div>

                                    <form action="" method="post">
                                        <fieldset>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Username" id="back_name" onblur="blur_name();"
															onfocus="focus_name();"/>
															<br>
															<span id="s_back_name"></span>
															<i class="icon-user"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Password" id="back_pwd" onblur="blur_pwd();"
															onfocus="focus_pwd();"/>
															<br>
															<span id="s_back_pwd"></span>
															<i class="icon-lock"></i>
														</span>
                                            </label>

                                            <div class="space"></div>

                                            <div class="clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" class="ace" id="remember_pwd" value="1"/>
                                                    <span class="lbl"> 记住密码</span>
                                                </label>
												<br>
												<span id="notice"></span>
                                                <!--<button type="button" class="width-35 pull-right btn btn-sm btn-primary">
                                                    <i class="icon-key"></i>
                                                    登录
                                                </button>-->
												<input type="button" id="register" value="登录"  class="width-35 pull-right btn btn-sm btn-primary" onclick="denglu();"/>
                                            </div>

                                            <div class="space-4"></div>
                                        </fieldset>
                                    </form>

<!--                                    <div class="social-or-login center">-->
<!--                                        <span class="bigger-110">第三方登录</span>-->
<!--                                    </div>-->
<!--                                    <div class="social-login center">-->
<!--                                        <a class="btn btn-primary" href="https://graph.qq.com/oauth2.0/authorize?response_type=code&client_id=101316191&redirect_uri=//1.fiveqq.applinzi.com/demo.php">-->
<!--                                           <i class="">QQ</i>-->
<!--                                        </a>-->
<!--                                        <a class="btn btn-info">-->
<!--                                            <i class="icon-twitter"></i>-->
<!--                                        </a>-->
<!--                                        <a class="btn btn-danger">-->
<!--                                            <i class="icon-google-plus"></i>-->
<!--                                        </a>-->
<!--                                    </div>-->
                                </div><!-- /widget-main -->

                                <div class="toolbar clearfix">
                                    <div>
                                        <a href="#" onclick="show_box('forgot-box'); return false;" class="forgot-password-link">
                                            <i class="icon-arrow-left"></i>
                                            忘记密码？
                                        </a>
                                    </div>

                                    <div>
                                        <a href="#" onclick="show_box('signup-box'); return false;" class="user-signup-link">
                                            我想注册
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- /widget-body -->
                        </div><!-- /login-box -->

                        <div id="forgot-box" class="forgot-box widget-box no-border">
                            <div class="widget-body">
							741
                                <div class="widget-main">
                                    <h4 class="header red lighter bigger">
                                        <i class="icon-key"></i>
                                        Retrieve Password
                                    </h4>

                                    <div class="space-6"></div>
                                    <p>
                                        Enter your email and to receive instructions
                                    </p>

                                    <form>
                                        <fieldset>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="Email" />
															<i class="icon-envelope"></i>
														</span>
                                            </label>

                                            <div class="clearfix">
                                                <button type="button" class="width-35 pull-right btn btn-sm btn-danger">
                                                    <i class="icon-lightbulb"></i>
                                                    Send Me!
                                                </button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div><!-- /widget-main -->

                                <div class="toolbar center">
                                    <a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
                                        Back to login
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div><!-- /widget-body -->
                        </div><!-- /forgot-box -->

                        <div id="signup-box" class="signup-box widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header green lighter bigger">
                                        <i class="icon-group blue"></i>
                                        输入您的信息
                                    </h4>

                                    <div class="space-6"></div>
                                    <p> 由此开始: </p>

                                   <form method="post" action="index.php?r=login/addmanager"> <!-- onsubmit="return check_all()"-->
                                        <fieldset>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" placeholder="邮箱" name="back_email" id="b_email" onblur="blur_email()" onfocus="focus_email();"/>
															<br>
															<span id="s_email"></span>
															<i class="icon-envelope"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="用户名" name="back_name" id="b_name" onblur="blurname()" onfocus="focusname()" />
															<br>
															<span id="s_name"></span>
															<i class="icon-user"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="密码" name="back_pwd" id="b_password" onblur="blurpassword();" onfocus="focuspassword();"/>
															<br>
															<span id="s_password"></span>
															<i class="icon-lock"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="确认密码" id="b_passwords" onblur="blurpasswords();" onfocus="focuspasswords();"/>
															<br>
															<span id="s_passwords"></span>
															<i class="icon-retweet"></i>
														</span>
                                            </label>

                                            <label class="block">
                                                <input type="checkbox" class="acebox" />
														<span class="lbl">
															我同意
															<a href="#">管理员协议</a>
														</span>
                                            </label>

                                            <div class="space-24"></div>

                                            <div class="clearfix">
                                                <button type="reset" class="width-30 pull-left btn btn-sm">
                                                    <i class="icon-refresh"></i>
                                                    重置
                                                </button>

                                                <button type="submit" class="width-65 pull-right btn btn-sm btn-success">
                                                    注册
                                                    <i class="icon-arrow-right icon-on-right"></i>
                                                </button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>

                                <div class="toolbar center">
                                    <a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
                                        <i class="icon-arrow-left"></i>
                                       返回登录
                                    </a>
                                </div>
                            </div><!-- /widget-body -->
                        </div><!-- /signup-box -->
                    </div><!-- /position-relative -->
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->

<script src="/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
<script type="text/javascript">
//邮箱失去焦点
function blur_email(){
	var b_email=$("#b_email").val();
	var preg_email=/^\w+@\w+(\.)\w+$/;
	if(b_email==""){
		$("#s_email").html("<font color='red'>邮箱不能为空</font>");
		return  false;
	}
	if(preg_email.test(b_email)){
		$("#s_email").html("<font color='red'>√</font>");
        return true;
	}else{
		$("#s_email").html("<font color='red'>邮箱格式不正确</font>");
        return true;
	}
}
//邮箱得到焦点
function focus_email(){
	$("#s_email").html("");
}
//用户名失去焦点
function blurname(){
	var b_name=$("#b_name").val();
	var preg_name=/^[a-z]\w{5,17}$/i;
	if(b_name==""){
		$("#s_name").html("<font color='red'>用户名不能为空</font>");
		return false;
	}else if(preg_name.test(b_name)){
        $.ajax({
            type: "get",
            url: "index.php?r=login/checkname",
            data: "b_name="+b_name,
            success: function(msg){
               // alert(msg)
                if(msg==0){
                    $("#s_name").html("<font color='red'>该用户名已被占用</font>");
                    return false;
                }else{
                    $("#s_name").html("<font color='red'>√</font>");
                    return true;
                }
            }
        });
    }else{
        $("#s_name").html("<font color='red'>用户名由6-18位的字母数字下划线组成，不能由数字开头</font>");
        return false;
    }

}
//用户名得到焦点
function focusname(){
	$("#s_name").html("");
}
//密码
function blurpassword(){
	var b_password=$("#b_password").val();
	if(b_password==""){
		$("#s_password").html("<font color='red'>密码不能为空</font>");
        return true;
	}
}
function focuspassword(){
	$("#s_password").html("");
}
//确认密码
//密码
function blurpasswords(){
	var b_password=$("#b_password").val();
	var b_passwords=$("#b_passwords").val();
	if(b_passwords==""){
		$("#s_passwords").html("<font color='red'>确认密码不能为空</font>");
        return false;
	}else if(b_passwords!=b_password) {
        $("#s_passwords").html("<font color='red'>确认密码和密码不符</font>");
        return false;
    }else{
        return true;
    }
}
function focuspasswords(){
	$("#s_passwords").html("");
}
//验证全部
function check_all(){
    if( blur_email() & blurname() & blurpasswords() & blurpassword() ){
        return true;
    }else{
        return false;
    }
}
</script>
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

<!-- inline scripts related to this page -->

<script type="text/javascript">
    function show_box(id) {
        jQuery('.widget-box.visible').removeClass('visible');
        jQuery('#'+id).addClass('visible');
    }
</script>
<div style="display:none"></div>
</body>
</html>
<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
<script type="text/javascript">
//点击登录
function denglu(){
	var back_name=$("#back_name").val();
	var back_pwd=$("#back_pwd").val();
    if(document.getElementById("remember_pwd").checked){
        var remember_pwd=document.getElementById("remember_pwd").value;
    }else{
        var remember_pwd="";
    }

    //alert(remember_pwd);exit;
	$.ajax({
	   type: "POST",
	   url: "index.php?r=login/check_login",
	   data: "back_name="+back_name+"&back_pwd="+back_pwd+"&remember_pwd="+remember_pwd,
	   success: function(msg){
           //alert(msg);
		if(msg==1){
           // alert("努力加载中···");
			location.href="index.php?r=index/index";
		 }else if(msg==2){
			$("#notice").html("<font color='red'>密码不正确</font>");
		 }else if(msg==0){
            $("#notice").html("<font color='red'>密码错误超过3次,已锁定</font>");
        }else if(msg==4){
            $("#notice").html("<font color='red'>账户已锁定，请明天再来</font>");
        }else{
			$("#notice").html("<font color='red'>该用户不存在,请重新登录</font>");
		 }
	   }
	});
}
//姓名失去焦点
function blur_name(){
	var back_name=$("#back_name").val();
	if(back_name==""){
		$("#s_back_name").html("<font color='red'>用户名不能为空</font>");
	}
	$.ajax({
	   type: "POST",
	   url: "index.php?r=login/ask_session",
	   data: "back_name="+back_name,
	   success: function(msg){
           //alert(msg)
                if(msg!=0){
                    $("#back_pwd").val(msg);
                    $(".ace").attr("checked","true");
                }
	   }
	});
//    var url="index.php?r=login/ban";
//    var data="name="+back_name;
//    $.get(url,data,function(m){
//        if(m==0){
//            $("#register").attr("disabled","true")
//            $("#notice").html("<font color='red'>账户已锁定</font>");
//        }else{
//            $("#register").attr("disabled",false)
//        }
//    })
}
//姓名得到焦点
function focus_name(){
	$("#notice").html("");
	$("#s_back_name").html("");
	$("#back_pwd").html("");
}
//密码失去焦点
function blur_pwd(){
	var back_pwd=$("#back_pwd").val();
	if(back_pwd==""){
		$("#s_back_pwd").html("<font color='red'>请输入密码</font>");
	}
}
//密码得到焦点
function focus_pwd(){
	$("#notice").html("");
	$("#s_back_pwd").html("");
}

</script>
