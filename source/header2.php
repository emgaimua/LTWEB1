<?php 
include('connect.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>
      Welcome to FlatShop
    </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
</script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js">
</script>
<![endif]-->
  </head>
  <body>
    <div class="wrapper">
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-md-2 col-sm-2">
              <div class="logo">
                <a href="index.php">
                  <img src="images/logo.png" alt="FlatShop">
                </a>
              </div>
            </div>
            <div class="col-md-10 col-sm-10">
              <div class="header_top">
                <div class="row">
                  <div class="col-md-3">
                    
                  </div>
                  <div class="col-md-6">
                    <ul class="topmenu">
                      <li>
                        <a href="#">
                          About Us
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          News
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Service
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Recruiment
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Media
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          Support
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <ul class="usermenu">
                      <li>
                        <a href="login.php" class="log">
                          Đăng Nhập
                        </a>
                      </li>
                      <li>
                        <a href="checkout2.html" class="reg">
                          Đang Ký
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="header_bottom">
                <ul class="option">
                  <li id="search" class="search">
                    <form action="productsearch.php" method="get"><input class="search-submit" type="submit" value=""><input class="search-input" placeholder="Enter your search term..." type="text" value="" name="txtsearch"></form>
                  </li>
                  <li class="option-cart">
                    <a href="#" class="cart-icon">
                      cart 
                      <span class="cart_no">
                        02
                      </span>
                    </a>
                    <ul class="option-cart-item">
                      <li>
                        <div class="cart-item">
                          <div class="image">
                            <img src="images/products/thum/products-01.png" alt="">
                          </div>
                          <div class="item-description">
                            <p class="name">
                              Lincoln chair
                            </p>
                            <p>
                              Size: 
                              <span class="light-red">
                                One size
                              </span>
                              <br>
                              Quantity: 
                              <span class="light-red">
                                01
                              </span>
                            </p>
                          </div>
                          <div class="right">
                            <p class="price">
                              $30.00
                            </p>
                            <a href="#" class="remove">
                              <img src="images/remove.png" alt="remove">
                            </a>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="cart-item">
                          <div class="image">
                            <img src="images/products/thum/products-02.png" alt="">
                          </div>
                          <div class="item-description">
                            <p class="name">
                              Lincoln chair
                            </p>
                            <p>
                              Size: 
                              <span class="light-red">
                                One size
                              </span>
                              <br>
                              Quantity: 
                              <span class="light-red">
                                01
                              </span>
                            </p>
                          </div>
                          <div class="right">
                            <p class="price">
                              $30.00
                            </p>
                            <a href="#" class="remove">
                              <img src="images/remove.png" alt="remove">
                            </a>
                          </div>
                        </div>
                      </li>
                      <li>
                        <span class="total">
                          Total 
                          <strong>
                            $60.00
                          </strong>
                        </span>
                        <button class="checkout" onClick="location.href='checkout.html'">
                          CheckOut
                        </button>
                      </li>
                    </ul>
                  </li>
                </ul>
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">
                      Toggle navigation
                    </span>
                    <span class="icon-bar">
                    </span>
                    <span class="icon-bar">
                    </span>
                    <span class="icon-bar">
                    </span>
                  </button>
                </div>
                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">
                              <li><a href="index.php">Trang Chủ</a></li>
							  <li class=" dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Danh Mục</a>
								 
                                 <div class="dropdown-menu">
                                    <ul class="mega-menu-links">
									<?php $sql= mysql_query("select * from danh_muc");  
									while ($rows = mysql_fetch_array($sql)){
									?>
                                       <li><a href='productlist.php?id=<?php echo $rows[0] ?>'><?php echo $rows['ten_danh_muc'] ?></a></li>
									   <?php } ?>
                                       
                                    </ul>
                                 </div>
                              </li>
                              <li class=" dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nhà Sản Xuất</a>
								 
                                 <div class="dropdown-menu">
                                    <ul class="mega-menu-links">
									<?php $sql= mysql_query("select * from nha_sx");  
									while ($rows = mysql_fetch_array($sql)){
									?>
                                       <li><a href='manufacturerlist.php?id=<?php echo $rows[0] ?>'><?php echo $rows['ten_nsx'] ?></a></li>
									   <?php } ?>
                                       
                                    </ul>
                                 </div>
                              </li>
                              <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fashion</a>
                                 <div class="dropdown-menu mega-menu">
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                             <li><a href="productgird.html">New Collection</a></li>
                                             <li><a href="productgird.html">Shirts & tops</a></li>
                                             <li><a href="productgird.html">Laptop & Brie</a></li>
                                             <li><a href="productgird.html">Dresses</a></li>
                                             <li><a href="productgird.html">Blazers & Jackets</a></li>
                                             <li><a href="productgird.html">Shoulder Bags</a></li>
                                          </ul>
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                             <li><a href="productgird.html">New Collection</a></li>
                                             <li><a href="productgird.html">Shirts & tops</a></li>
                                             <li><a href="productgird.html">Laptop & Brie</a></li>
                                             <li><a href="productgird.html">Dresses</a></li>
                                             <li><a href="productgird.html">Blazers & Jackets</a></li>
                                             <li><a href="productgird.html">Shoulder Bags</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              
                              <li><a href="contact.html">Liên Hệ</a></li>
                           </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix">
        </div>
        