<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsSiteController as AdminNewsSiteController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\TagController as AdminTagController;
use App\Http\Controllers\Admin\LeagueController as AdminLeagueController;
// use App\Http\Livewire\Web\HowItWorks;

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

Route::group(['prefix' => 'admin',], function () {
    Route::get('/login', [\App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [\App\Http\Controllers\Admin\Auth\LoginController::class, 'login'])->name('admin.login');
    Route::get('/logout', [\App\Http\Controllers\Admin\Auth\LoginController::class, "logout"])->name('admin.logout');

    Route::group(['middleware' => ['admin'], 'as' => 'admin.'], function () {
        Route::get('/', [\App\Http\Livewire\Admin\Dashboard::class, '__invoke'])->name('home');
        Route::get('/categories', [\App\Http\Livewire\Admin\Categories\Index::class, '__invoke'])->name('categories');
        Route::get('/products', [\App\Http\Livewire\Admin\Products\Index::class, '__invoke'])->name('products');
        Route::get('/product/{product}', [\App\Http\Livewire\Admin\Products\Detail::class, '__invoke'])->name('product.detail');
        Route::get('/blogs', [\App\Http\Livewire\Admin\Blog\Index::class, '__invoke'])->name('blogs');
        Route::get('/blog/{blog}', [\App\Http\Livewire\Admin\Blog\Detail::class, '__invoke'])->name('blog.detail');
        Route::get('/faq', [\App\Http\Livewire\Admin\Faq\Index::class, '__invoke'])->name('faqs');
        Route::get('/team', [\App\Http\Livewire\Admin\Teams\Index::class, '__invoke'])->name('team');
        Route::get('/testimonial', [\App\Http\Livewire\Admin\Testimonial\Index::class, '__invoke'])->name('testimonial');
        Route::get('/service', [\App\Http\Livewire\Admin\Services\Index::class, '__invoke'])->name('service');

    });
});

Route::get('/', [\App\Http\Livewire\Web\Home::class, '__invoke'])->name('web.home');
Route::get('/how_can_we_help', [\App\Http\Livewire\Web\HowCanWeHelp\Index::class, '__invoke'])->name('web.how_can_we_help');
Route::get('/about_us', [\App\Http\Livewire\Web\AboutUs::class, '__invoke'])->name('web.about_us');
Route::get('/how_it_works', [\App\Http\Livewire\Web\HowItWorks::class, '__invoke'])->name('web.how_it_works');
Route::get('/contact_us', [\App\Http\Livewire\Web\ContactUs::class, '__invoke'])->name('web.contact_us');
Route::get('/faq', [\App\Http\Livewire\Web\Faqs::class, '__invoke'])->name('web.faq');
Route::get('/compliance', [\App\Http\Livewire\Web\Compliance::class, '__invoke'])->name('web.compliance');
Route::get('/private_policy', [\App\Http\Livewire\Web\PrivatePolicy::class, '__invoke'])->name('web.private_policy');
Route::get('/terms_condition', [\App\Http\Livewire\Web\TermsCondition::class, '__invoke'])->name('web.terms-condition');
Route::get('/refund_policy', [\App\Http\Livewire\Web\RefundPolicy::class, '__invoke'])->name('web.refund_policy');
Route::get('/blog', [\App\Http\Livewire\Web\Blog::class, '__invoke'])->name('web.blog');
Route::get('/service_detail/{id}', [\App\Http\Livewire\Web\ServiceDetail::class, '__invoke'])->name('web.service-detail');
Route::get('/blog_detail', [\App\Http\Livewire\Web\BlogDetail::class, '__invoke'])->name('web.blog_detail');
Route::group(['prefix' => 'shop',], function () {
    Route::get('/', [\App\Http\Livewire\Web\Shop\Index::class, '__invoke'])->name('shop.index');
    Route::get('/product/{product}', [\App\Http\Livewire\Web\Shop\Detail::class, '__invoke'])->name('shop.detail');
    Route::get('/cart', [\App\Http\Livewire\Web\Shop\Cart::class, '__invoke'])->name('shop.cart');
    Route::get('/checkout', [\App\Http\Livewire\Web\Shop\Checkout\Index::class, '__invoke'])->name('shop.checkout');
});
// Route::get('/how-it-works', [\App\Http\Livewire\Web\Howitworks::class, '__invoke'])->name('web.how-it-works');
// Route::get('/home-consultation', [\App\Http\Livewire\Web\help\Homeconsultation::class, '__invoke'])->name('web.how-can-help.home_consultation');

