<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\User;
use App\Http\Controllers\MembershipController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (auth()->check()) {
        if (auth()->user()->role_id == 1) {
            return view('welcome', [
                'users' => User::where('id', '!=', auth()->id())->paginate(10),
            ]);
        } else  return view('welcome');
    } else
        return view('welcome');
});
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [SessionsController::class, 'create']);
Route::post('/sessions', [SessionsController::class, 'store']);
Route::get('/logout', [SessionsController::class, 'destroy']);
Route::post('/membership/{membership:id}/{type}',[MembershipController::class,'update']);
