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

Route::get('/', function () {
    global $users;
    return $users;
});

Route::get('/users', function ()  {
    global $users;
    $usersName = implode(', ', array_column($users, 'name'));
    return "<p>The users are: $usersName</p>";
});