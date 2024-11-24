<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'library_id',
        'category_id',
        'description',
        'image',
        'author',
        'price',
        'compare_price',
        'rating',
        'featured',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class , 'category_id' ,'id');
    }
    public function library()
    {
        return $this->belongsTo(Library::class , 'library_id' ,'id');
    }
     public function tags()
     {
        return $this->belongsToMany(Tag::class);
     }




}
