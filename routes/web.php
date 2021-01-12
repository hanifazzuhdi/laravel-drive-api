<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::post('upload', function () {

    // Cloudinary
    $response = cloudinary()->upload(request('file')->getRealPath())->getSecurePath();

    // Google Drive Api
    // request()->file('file')->store("1_FHk4anvPIE8kYx0eGtVM2C4JaDFgu2F", "google");

    return back()
        ->with('success', 'File Berhasil diupload');
});
