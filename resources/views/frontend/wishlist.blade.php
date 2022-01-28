@extends('frontend.Layouts')
@section('content')
    <div class="body-content outer-top-xs">
        <div class="container">
            <div id="AppendWishlistItems">
                @include('frontend.ajax_wishlist_items')
            </div>
        </div>
    </div>
@endsection
