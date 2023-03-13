<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProgramController;

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

Route::get('/', function (){
    return redirect('https://www.educastudio.com/');
});

Route::prefix('/category')->group(function(){
    Route::get('/marbel-edu-games', function(){
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    });

    Route::get('/riri-story-books', function(){
        return redirect('https://www.educastudio.com/category/riri-story-books');
    });

    Route::get('/kolak-kids-songs', function(){
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });
});

Route::get('news', function(){
    return redirect('https://www.educastudio.com/news');
});

Route::get('news/{title}', function($title){
    return redirect('https://www.educastudio.com/news/' . $title);
});

Route::prefix('/program')->group(function(){
    Route::get('/karir', [ProgramController::class, 'karir']);

    Route::get('/magang', [ProgramController::class, 'magang']);

    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganIndustri']);
});

Route::get('/about-us', function(){
    return redirect('https://www.educastudio.com/about-us');
});

Route::resource('/contact', ContactController::class)->only('index');



