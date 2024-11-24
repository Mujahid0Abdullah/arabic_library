<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Pest\Bootstrappers\BootExcludeList;

class Cart extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $fillable = [
        'cookie_id',
        'user_id',
        'book_id',
        'quantity',
    ];


    // event
    //creating created
    // updating updated
    //deleting deleted
    //Observers
    protected static function booted() {
        static::creating(function(Cart $cart) {
            $cart->id = Str::uuid();
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault([
            'name' => 'Private',
        ]);
    }
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
