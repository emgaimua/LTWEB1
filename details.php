<?php
include ('source/connect.php');
include ('source/layout.php');
$id = $_GET['id'];
include ('source/header2.php');
?>

        <div class="page-index">
          <div class="container">
            <p>
              Home - Products Details
            </p>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="products-details">
                <div class="preview_image">
                <?php
                $result = mysql_query("select * from san_pham where id_san_pham = '$id'");
                $rows = mysql_fetch_array($result);
                ?>
                  <div class="preview-small">
                   
                    <img src="hinh/<?php echo $rows['hinh_anh'] ?>" data-zoom-image="hinh/<?php echo $rows['hinh_anh'] ?>" alt="">
                  </div>
                  <div class="thum-image">
                    <ul id="gallery_01" class="prev-thum">
                      <li>
                        <a href="#" data-image="images/products/medium/products-01.jpg" data-zoom-image="images/products/Large/products-01.jpg">
                          <img src="images/products/thum/products-01.png" alt="">
                        </a>
                      </li>
                      <li>
                        <a href="#" data-image="images/products/medium/products-02.jpg" data-zoom-image="images/products/Large/products-02.jpg">
                          <img src="images/products/thum/products-02.png" alt="">
                        </a>
                      </li>
                      <li>
                        <a href="#" data-image="images/products/medium/products-03.jpg" data-zoom-image="images/products/Large/products-03.jpg">
                          <img src="images/products/thum/products-03.png" alt="">
                        </a>
                      </li>
                      <li>
                        <a href="#" data-image="images/products/medium/products-04.jpg" data-zoom-image="images/products/Large/products-04.jpg">
                          <img src="images/products/thum/products-04.png" alt="">
                        </a>
                      </li>
                      <li>
                        <a href="#" data-image="images/products/medium/products-05.jpg" data-zoom-image="images/products/Large/products-05.jpg">
                          <img src="images/products/thum/products-05.png" alt="">
                        </a>
                      </li>
                    </ul>
                    <a class="control-left" id="thum-prev" href="javascript:void(0);">
                      <i class="fa fa-chevron-left">
                      </i>
                    </a>
                    <a class="control-right" id="thum-next" href="javascript:void(0);">
                      <i class="fa fa-chevron-right">
                      </i>
                    </a>
                  </div>
                </div>
                <div class="products-description">
                  <h5 class="name">
                    <?php echo $rows['ten_san_pham'] ?>
                  </h5>
                  <p>
                    <img alt="" src="images/star.png">
                    <a class="review_num" href="#">
                      <?php 
						$luotxem = $rows['luot_xem'];
						$luotxem += 1; echo $luotxem; 
						mysql_query("UPDATE san_pham SET luot_xem = '$luotxem' where id_san_pham = '$id'");
						?> Review(s)
                    </a>
                  </p>
                  <p>
                    Availability: 
                    <span class=" light-red">
                    <?php if($rows['tinh_trang'] == 1)
					{
					     echo 'Còn hàng';
					}
						 else
					{
						 echo 'Hết hàng';
					}
					?>
                    </span>
                  </p>
                  <p>
                    <?php echo $rows['mo_ta']; ?>
                  </p>
                  <hr class="border">
                  <div class="price">
                    Price : 
                    <span class="new_price">
                      <?php 
					  $gia_cu = $rows['gia_tien'];
					  $sale = $rows['giam_gia'];
					  $giam_gia = $gia_cu * $sale/100;
					  $gia_moi = $gia_cu - $giam_gia;
					  if ($rows['giam_gia'] == null)
					  {
						  $gia_moi = $gia_cu;
					  }
					  echo number_format($gia_moi);
					  ?>
                      <sup>
                        $
                      </sup>
                    </span>
                    <span class="old_price">
                      
                      <?php 
					  $number = $rows['gia_tien'];
					  $gia_tien = number_format($number);
					  echo $gia_tien?>
                      <sup>
                        $
                      </sup>
                    </span>
                  </div>
                  <hr class="border">
                  <div class="wided">
                    
                    <div class="button_group">
					
                      Qty &nbsp;&nbsp;: 
                      <input type="number" size="5px">
                    
                      <button class="button" >
                        Add To Cart
                      </button>
                      <button class="button compare">
                        <i class="fa fa-exchange">
                        </i>
                      </button>
                      <button class="button favorite">
                        <i class="fa fa-heart-o">
                        </i>
                      </button>
                      <button class="button favorite">
                        <i class="fa fa-envelope-o">
                        </i>
                      </button>
                    </div>
                  </div>
                  <div class="clearfix">
                  </div>
                  <hr class="border">
                  <img src="images/share.png" alt="" class="pull-right">
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="tab-box">
                <div id="tabnav">
                  <ul>
                    <li>
                      <a href="#Descraption">
                        DESCRIPTION
                      </a>
                    </li>
                    <li>
                      <a href="#Reviews">
                        REVIEW
                      </a>
                    </li>
                    <li>
                      <a href="#tags">
                        PRODUCT TAGS
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="tab-content-wrap">
                  <div class="tab-content" id="Descraption">
                    <p>
                      <?php echo $rows['thong_tin'];?>
                    </p>
                  </div>
                  <div class="tab-content" id="Reviews">
                    <form>
                      <table>
                        <thead>
                          <tr>
                            <th>&nbsp;
                              
                            </th>
                            <th>
                              1 star
                            </th>
                            <th>
                              2 stars
                            </th>
                            <th>
                              3 stars
                            </th>
                            <th>
                              4 stars
                            </th>
                            <th>
                              5 stars
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              Quality
                            </td>
                            <td>
                              <input type="radio" name="quality" value="Blue"/>
                            </td>
                            <td>
                              <input type="radio" name="quality" value="">
                            </td>
                            <td>
                              <input type="radio" name="quality" value="">
                            </td>
                            <td>
                              <input type="radio" name="quality" value="">
                            </td>
                            <td>
                              <input type="radio" name="quality" value="">
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Price
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Value
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <div class="form-row">
                            <label class="lebel-abs">
                              Your Name 
                              <strong class="red">
                                *
                              </strong>
                            </label>
                            <input type="text" name="" class="input namefild">
                          </div>
                          <div class="form-row">
                            <label class="lebel-abs">
                              Your Email 
                              <strong class="red">
                                *
                              </strong>
                            </label>
                            <input type="email" name="" class="input emailfild">
                          </div>
                          <div class="form-row">
                            <label class="lebel-abs">
                              Summary of You Review 
                              <strong class="red">
                                *
                              </strong>
                            </label>
                            <input type="text" name="" class="input summeryfild">
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                          <div class="form-row">
                            <label class="lebel-abs">
                              Your Name 
                              <strong class="red">
                                *
                              </strong>
                            </label>
                            <textarea class="input textareafild" name="" rows="7" >
                            </textarea>
                          </div>
                          <div class="form-row">
                            <input type="submit" value="Submit" class="button">
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="tab-content" >
                    <div class="review">
                      <p class="rating">
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star-half-o gray">
                        </i>
                        <i class="fa fa-star-o gray">
                        </i>
                      </p>
                      <h5 class="reviewer">
                        Reviewer name
                      </h5>
                      <p class="review-date">
                        Date: 01-01-2014
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a eros neque. In sapien est, malesuada non interdum id, cursus vel neque.
                      </p>
                    </div>
                    <div class="review">
                      <p class="rating">
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star-half-o gray">
                        </i>
                        <i class="fa fa-star-o gray">
                        </i>
                      </p>
                      <h5 class="reviewer">
                        Reviewer name
                      </h5>
                      <p class="review-date">
                        Date: 01-01-2014
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a eros neque. In sapien est, malesuada non interdum id, cursus vel neque.
                      </p>
                    </div>
                  </div>
                  <div class="tab-content" id="tags">
                    <div class="tag">
                      Add Tags : 
                      <input type="text" name="">
                      <input type="submit" value="Tag">
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix">
              </div>
			  <div class="container_fullwidth">
            <div class="hot-products">
                  <h3 class="title"><strong>Same</strong> Type</h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
				  <div class="container">
              
                  <ul id="hot">
				     <li>
						<div class="row">
                  		<?php
                  		
						$result = mysql_query("SELECT * FROM san_pham WHERE id_danh_muc = (select id_danh_muc from san_pham WHERE id_san_pham = '$id' ) LIMIT 0,3");
                  		while ($rows = mysql_fetch_array($result)) {				  
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
                  		$result = mysql_query("SELECT * FROM san_pham WHERE id_danh_muc = (select id_danh_muc from san_pham WHERE id_san_pham = '$id' ) LIMIT 3,2");
                  		while ($rows = mysql_fetch_array($result)){				  
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
					 
                  </ul> 
               </div>
			   </div>
			   <div class="featured-products">
			   <h3 class="title"><strong>Same</strong> Manufacturelist</h3>
                  <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
				  <div class="container">
              
                  <ul id="featured">
				     <li>
						<div class="row">
                  		<?php
                  		
						$result = mysql_query("SELECT * FROM san_pham WHERE id_nhasx = (select id_nhasx from san_pham WHERE id_san_pham = '$id' ) LIMIT 0,3");
                  		while ($rows = mysql_fetch_array($result)) {				  
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
                  		$result = mysql_query("SELECT * FROM san_pham WHERE id_danh_muc = (select id_danh_muc from san_pham WHERE id_san_pham = '$id' ) LIMIT 3,2");
                  		while ($rows = mysql_fetch_array($result)){				  
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
					 
                  </ul> 
               </div>
			   </div>
			   
			   </div>
			   
			   <div class="clearfix"></div>
              
              <div class="clearfix">
              </div>
            </div>
            <div class="col-md-3">
              <div class="special-deal leftbar">
                <h4 class="title">
                  Special 
                  <strong>
                    Deals
                  </strong>
                </h4>
                <div class="special-item">
                  <div class="product-image">
                    <a href="#">
                      <img src="images/products/thum/products-01.png" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      Licoln Corner Unit
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
                <div class="special-item">
                  <div class="product-image">
                    <a href="#">
                      <img src="images/products/thum/products-02.png" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      Licoln Corner Unit
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
                <div class="special-item">
                  <div class="product-image">
                    <a href="#">
                      <img src="images/products/thum/products-03.png" alt="">
                    </a>
                  </div>
                  <div class="product-info">
                    <p>
                      Licoln Corner Unit
                    </p>
                    <h5 class="price">
                      $300.00
                    </h5>
                  </div>
                </div>
              </div>
              <div class="clearfix">
              </div>
              
              <div class="clearfix">
              </div>
              <div class="get-newsletter leftbar">
                <h3 class="title">
                  Get 
                  <strong>
                    newsletter
                  </strong>
                </h3>
                <p>
                  Casio G Shock Digital Dial Black.
                </p>
                <form>
                  <input class="email" type="text" name="" placeholder="Your Email...">
                  <input class="submit" type="submit" value="Submit">
                </form>
              </div>
              <div class="clearfix">
              </div>
              <div class="fbl-box leftbar">
                <h3 class="title">
                  Facebook
                </h3>
                <span class="likebutton">
                  <a href="#">
                    <img src="images/fblike.png" alt="">
                  </a>
                </span>
                <p>
                  12k people like Flat Shop.
                </p>
                <ul>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                </ul>
                <div class="fbplug">
                  <a href="#">
                    <span>
                      <img src="images/fbicon.png" alt="">
                    </span>
                    Facebook social plugin
                  </a>
                </div>
              </div>
              <div class="clearfix">
              </div>
            </div>
          </div>
          <div class="clearfix">
          </div>
          <div class="our-brand">
            <h3 class="title">
              <strong>
                Our 
              </strong>
              Brands
            </h3>
            <div class="control">
              <a id="prev_brand" class="prev" href="#">
                &lt;
              </a>
              <a id="next_brand" class="next" href="#">
                &gt;
              </a>
            </div>
            <ul id="braldLogo">
              <li>
                <ul class="brand_item">
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/themeforest.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/photodune.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/activeden.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <ul class="brand_item">
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/themeforest.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/photodune.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/activeden.png" alt="">
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="brand-logo">
                        <img src="images/envato.png" alt="">
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="footer">
        <div class="footer-info">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="footer-logo">
                  <a href="#">
                    <img src="images/logo.png" alt="">
                  </a>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <h4 class="title">
                  Contact 
                  <strong>
                    Info
                  </strong>
                </h4>
                <p>
                  No. 08, Nguyen Trai, Hanoi , Vietnam
                </p>
                <p>
                  Call Us : (084) 1900 1008
                </p>
                <p>
                  Email : michael@leebros.us
                </p>
              </div>
              <div class="col-md-3 col-sm-6">
                <h4 class="title">
                  Customer
                  <strong>
                    Support
                  </strong>
                </h4>
                <ul class="support">
                  <li>
                    <a href="#">
                      FAQ
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Payment Option
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Booking Tips
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Infomation
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-md-3">
                <h4 class="title">
                  Get Our 
                  <strong>
                    Newsletter 
                  </strong>
                </h4>
                <p>
                  Lorem ipsum dolor ipsum dolor.
                </p>
                <form class="newsletter">
                  <input type="text" name="" placeholder="Type your email....">
                  <input type="submit" value="SignUp" class="button">
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright-info">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <p>
                  Copyright © 2012. Designed by 
                  <a href="#">
                    Michael Lee
                  </a>
                  . All rights reseved
                </p>
              </div>
              <div class="col-md-6">
                <ul class="social-icon">
                  <li>
                    <a href="#" class="linkedin">
                    </a>
                  </li>
                  <li>
                    <a href="#" class="google-plus">
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                    </a>
                  </li>
                  <li>
                    <a href="#" class="facebook">
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript==================================================-->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js">
    </script>
    <script type="text/javascript" src="js/bootstrap.min.js">
    </script>
    <script defer src="js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js">
    </script>
    <script type="text/javascript" src='js/jquery.elevatezoom.js'>
    </script>
    <script type="text/javascript" src="js/script.min.js" >
    </script>
  </body>
</html>