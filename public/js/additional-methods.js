// 手机号码验证   
jQuery.validator.addMethod("isTel", function (value, element) {
  var tel = /^1[3|4|5|7|8]\d{9}$/;
  return this.optional(element) || (tel.test(value));
}, "请正确填写您的手机号码");

//邮箱 表单验证规则
jQuery.validator.addMethod("isUICEmail", function (value, element) {
	//var mail = /^[a-z0-9._%-]+@([a-z0-9-]+\.)+[a-z]{2,4}$/;
	//var mail = /^[a-z0-9._%-]+@uic.edu.hk$ | ^[a-z0-9._%-]+@mail.uic.edu.hk$/;
	//var mail = /^[a-z0-9._%-]+@uic.edu.hk$ | ^[a-z][0-9]{9}@mail.uic.edu.hk$/;
	//var mail = /^[a-z][0-9]{9}@mail.uic.edu.hk$|^[a-z0-9._%-]+@uic.edu.hk$/ ;
	var mail = /^[a-z][0-9]{9}@mail.uic.edu.hk$/ ;
	return this.optional(element) || (mail.test(value));
}, "请输入 UIC 学生邮箱");