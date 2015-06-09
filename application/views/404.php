<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> 合一书店 </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Bootstrap -->
    <link href="<?=base_url('public/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- <link href="<?=base_url('public/css/font-awesome.min.css')?>" rel="stylesheet"> -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

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
       
        
        <div class="row">
            <h2>对不起，您要访问的页面暂时没有找到。您可以... <br><br>
            <a class="btn btn-primary" href="javascript:history.back();"><i class="fa fa-reply"></i>
                  返回之前的页面 </a>
            <a class="btn btn-primary" href="<?php echo base_url()?>"> <i class="fa fa-home fa-fw"></i>返回首页 </a>
             </h2>          
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


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
    <script src="<?=base_url('public/js/jquery.js')?>"></script>
    <script src="<?=base_url('public/js/bootstrap.min.js')?>"></script>  -->  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>