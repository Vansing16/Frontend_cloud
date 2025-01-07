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

// Main routes
Route::get('/', function () {
    $user = auth()->user();
    return view('homepage', compact('user'));
});

Route::view('/about', 'about');
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

// Auth routes
Route::get('login', [LoginController::class, 'loginForm'])->name('loginForm');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('signup', [RegisterController::class, 'signupForm'])->name('signupForm');
Route::post('signup', [RegisterController::class, 'signup'])->name('signupSubmit');

// Freelancer display routes
Route::get('/logo', [FreelancerController::class, 'showFreelancer'])->name('showFreelancer');
Route::get('/webdevelop', [FreelancerController::class, 'showdevelopFreelancer'])->name('showdevelopFreelancer');
Route::get('/marketer', [FreelancerController::class, 'showmarketingFreelancer'])->name('showmarketingFreelancer');

// Authenticated user routes
Route::middleware('auth')->group(function () {
    Route::get('/developer/{id}', [FreelancerController::class, 'showinfoFreelancer'])->name('showinfoFreelancer');
    Route::get('/contactForm/{id}', [FreelancerController::class, 'contactFreelancer'])->name('contactFreelancer');

    Route::view('/addResume', 'freelancersite/addResume');
    Route::get('/contactUs', function () {
        return view('contactUs');
    })->name('contactUs');
    Route::post('/contactUs', [ContactController::class, 'submit'])->name('contactUs.store');
});

// Freelancer-specific routes
Route::group(['prefix' => 'freelancer'], function () {
    // Login routes
    Route::get('/login', [LoginFreelancerController::class, 'loginForm'])->name("freelancer.loginForm");
    Route::post('/login', [LoginFreelancerController::class, 'login'])->name("freelancer.login");

    // Signup routes
    Route::get('/signup', [FreelancerController::class, 'signupForm'])->name("freelancer.signupForm");
    Route::post('/signup', [FreelancerController::class, 'signup'])->name("freelancer.signupSubmit");
});

// Message routes
Route::post('/store-message/{freelancerId}', [MessageController::class, 'store'])->name('message.store');

// Freelancer authenticated routes
Route::middleware(['auth:freelancer'])->group(function () {
    Route::get('/addServices', [ServiceController::class, 'addService'])->name('service.add');
    Route::get('/profile', [FreelancerController::class, 'profile'])->name('freelancer.profile');
    Route::post('/storeservice', [ServiceController::class, 'store'])->name('service.store');
    Route::get('/viewService', [ServiceController::class, 'viewService'])->name('services.view');
    Route::get('/viewMessage', [MessageController::class, 'viewMessage'])->name('message.view');

    Route::get('/updateProfile', [FreelancerController::class, 'editForm'])->name('freelancer.editForm');
    Route::post('/updateProfile', [FreelancerController::class, 'update'])->name('freelancer.update');
});
