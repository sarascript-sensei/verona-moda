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

Route::resource('products', ProductController::class);
Route::resource('groups', GroupController::class);
Route::get('/', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register_process', [\App\Http\Controllers\AuthController::class, 'register'])->name('register_process');
Route::get('/home', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');
/*Route::get('/products', [\App\Http\Controllers\ProductController::class, 'products'])->name('products');*/
Route::post('/login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');
Route::get('/interface', [\App\Http\Controllers\InterfaceController::class, 'index'])->name('interface_k');

Route::post('store', [\App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
//Route for storing the file
Route::post('store-file', [\App\Http\Controllers\ProductController::class, 'storeFile'])->name('products.store_file');
Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
//Route for submitting dropzone data
Route::post('/storeimage', 'ProductController@storeImage');

Route::get('add-to-cart/{id}', [\App\Http\Controllers\ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [\App\Http\Controllers\ProductController::class, 'updateCart'])->name('update.cart');
Route::delete('remove-from-cart', [\App\Http\Controllers\ProductController::class, 'remove'])->name('remove.from.cart');
