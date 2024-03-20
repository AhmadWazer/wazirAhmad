<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\RegistrationController;
//use App\Models\students;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
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

Route::get('/',function(){
    return view('welcome');
});
Route::get('/register',[RegistrationController::class,'index']);

Route::post('/register',[RegistrationController::class,'register']);

Route::group(['prefix'=>'/students'], function(){

Route::get('/create',[StudentController::class,'create'])->name('student.create');
//Route::get('/students', 'App\Http\Controllers\StudentController@index');

Route::get('/view',[StudentController::class,'view'])->name('students.view');

Route::get('/trash',[StudentController::class,'trash'])->name('students.trash');

Route::get('/delete/{id}', [StudentController::class,'delete'])->name('students.delete');

Route::get('/forceDelete/{id}', [StudentController::class,'forceDelete'])->name('students.forceDelete');

Route::get('/restore/{id}', [StudentController::class,'restore'])->name('students.restore');

Route::get('/edit/{id}', [StudentController::class,'edit'])->name('students.edit');

Route::post('/update/{id}', [StudentController::class,'update'])->name('students.update');

Route::post('/',[StudentController::class,'store']);
//Route::post('/students', 'App\Http\Controllers\StudentController@store');
});

/*session hendelling
Route::get('get-all-session', function(request $request)
{
    $session = session()->all();
    p($session);
});

Route::get('set-session', function(request $request)
{
    $request->session()->put('uesr_name', 'AIMS');
    $request->session()->put('user_id', '123');
    $request->session()->flash('ststus','success');
    return redirect('get-all-session');
});

Route::get('destory-session', function()
{
    session()->forget(['user_name','user_id']);
    return redirect('get-all-session');
});*/