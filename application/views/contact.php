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

       <!--  <div class="nav">
            <a class="navbar-brand" href="#">
              <img class="img-responsive" src="<?=base_url('public/images/logo5.png')?>" alt=""></a>
            <ul class="nav nav-pills">
                <li><a href="<?=base_url()?>">首页</a></li>
                <li><a href="<?=base_url('about')?>">关于</a></li>
                <li><a href="<?=base_url()?>">服务</a></li>
                <li><a href="<?=base_url('books')?>">图书</a></li>
                <li class="active"><a href="<?=base_url('contact')?>">联系</a></li>
                <li><a href="<?=base_url('auth')?>">登录/注册</a></li>
            </ul>
        </div>  -->

        <!--end of nav -->

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
                        <img src="<?=base_url('public/images/hongkong.png')?>" width="1170px" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>

                    <div class="item">
                        <img src="<?=base_url('public/images/Kuala-Lumpur.png')?>" width="1170px" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>

                    <div class="item">
                        <img src="<?=base_url('public/images/singapore.png')?>" width="1170px" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>

                    <div class="item active">
                        <img src="<?=base_url('public/images/shanghai.png')?>" width="1170px" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>

            </div>
        </div>  <!-- end of slider -->



        <!-- Example row of columns -->
        <div class="row white-area">
          <h2>联系我们</h2>
          <!-- <div class="col-md-4">
            <div class="list-group">
              <a class="list-group-item" href="#"><i class="fa fa-file-video-o fa-2x"></i>&nbsp; Digital content creation in Asia</a>
              <a class="list-group-item" href="#"><i class="fa fa-briefcase fa-2x"></i>&nbsp; Corporate content production</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="list-group">
              <a class="list-group-item" href="#"><i class="fa fa-video-camera fa-2x"></i>&nbsp; Video production/editing</a>
              <a class="list-group-item" href="h#"><i class="fa fa-share-alt fa-2x"></i>&nbsp; Webcasting</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="list-group">
              <a class="list-group-item" href="#"><i class="fa fa-check-circle fa-2x"></i>&nbsp; Audio Recording Studio</a>          
              <a class="list-group-item" href="#"><i class="fa fa-users fa-2x"></i>&nbsp; Camera crews in Singapore</a>
            </div>
          </div> -->



          

        </div>
        
    <div class="row white-area">
        <div class="col-md-6 col-xs-12">
            <h3>社交关注</h3>
            <div class="row-container">
              <ul class="list-unstyled list-centered">
                  <li>
                    <a href="#" target="blank">
                    <img src="<?=base_url('public/images/youtube.png')?>" alt="Youtube">
                    </a>
                  </li>
                  <li>
                    <a href="#" target="blank">
                      <img src="<?=base_url('public/images/twitter.png')?>" alt="Twitter">
                    </a>
                  </li>
                  <li>
                    <a href="#œ" target="blank">
                      <img src="<?=base_url('public/images/vimeo.png')?>" alt="Vimeo">
                    </a>
                  </li>
              </ul>
            </div>

            <div class="clearfix"></div>
            <div class="row-container">
                <ul class="list-unstyled list-centered">
                    <li>
                      <a href="#" target="blank">
                        <img src="<?=base_url('public/images/linkedin.png')?>" alt="Linkedin">
                      </a>
                    </li>
                    <li>
                      <a href="#" target="blank" rel="publisher">
                        <img src="<?=base_url('public/images/googleplus.png')?>" alt="Google Plus">
                      </a>
                    </li>
                    <li>
                      <a href="#" target="blank">
                        <img src="<?=base_url('public/images/facebook.png')?>" alt="Facebook">
                      </a>
                    </li>
                </ul>
            </div>
          <div class="clearfix"></div>
        </div>

        <div class="col-md-6 col-xs-12">
        <div itemscope="" itemtype="http://schema.org/LocalBusiness">
            <h3>联系方式</h3>
            <div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                <p class="text-center">
                    <span itemprop="streetAddress">488A block 4</span><br>
                    <span itemprop="addressLocality">Corner of Lorong 33</span><br>
                    <span itemprop="addressRegion">China, 387605</span><br></p>
            </div>
            <p class="text-center">
                <i class="fa fa-phone"></i>
                <span itemprop="telephone">+(0756) 1234 5678</span> <br>
                <i class="fa fa-envelope"></i>
                <a href=""> <span itemprop="email">example@example.com</span></a><br>
              
                 <br>
                
            </p>
        </div>
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