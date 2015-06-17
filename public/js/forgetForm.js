$().ready(function() {
 $("#forgetForm").validate({
      rules: {
          name:{
              required:true,
              maxlength:20
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
          
          email: {

              required: "请输入uic 邮箱地址",
              email: "请输入有效的邮箱地址",
          }

      }
  });
});