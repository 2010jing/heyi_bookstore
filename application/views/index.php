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

        <div id="slider">

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3" class="active"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item">
                        <img src="<?=base_url('public/images/amazon1.jpg')?>" width="1170px" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>

                    <div class="item">
                        <img src="<?=base_url('public/images/amazon2.jpg')?>" width="1170px" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>

                    <div class="item">
                        <img src="<?=base_url('public/images/amazon3.jpg')?>" width="1170px" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>

                    <div class="item active">
                        <img src="<?=base_url('public/images/amazon4.jpg')?>" width="1170px" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="<?=base_url()?>#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="<?=base_url()?>#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>

            </div>
        </div>  <!-- end of slider -->



        <!-- Example row of columns -->
        <div class="row white-area">
          <h2>Our Books</h2>

          <?php 
            foreach ($books as $book) {
              # code..
              ?>


          <div class="col-md-3">
            <div class="list-group">
              <div class="list-group-item">
                <a href="<?php echo base_url('book/detail/'.$book->id)?>"><img id="book-md-category-<?php echo $book->id;?>" class="book-style" src="<?php echo $book->bookimg;?>"> </a>
                <p class="book-info name" href="#" alt="<?php echo $book->booktitle;?>" title="<?php echo $book->booktitle;?>"><i class="glyphicon glyphicon-book fa-1x"></i>&nbsp; <?php echo $book->booktitle;?></p>
                <p class="book-info author" alt="<?php echo $book->author;?>" title="<?php echo $book->author;?>"><i class="fa fa-user fa-1x"></i>&nbsp; <?php echo $book->author;?></p>
                <p class="book-info price" alt="<?php echo $book->price;?>元" ><i class="fa fa-rmb fa-1x"></i>&nbsp; <?php echo $book->price;?> <span class="price_r"><i class="fa fa-rmb fa-1x"></i>199.99</span></p>

              </div>
             <!--  <a class="list-group-item book-info" href="#" alt="图灵程序设计丛书:Python基础教程(第2版)(修订版)" title="图灵程序设计丛书:Python基础教程(第2版)(修订版)"><i class="glyphicon glyphicon-book fa-2x"></i>&nbsp; 图灵程序设计丛书:Python基础教程(第2版)(修订版)</a>
              <a class="list-group-item book-info" href="#" alt="赫特兰 (作者), 钟读杭 (合著者), 司维 (译者), 曾军崴 (译者), 谭颖华 (译者)" title="赫特兰 (作者), 钟读杭 (合著者), 司维 (译者), 曾军崴 (译者), 谭颖华 (译者)"><i class="glyphicon glyphicon-user fa-2x"></i>&nbsp; 赫特兰 (作者), 钟读杭 (合著者), 司维 (译者), 曾军崴 (译者), 谭颖华 (译者)</a> -->
            </div>
          </div>
          <?php     
            }
          ?>
        

      
       

        </div>

        <div class="row service_info"> 
          <div class="col-md-6"> 
            <img alt="Production Solutions" class="graphicdesign-img-left" src="<?=base_url('public/images/book/finalproduct.jpg')?>">
          </div> 
          <div class="col-md-6"> 
            <div id="product" class="info-right"> <h2>Production Solutions</h2> 
              <p>Corporate video production and branded content, Experienced CAMERA CREWS  in Singapore and across Asia, EVENT PRODUCTION, WEBCASTING, Photography</p> <a class="btn btn-lg btn-danger" href="./our-example-corporate-video-clips.html">Our Portfolio</a> 
            </div>
          </div> 
        </div>

        <div class="row service_info"> 
          <div class="col-md-6"> 
            <div id="product" class="info-right"> <h2>Production Solutions</h2> 
              <p>Corporate video production and branded content, Experienced CAMERA CREWS  in Singapore and across Asia, EVENT PRODUCTION, WEBCASTING, Photography</p> <a class="btn btn-lg btn-danger" href="./our-example-corporate-video-clips.html">Our Portfolio</a> 
            </div>          </div> 
          <div class="col-md-6"> 
                        <img alt="Production Solutions" class="graphicdesign-img-left" src="<?=base_url('public/images/book/finalproduct.jpg')?>">
          </div> 
        </div>
    </div> <!-- /container -->
</div>


<!-- footer -->
<div id="push-footer"></div> 
<div class="container"> 
  <div class="row mobile-hidden"> 
    <!-- <div class="col-lg-12"> 
      <div class="col-md-3"> <a href="#">Picture Perfect Productions</a>
        <p>                    We are Singapore based and covering Asia for digital and audio content production and full service video production solutions.
                </p> 
      </div> 
      <div class="col-md-3"> 
        <ul class="list-unstyled"> 
          <li>Our Strength</li> 
          <li><a href="">Professional</a></li> 
          <li><a href="">Global</a></li> 
          <li><a href="">Efficient</a></li> 
        </ul> 
      </div> 
      <div class="col-md-3"> 
        <ul class="list-unstyled"> 
          <li>Our Services</li> 
          <li><a href="product">Production Solutions</a></li> 
          <li><a href="creativity">Creativity Consultation</a></li> 
          <li><a href="video">Video Editing</a></li> 
          <li><a href="webcasting">Webcasting</a></li> 
          <li><a href="sound">Soundproof Recording</a></li> 
          <li><a href="green">Green Screen Studio</a></li> 
        </ul> 
      </div> 
      <div class="col-md-3"> 
        <ul class="list-unstyled"> 
          <li>Connect Us</li> 
          <li><a href="https://twitter.com/cameracrewasia">Our Twitter</a></li> 
          <li><a href="https://www.youtube.com/channel/UCuOByb10gg4vBBa4O97mYrw">Our Youtube</a></li> 
          <li><a rel="publisher" href="https://plus.google.com/101734969803661518768">Our Google+</a></li> 
          <li><a href="http://vimeo.com/user3458098">Our Vimeo</a></li> 
          <li><a href="https://www.facebook.com/pages/Picture-Perfect-Productions-Singapore/117716621581247">Our Facebook</a></li> 
          <li><a href="">Our Email</a></li> 
        </ul> 
      </div> 
    </div> --> 
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