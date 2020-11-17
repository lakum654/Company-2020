<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyCRUDController;
use App\Http\Controllers\CRUDController;
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

//This Route is Craeated for send email testing system
Route::get('send',['App\Http\Controllers\EmailController','html_email']);

$path = 'App\Http\Controllers';

Route::group(['middleware'=>'guest'],function(){
Route::view('login','auth.login');
Route::view('register','auth.register');
Route::view('otp-verify','auth.otp_verify');
});

//This all Routes are for Authentication System
Route::post('login',$path.'\LoginController@index')->name('login');
Route::any('logout',$path.'\LoginController@logout')->name('logout');
Route::post('register',$path.'\RegisterController@index')->name('register');
Route::post('otp-verify',$path.'\VerifyController@index')->name('otp-verify');

//Without Login users can't open this home page
ROute::group(['middleware'=>'auth'],function(){
Route::view('/home','home');
});

//Using this Route we have display records of Employees Table By Yajra DataTable
Route::get("employee",$path.'\EmployeeController@index');

//This Route is for Single And Multiple File Uploads.
Route::view('/fileupload','fileupload');
Route::post('single-upload',$path.'\FileController@singleUpload');
Route::post('multiple-upload',$path.'\FileController@multileUpload');

//This Route Created for Companies Yajra DataTable.
Route::resource('companies', CompanyCRUDController::class);
Route::post('delete-company', [CompanyCRUDController::class,'destroy']);

//This Routes Created for Simple Crud Application.
Route::resource('crud',CRUDController::class);
Route::any('delete/{id}', [CRUDController::class,'destroy']);

//This Routes is Created for Import & Export Excel File 

Route::view('import_export','import_export');
Route::get('export', $path.'\ExcelController@export')->name('export');
Route::post('import', $path.'\ExcelController@import')->name('import');


//This ROute is create for PDF Generate
Route::get('generate-pdf', $path.'\PDFController@generatePDF');
Route::view('users','users');
Route::get('users-pdf', $path.'\PDFController@usersPDF');
Route::get('employee-pdf', $path.'\PDFController@employeePDF');


//This ROute is Ajaxcrud

Route::get('ajax/',$path.'\Ajaxcrudcontroller@index');
Route::any('ajax/record',$path.'\Ajaxcrudcontroller@all');
Route::any('ajax/create',$path.'\Ajaxcrudcontroller@create');