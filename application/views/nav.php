        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"> 
              <img class="img-responsive" src="<?=base_url('public/images/heyilogo.jpg')?>" alt="">
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             
             <form id="searchForm" class="navbar-form  navbar-right" role="search" action="<?php echo base_url('book/search')?>">
                <div class="form-group">
                  <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">嗖的一声</button>
              </form>
              </ul>
               
              <ul class="nav navbar-nav navbar-right">
                <li class="navleft"><a href="<?=base_url()?>"><i class="fa fa-home"></i>首页</a></li>
                <li class="navleft"><a href="<?=base_url('about')?>"><i class="fa fa-sitemap"></i>关于</a></li>
                <li class="navleft"><a href="<?=base_url('book')?>"><i class="fa fa-book"></i>图书</a></li>
                <li class="navleft"><a href="<?=base_url('shopcart')?>"><i class="fa fa-cart-arrow-down"></i>购物车</a></li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <?php if($this->session->userdata('name')){?>
                        <li><a href="<?=base_url('auth/logout')?>">退出</a></li> 
                    <?php } else {?>
                        <li><a href="<?=base_url('auth')?>">登录</a></li> 
                        <li class="divider"></li>
                        <li><a href="<?=base_url('auth/register')?>">注册</a></li>    
                    <?php } ?>

                </li>

            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>