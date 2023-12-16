<?php

use Illuminate\Support\Facades\Route;
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
use App\livewire\Frontend\OrderDetailsComponent;
use App\Livewire\Frontend\ShopComponent;
use App\Livewire\Frontend\ProductDetailsComponent;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', HomeComponent::class)->name('index');
Route::get('/about-us',AboutUsComponent::class)->name('about-us');
Route::get('/contact-us',ContactUsComponent::class)->name('contact-us');
Route::get('/blogs',BlogComponent::class)->name('blogs');
Route::get('/blog/slug',BlogDetailsComponent::class)->name('blog-details');
Route::get('/upload-prescription',UploadPrescriptionComponent::class)->name('upload-prescription');
Route::get('/wishlist',WishlistComponent::class)->name('wishlist');
Route::get('/cart',CartComponent::class)->name('cart');
Route::get('/check-out',CheckOutComponent::class)->name('check-out');
Route::get('/orders',OrdersComponent::class)->name('orders');
Route::get('/order/id',OrderDetailsComponent::class)->name('order-details');
Route::get('/shop',ShopComponent::class)->name('shop');
Route::get('/product/slug',ProductDetailsComponent::class)->name('product-details');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
