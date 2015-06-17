<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> 合一书店 </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Bootstrap -->
    <link href="<?=base_url('public/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('public/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- <link href="http://fontawesome.dashgame.com/assets/font-awesome/css/font-awesome.css" rel="stylesheet"> -->
    <link href="<?=base_url('public/css/style.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url('public/css/rippler.min.css')?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
 
  </head>
<body>

<div id="wrap">
    <div class="container">

        
    <?php $this->load->view('nav')?>

        
        <div class="row white-area">

            <div class="row">
                
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-responsive" src="<?php echo $book->bookimg?>" alt="">
                        </div>
                        <div class="col-md-8">

                            <h3><?php echo $book->booktitle; ?></h3>
                            <p><i class="fa fa-rmb fa-1x"></i><span class="search_now_price"><?php echo $book->price; ?></span></p>

                            <hr class="divider" />

                            <p>作者: <?php echo $book->author; ?></p>
                            <p>出版社:<?php echo $book->publisher;?></p>
                            <p>ISBN:<?php echo $book->isbn;?></p>

                            <hr class="divider" />

                            <p>学部:<?php echo $book->division;?></p>
                            <p>专业:<?php echo $book->major;?></p>
                            <p>课程:<?php echo $book->coursename;?></p>
                            <p>授课老师:<?php echo $book->teachby;?></p>

                            <hr class="divider" />

                            <div class="buy_area">数量
                                <span  class="num_del" id="num_del"><i class="fa fa-minus"></i></span>
                                <input onpaste="return false" type="text" value="1" name="buy_num" id="buy_num" class="text" style="ime-mode:disabled" readonly="readonly">
                                <span  class="num_add" id="num_add"><i class="fa fa-plus"></i></span>
                                <input onpaste="return false" type="hidden" value="<?php echo $book->id?>" name="bookid" id="bookid" class="text" style="ime-mode:disabled" readonly="readonly">

                                件
                            </div>
                            <a type="button" class="btn btn-primary rippler rippler-inverse addtocart">    
                                <i class="fa fa-cart-arrow-down fa-1x"></i>
                                加入购物车 
                            </a>

                        </div>
                    </div>
                </div>


                <div class="col-md-2">
                    <!-- for some ads -->
                </div>



            </div>

            <hr class="divider" />

            <div class="row">
                <!-- 商品详情 -->
                <div class="col-md-2">
                    <!-- for some ads -->
                </div>
                <div class="col-md-10">
                    <!-- for some ads -->
                    <p> 内容概要 </p> 

                    <hr class="divider" />
                    <?php echo $book->abstract; ?>

                </div>
            </div>

            <div class="row" style="height:50px">
                
            </div>
            
        </div>



    </div> <!-- /container -->
</div>


<!-- footer -->
<div id="push-footer"></div> 
<div class="container"> 
  <div class="row mobile-hidden"> 

  </div> 
  <hr> 
  <div class="row"> 
    <div class="col-lg-12"> 
      <div class="col-md-8"> <a href="#">Terms of Service</a> <a href="#">Privacy</a> 
      </div> 
      <div class="col-md-4"> 
        <p class="muted pull-right">© 2015 合一书店 All rights reserved</p>  
      </div> 
    </div> 
  </div> 
</div> 

    <?php $this->load->view('script')?>
    <script>
        $(".addtocart").click(function(){
            var bid = $('#bookid').val();
            var buy_num = $('#buy_num').val();
            var url = "<?php echo base_url('shopcart/add')?>";
            //alert("bid:"+bid + " buy_num:"+buy_num + "url:"+url);
            $.ajax({//Make the Ajax Request
                type: "POST",
                url: url,
                data: {id:bid,num:buy_num,type:'add'},
                // beforeSend:  function() {
                //     $('a.load_more').html("<img src=<?=base_url('public/images/loading.gif')?> />");//Loading image during the Ajax Request

                // },
                success: function(html){//html = the server response html code

                }
            });
        });


        $(document).ready(function() { $(".rippler").rippler({ effectClass : 'rippler-effect' ,effectSize : 16 
        // Default size (width & height) 
        ,addElement : 'div' 
        // e.g. 'svg'(feature)
         ,duration : 400 }); 
        });

    </script>
    <script src="<?=base_url('public/js/cart.js')?>"></script>
    <script src="<?=base_url('public/js/jquery.rippler.min.js')?>"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
    <script src="<?=base_url('public/js/jquery.js')?>"></script>
    <script src="<?=base_url('public/js/bootstrap.min.js')?>"></script>  -->  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>