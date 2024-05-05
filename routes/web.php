<?php

    use App\Http\Controllers\Admin\AdminDashboardController;
    use App\Http\Controllers\Admin\Room\AdminRoomController;
    use App\Http\Controllers\Admin\Room\Facility\FacilityController;
    use App\Http\Controllers\Admin\Room\RoomGallery\RoomGalleryController;
    use App\Http\Controllers\Admin\Room\RoomNumber\RoomNumberController;
    use App\Http\Controllers\Admin\Room\RoomTypeController;
    use App\Http\Controllers\Admin\Slider\SliderController;
    use App\Http\Controllers\Admin\SPA\SpaController;
    use App\Http\Controllers\Admin\Team\AdminTeamController;
    use App\Http\Controllers\Admin\User\AdminUserController;
    use App\Http\Controllers\Frontend\About\AboutController;
    use App\Http\Controllers\Frontend\Blog\BlogController;
    use App\Http\Controllers\Frontend\Contact\ContactController;
    use App\Http\Controllers\Frontend\LandingPage\LandingPageController;
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
*/


    // Frontend Routes
    Route::get('/', [LandingPageController::class, 'index'])->name('home.page');
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
    Route::group(['prefix' => '/admin'] ,function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'adminDashboard'])->name('admin.dashboard');
        Route::get('/logout', [AdminDashboardController::class, 'adminLogout'])->name('admin.logout');
        Route::get('/profile', [AdminDashboardController::class, 'adminProfile'])->name('admin.profile');
        Route::post('/profile/store', [AdminDashboardController::class, 'adminProfileStore'])->name('admin.profile.store');
        Route::get('/profile/change/password', [AdminDashboardController::class, 'adminProfileChangePassword'])->name('admin.profile.change.password');
        Route::post('/profile/password/update', [AdminDashboardController::class, 'adminProfilePasswordUpdate'])->name('admin.profile.password.update');

        Route::get('/teams', [AdminTeamController::class, 'index'])->name('team.index');
        Route::get('/users', [AdminUserController::class, 'index'])->name('adminuser.index');

        // Slider Routes
        Route::resource('slider', SliderController::class);

        // Rooms Routes
        Route::resource('/admin/rooms', AdminRoomController::class);

        // Room Number Routes
        Route::resource('/roomnumbers', RoomNumberController::class);

        // Room Types Routes
        Route::resource('/roomtypes', RoomTypeController::class);

        // Facilities Routes
        Route::resource('/facilities', FacilityController::class);

        // Spa Routes
        Route::resource('/spa', SpaController::class);

        // Room Gallery Routes
        Route::get('/image-galleries/{room}', [RoomGalleryController::class, 'index'])->name('show.index');
        Route::resource('/image-galleries', RoomGalleryController::class);

    })->middleware(['auth', 'roles:admin']);

    Route::get('/admin/rzh/login', [AdminDashboardController::class, 'adminLogin'])->name('admin.login');

    Route::fallback(function () {
       return "Route do exit in this system";
    });
