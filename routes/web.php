<?php

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
use App\Models\User;
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Auth::routes(['verify' => true]);

Route::get('/', [App\Http\Controllers\HomeController::class,'index'])->name('home');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/createProduct', [App\Http\Controllers\ProductsController::class, 'create']);
Route::post('/storeProduct', [App\Http\Controllers\ProductsController::class, 'store']);
Route::post('/deleteProduct', [App\Http\Controllers\ProductsController::class, 'destroy'])->middleware(['password.confirm']);
Route::post('/editProduct', [App\Http\Controllers\ProductsController::class, 'edit']);
Route::get('/updateProduct', [App\Http\Controllers\ProductsController::class, 'update']);
Route::post('/searchProduct', [App\Http\Controllers\SearchController::class, 'search']);

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index']);

Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index']);
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index']);
Route::get('/team', [App\Http\Controllers\TeamController::class, 'index']);
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
Route::get('/account', [App\Http\Controllers\UserdetailsController::class, 'index']);
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index']);
Route::post('/cart/store', [App\Http\Controllers\CartController::class, 'store'])->middleware(['auth']);
Route::get('/viewaddedproducts', [App\Http\Controllers\ViewaddedproductsController::class, 'index']);
Route::get('/checkreview', [App\Http\Controllers\CheckreviewController::class, 'index']);
Route::get('/checkneworder', [App\Http\Controllers\CheckneworderController::class, 'index']);
Route::get('/checksoldorder', [App\Http\Controllers\ChecksoldorderController::class, 'index']);
Route::post('/userdetails', [App\Http\Controllers\UserdetailsController::class, 'index']);
Route::get('/verifyorder', [App\Http\Controllers\VerifyproductsController::class, 'index']);
Route::get('/contactmessage', [App\Http\Controllers\ContactMessageController::class, 'index']);
Route::post('/seller/store', [App\Http\Controllers\ShopController::class, 'store']);
Route::get('/productdetails/{id}', [App\Http\Controllers\ProductsController::class, 'show']);
Route::post('/buyer/account', [App\Http\Controllers\UserdetailsController::class, 'account']);
Route::post('/buynow', [App\Http\Controllers\CartController::class,'buy']);
Route::post('/contact/message', [App\Http\Controllers\ContactController::class,'store']);










Route::get('/admin_user_details', [App\Http\Controllers\AdminController::class, 'userdetails']);
Route::get('/admin_product_details', [App\Http\Controllers\AdminController::class, 'productdetails']);
Route::get('/reg_buyer', [App\Http\Controllers\AdminController::class, 'registeredbuyer']);
Route::get('/reg_seller', [App\Http\Controllers\AdminController::class, 'registerseller']);


Route::get('/verifyproduct/{id}', [App\Http\Controllers\AdminController::class, 'verifyproduct']);
Route::get('/unverifyproduct/{id}', [App\Http\Controllers\AdminController::class, 'unverifyproduct']);

Route::get('/verifyseller/{id}', [App\Http\Controllers\AdminController::class, 'verifyseller']);
Route::get('/unverifyseller/{id}', [App\Http\Controllers\AdminController::class, 'unverifyseller']);

Route::get('/verifybuyer/{id}', [App\Http\Controllers\AdminController::class, 'verifybuyer']);
Route::get('/unverifybuyer/{id}', [App\Http\Controllers\AdminController::class, 'unverifybuyer']);

Route::get('/orders', [App\Http\Controllers\AdminController::class, 'seeorders']);
Route::post('/successfulorder', [App\Http\Controllers\AdminController::class, 'successfulorder']);
Route::post('/unsuccessfulorder', [App\Http\Controllers\AdminController::class, 'unsuccessfulorder']);


Route::get('/contact/messages', [App\Http\Controllers\AdminController::class, 'seemessage']);





// Route::get('/productdetails/{id}','ProductsController@show');






// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
