<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Intl\Languages;
use Symfony\Component\Intl\Countries;
class ProfileController extends Controller
{
    //
    public function edit()  // edit($id)
    { // class locales not found
        $user = Auth::user();

        // 1 muhammed Elbedran 31 KM
      //  /dashboard/profile/edit Route
      return view('dashboard.profile.edit',[
        'user' =>$user,
       'countries' => Countries::getNames(), // getNames('ar'), // array  // default english language
   'locales' => Languages::getNames(),
      ]);

    }

    public function update(Request $request)
    {
       $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'age' => ['required'],
            'birthday' => ['nullable', 'date' , 'before:today'], //24 / 9 / 2024  // 25 / 9 / 2024
            'gender' => ['in:male,female'],
        ]);
         // 12 user :  muhammed muhammed@gmail.com 12345,
         // 12 profile : image age birthday

         // 1 user
        // 1 profile image
        // 1  update image
        // replace
        // $profile = 1u->1p
 /////////////////////////////////////// طريقة 1
        //  $user = Auth::user();
    //      $profile = $user->profile;
    //      if($profile->first_name) // fk
    //      {
    //        // $user=  $user->profile;
    //         $user->profile->update($request->all());
    //      }else{
    //         $request->merge([
    //           'user_id' => $user->id,
    //         ]);
    //   //      $user =  $user->profile();
    //         $user->profile()->create($request->all());
    //      }
////////////////////////////////////// طريقة 2
         $user = Auth::user();
         // 1 -> 1 update !data  create
         $user->profile->fill($request->all())->save();
         return redirect()->route('dashboard.profile.edit')
         ->with('update' , 'profile updated successfuly');


    }

}
