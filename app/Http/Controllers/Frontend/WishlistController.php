<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class WishlistController extends Controller
{

    public function index()
    {
        $userWishlistItems = Wishlist::userWishlistItems();
        return view('frontend.wishlist', compact('userWishlistItems'));
    }



    public function update_wishlist(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            $countWishlist = Wishlist::countWishlist($data['product_id']);
            if ($countWishlist == 0) {
                // Add Product User Wiahlist
                $wishlist = new Wishlist();
                $wishlist->user_id = Auth::user()->id;
                $wishlist->product_id = $data['product_id'];
                $wishlist->save();
                return response()->json(['status' => true, 'action' => 'add']);
            } else {
                // Remove Product Wishlist
                Wishlist::where(['user_id' => Auth::user()->id, 'product_id' => $data['product_id']])->delete();
                return response()->json(['status' => true, 'action' => 'remove']);
            }
        }
    }

    // Delete Wishlist Item
    public function delete_wishlist(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            Wishlist::where('id', $data['wishlistid'])->delete();
            $userWishlistItems = Wishlist::userWishlistItems();
            return response()->json([
                'view' => (string)View::make('frontend.ajax_wishlist_items')->with(compact('userWishlistItems'))
            ]);
        }
    }
}
