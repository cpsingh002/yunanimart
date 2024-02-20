<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;

use App\Livewire\Admin\DashboardComponent;
use App\Livewire\Admin\Slider\SliderComponent;
use App\Livewire\Admin\Slider\AddSliderComponent;
use App\Livewire\Admin\Slider\EditSliderComponent;
use App\Livewire\Admin\Banner\BannerComponent;
use App\Livewire\Admin\Banner\AddBannerComponent;
use App\Livewire\Admin\Banner\EditBannerComponent;
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

use App\Livewire\Admin\Product2\Product2Component;
use App\Livewire\Admin\Product2\AddProduct2Component;
use App\Livewire\Admin\Product2\EditProduct2Component;

use App\Livewire\Admin\Tax\TaxComponent;
use App\Livewire\Admin\Tax\AddTaxComponent;
use App\Livewire\Admin\Tax\EditTaxComponent;

use App\Livewire\Admin\Coupon\CouponComponent;
use App\Livewire\Admin\Coupon\AddCouponComponent;
use App\Livewire\Admin\Coupon\EditCouponComponent;
use App\Livewire\Admin\Coupon\Coupon2Component;

 use App\Livewire\Admin\Prescription\PrescriptionComponent;
 
use App\Livewire\Admin\Order\OrderComponent;
use App\Livewire\Admin\Order\OrderDetailComponent;


use App\Livewire\Admin\Questions\QuestionComponent;
use App\Livewire\Admin\Questions\AllAnswersComponent;
use App\Livewire\Admin\Questions\QuestionAnswerComponent;
 
use App\Livewire\Admin\Reviews\ReviewsComponent;
use App\Http\Controllers\ReviewController;

use App\Livewire\Admin\Contact\ContactFormComponent;
use App\Livewire\Admin\Disease\BodyPartNamengComponent;
use App\Livewire\Admin\Disease\DiseaseComponent;

use App\Livewire\Admin\Brand\NewBrandComponent;

Route::get('post', Coupon2Component::class);
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('/dashboard',DashboardComponent::class)->name('admin.dashboard');
    Route::get('/sliders',SliderComponent::class)->name('admin.sliders');
    Route::get('/slider/add',AddSliderComponent::class)->name('admin.addslider');
    Route::get('/slider/edit/{sid}',EditSliderComponent::class)->name('admin.editslider');
    Route::get('/banners',BannerComponent::class)->name('admin.banners');
    Route::get('/banner/add',AddBannerComponent::class)->name('admin.addbanner');
    Route::get('/banner/edit/{bid}',EditBannerComponent::class)->name('admin.editbanner');
    Route::get('/categories',CategoryComponent::class)->name('admin.categories');
    Route::get('/category/add',AddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/category/edit/{category_slug}',EditCategoryComponent::class)->name('admin.editcategory');
    Route::get('/subcategories',SubCategoryComponent::class)->name('admin.subcategories');
    Route::get('/subcategory/add',AddSubCategoryComponent::class)->name('admin.addsubcategory');
    Route::get('/subcategory/edit/{scategory_slug}',EditSubCategoryComponent::class)->name('admin.editsubcategory');

    Route::get('/brands',BrandComponent::class)->name('admin.brands');
    Route::get('/newbrands',NewBrandComponent::class)->name('admin.newbrands');
    Route::get('/brands/add',AddBrandComponent::class)->name('admin.addbrand');
    Route::get('/brands/edit/{br_id}',EditBrandComponent::class)->name('admin.editbrand');

    Route::get('/medtypes',MedTypeComponent::class)->name('admin.medtypes');
    Route::get('/medtypes/add',AddMedTypeComponent::class)->name('admin.addmedtype');
    Route::get('/medtypes/edit/{m_id}',EditMedTypeComponent::class)->name('admin.editmedtype');

    Route::get('/attributes',AttributeComponent::class)->name('admin.attributes');
    Route::get('/attributes/add',AddAttributeComponent::class)->name('admin.addattribute');
    Route::get('/attributes/edit/{att_id}',EditAttributeComponent::class)->name('admin.editattribute');

    // Route::get('/products',ProductComponent::class)->name('admin.products');
    // Route::get('/product/add',AddProductComponent::class)->name('admin.addproduct');
    // Route::get('/product/edit/{product_slug}',EditProductComponent::class)->name('admin.editproduct');

    Route::get('/admin/users',UserComponent::class)->name('admin.users');

    Route::get('/products2',Product2Component::class)->name('admin.products2');
    Route::get('/product2/add',AddProduct2Component::class)->name('admin.addproduct2');
    Route::get('/product2/edit/{product_slug}',EditProduct2Component::class)->name('admin.editproduct2');


    Route::get('/taxs',TaxComponent::class)->name('admin.taxs');
    Route::get('/tax/add',AddTaxComponent::class)->name('admin.addtax');
    Route::get('/tax/edit/{bid}',EditTaxComponent::class)->name('admin.edittax');

    Route::get('/coupons',CouponComponent::class)->name('admin.coupons');
    Route::get('/coupon/add',AddCouponComponent::class)->name('admin.addcoupon');
    Route::get('/coupon/edit/{cid}',EditCouponComponent::class)->name('admin.editcoupon');

    Route::get('/prescriptions',PrescriptionComponent::class)->name('admin.prescription');
    
    Route::get('/reviews',ReviewsComponent::class)->name('admin.reviews');

    Route::get('/orders',OrderComponent::class)->name('admin.orders');
    Route::get('/order/detail/{id}',OrderDetailComponent::class)->name('admin.order-detail');
    
    Route::get('/questions',QuestionComponent::class)->name('admin.questions');
    Route::get('/questionanswers',QuestionAnswerComponent::class)->name('admin.question-answers');
    Route::get('/answers/{id}',AllAnswersComponent::class)->name('admin.all-answers');
    
    Route::get('/contact',ContactFormComponent::class)->name('admin.contact-form');
    
    Route::get('/reviews/active',[ReviewController::class, 'activeReviews'])->name('admin.active-reviews');
    Route::get('/reviews/deactive',[ReviewController::class, 'deactiveReviews'])->name('admin.deactive-reviews');
    Route::get('/reviews/active/{id}',[ReviewController::class, 'changeActive'])->name('admin.change-active');
    Route::get('/reviews/deactive/{id}',[ReviewController::class, 'changeDeactive'])->name('admin.change-deactive');

    Route::get('/diseases',DiseaseComponent::class)->name('admin.diseases');
    Route::get('/body-part',BodyPartNamengComponent::class)->name('admin.bodypart');
    
});