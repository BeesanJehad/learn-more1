<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('users',function(){
    return 'beesan';
});

// Route::get('users/profile}',function(){
//     return 'users profile';
// });

// Route::get('users/profile/{id}',function($id){
//     return 'users profile ' . $id;
// });

// Route::get('users/profile/{id?}',function($id = null){
//     return 'users profile ' . $id;
// });

// Route::get('users/profile/{id?}',function($id = null){
//     if($id ==  null){
//         return 'response id';
//     }else{
//         return 'users profile ' . $id;
//     }
// });

Route::get('news/{id?}',function($id = null){
    if($id != null){
        return 'news '. $id ;
    }else{
        return 'all news ....';
    }
});


