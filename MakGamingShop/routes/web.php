<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\BotManController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [HomeController::class, "index"]);

Route::get("/users", [AdminController::class, "user"]);

Route::get("/deleteuser/{id}", [AdminController::class, "deleteuser"]);


//gpu routes
Route::get("/deletegpumenu/{id}", [AdminController::class, "deletegpumenu"]);

Route::get("/updategpumenu/{id}", [AdminController::class, "updategpumenu"]);

Route::post("/updategpu/{id}", [AdminController::class, "updategpu"]);

Route::get("/gpumenu", [AdminController::class, "gpumenu"]);

Route::post("/uploadgpu", [AdminController::class, "uploadgpu"]);


//ram routes
Route::get("/rammenu", [AdminController::class, "rammenu"]);

Route::post("/uploadram", [AdminController::class, "uploadram"]);

Route::get("/deleterammenu/{id}", [AdminController::class, "deleterammenu"]);

Route::get("/updaterammenu/{id}", [AdminController::class, "updaterammenu"]);

Route::post("/updateram/{id}", [AdminController::class, "updateram"]);


//keyboard routes
Route::get("/keyboardmenu", [AdminController::class, "keyboardmenu"]);

Route::post("/uploadkeyboard", [AdminController::class, "uploadkeyboard"]);

Route::get("/deletekeyboardmenu/{id}", [AdminController::class, "deletekeyboardmenu"]);

Route::get("/updatekeyboardmenu/{id}", [AdminController::class, "updatekeyboardmenu"]);

Route::post("/updatekeyboard/{id}", [AdminController::class, "updatekeyboard"]);


//monitor routes
Route::get("/monitormenu", [AdminController::class, "monitormenu"]);

Route::post("/uploadmonitor", [AdminController::class, "uploadmonitor"]);

Route::get("/deletemonitormenu/{id}", [AdminController::class, "deletemonitormenu"]);

Route::get("/updatemonitormenu/{id}", [AdminController::class, "updatemonitormenu"]);

Route::post("/updatemonitor/{id}", [AdminController::class, "updatemonitor"]);




Route::post("/contact", [AdminController::class, "contact"]);

Route::get("/viewcontact", [AdminController::class, "viewcontact"]);



Route::get("/redirects", [HomeController::class, "redirects"]);

Route::get("/storeitems", [HomeController::class, "storeitems"]);

Route::get("/order", [OrderController::class, "order"]);


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

//botman chatbox
Route::get('/botman', [BotManController::class, 'handle']);

Route::post('/botman', [BotManController::class, 'handle']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
