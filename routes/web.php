<?php

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

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
    Log::channel('slackInfo')->info('Page Welcome');
    return view('welcome');
});
/*
Route::get('/hello/{nom}',function(HttpRequest $request){
     //dd($request->nom);
    //$nom = "LOURIGA";
    return view('hello',[
        'nom'=>$request->nom,
    ]);
});
*/
Route::get('/salam/{nom}',[HomeController::class,'index']);
