<?php
use App\Models\Product;
use App\Models\Wishlist;
?>
<!-- ============================================== New PRODUCTS: START ============================================== -->
<div class="container">
    <section class="section featured-product wow fadeInUp">
        <h3 class="section-title">New products</h3>
        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            @foreach ($newProducts as $newProduct)
                <div class="item item-carousel">
                    <div class="products">
                        <div class="product">
                            <div class="product-image">
                                <div class="image">
                                    <a href="{{ url('product_view/' . $newProduct['id']) }}">
                                        <img src="{{ asset('admin/images/upload-product/large/' . $newProduct['main_image']) }}"
                                            alt="" />
                                    </a>
                                </div>
                            </div>

                            <div class="product-info text-left">
                                <h3 class="name">
                                    <a href="{{ url('product_view/' . $newProduct['id']) }}">
                                        {{ $newProduct['product_name'] }}
                                    </a>
                                </h3>
                                <div class="rating rateit-small"></div>
                                <div class="description"></div>
                                <div class="product-price">
                                    <?php $discounted_price = Product::getDiscountedPrice($newProduct['id']); ?>
                                    <!------------- Seal Price --------->
                                    <span class="price">
                                        @if ($discounted_price > 0)
                                            <del>${{ $newProduct['product_seal_price'] }}</del>
                                            <span
                                                style="color: #59B210; font-size: 17px">${{ $discounted_price }}</span>
                                        @else
                                            ${{ $newProduct['product_seal_price'] }}
                                        @endif
                                    </span>
                                </div>
                            </div>
                            <!-- /.product-info -->
                            <div class="cart clearfix animate-effect">
                                <div class="action">
                                    <ul class="list-unstyled">
                                        <li class="add-cart-button btn-group">
                                            <a href="{{ url('product_view/' . $newProduct['id']) }}"
                                                style="text-align: center" class="btn btn-primary icon">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.action -->
                            </div>
                            <!-- /.cart -->
                        </div>
                        <!-- /.product -->
                    </div>
                    <!-- /.products -->
                </div>
            @endforeach
        </div>
    </section>
</div>
<!-- ============================================== NEW PRODUCTS : END ============================================== -->
