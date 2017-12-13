<?php 
include('layout.php'); 
include('connect.php');
?>

<div class="container_fullwidth">
            <div class="container">
               <div class="hot-products">
                  <h3 class="title"><strong>New</strong> Products</h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
				     <li>
						<div class="row">
                  		<?php
                  		$sql = mysql_query("select * from san_pham order by ngay_tao DESC LIMIT 0,4" );
                  		while ($rows = mysql_fetch_array($sql)) {				  
                  		?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <?php 
				  				if($rows['giam_gia'] != null)
				  				{?>
                    			<div class="offer">
                      			<?php echo '-'.$rows['giam_gia'].'%'?>
                    			</div>
								<?php }
								?>
                                 <div class="thumbnail"><a href='details.php?id=<?php echo $rows[0] ?>'><img src="hinh/<?php echo $rows['hinh_anh'] ?>" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $rows['ten_san_pham'] ?></div>
                                 <h4 class="price">
								 <?php 
								 $number = $rows['gia_tien'];
								 $gia_tien = number_format($number);
								 echo $gia_tien ?></h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                                
                              </div>
                           </div>
                     <?php
                     }
                     ?>
					  	</div>
					 </li>
					 <li>
						<div class="row">
                  		<?php
                  		$sql = mysql_query("select * from san_pham order by ngay_tao DESC LIMIT 4, 4" );
                  		while ($rows = mysql_fetch_array($sql)) {				  
                  		?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                  <?php 
				  				if($rows['giam_gia'] != null)
				  				{?>
                    			<div class="offer">
                      			<?php echo '-'.$rows['giam_gia'].'%'?>
                    			</div>
								<?php }
								?>
                                 <div class="thumbnail"><a href='details.php?id=<?php echo $rows[0] ?>'><img src="hinh/<?php echo $rows['hinh_anh'] ?>" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $rows['ten_san_pham'] ?></div>
                                 <h4 class="price">
								 <?php 
								 $number = $rows['gia_tien'];
								 $gia_tien = number_format($number);
								 echo $gia_tien?></h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                                
                              </div>
                           </div>
                     <?php
                     }
                     ?>
					  	</div>
					 </li>
					 <li>
						<div class="row">
                  		<?php
                  		$sql = mysql_query("select * from san_pham order by ngay_tao DESC LIMIT 8, 2" );
                  		while ($rows = mysql_fetch_array($sql)) {				  
                  		?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                  <?php 
				  				if($rows['giam_gia'] != null)
				  				{?>
                    			<div class="offer">
                      			<?php echo '-'.$rows['giam_gia'].'%'?>
                    			</div>
								<?php }
								?>
                                 <div class="thumbnail"><a href='details.php?id=<?php echo $rows[0] ?>'><img src="hinh/<?php echo $rows['hinh_anh'] ?>" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $rows['ten_san_pham'] ?></div>
                                 <h4 class="price">
								 <?php 
								 $number = $rows['gia_tien'];
								 $gia_tien = number_format($number);
								 echo $gia_tien?></h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                                
                              </div>
                           </div>
                     <?php
                     }
                     ?>
					  	</div>
					 </li>
                  </ul> 
               </div>
			   <div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title"><strong>Hot </strong> Products</h3>
                  <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
                  <ul id="featured">
                     <li>
                        <div class="row">
                           <?php
                  		$sql = mysql_query("select * from san_pham order by so_luong_ban DESC LIMIT 0,4" );
                  		while ($rows = mysql_fetch_array($sql)) {				  
                  		?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                  <?php 
				  				if($rows['giam_gia'] != null)
				  				{?>
                    			<div class="offer">
                      			<?php echo '-'.$rows['giam_gia'].'%'?>
                    			</div>
								<?php }
								?>
                                 <div class="thumbnail"><a href='details.php?id=<?php echo $rows[0] ?>'><img src="hinh/<?php echo $rows['hinh_anh'] ?>" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $rows['ten_san_pham'] ?></div>
                                 <h4 class="price">
								 <?php 
								 $number = $rows['gia_tien'];
								 $gia_tien = number_format($number);
								 echo $gia_tien?></h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                                
                              </div>
                           </div>
                     <?php
                     }
                     ?>
					  	</div>
					 </li>
					 <li>
						<div class="row">
                  		<?php
                  		$sql = mysql_query("select * from san_pham order by so_luong_ban DESC LIMIT 4, 4" );
                  		while ($rows = mysql_fetch_array($sql)) {				  
                  		?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                  <?php 
				  				if($rows['giam_gia'] != null)
				  				{?>
                    			<div class="offer">
                      			<?php echo '-'.$rows['giam_gia'].'%'?>
                    			</div>
								<?php }
								?>
                                 <div class="thumbnail"><a href='details.php?id=<?php echo $rows[0] ?>'><img src="hinh/<?php echo $rows['hinh_anh'] ?>" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $rows['ten_san_pham'] ?></div>
                                 <h4 class="price">
								 <?php 
								 $number = $rows['gia_tien'];
								 $gia_tien = number_format($number);
								 echo $gia_tien?></h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                                
                              </div>
                           </div>
                     <?php
                     }
                     ?>
					  	</div>
					 </li>
					 <li>
						<div class="row">
                  		<?php
                  		$sql = mysql_query("select * from san_pham order by so_luong_ban DESC LIMIT 8, 2" );
                  		while ($rows = mysql_fetch_array($sql)) {				  
                  		?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                  <?php 
				  				if($rows['giam_gia'] != null)
				  				{?>
                    			<div class="offer">
                      			<?php echo '-'.$rows['giam_gia'].'%'?>
                    			</div>
								<?php }
								?>
                                 <div class="thumbnail"><a href='details.php?id=<?php echo $rows[0] ?>'><img src="hinh/<?php echo $rows['hinh_anh'] ?>" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $rows['ten_san_pham'] ?></div>
                                 <h4 class="price">
								 <?php 
								 $number = $rows['gia_tien'];
								 $gia_tien = number_format($number);
								 echo $gia_tien?></h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                                
                              </div>
                           </div>
                     <?php
                     }
                     ?>
                        </div>
                     </li>
                  </ul>
               </div>
			  <div class="clearfix"></div>
			   
			   <div class="hot-products">
                  <h3 class="title"><strong>Hot view</strong> Products</h3>
                  <div class="control"><a id="prev_view" class="prev" href="#">&lt;</a><a id="next_view" class="next" href="#">&gt;</a></div>
                  <ul id="view">
				     <li>
						<div class="row">
                  		<?php
                  		$sql = mysql_query("select * from san_pham order by luot_xem DESC LIMIT 0,4" );
                  		while ($rows = mysql_fetch_array($sql)) {				  
                  		?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                  <?php 
				  				if($rows['giam_gia'] != null)
				  				{?>
                    			<div class="offer">
                      			<?php echo '-'.$rows['giam_gia'].'%'?>
                    			</div>
								<?php }
								?>
                                 <div class="thumbnail"><a href='details.php?id=<?php echo $rows[0] ?>'><img src="hinh/<?php echo $rows['hinh_anh'] ?>" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $rows['ten_san_pham'] ?></div>
                                 <h4 class="price">
								 <?php 
								 $number = $rows['gia_tien'];
								 $gia_tien = number_format($number);
								 echo $gia_tien?></h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                                
                              </div>
                           </div>
                     <?php
                     }
                     ?>
					  	</div>
					 </li>
					 <li>
						<div class="row">
                  		<?php
                  		$sql = mysql_query("select * from san_pham order by luot_xem DESC LIMIT 4, 4" );
                  		while ($rows = mysql_fetch_array($sql)) {				  
                  		?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                  <?php 
				  				if($rows['giam_gia'] != null)
				  				{?>
                    			<div class="offer">
                      			<?php echo '-'.$rows['giam_gia'].'%'?>
                    			</div>
								<?php }
								?>
                                 <div class="thumbnail"><a href='details.php?id=<?php echo $rows[0] ?>'><img src="hinh/<?php echo $rows['hinh_anh'] ?>" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $rows['ten_san_pham'] ?></div>
                                 <h4 class="price">
								 <?php 
								 $number = $rows['gia_tien'];
								 $gia_tien = number_format($number);
								 echo $gia_tien?></h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                                
                              </div>
                           </div>
                     <?php
                     }
                     ?>
					  	</div>
					 </li>
					 <li>
						<div class="row">
                  		<?php
                  		$sql = mysql_query("select * from san_pham order by luot_xem DESC LIMIT 8, 2" );
                  		while ($rows = mysql_fetch_array($sql)) {				  
                  		?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                  <?php 
				  				if($rows['giam_gia'] != null)
				  				{?>
                    			<div class="offer">
                      			<?php echo '-'.$rows['giam_gia'].'%'?>
                    			</div>
								<?php }
								?>
                                 <div class="thumbnail"><a href='details.php?id=<?php echo $rows[0] ?>'><img src="hinh/<?php echo $rows['hinh_anh'] ?>" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $rows['ten_san_pham'] ?></div>
                                 <h4 class="price">
								 <?php 
								 $number = $rows['gia_tien'];
								 $gia_tien = number_format($number);
								 echo $gia_tien?></h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Add To Cart</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                                
                              </div>
                           </div>
                     <?php
                     }
                     ?>
					  	</div>
					 </li>
                  </ul> 
               </div>
               <div class="clearfix"></div>
               <div class="our-brand">
                  <h3 class="title"><strong>Our </strong> Brands</h3>
                  <div class="control"><a id="prev_brand" class="prev" href="#">&lt;</a><a id="next_brand" class="next" href="#">&gt;</a></div>
                  <ul id="braldLogo">
                     <li>
                        <ul class="brand_item">
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/themeforest.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/photodune.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/activeden.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <ul class="brand_item">
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/themeforest.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/photodune.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/activeden.png" alt=""></div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="brand-logo"><img src="images/envato.png" alt=""></div>
                              </a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
	  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="js/jquery.sequence-min.js"></script>
	  <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript" src="js/script.min.js" ></script>