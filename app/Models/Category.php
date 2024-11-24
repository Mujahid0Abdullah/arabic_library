<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [    // white list column
       'name',
       'desc',
        'status'
    ];
    protected $guarded = [    // black list column

     ];


     public static function rules()
     {
        return[
            'name' => 'required|min:3|max:8',
            // 'desc' => 'required|min:3|max:20',
            'desc' => [
             'required',
             'min:5',
             'max:20',

            ],
            'status' => 'in:active,inactive'
        ];
     }
     public function books()
     {
        return $this->hasMany(Book::class ,'category_id' ,'id');
     }


     // category 2
                //books
                    // 1 - nizar kabbani- 54,55
                    //2 - ahmad matar - 54,55
}
