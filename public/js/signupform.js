$().ready(function() {
 $("#signupForm").validate({
      rules: {
          name:{
              required:true,
              maxlength:20
          },
          password: {
              required: true,
              minlength: 6
          },
          repassword: {
              required: true,
              minlength: 6,
              equalTo: "#password"
          },

          tel: {
            isTel: true,
            required:true,
            minlength: 11,
            maxlength: 11
          },

          email: {
              isUICEmail: true,
              required: true,
              email: true
          }

          
    
      },
      messages: {
          name:{
            required:"请输入一个昵称",
            maxlength:"昵称不超过20个字符"
          },
          studentid: {
              required: "请输学生账号,比如: b630300007",
              minlength: "学号不正确",
              maxlength: "学号不正确"
          },
          
          password: {
              required: "请输入密码",
              minlength: "密码长度不能少于6位"
          },
          repassword: {
              required: "请输入密码",
              minlength: "密码长度不能少于6位",
              equalTo: "与上面密码不相符"
          },
          tel:{
              //isTel:"手机号码只能为11位数字"
              required:"请输入手机号码",
              minlength: "手机号码为11位数",
              maxlength: "手机号码为11位数"
          },
          
          email: {

              required: "请输入uic 邮箱地址",
              email: "请输入有效的邮箱地址",
          }

      }
  });
});