<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Freelancer\FreelancerController;
use App\Http\Controllers\Freelancer\LoginFreelancerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AdminAuthController;





// Redirect /admin to the admin dashboard or another specific route


Route::get('/', function () {
    $user = auth()->user();
    return view('homepage', compact('user'));
});

Route::view('/about', 'about');

// Route::view('/contactUs', 'contactUs');
// Route to display the contact form

Route::get('/development', function () {
    $user = auth()->user();
    return view('development', compact('user'));
});
Route::get('/design', function () {
    $user = auth()->user();
    return view('design', compact('user'));
});
Route::get('/marketing', function () {
    $user = auth()->user();
    return view('marketing', compact('user'));
});
Route::get('/logo', function () {
    $user = auth()->user();
    return view('logo', compact('user'));
});
// Route::view('/design', 'design');
// Route::view('/development', 'development');
// Route::view('/marketing', 'marketing');
// Route::view('/logo', 'logo');

Route::get('login', [LoginController::class, 'loginForm'])->name('loginForm');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('signup', [RegisterController::class, 'signupForm'])->name('signup');
Route::post('signup', [RegisterController::class, 'signup'])->name('signup');

Route::get('/logo', [FreelancerController::class, 'showFreelancer'])->name('showFreelancer');
Route::get('/webdevelop', [FreelancerController::class, 'showdevelopFreelancer'])->name('showdevelopFreelancer');
Route::get('/marketer', [FreelancerController::class, 'showmarketingFreelancer'])->name('showmarketingFreelancer');


Route::middleware('auth')->group(function () { //->login
    Route::get('/developer/{id}', [FreelancerController::class, 'showinfoFreelancer'])->name('showinfoFreelancer');
    Route::get('/contactForm/{id}', [FreelancerController::class, 'contactFreelancer'])->name('contactFreelancer');

    Route::view('/addResume', 'freelancersite/addResume');
    // Route::view('/profile', 'freelancersite/profile');
    Route::get(
        '/contactUs',
        function () {
            return view('contactUs');
        }
    )->name('contactUs');
    // Route::get('/freelancer/{id}', [FreelancerController::class, 'showFreelancer'])->name('freelancer.show');
    Route::post('/contactUs', [ContactController::class, 'submit'])->name('contactUs.store');
});


Route::group(['prefix' => 'freelancer'], function () {

    // -- login
    // view
    // freelancer/login
    Route::get('/login', [LoginFreelancerController::class, 'loginForm'])->name("freelancer.loginForm");
    // submit
    Route::post('/login', [LoginFreelancerController::class, 'login'])->name("freelancer.login");


    // -- signup
    // view
    // freelancer
    Route::get('/signup', [FreelancerController::class, 'signupForm'])->name("freelancer.signupForm");
    // submit
    Route::post('/signup', [FreelancerController::class, 'signup'])->name("freelancer.signup");
});

Route::post('/store-message/{freelancerId}', [MessageController::class, 'store'])->name('message.store');

Route::middleware(['auth:freelancer'])->group(function () { //->freelancer/login
    // freelancer Routes
    Route::get('/addServices', [ServiceController::class, 'addService'])->name('service.add');
    Route::get('/profile', [FreelancerController::class, 'profile'])->name('freelancer.profile');
    Route::post('/storeservice', [ServiceController::class, 'store'])->name('service.store');
    Route::get('/viewService', [ServiceController::class, 'viewService'])->name('services.view');
    Route::get('/viewMessage', [MessageController::class, 'viewMessage'])->name('message.view');

    Route::get('/updateProfile', [FreelancerController::class, 'editForm'])->name('freelancer.editForm');
    // Route to handle the update request
    Route::post('/updateProfile', [FreelancerController::class, 'update'])->name('freelancer.update');
});

// Route::get('/freelancer/{id}', [FreelancerController::class, 'showFreelancer'])->name('freelancer.show');
