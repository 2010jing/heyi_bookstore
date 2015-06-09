<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> 合一书店 -- 登录</title>
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

          
        <!-- end of slider -->

<div class="row service_info"> 
          <div class="col-md-6"> 
            <img alt="Production Solutions" class="graphicdesign-img-left" src="<?=base_url('public/images/book/finalproduct.jpg')?>">
          </div> 
          <div class="col-md-6"> 
            <div id="product" class="info-right"> 

              <form class="form-horizontal" action="<?=base_url('auth/signin')?>" method="post">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"><i class="fa fa-envelope-o fa-fw"></i></label>
                  <div class="col-sm-5">
                    <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label"><i class="fa fa-key fa-fw"></i></label>
                  <div class="col-sm-5">
                    <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">登录</button>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    还没有账号？<i class="fa fa-cog"></i> <a href="<?=base_url('auth/register')?>">立即注册!</a>
                  </div>
                </div>
              </form>
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