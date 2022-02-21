<section class="trending-products-area pt--30 pb--80 pt-md--20 pb-md--60">
                <div class="container-fluid">
                    <div class="row mb--40 mb-md--30">
                        <div class="col-12">
                            <h3 class="heading-secondary text-center">Recommend For You</h3>
                        </div>
                    </div>
                    <div class="row">

                                            <?php
                                                include('config.php');
                                                $query = "SELECT * FROM nbook  LIMIT 4";
                                                $query_run = mysqli_query($connection, $query);
                                                if(mysqli_num_rows($query_run) > 0)        
                                                {
                                                    while($row = mysqli_fetch_assoc($query_run))
                                                    {
                                                        $i=$row['new_id'];
                                            ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                            <div class="airi-product">
                                <div class="product-inner">
                                    <figure class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.php?itemno=<?php echo $row['new_id']; ?>">
                                                <img src="<?php echo 'assets/img/nbook/'.$row['image'];?>" alt="Product Image"
                                                    class="primary-image">
                                                <img src="<?php echo 'assets/img/nbook/'.$row['image'];?>" alt="Product Image"
                                                    class="secondary-image">
                                            </a>
                                        </div>
                                        <div class="airi-product-action">
                                            <div class="product-action">
                                                <a class="quickview-btn action-btn" href="product-details.php?itemno=<?php echo $row['new_id']; ?>"
                                                    data-toggle="tooltip" data-placement="top" title="Close view">
                                                    <i class="dl-icon-view"></i>
                                                </a>
                                                <form action="addtocart.php?itemno=<?php echo $row['new_id'];?>" method="post">
                                                    <input type="hidden" name="pid" value="<?php echo $row['new_id'];?>">
                                                    <p><input type="hidden" name="qty" value="1" min="1" style="width: 60px;"></p>
                                                
                                                    <input type="hidden" name="price" value="<?php echo $row['Price']; ?>">
                                                    <div class="icons">
                                                        <button type="submit" name="act" class="cart add_to_cart_btn action-btn"  data-toggle="tooltip" data-placement="top" title="Add to cart">
                                                            <i class="dl-icon-cart29"></i>
                                                        </button>
                                                    </div>
                                                
                                                </form>
                                                <a class="action-btn" href="checkout-direct.php?itemno=<?php echo $row['new_id'];?>"
                                                        data-toggle="tooltip" data-placement="top" title="Order Now">
                                                    <i class="fa fa-money"></i>
                                                </a>
                                                <!-- <a class="add_wishlist action-btn" href="wishlist.php"
                                                    data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                    <i class="dl-icon-heart4"></i>
                                                </a>
                                                <a class="add_compare action-btn" href="compare.php"
                                                    data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                    <i class="dl-icon-compare"></i>
                                                </a> -->
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="product-info">
                                        <h3 class="product-title">
                                            <a href="product-details.php?itemno=<?php echo $row['new_id']; ?>"><?php echo $row['newbook'].' by';?></a>
                                            <br><a href="product-details.php?itemno=<?php echo $row['new_id']; ?>"><?php echo $row['Author']; ?></a>
                                        </h3>
                                        <span class="product-price-wrapper">
                                            <span class="money text-white"><?php echo 'NRS. '.$row['Price']; ?></span>
                                            
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <?php }}?>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="newbook.php" class="heading-button">Shop Now</a>
                        </div>
                    </div>
                </div>
            </section>