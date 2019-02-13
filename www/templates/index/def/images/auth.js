var Auth = {
	ctl : '/auth/',
	count : 60,
	event_register_email : function() {
		if (TYPE == 1) {
			$(".advert").attr("checked", true);
			$("#show_company_name").show();
		}else if(TYPE == 2){
			$(".web").attr("checked", true);
			$("#show_company_name").hide();
		}
		$(".jbtn_register").click(function() {
			if (!Auth.field_validate_user_type()) {
				return false;
			}
			if (!Auth.field_validate_email()) {
				return false;
			}
			if (!Auth.field_validate_password()) {
				return false;
			}
			if (!Auth.field_validate_password_confirm()) {
				return false;
			}
			if (!Auth.field_validate_company_name()) {
				return false;
			}
			if (!Auth.field_validate_qq()) {
				return false;
			}
			if (!Auth.field_validate_phone()) {
				return false;
			}
			if (!Auth.field_validate_protocol_check()) {
				return false;
			}
			var $this = $(this);
			$this.attr('disabled', 'disabled');
			$.post(Auth.ctl + 'register/email', $("#form_register").serializeArray(), function(ret) {
				if (ret.code == 1) {
					window.location.href = '/auth/register/email/send?token=' + ret.data;
				} else {
					alert(ret.message);
					$this.removeAttr('disabled');
				}
			}, 'json');
		});
		$(".juser_type").click(function() {
			var t = $(this).val();
			if (t == 'switch_advert') {
				$("#show_company_name").show();
			} else {
				$("#show_company_name").hide();
			}
		});
	},
	event_register_email_send : function() {
		$(".sub_btn").click(function() {
			var $this = $(this);
			$this.attr('disabled', 'disabled');
			$.post(Auth.ctl + 'register/email/send', $("#ajax_form").serializeArray(), function(ret) {
				alert(ret.message);
				if (ret.code == 1) {
				} else {
					$this.removeAttr('disabled');
				}
			}, 'json');
		});
	},
	event_register_phone : function() {
		$(".jbtn_register").click(function() {
			if (!Auth.field_validate_user_type()) {
				return false;
			}
			if (!Auth.field_validate_cphone()) {
				return false;
			}
			if (!Auth.field_validate_code()) {
				return false;
			}
			if (!Auth.field_validate_password()) {
				return false;
			}
			if (!Auth.field_validate_password_confirm()) {
				return false;
			}
			if (!Auth.field_validate_company_name()) {
				return false;
			}
			if (!Auth.field_validate_qq()) {
				return false;
			}
			if (!Auth.field_validate_email()) {
				return false;
			}
			if (!Auth.field_validate_protocol_check()) {
				return false;
			}
			var $this = $(this);
			$this.attr('disabled', 'disabled');
			$.post(Auth.ctl + 'register/phone', $("#form_register").serializeArray(), function(ret) {
				if (ret.code == 1) {
					window.location.href = '/auth/register/phone/pending?token=' + ret.data;
				} else {
					alert(ret.message);
					$this.removeAttr('disabled');
				}
			}, 'json');
		});
		$("#getCode").click(function() {
			if (!Auth.field_validate_cphone()) {
				return false;
			}
			Auth.count = 60;
			var $this = $(this);
			$this.attr("disabled", true);
			$("input[name='cphone']").attr("disabled", true);
			var phone = $("input[name='cphone']").val();
			$.post('/api/message/phone/action/index?token=' + _CONFIG.token, {
				receive_phone : phone,
				token : 'BzQHMgIhVT0MJllvUzVUaVt6AihTYQEr'
			}, function(ret) {
				if (ret.code == 1) {
					alert('亲，验证码已发送到' + phone + '，请查收！');
					$("input[name='phone']").val(phone);
					$this.val(Auth.count + " 秒后，重新获取");
					Auth.InterValObj = window.setInterval(Auth.set_remain_time, 1000);
				} else {
					$this.removeAttr("disabled");
					$("input[name='cphone']").attr("disabled", false);
					alert(ret.message);
				}
			}, 'json');
		});
		$(".juser_type").click(function() {
			var t = $(this).val();
			if (t == 'switch_advert') {
				$("#show_company_name").show();
			} else {
				$("#show_company_name").hide();
			}
		});
	},
	set_remain_time : function() {
		if (Auth.count == 1) {
			window.clearInterval(Auth.InterValObj);
			Auth.count = "";
			$("#getCode").val("重新发送验证码");
			$("#getCode").removeAttr("disabled");
		} else {
			Auth.count--;
			$("#getCode").val(Auth.count + " 秒后，重新获取");
		}
	},
	field_validate_user_type : function() {
		var t = $('input:radio[name=user_type]:checked').val();
		if (!t) {
			alert('请选择账户类型');
			return false;
		}
		return true;
	},
	field_validate_email : function() {
		var t = $("input[name='email']").val();
		t = t.replace(/(^\s*)|(\s*$)/g, "");
		if (!t) {
			alert("邮箱不能为空");
			$("input[name='email']").focus();
			return false;
		}
		var reg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		if (!reg.test(t)) {
			alert("邮箱格式错误，请重新输入");
			$("input[name='email']").focus();
			return false;
		}
		return true;
	},
	field_validate_password : function() {
		var t = $("input[name='password']").val();
		if (!t) {
			alert("密码不能为空");
			$("input[name='password']").focus();
			return false;
		}
		var reg = /^[a-zA-Z0-9_]{6,15}$/;
		if (!reg.test(t)) {
			alert("密码格式错误，由数字/英文 6-15位组成，请重新输入");
			$("input[name='password']").focus();
			return false;
		}
		return true;
	},
	field_validate_password_confirm : function() {
		var t = $("input[name='password_confirm']").val();
		if (!t) {
			alert("确认密码不能为空");
			$("input[name='password_confirm']").focus();
			return false;
		}
		var tt = $("input[name='password']").val();
		if (t != tt) {
			alert('两次输入的密码不一致，请重新输入');
			$("input[name='password_confirm']").focus();
			return false;
		}
		return true;
	},
	field_validate_company_name : function() {
		var t = $('input:radio[name=user_type]:checked').val();
		if (t == 'switch_advert') {
			var t = $("input[name='company_name']").val();
			if (!t) {
				alert("公司名称不能为空");
				$("input[name='company_name']").focus();
				return false;
			}
		}
		return true;
	},
	field_validate_qq : function() {
		var t = $("input[name='qq']").val();
		t = t.replace(/(^\s*)|(\s*$)/g, "");
		if (!t) {
			alert("QQ不能为空");
			$("input[name='qq']").focus();
			return false;
		}
		var reg = /^[1-9][0-9]{4,14}$/;
		if (!reg.test(t)) {
			alert("QQ格式错误，5-10之间");
			$("input[name='qq']").focus();
			return false;
		}
		return true;
	},
	field_validate_phone : function() {
		var t = $("input[name='phone']").val();
		t = t.replace(/(^\s*)|(\s*$)/g, "");
		if (!t) {
			alert("手机号码不能为空");
			$("input[name='phone']").focus();
			return false;
		}
		var reg = /^1\d{10}$/;
		if (!reg.test(t) || t.length !== 11) {
			alert("手机号码格式错误，手机号码是11位数字，且以13/14/15/18开头");
			$("input[name='phone']").focus();
			return false;
		}
		var reg = /^0{0,1}(13[0-9]|15[0-9]|17[0-9]|18[0-9]|14[0-9])[0-9]{8}$/;
		if (!reg.test(t)) {
			alert("手机号码格式错误，手机号码是11位数字，且以13/14/15/17/18开头");
			$("input[name='phone']").focus();
			return false;
		}
		return true;
	},
	field_validate_cphone : function() {
		var t = $("input[name='cphone']").val();
		if (!t) {
			alert("手机号码不能为空");
			$("input[name='cphone']").focus();
			return false;
		}
		var reg = /^1\d{10}$/;
		if (!reg.test(t) || t.length !== 11) {
			alert("手机号码格式错误，手机号码是11位数字，且以13/14/15/18开头");
			$("input[name='cphone']").focus();
			return false;
		}
		var reg = /^0{0,1}(13[0-9]|15[0-9]|18[0-9]|17[0-9]|14[0-9])[0-9]{8}$/;
		if (!reg.test(t)) {
			alert("手机号码格式错误，手机号码是11位数字，且以13/14/17/15/18开头");
			$("input[name='cphone']").focus();
			return false;
		}
		return true;
	},
	field_validate_code : function() {
		var t = $("input[name='code']").val();
		if (!t) {
			alert("短信验证码不能为空");
			$("input[name='code']").focus();
			return false;
		}
		return true;
	},
	field_validate_protocol_check : function() {
		var t = $('#regProtocol').is(":checked");
		if (!t) {
			alert("要同意行者网络协议才能成为我们的会员");
			return false;
		}
		return true;
	}
};