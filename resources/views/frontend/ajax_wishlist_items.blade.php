<?php use App\Models\Product; ?>
<div class="shopping-cart">
    <div class="shopping-cart-table">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="cart-description item" >Image</th>
                        <th class="cart-product-name item" style="text-align: left">Product Name</th>
                        <th class="cart-sub-total item">Price</th>
                        <th class="cart-romove item">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total_price = 0; ?>
                    @foreach ($userWishlistItems as $userWishlistItem)
                        <tr>

                            <td class="cart-image">
                                <a class="entry-thumbnail" href="#">
                                    <img src="{{ asset('admin/images/upload-product/large/' . $userWishlistItem['products']['main_image']) }}"
                                        alt="">
                                </a>
                            </td>
                            <td class="cart-product-name-info">
                                <h4 class="cart-product-description" style="text-align: left">
                                    <a href="#">
                                        {{ $userWishlistItem['products']['product_name'] }}
                                    </a>
                                </h4>
                            </td>

                            <td class="cart-product-sub-total">
                                <span class="cart-sub-total-price">
                                    ${{ $userWishlistItem['products']['product_regular_price'] }}
                                </span>
                            </td>

                            <td class="romove-item">
                                <button data-wishlistid="{{ $userWishlistItem['id'] }}" type="button"
                                    class="icon wishlistItemDelete" style="border: none; font-size: 20px">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
