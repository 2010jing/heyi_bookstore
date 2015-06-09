$().ready(function() {
 $("#searchForm").validate({
      rules: {
          keyword:{
              required:true,
              maxlength:20
          }
         
    
      },
      messages: {
          keyword:{
            required:"",
            maxlength:""
          }
         

      }
  });
});