<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Address;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert', function () {
    $user = User::findOrFail(1);

    $address = new Address(['name'=>'221B Baker Street avenue ']);

    $user->address()->save($address);
});

Route::get('/update', function() {
    $address = Address::whereUserId(1)->first();

    $address->name = " 2111 Update avenue , Alaska";

    $address->save();

});
