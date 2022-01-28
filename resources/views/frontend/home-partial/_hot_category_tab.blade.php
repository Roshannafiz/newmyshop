<div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!-- ============================================== SCROLL TABS ============================================== -->
            <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                <div class="more-info-tab clearfix">
                    <h3 class="new-product-title pull-left">Hot Category</h3>
                    <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                        <li class="active">
                            <a data-transition-type="backSlide" href="">All</a>
                        </li>
                        @foreach ($activeCategories as $category)
                            <li>
                                <a data-transition-type="backSlide"
                                    href="?category={{ $category['url'] }}">{{ $category['category_name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <!-- /.nav-tabs -->
                </div>
                <div class="tab-content">
                    <div class="tab-pane in active" id="all">
                        <div class="product-slider">
                            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                @foreach ($products_by_categories as $products_by_category)
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="detail.html"><img
                                                                src="{{ asset('admin/images/upload-product/large/' . $products_by_category->main_image) }}"
                                                                alt="" /></a>
                                                    </div>
                                                    <!-- /.image -->

                                                    <div class="tag new"><span>new</span></div>
                                                </div>
                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a href="#">
                                                            {{ $products_by_category->product_name }}
                                                        </a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>
                                                    <div class="product-price">
                                                        <span class="price">
                                                            ${{ $products_by_category->product_regular_price }}
                                                        </span>
                                                    </div>
                                                    <!-- /.product-price -->
                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button data-toggle="tooltip"
                                                                    class="btn btn-primary icon" type="button"
                                                                    title="Add Cart">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                </button>
                                                                <button class="btn btn-primary cart-btn" type="button">
                                                                    Add to cart
                                                                </button>
                                                            </li>
                                                            <li class="lnk wishlist">
                                                                <a data-toggle="tooltip" class="add-to-cart"
                                                                    href="detail.html" title="Wishlist">
                                                                    <i class="icon fa fa-heart"></i>
                                                                </a>
                                                            </li>
                                                            <li class="lnk">
                                                                <a data-toggle="tooltip" class="add-to-cart"
                                                                    href="detail.html" title="Compare">
                                                                    <i class="fa fa-signal" aria-hidden="true"></i>
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
                        </div>
                    </div>
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- ============================================== SCROLL TABS : END ============================================== -->
        </div>
    </div>
</div>
