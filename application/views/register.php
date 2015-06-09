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


          
        <!-- end of slider -->

<div class="row service_info"> 
          <div class="col-md-6"> 
            <img alt="Register" class="graphicdesign-img-left" src="<?=base_url('public/images/book/finalproduct.jpg')?>">
          </div> 
          <div class="col-md-6"> 
            <div id="product" class="info-right"> 

              <form class="form-horizontal" id="signupForm" action="<?=base_url('auth/signup')?>" method="post">
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label"><i class="fa fa-user fa-fw"></i></label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="name" id="name"  placeholder="Nickname">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label"><i class="fa fa-envelope-o fa-fw"></i></label>
                  <div class="col-sm-5">
                    <input type="email" class="form-control" name="email" id="email"  placeholder="UIC Email">
                  </div>
                </div>                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label"><i class="fa fa-key fa-fw"></i></label>
                  <div class="col-sm-5">
                    <input type="password" class="form-control" name="password" id="password"  placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="repassword" class="col-sm-2 control-label"><i class="fa fa-key fa-fw"></i></label>
                  <div class="col-sm-5">
                    <input type="password" class="form-control" name="repassword" id="repassword"  placeholder="Re Password">
                  </div>
                </div>

                <div class="form-group">
                  <label for="major" class="col-sm-2 control-label"><i class="fa fa-graduation-cap fa-fw"></i></label>
                  <div class="col-sm-5">
                    <!-- <input type="text" class="form-control" name="major" > -->
                    <select class="form-control" name="division">
                      <option value="DST">DST</option>
                      <option value="DBM">DBM</option>
                      <option value="DHSS">DHSS</option>
                    </select>
                   
                                  
                  </div>
                </div>
                <div class="form-group">
                  <label for="tel" class="col-sm-2 control-label"><i class="fa fa-mobile-phone fa-2x"></i></label>
                  <div class="col-sm-5">
                    <input type="telephone" class="form-control" name="tel" id="tel" placeholder="137262049xx">
                  </div>
                </div>
                

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">提交</button>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    已有账号？<i class="fa fa-cog"></i> <a href="<?=base_url('auth')?>">直接登录!</a>
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
    <script src="<?=base_url('public/js/signupform.js')?>"></script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
    <script src="<?=base_url('public/js/jquery.js')?>"></script>
    <script src="<?=base_url('public/js/bootstrap.min.js')?>"></script>  -->  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
 

  </body>
</html>