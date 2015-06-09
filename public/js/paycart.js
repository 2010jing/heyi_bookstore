    $(document).ready (function (){

    	$(".pay_num_del").click(function(){
    		var me =$(this), txt = me.next(":text"), id = me.parent().find('>input:last').val();
    		var num = parseFloat(txt.val());
    		num = num < 1 ? 1 : num;
            num = num - 1;
            num = num < 1 ? 1 : num;
    		txt.val(num);
            setTotal(num,id); //根据 num price id  设值
            calTotal();

    	});

    	$(".pay_num_add").click(function(){
    		var me =$(this), txt = me.prev(":text"),id = me.parent().find('>input:last').val();
    		var num = parseFloat(txt.val()) + 1;
    		txt.val(num );
            setTotal(num,id); //根据 num price id  设值
            calTotal();
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