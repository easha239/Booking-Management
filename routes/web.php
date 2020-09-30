<?php

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

use Illuminate\Support\Facades\DB;

Route::post('registeruser', function (\Illuminate\Http\Request $request){
    DB::table('users')->insert(['email' => $request->email, 'password' => $request->password]);
    return redirect()->route('/');
});

Route::get('jsonreturn', function (\Illuminate\Http\Request $request){
    return response()->json([
        'name' => 'easha',
        'email'=>'easha@gmail.com'],
        201);
});

Route::get('catalog-view', function (\Illuminate\Http\Request $request){
    $foo = 'bar';
    return view('welcome')->with([$foo]);
});