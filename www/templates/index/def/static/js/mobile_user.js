var MobileUser = {
	ctl : '/auth/',
	count : 60,
	__win_close : function() {
		window.open('', '_self');
		window.close();
	},
	__btn_disabled : function(v) {
		v.attr('disabled', 'disabled');
	},
	__btn_enable : function(v) {
		v.removeAttr('disabled');
	},
	event_register : function() {
		$(".jbtn_login").click(function() {
			if (!MobileUser.field_validate_email()) {
				return false;
			}
			if (!MobileUser.field_validate_password()) {
				return false;
			}
			if (!MobileUser.field_validate_password_confirm()) {
				return false;
			}
			if (!MobileUser.field_validate_cphone()) {
				return false;
			}
			if (!MobileUser.field_validate_code()) {
				return false;
			}
			if (!MobileUser.field_validate_qq()) {
				return false;
			}
			var $this = $(this);
			$this.attr('disabled', 'disabled');
			$.post('/auth/register', $("#form_register").serializeArray(), function(ret) {
				if (ret.code == 1) {
					window.location.href = '/register/pending/?token=' + ret.data;
				} else {
					alert(ret.message);
					$this.removeAttr('disabled');
				}
			}, 'json');
		});
		$("#getCode").click(function() {
			if (!MobileUser.field_validate_cphone()) {
				return false;
			}
			MobileUser.count = 60;
			var $this = $(this);
			$this.attr("disabled", true);
			$("input[name='cphone']").attr("disabled", true);
			var phone = $("input[name='cphone']").val();
			$.post('/api/message/phone/action/index', {
				receive_phone : phone,
				token : 'BzQHMgIhVT0MJllvUzVUaVt6AihTYQEr'
			}, function(ret) {
				if (ret.code == 1) {
					alert('亲，验证码已发送到' + phone + '，请查收！');
					$("input[name='phone']").val(phone);
					$this.val(MobileUser.count + " 秒后，重新获取");
					MobileUser.InterValObj = window.setInterval(MobileUser.set_remain_time, 1000);
				} else {
					$this.removeAttr("disabled");
					$("input[name='cphone']").attr("disabled", false);
					alert(ret.message);
				}
			}, 'json');
		});
		$("input[name='email']").tipInput('输入电子邮箱作为账户名');
		$("#jauth_code").click(function() {
			$(this).attr("src", "/auth/captcha/" + new Date().getTime());
		});
	},
	set_remain_time : function() {
		if (MobileUser.count == 1) {
			window.clearInterval(MobileUser.InterValObj);
			$("#getCode").removeAttr("disabled");
			$("#getCode").val("重新发送验证码");
			MobileUser.count = "";
		} else {
			MobileUser.count--;
			$("#getCode").val(MobileUser.count + " 秒后，重新获取");
		}
	},
	field_validate_protocol_check : function() {
		var t = $('#regProtocol').is(":checked");
		if (!t) {
			alert("要同意有盟网络协议才能成为我们的会员");
			return false;
		}
		return true;
	},
	field_validate_auth_code : function() {
		var t = $("input[name='auth_code']").val();
		if (!t) {
			alert("请输入验证码");
			$("input[name='auth_code']").focus();
			return false;
		}
		return true;
	},
	field_validate_qq : function() {
		var t = $("input[name='qq']").val();
		if (!t) {
			alert("请输入常用QQ");
			$("input[name='qq']").focus();
			return false;
		}
		var reg = /^[1-9][0-9]{4,14}$/;
		if (!reg.test(t)) {
			alert("您输入的QQ格式不对，5-10之间！");
			$("input[name='qq']").focus();
			return false;
		}
		return true;
	},
	field_validate_email : function() {
		var t = $("input[name='email']").val();
		if (!t) {
			alert("请输入电子邮件！");
			$("input[name='email']").focus();
			return false;
		}
		var reg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		if (!reg.test(t)) {
			alert("电子邮件不是合法的！");
			$("input[name='email']").focus();
			return false;
		}
		return true;
	},
	field_validate_code : function() {
		var t = $("input[name='code']").val();
		if (!t) {
			alert("请输入短信验证码");
			$("input[name='code']").focus();
			return false;
		}
		return true;
	},
	field_validate_cphone : function() {
		var t = $("input[name='cphone']").val();
		if (!t) {
			alert("请输入手机号码");
			$("input[name='cphone']").focus();
			return false;
		}
		var reg = /^1\d{10}$/;
		if (!reg.test(t) || t.length !== 11) {
			alert("手机号码不是合法的！手机号码是11位数字，且以13/14/15/18开头");
			$("input[name='cphone']").focus();
			return false;
		}
		var reg = /^0{0,1}(13[0-9]|15[0-9]|18[0-9]|14[0-9])[0-9]{8}$/;
		if (!reg.test(t)) {
			alert("手机号码不是合法的！手机号码是11位数字，且以13/14/15/18开头");
			$("input[name='cphone']").focus();
			return false;
		}
		return true;
	},
	field_validate_phone : function() {
		var t = $("input[name='phone']").val();
		if (!t) {
			alert("请输入手机号码");
			$("input[name='phone']").focus();
			return false;
		}
		var reg = /^1\d{10}$/;
		if (!reg.test(t) || t.length !== 11) {
			alert("手机号码不是合法的！手机号码是11位数字，且以13/14/15/18开头");
			$("input[name='phone']").focus();
			return false;
		}
		var reg = /^0{0,1}(13[0-9]|15[0-9]|18[0-9]|14[0-9])[0-9]{8}$/;
		if (!reg.test(t)) {
			alert("手机号码不是合法的！手机号码是11位数字，且以13/14/15/18开头");
			$("input[name='phone']").focus();
			return false;
		}
		return true;
	},
	field_validate_password_confirm : function() {
		var t = $("input[name='password_confirm']").val();
		if (!t) {
			alert("请输入确认登录密码！");
			$("input[name='password_confirm']").focus();
			return false;
		}
		var tt = $("input[name='password']").val();
		if (t != tt) {
			alert('两次输入的密码不一致，请重新输入！');
			$("input[name='password_confirm']").focus();
			return false;
		}
		return true;
	},
	field_validate_password : function() {
		var t = $("input[name='password']").val();
		if (!t) {
			alert("请输入登录密码！");
			$("input[name='password']").focus();
			return false;
		}
		var reg = /^[a-zA-Z0-9_]{6,18}$/;
		if (!reg.test(t)) {
			alert("密码格式输入不对，数字/英文 6-18位之间！");
			$("input[name='password']").focus();
			return false;
		}
		return true;
	},
	field_validate_username : function() {
		var t = $("input[name='username']").val();
		if (!t) {
			alert("请输入用户名");
			$("input[name='username']").focus();
			return false;
		}
		var str = /^[a-z0-9_]{6,20}$/;
		if (!t.match(str)) {
			alert('用户名只能为6-16位小写字母、数字和下划线之间组合');
			$("input[name='username']").focus();
			return false;
		}
		return true;
	},
	event_login : function() {
		$("#login_platform").val(navigator.platform);
		$(".jgg_style").mouseover(function() {
			$(".jgg_style").removeClass('current');
			$(this).addClass('current');
			var c = $(this).data('content');
			$(".style_show").css('display', 'none');
			$(".style_show_txt").css('display', 'none');
			$("." + c).css('display', 'block');
			$("." + c + "_txt").css('display', 'block');
		});
		$("#jauth_code").click(function() {
			$(this).attr("src", "/auth/captcha/" + new Date().getTime());
		});
		$(".jbtn_login").click(function() {
			var username = $("input[name='username']").val();
			if (!username) {
				alert("请输入用户名");
				$("input[name='username']").focus();
				return false;
			}
			var password = $("input[name='password']").val();
			if (!password) {
				alert("请输入密码");
				$("input[name='password']").focus();
				return false;
			}
			var auth_code = $("input[name='auth_code']").val();
			if (!auth_code) {
				alert("请输入验证码");
				$('#auth_code').focus();
				return;
			}
			var $this = $(this);
			$this.attr('disabled', 'disabled');
			$.post('/auth/login/', $("#form_login").serializeArray(), function(ret) {
				if (ret.code == 1) {
					window.location.href = ret.data;
				} else {
					alert(ret.message);
					$("#jauth_code").click();
					$("#auth_code").val('');
					$this.removeAttr('disabled');
				}
			}, 'json');
		});
		$('#username').focus();
	},
	event_update_user : function() {
		$(".jbtn_save").click(function() {
			if ($("#password").val() || $("#password_confirm").val()) {
				if (!MobileUser.field_validate_password()) {
					return false;
				}
				if (!MobileUser.field_validate_password_confirm()) {
					return false;
				}
			}
			// if (!MobileUser.field_validate_phone()) {
			// return false;
			// }
			if (!MobileUser.field_validate_qq()) {
				return false;
			}
			var $this = $(this);
			MobileUser.__btn_disabled($this);
			$.post('/service/mobile/user/action/update_user', $("#form_update").serializeArray(), function(ret) {
				alert(ret.message);
				if (ret.code == 1) {
					$("#password").val("");
					$("#password_confirm").val("");
				}
				MobileUser.__btn_enable($this);
			}, 'json');
		});
	}
};