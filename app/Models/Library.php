<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;
    protected $fillable = [
       'name' ,
        'description',
        'status',
        'date',

    ];
    public function books()
    {
        return $this->hasMany(Book::class,'library_id' , 'id'); //  hasMany relationship
    }
}

