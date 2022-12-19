<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    });
    Route::post('/register',[auth::class,'register']);
    Route::post('/login'   ,[auth::class,'login']);



      Route::group(['middleware' => ['auth:sanctum']], function() {
      Route::get('index',   [PersonController::class, 'index']);
      Route::get('indexexpert',   [PersonController::class, 'indexexpert']);// جلب الخبراء
      Route::post('logout',   [auth::class, 'logout']);
      Route::get('indexconst',   [PersonController::class, 'indexconst']); // بحث عن تصنيف
      Route::post('serachexpert/{name}',   [PersonController::class, 'serachexpert']); // بحث عن خبير

    });


