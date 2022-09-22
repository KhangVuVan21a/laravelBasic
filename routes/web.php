<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
// Route::get("contact",[PagesController::class,'getContact']);
// Route::get("about",[PagesController::class,'getAbout']);
// Route::get("/",[PagesController::class,'getIndex']);
// Route::get('Contact', function () {
//     return view('contact');
// });
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home',function(){
    return view('index');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/contact',function(){
    return view('contact');
});
Route::resource("posts",PostController::class);
Route::get('/check/{string}/{id}',function($id,$string){
    return "id = ".$id.'+ string = '.$string;
})->where('id','[0-9]+');
Route::middleware('auth.admin')->prefix('PostControl')->Group(function(){
    Route::get('/',[PostController::class,'index'])->middleware('auth.admin.product');
    Route::get('/Category/{id}',[PostController::class,'getCategory']);
    Route::post('/Category/{id}',[PostController::class,'updateCategory']);
});
Route::get('/homeposts',function(){
    $title = 'Laravel title !';
    $maintext = 'Home Post laravel!';
    $dataset = [
        'titleData'=> $title,
        'maintext' => $maintext
    ];
    return view('posts.home',$dataset);
});
Route::get('demoResponse',function(){
   $headerRes=[
        'name'=>'Laravel 9.0',
        'lesson'=>'check lesson!',
        'user'=>'Khang',
   ]; 
   return $headerRes;
});

