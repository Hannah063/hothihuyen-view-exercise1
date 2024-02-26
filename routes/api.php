<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('user')->group(function () {
    Route::get('/', function () {
        global $users;
        return $users; // Assuming $users is a predefined array
    });

    Route::get('/{id}', function ($id) {
        global $users;
        return $users[$id] ?? 'Cannot find this user with index ' . $id;
    })->where(['id' => '[0-9]+']);

    Route::get('/{userName}', function ($userName) {
        global $users;
        $user = collect($users)->firstWhere('name', $userName);

        return $user ?? 'Cannot find the user with name ' . $userName;
    })->where(['userName' => '[a-zA-Z]+']);

    Route::fallback(function () {
        return 'You cannot get like this!';
    });
});

Route::get('/user/{userIndex}/post/{postIndex}',function($userIndex,$postIndex){
    global $users;
    if(isset($users[$userIndex])){
        return $users[$userIndex]['posts'][$postIndex];
    }
});