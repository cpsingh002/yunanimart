<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;

use App\Livewire\Admin\DashboardComponent;
use App\Livewire\Admin\Slider\SliderComponent;
use App\Livewire\Admin\Slider\AddSliderComponent;
use App\Livewire\Admin\Slider\EditSliderComponent;
use App\Livewire\Admin\Category\CategoryComponent;
use App\Livewire\Admin\Category\AddCategoryComponent;
use App\Livewire\Admin\Category\EditCategoryComponent;
use App\Livewire\Admin\Category\SubCategoryComponent;
use App\Livewire\Admin\Category\AddSubCategoryComponent;
use App\Livewire\Admin\Category\EditSubCategoryComponent;
Use App\Livewire\Admin\Brand\BrandComponent;
Use App\Livewire\Admin\Brand\AddBrandComponent;
Use App\Livewire\Admin\Brand\EditBrandComponent;
Use App\Livewire\Admin\MedType\MedTypeComponent;
Use App\Livewire\Admin\MedType\AddMedTypeComponent;
Use App\Livewire\Admin\MedType\EditMedTypeComponent;
use App\Livewire\Admin\Attribute\AttributeComponent;
use App\Livewire\Admin\Attribute\AddAttributeComponent;
use App\Livewire\Admin\Attribute\EditAttributeComponent;
use App\Livewire\Admin\Product\ProductComponent;
use App\Livewire\Admin\Product\AddProductComponent;
use App\Livewire\Admin\Product\EditProductComponent;
use App\Livewire\Admin\User\UserComponent;



Route::get('/dashboard',DashboardComponent::class)->name('admin.dashboard');
Route::get('/sliders',SliderComponent::class)->name('admin.sliders');
Route::get('/slider/add',AddSliderComponent::class)->name('admin.addslider');
Route::get('/slider/edit/{bid}',EditSliderComponent::class)->name('admin.editslider');
Route::get('/categories',CategoryComponent::class)->name('admin.categories');
Route::get('/category/add',AddCategoryComponent::class)->name('admin.addcategory');
Route::get('/category/edit/{category_slug}',EditCategoryComponent::class)->name('admin.editcategory');
Route::get('/subcategories',SubCategoryComponent::class)->name('admin.subcategories');
Route::get('/subcategory/add',AddSubCategoryComponent::class)->name('admin.addsubcategory');
Route::get('/subcategory/edit/{scategory_slug}',EditSubCategoryComponent::class)->name('admin.editsubcategory');

Route::get('/brands',BrandComponent::class)->name('admin.brands');
Route::get('/brands/add',AddBrandComponent::class)->name('admin.addbrand');
Route::get('/brands/edit/{br_id}',EditBrandComponent::class)->name('admin.editbrand');

Route::get('/medtypes',MedTypeComponent::class)->name('admin.medtypes');
Route::get('/medtypes/add',AddMedTypeComponent::class)->name('admin.addmedtype');
Route::get('/medtypes/edit/{m_id}',EditMedTypeComponent::class)->name('admin.editmedtype');

Route::get('/attributes',AttributeComponent::class)->name('admin.attributes');
Route::get('/attributes/add',AddAttributeComponent::class)->name('admin.addattribute');
Route::get('/attributes/edit/{att_id}',EditAttributeComponent::class)->name('admin.editattribute');

Route::get('/products',ProductComponent::class)->name('admin.products');
Route::get('/product/add',AddProductComponent::class)->name('admin.addproduct');
Route::get('/product/edit/{pid}',EditProductComponent::class)->name('admin.editproduct');

Route::get('/admin/users',UserComponent::class)->name('admin.users');