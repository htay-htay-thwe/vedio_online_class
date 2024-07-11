<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;



Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',
])->group(function () {

Route::get('/video/upload',[VideoController::class,'getVideo'])->name('get#videoData');
Route::post('/video/upload',[VideoController::class,'videoUpload'])->name('video#upload');
Route::get('/user/graph',[VideoController::class,'userData'])->name('get#videoData');

});