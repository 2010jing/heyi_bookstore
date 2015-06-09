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

        <!-- <div class="nav">
            <a class="navbar-brand" href="#">
              <img class="img-responsive" src="<?=base_url('public/images/logo5.png')?>" alt=""></a>
            <ul class="nav nav-pills">
                <li><a href="<?=base_url()?>">首页</a></li>
                <li class="active"><a href="<?=base_url('about')?>">关于</a></li>
                <li><a href="<?=base_url()?>">服务</a></li>
                <li><a href="<?=base_url('books')?>">图书</a></li>
                <li><a href="<?=base_url('contact')?>">联系</a></li>
                <li><a href="<?=base_url('auth')?>">登录/注册</a></li>
            </ul>
        </div> --> <!--end of nav -->
              <?php $this->load->view('nav')?>


        
<script type = "text/javascript" > (function() {
    document.write(unescape('%3Cdiv id="bdcs"%3E%3C/div%3E'));
    var bdcs = document.createElement('script');
    bdcs.type = 'text/javascript';
    bdcs.async = true;
    bdcs.src = 'http://znsv.baidu.com/customer_search/api/js?sid=4501121528053796218' + '&plate_url=' + encodeURIComponent(window.location.href) + '&t=' + Math.ceil(new Date() / 3600000);
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(bdcs, s);
})(); </script>

<div id="bdcs-frame-box"></div>
<script type="text/javascript">
var bdcsFrameSid="4501121528053796218";
var bdcsFrameCharset= "utf-8";
var bdcsFrameWidth = 542;
var bdcsFrameHeight = 1300;
var bdcsFrameWt = 1;
var bdcsFrameHt = 1;
var bdcsFrameResultNum = 10;
var bdcsFrameBgColor = "#ffffff"; 
</script>
<script type="text/javascript" src="http://zhannei.baidu.com/static/js/iframe.js"></script>

      
        
     



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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?=base_url('public/js/jquery.js')?>"></script>
    <script src="<?=base_url('public/js/bootstrap.min.js')?>"></script>    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>