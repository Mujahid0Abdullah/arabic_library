<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Cart;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
      $cookieId = request()->cookie('cart_cookie_id');
    $cartItems = Cart::where('cookie_id',  $cookieId)->with('book')->get();
        $books = Book::where('status', 'active')
        ->latest()
        ->take(8)
        ->get();

        view()->share('cartItems', $cartItems);
        return view('front.home',[
          'books' => $books, 
        ]);
    }
}
