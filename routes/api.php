<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/projects', function() {
    return response()->json([
        'type1' => "Backend",
        'type2' => "Full Stack",
        'type3' => "Portofolio website",
        'type4' => "Ecommerce"
    ]);
});
