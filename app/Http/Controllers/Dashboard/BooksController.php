<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    //
    public function index()
    {
        $books = Book::with('library' , 'category')->paginate();
        return view('dashboard.books.index',[
            'books' => $books
        ]);
    }
}
//
/*


         فئة الشعر العربي            مكتبة المجد    - محمد نجار - سلمان قرنفل

                                                                        الكتب
                                                            كتاب نكسة حزيران
                                                                كتاب يوتوبيا

                                                     الخصم 150      السعر 200









*/
