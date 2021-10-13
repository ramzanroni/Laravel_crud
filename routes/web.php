<?php

use App\Http\Controllers\GetdataController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UserController;

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserinfoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductviewController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;

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
Route::get('/hello', function () {
    return view('hello');
});
Route::get('user/{id}', [UserController::class, 'show']);
Route::get('test', [TestController::class, 'test']);
Route::get('blade/{user_name}', [UserController::class, 'blade']);
Route::get('user_page', function () {
    return view('user');
});
Route::get('about_page', function () {
    return view('about');
});
Route::get('/lodeView', [UsersController::class, 'lodeView']);
Route::post('getdata', [UsersController::class, 'getData']);
Route::get('/login', function () {
    return view('testInput');
});
Route::get('/dataview', [UsersController::class, 'dataview']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/member', [MembersController::class, 'getData']);
Route::get("/apiData", [UsersController::class, 'index']);
Route::post('/http_handel_data', [GetdataController::class, 'http_handel']);
Route::get('/http_handel_data_get', [GetdataController::class, 'http_handel_data_get']);
Route::view('http_handel', 'http_request');
// Route::view('checkSession', 'session');
Route::post('/checkSessionData', [UserAuth::class, 'userVerify']);
Route::view("profile", 'sessionView');
Route::get('/logout', function () {
    if (session()->has("username")) {
        session()->put("username", null);
    }
    return redirect('checkSession');
});
Route::get('/checkSession', function () {
    if (session()->has("username")) {
        return redirect('profile');
    }
    return view('session');
});
Route::view('flashsession', 'flashsession');
Route::post('/flashsesssion_data', [UserAuth::class, 'flashSession']);
Route::view('file_submit', 'file_upload');
Route::post('up_file', [UserAuth::class, 'upFile']);
Route::view('/saveData', 'saveDataDB');
Route::post('/save_data_db', [ProductController::class, 'data_insert']);
Route::get('/pagination', [ProductviewController::class, 'show']);
Route::get('/delete/{id}', [ProductviewController::class, 'delete']);
Route::get('/update/{id}', [ProductviewController::class, 'selectUpData']);
Route::post('/update_data', [ProductviewController::class, 'updateData']);
Route::get('/view_student_qb', [StudentController::class, 'Operations']);
Route::get('/stu_delete/{id}', [StudentController::class, 'stu_delete']);
Route::view('/add_student', 'add_student');
Route::post('/insert_student', [StudentController::class, 'insert_student']);
Route::get('/update_student/{id}', [StudentController::class, 'update_student']);
Route::post('/update_student_data', [StudentController::class, 'update_student_data']);
Route::get('employee', [EmployeeController::class, 'employee']);

//Jetstrim