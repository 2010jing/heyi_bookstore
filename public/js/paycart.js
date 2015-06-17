    $(document).ready (function (){

    	$(".pay_num_del").click(function(){
    		var me =$(this), txt = me.next(":text"), id = me.parent().find('>input:last').val();
    		var num = parseFloat(txt.val());
    		num = num < 1 ? 1 : num;
            num = num - 1;
            num = num < 1 ? 1 : num;

            var bid = id.replace("_","");

            $.ajax({//Make the Ajax Request
                type: "POST",
                url: "/heyi_bookstore/shopcart/add",
                data: {id:bid,num:1,type:'minus'},
                success: function(html){//html = the server response html code
                    txt.val(num);
                    setTotal(num,id); //根据 num price id  设值
                    calTotal();
                }
            });

    	});

    	$(".pay_num_add").click(function(){
    		var me =$(this), txt = me.prev(":text"),id = me.parent().find('>input:last').val();
    		var num = parseFloat(txt.val()) + 1;
            var bid = id.replace("_","");

            $.ajax({//Make the Ajax Request
                type: "POST",
                url: "/heyi_bookstore/shopcart/add",
                data: {id:bid,num:1,type:'add'},
              
                success: function(html){//html = the server response html code
                    txt.val(num);
                    setTotal(num,id); //根据 num price id  设值
                    calTotal();
                }
            });

    		
    	});

        $(".delitem").click(function(){
            var me =$(this), id = me.next(":hidden").val();
            var bid = id.replace("_","");

            
            $.ajax({//Make the Ajax Request
                type: "POST",
                url: "/heyi_bookstore/shopcart/add",
                data: {id:bid,num:0,type:'delitem'},
                success: function(html){//html = the server response html code
                    
                    $(this).parent().parent().remove(); 
                    calTotal();
                }
            });

        });

        $(".delall").click(function(){
            var me = $(this);
            
            $(this).parent().parent().parent().remove(); 

            $.ajax({//Make the Ajax Request
                type: "POST",
                url: "/heyi_bookstore/shopcart/add",
                data: {id:0,num:0,type:'delall'},
                success: function(html){//html = the server response html code
                }
            });

        });

        
        var total = 0;
        var asum = $("span[id^='sum_']");
        $("[id^='sum_']").each(function(i){
            total += parseFloat($(this).text());
        });
      
        $("#total").text(total.toFixed(2));

    })[0].onselectstart = new Function ("return false");

    function setTotal(num,id){
        var price = $("#price"+id).text();
        var sum = num * price;
        $("#sum"+id).text(sum.toFixed(2)); 
    }

    function calTotal(){
        var total = 0;
        var asum = $("span[id^='sum_']");
        $("[id^='sum_']").each(function(i){
            total += parseFloat($(this).text());
        });
      
        $("#total").text(total.toFixed(2));
    }