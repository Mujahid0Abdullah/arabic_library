<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [ // White List
       'user_id',
       'first_name', // first_name // max
       'last_name',        // smith
       'phone_number',
       'age',
       'birthday',
       'gender',
       'street_address',
       'city',
       'state',
       'postal_code',
       'country',
       'local',
       'image',

    ];
    // mvc

//     protected $guarded =[ // Black List
// 'local',
//     ];

protected $primaryKey ='user_id';
// K
public function user()
{
    return $this->belongsTo(User::class,'user_id' , 'id');
}




}
