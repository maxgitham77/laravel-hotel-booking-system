<?php

    use App\Http\Controllers\Admin\AdminDashboardController;
    use App\Http\Controllers\Frontend\About\AboutController;
    use App\Http\Controllers\Frontend\Blog\BlogController;
    use App\Http\Controllers\Frontend\Contact\ContactController;
    use App\Http\Controllers\Frontend\Room\RoomController;
    use App\Http\Controllers\Frontend\Services\ServicesController;
    use App\Http\Controllers\Frontend\Shop\ShopController;
    use App\Http\Controllers\Frontend\Testimonials\TestimonialsController;
    use App\Http\Controllers\Frontend\User\UserController;
    use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});*/

    Route::get('/', function () {
        return view('index');
    });


    // Frontend Routes
    Route::get('/about', [AboutController::class, 'aboutPage'])->name('about.page');
    Route::get('/rooms', [RoomController::class, 'roomsPage'])->name('rooms.page');
    Route::get('/services', [ServicesController::class, 'servicesPage'])->name('services.page');
    Route::get('/blogs', [BlogController::class, 'blogsPage'])->name('blogs.page');
    Route::get('/testimonials', [TestimonialsController::class, 'testimonialsPage'])->name('testimonials.page');
    Route::get('/contact', [ContactController::class, 'contactPage'])->name('contact.page');

    Route::get('/shop', [ShopController::class, 'shopIndex'])->name('shop.index');

    // Ends Frontend Routes

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'editUserProfile'])->name('profile.edit');
    Route::post('/profile', [UserController::class, 'UpdateUserProfile'])->name('profile.update');
    Route::get('/user/logout', [UserController::class, 'userLogout'])->name('user.logout');
    Route::get('/user/change/password', [UserController::class, 'userChangePassword'])->name('user.change.password');
    Route::post('/user/password/update', [UserController::class, 'userPasswordUpdate'])->name('user.password.update');

});

require __DIR__.'/auth.php';

// Admin Group Middleware
    Route::middleware(['auth', 'roles:admin'])->group(function () {
        Route::get('/admin/dashboard', [AdminDashboardController::class, 'adminDashboard'])->name('admin.dashboard');
        Route::get('/admin/logout', [AdminDashboardController::class, 'adminLogout'])->name('admin.logout');
        Route::get('/admin/profile', [AdminDashboardController::class, 'adminProfile'])->name('admin.profile');
        Route::post('/admin/profile/store', [AdminDashboardController::class, 'adminProfileStore'])->name('admin.profile.store');
        Route::get('/admin/profile/change/password', [AdminDashboardController::class, 'adminProfileChangePassword'])->name('admin.profile.change.password');
        Route::post('/admin/profile/password/update', [AdminDashboardController::class, 'adminProfilePasswordUpdate'])->name('admin.profile.password.update');
    });

    Route::get('/admin/rzh/login', [AdminDashboardController::class, 'adminLogin'])->name('admin.login');
