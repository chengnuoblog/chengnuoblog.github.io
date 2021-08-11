<!DOCTYPE html>
<!--[if IE 8]>
		<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="zh-CN">
	<![endif]--><!--[if !(IE 8) ]><!--><html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
	<!--<![endif]-->
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>登录 &lsaquo; chengnuo &#8212; WordPress</title>
	<link rel="dns-prefetch" href="//s.w.org">
<link rel="stylesheet" id="dashicons-css" href="http://localhost/wp-includes/css/dashicons.min.css?ver=5.4.6" media="all">
<link rel="stylesheet" id="buttons-css" href="http://localhost/wp-includes/css/buttons.min.css?ver=5.4.6" media="all">
<link rel="stylesheet" id="forms-css" href="http://localhost/wp-admin/css/forms.min.css?ver=5.4.6" media="all">
<link rel="stylesheet" id="l10n-css" href="http://localhost/wp-admin/css/l10n.min.css?ver=5.4.6" media="all">
<link rel="stylesheet" id="login-css" href="http://localhost/wp-admin/css/login.min.css?ver=5.4.6" media="all">
	<meta name="robots" content="noindex,noarchive">
	<meta name="referrer" content="strict-origin-when-cross-origin">
		<meta name="viewport" content="width=device-width">
		</head>
	<body class="login no-js login-action-login wp-core-ui  locale-zh-cn">
	<script type="text/javascript">
		document.body.className = document.body.className.replace('no-js','js');
	</script>
		<div id="login">
		<h1><a href="https://cn.wordpress.org/">基于WordPress</a></h1>
	
		<form name="loginform" id="loginform" action="http://localhost/wp-login.php" method="post">
			<p>
				<label for="user_login">用户名或邮箱地址</label>
				<input type="text" name="log" id="user_login" class="input" value="" size="20" autocapitalize="off">
			</p>

			<div class="user-pass-wrap">
				<label for="user_pass">密码</label>
				<div class="wp-pwd">
					<input type="password" name="pwd" id="user_pass" class="input password-input" value="" size="20">
					<button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="显示密码">
						<span class="dashicons dashicons-visibility" aria-hidden="true"></span>
					</button>
				</div>
			</div>
						<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> <label for="rememberme">记住我</label></p>
			<p class="submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="登录">
									<input type="hidden" name="redirect_to" value="http://localhost/wp-admin/">
									<input type="hidden" name="testcookie" value="1">
			</p>
		</form>

					<p id="nav">
									<a href="http://localhost/wp-login.php?action=lostpassword">忘记密码？</a>
								</p>
					<script type="text/javascript">
			function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
wp_attempt_focus();
if ( typeof wpOnload === 'function' ) { wpOnload() }		</script>
				<p id="backtoblog"><a href="http://localhost/">
		&larr; 返回到chengnuo		</a></p>
			</div>
	<script src="http://localhost/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp"></script>
<script src="http://localhost/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1"></script>
<script>
var _zxcvbnSettings = {"src":"http:\/\/localhost\/wp-includes\/js\/zxcvbn.min.js"};
</script>
<script src="http://localhost/wp-includes/js/zxcvbn-async.min.js?ver=1.0"></script>
<script>
var pwsL10n = {"unknown":"密码强度未知","short":"非常弱","bad":"弱","good":"中等","strong":"强","mismatch":"不匹配"};
</script>
<script src="http://localhost/wp-admin/js/password-strength-meter.min.js?ver=5.4.6"></script>
<script src="http://localhost/wp-includes/js/underscore.min.js?ver=1.8.3"></script>
<script>
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
</script>
<script src="http://localhost/wp-includes/js/wp-util.min.js?ver=5.4.6"></script>
<script>
var userProfileL10n = {"warn":"您的新密码未被保存。","warnWeak":"确认使用弱密码","show":"显示","hide":"隐藏","cancel":"取消","ariaShow":"显示密码","ariaHide":"隐藏密码"};
</script>
<script src="http://localhost/wp-admin/js/user-profile.min.js?ver=5.4.6"></script>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
		<div class="clear"></div>
	</body>
	</html>