    $(document).ready (function (){

    	$(".num_del").click(function(){
    		var me =$(this), txt = me.next(":text");
    		var val = parseFloat(txt.val());
    		val = val < 1 ? 1 : val;
            val = val - 1;
            val = val < 1 ? 1 : val;

    		txt.val(val);

    	});

    	$(".num_add").click(function(){
    		var me =$(this), txt = me.prev(":text");
    		var val = parseFloat(txt.val());
    		txt.val(val + 1);
    	});

        


    })[0].onselectstart = new Function ("return false");



