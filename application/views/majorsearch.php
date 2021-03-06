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


            <div class="row white-area">
                <div class="row">
                    <form action="<?php echo base_url('book/majorsearch')?>" method="post"> 
                    <div class="col-md-3">
                      <p style="float:right;padding-top:10px;color: #fff; color: #428bca;">学期必修课-书本查询<p>
                    </div>

                    <div class="col-md-2">
                        <select name="major" class="form-control">
                          <option value="cst">CST</option>
                          <option value="fm">FM</option>
                          <option value="ctv">CTV</option>
                          <option value="fst">FST</option>
                        </select>

                    </div>

                    <div class="col-md-2">
                 
                        <select name="grade" class="form-control">
                          <option value="1">Year 1</option>
                          <option value="2">Year 2</option>
                          <option value="3">Year 3</option>
                          <option value="4">Year 4</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                 
                        <select name="semester" class="form-control">
                          <option value="1">第一学期</option>
                          <option value="2">第二学期</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                          <button type="submit" class="btn btn-primary">Go</button>
                    </div>
                    </form>
                </div>

                <hr class="divider">
                <div class="row">
                </div>

            </div>

        <div class="row white-area">



          <?php 
          if($searchresult !=null){
  

          foreach ($searchresult as $book)
          {

          ?>  

          <div class="row">
            <div class="col-md-2">
                <a href="#">
                    <img class="img-responsive" src="<?php echo $book->bookimg?>" alt="">
                </a>
            </div>
            <div class="col-md-10">
                <h3><?php echo $book->booktitle; ?></h3>
                <p class="">
                  <span><?php echo $book->author; ?><span> /
                  <span><?php echo $book->publisher;?></span>

                </p>
                <p class="search_now_price">
                  <i class="fa fa-rmb fa-1x"></i><?php echo $book->price; ?>
                </p>
                <p class="book-info"><?php echo $book->abstract; ?></p>
                <a class="btn btn-primary" href="<?php echo base_url('book/test/'.$book->id.'/'.'1')?>"><i class="fa fa-cart-arrow-down fa-1x"></i>
                  加入购物车 </a>
                <a class="btn btn-primary" href="<?php echo base_url('book/detail/'.$book->id);?>"> 详细信息 <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <hr class="divider">


        <?php } } ?>
            
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