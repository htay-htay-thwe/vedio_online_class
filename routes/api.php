<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CourseDataController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/courseData',[CourseDataController::class,'courseData']);
Route::post('/getMoreData',[CourseDataController::class,'getMoreData']);
Route::get('/weekData/{id}/{workShop}',[CourseDataController::class,'getWeekData']);
Route::post('/weekLesson/overview',[CourseDataController::class,'getOverview']);
Route::post('/video/data',[CourseDataController::class,'getVideo']);
Route::post('/done/status',[CourseDataController::class,'doneStatus']);
Route::post('user/register',[UserController::class,'userRegister']);
Route::post('/user/login',[UserController::class,'userLogin']);