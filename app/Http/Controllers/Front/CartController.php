<?php

namespace App\Http\Controllers\Front;
use Illuminate\Support\Str;
use App\Models\Cart;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    
    public function update(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cookieId = $request->cookie('cart_cookie_id') ?? (string) Str::uuid();
        cookie()->queue(cookie('cart_cookie_id', $cookieId, 60 * 24 * 30)); // 30 gün geçerli çerez

        $cart = Cart::updateOrCreate(
            [
            'cookie_id' => $cookieId,
            'book_id' => $request->book_id,
        ],
        [
            'user_id' => Auth::user()->id,
            'quantity' => $request->quantity,
        ]
        
        );
        return redirect()->route(Route::currentRouteName())
        ->with('info' , 'category Updated successfuly');
    }
}
