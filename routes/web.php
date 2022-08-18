<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\Items2;
use App\Http\Controllers\Items3;
use App\Http\Controllers\paramsController;
use App\Http\Controllers\PracticeEloController;
use App\Http\Controllers\UploadFileController;
use Whoops\Run;

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

// get user page - return string
Route::get('/users', function (){
    return 'user page';
});

// route to users  - get array(JSON)
Route::get('/user-array', function(){
    return [1, '2', 3];
});

// route to users - get array (JSON OBJECT)
Route::get('/users-json', function(){
    return response ()->json([
        'name' => 'Sample',
        'projectName' => 'Laravel Project'
    ]);
});

// route to users - return function
Route::get('/users-getFunction', function(){
    return redirect('/');
});
// ------------------------------------------------------------------------------------------------------------------------------------------- 


Route::get('/home', function(){
    return view('home');
})->name('home');


// Route to items - return class
// Route::get('/items2', [Items2::class, 'index']);

Route::get('/items', [ItemsController::class, 'index'])->name('items');
Route::get('/items2', [Items2::class, 'index'])->name('items2');
Route::get('/items3', [Items3::class, 'index'])->name('items3');

Route::get('/params/{id}', [paramsController::class, 'index'])->name('params');
// Route::get('/practice-crud', [PracticeEloController::class, 'index'])->name('practice');
Route::resource('/practice', PracticeEloController::class);
Route::get('/upload',[UploadFileController::class, 'index'])->name('upload');

// Route::get('/download{fileUrl}',[UploadFileController::class, 'download'])->name('download');
Route::get('/files', [UploadFileController::class, 'download'])->name('files');

Route::post('/uploadFile', [UploadFileController::class, 'store'])->name('uploadFile');
// Route::get('/params/{id}',
//  [paramsController::class, 'index'])->where('id', '[0-9]+')->name('params');

Route::get('/items2/about', [Items2::class, 'about']);

// Route to items - return class (not working)
// Route::get('/items', [ItemsController::class, 'index']);

//Laravel 8 new method - return class (not working)
// Route::get('/items3', 'App\Http\Controllers\Item3@index');

//Create route with parameters
// Route::get('/params/{id}', [paramsController::class, 'index']);

// Pattern in params integer 
// Route::get('/params/{id}',
//     [paramsController::class, 'index'])->where('id', '[0-9]+');

// Pattern in params strings and integer
// Route::get('/params/{id}',
//     [paramsController::class, 'index'])->where('id', '[a-zA-Z]+[0-9]+');

// Pattern in params strings 
// Route::get('/params/{id}',
//     [paramsController::class, 'index'])->where('id', '[a-zA-Z]+');


// multiple patterns 
// Route::get('/params/{name}/{id}',
//     [paramsController::class, 'index'])->where([
//         'name' => '[a-z]+',
//         'id'  => '[0-9]+'
//     ]);