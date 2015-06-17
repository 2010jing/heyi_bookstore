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

    <!-- Custom styles for this template -->
    <link href="<?=base_url('public/css/style.css')?>" rel="stylesheet">

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

        <!-- Example row of columns -->
        <div class="row white-area">
            <?php 
                if(!empty($_COOKIE['cart'])){
                    $cookie_data = unserialize(get_cookie('cart',true));
                    foreach ($cookie_data as $key => $book) {
                    # code...
                    ?>

               
            <div class="row">
                <div class="col-md-1">
                    <a href="#">
                        <img class="img-responsive" src="<?php echo $book['bookimg'];?>" alt="">
                    </a>
                </div>
                <div class="col-md-6">
                    <p><?php echo $book['booktitle'];?></p>
                </div>


                <div class="col-md-1">
                    <p>$ <span id="price<?php echo $key?>"><?php echo $book['price'];?></span></p>
                   
                </div>

                <div class="col-md-2">
                    <div class="buy_area">数量
                                <span  class="pay_num_del" id="num_del"><i class="fa fa-minus"></i></span>
                                <input onpaste="return false" type="text" value="<?php echo $book['num'];?>" name="buy_num<?php echo $key?>" id="buy_num<?php echo $key?>" class="text" style="ime-mode:disabled" readonly="readonly">
                                <span  class="pay_num_add" id="num_add"><i class="fa fa-plus"></i></span>
                                <input type="hidden" value="<?php echo $key;?>" >
                                件
                    </div>
                   
                </div>

                <div class="col-md-1">
                    <p>$ <span id="sum<?php echo $key?>"><?php echo $book['sum']?></span></p>
                   
                </div>
                <div class="col-md-1">
                    <a href="javascript:;" class="delitem">删除</a>
                    <input type="hidden" value="<?php echo $key;?>">
                   
                </div>
            </div>
            <?php }
                    }

            ?> 

            <?php 
                if(!empty($_COOKIE['cart'])){
             ?>       

            <div class="row">
                <div class="col-md-1">
                    <a href="#">
                    </a>
                </div>
                <div class="col-md-6">
                    
                </div>


                <div class="col-md-1">
                   
                </div>

                <div class="col-md-2">
                    
                   总价
                </div>

                <div class="col-md-1">
                    <p>$ <span id="total"> </span></p>
                   
                </div>
                <div class="col-md-1">
                    <!-- <p class="delitem">删除</p> -->
                    <a href="javascript:;" class="delall">删除</a>
                   
                </div>
            </div>

            <?php } ?>
        <div class="row white-area">

            
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

    <script src="<?=base_url('public/js/paycart.js')?>"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
    <script src="<?=base_url('public/js/jquery.js')?>"></script>
    <script src="<?=base_url('public/js/bootstrap.min.js')?>"></script>  -->  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>