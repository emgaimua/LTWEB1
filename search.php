<?php 
include ('source/connect.php');
include ('source/layout.php');
include ('source/header.php');
include ('source/slide.php');
?>

<div class="clearfix"></div>

<div class="container">
               <div class="hot-products">
                  <h3 class="title"><strong>Show</strong> Products</h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
				     <li>
						<div class="row">
                  		<?php
	
	$txtkey      = addslashes($_GET['txtsearch']);
	if (mysql_num_rows(mysql_query("SELECT * FROM san_pham WHERE ten_san_pham like '%$txtkey%'")) > 0)
	{
		$sql = mysql_query("select * from san_pham where ten_san_pham like '%$txtkey%' LIMIT 0,4" );
		while ($rows = mysql_fetch_array($sql)) {				  
                  		?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer"><?php 
								 
								 if ($rows['giam_gia'] == null)
								 {
								 $rows['giam_gia'] = 0;
								 echo ' ';
								 }
								 else
								 {
								 echo '-'.$rows['giam_gia'].'%';
								 }
								  ?></div>
                                 <div class="thumbnail"><a href='details.php?id=<?php echo $rows[0] ?>'><img src="hinh/<?php echo $rows['hinh_anh'] ?>" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $rows['ten_san_pham'] ?></div>
                                 <h4 class="price"><?php echo $rows['gia_tien'] ?></h4>
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
                  		$sql = mysql_query("select * from san_pham where ten_san_pham like '%$txtkey%' LIMIT 4,4" );
                  		while ($rows = mysql_fetch_array($sql)) {				  
                  		?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">- %20</div>
                                 <div class="thumbnail"><a href='details.php?id=<?php echo $rows[0] ?>'><img src="hinh/<?php echo $rows['hinh_anh'] ?>" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $rows['ten_san_pham'] ?></div>
                                 <h4 class="price"><?php echo $rows['gia_tien'] ?></h4>
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
                  		$sql = mysql_query("select * from san_pham where ten_san_pham like '%$txtkey%' LIMIT 8,4" );
                  		while ($rows = mysql_fetch_array($sql)) {				  
                  		?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">- %20</div>
                                 <div class="thumbnail"><a href='details.php?id=<?php echo $rows[0] ?>'><img src="hinh/<?php echo $rows['hinh_anh'] ?>" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $rows['ten_san_pham'] ?></div>
                                 <h4 class="price"><?php echo $rows['gia_tien'] ?></h4>
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
			   </div>
			   <?php 
			   }
			   else 
			   {
			   ?>
			   <div class="container">
			   <div class="hot-products">
                  <h4 class="title"><strong> Product not found !</strong></h3>
				</div>
			   </div>
			   <?php
			   
			   }
			   ?>
<?php
include ('source/footer.php');
?>