<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Livewire\Frontend\HomeComponent;
use App\Livewire\Frontend\AboutUsComponent;
use App\Livewire\Frontend\ContactUsComponent;
use App\Livewire\Frontend\BlogComponent;
use App\Livewire\Frontend\BlogDetailsComponent;
use App\Livewire\Frontend\UploadPrescriptionComponent;
use App\Livewire\Frontend\WishlistComponent;
use App\Livewire\Frontend\CartComponent;
use App\Livewire\Frontend\CheckOutComponent;
use App\Livewire\Frontend\OrdersComponent;
use App\Livewire\Frontend\OrderDetailsComponent;
use App\Livewire\Frontend\ShopComponent;
use App\Livewire\Frontend\ProductDetailsComponent;
use App\Livewire\Frontend\CategorySearchComponent;
use App\Livewire\Frontend\BrandComponent;
use App\Livewire\Frontend\BrandSearchComponent;
use App\Livewire\ThankyouComponent;

use App\Livewire\User\AccountComponent;
use App\Livewire\User\AddressComponent;

use App\Livewire\Frontend\SearchComponent;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/jjjjjj',[HomeController::class, 'sdsdsd']);

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomeComponent::class);
Route::get('/index', HomeComponent::class)->name('index');
Route::get('/about-us',AboutUsComponent::class)->name('about-us');
Route::get('/contact-us',ContactUsComponent::class)->name('contact-us');
Route::get('/blogs',BlogComponent::class)->name('blogs');
Route::get('/blog/slug',BlogDetailsComponent::class)->name('blog-details');

Route::get('/wishlist',WishlistComponent::class)->name('wishlist');
Route::get('/cart',CartComponent::class)->name('cart');
Route::get('/check-out',CheckOutComponent::class)->name('check-out');

Route::get('/thankyou',ThankyouComponent::class)->name('thankyou');

Route::get('/prodcut/brands',BrandComponent::class)->name('product.brands');
Route::get('/products/{brand_slug}',BrandSearchComponent::class)->name('brand-products');


Route::get('/shop',ShopComponent::class)->name('shop');
Route::get('/product/{category_slug}/{scategory_slug?}',CategorySearchComponent::class)->name('product.category');
Route::get('/product-detail/{slug}',ProductDetailsComponent::class)->name('product-details');
Route::post('/uregisteor',[RegisterController::class,'uregisteor'])->name('udregisteor');
Route::post('/ulogin',[LoginController::class,'uloginauth'])->name('ulogin');
Route::get('/adminlogin',[LoginController::class,'adminlogin']);
Route::post('/adminlogin',[LoginController::class,'adminloginauth'])->name('adminlogin');

Route::get('/search', SearchComponent::class)->name('searchs');

Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/upload-prescription',UploadPrescriptionComponent::class)->name('upload-prescription');
    Route::get('/user/account', AccountComponent::class)->name('user.account');
    Route::get('/user/address', AddressComponent::class)->name('user.address');
    Route::get('/user/orders',OrdersComponent::class)->name('orders');
    Route::get('/order/{id}', OrderDetailsComponent::class)->name('order-details');
    
});
Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user/export', [App\Http\Controllers\HomeController::class, 'export']);
Route::get('/user/import', [App\Http\Controllers\UserImportController::class, 'show']);
Route::post('/user/import', [App\Http\Controllers\UserImportController::class, 'store']);
