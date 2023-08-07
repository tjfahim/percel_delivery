<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\EmailSubscriberController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ServicePackageController;
use App\Http\Controllers\UltradeliveryController;
use App\Http\Controllers\UltraServiceDeliveryController;

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
    return view('home');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/about-us', function () {
    return view('page5330');
});
Route::get('/service-area', function () {
    return view('page40e2');
});
Route::get('/package', function () {
    return view('bike-listing');
});
Route::get('/delivery', function () {
    return view('ultraservice-details');
});

Route::get('/dashboard', function () {
    // Check if the user is authenticated
    if (Auth::check()) {
        // Check if the 'roleChecked' flag is not set in the user's session
        if (!Session::has('roleChecked')) {
            $user = Auth::user();
            $role = $user->role; // Get the user's role

            // Set the 'roleChecked' flag in the user's session to avoid checking the role again on subsequent requests
            Session::put('roleChecked', true);

            if ($role == 'admin') {
                return view('admin.dashboard'); // Render the admin dashboard view
            } elseif ($role == 'user') {
                return view('user.dashboard'); // Render the user dashboard view
            }
        }

        // The 'roleChecked' flag is set, so the user's role has been checked before,
        // redirect them to their respective dashboard without re-checking the role.
        $user = Auth::user();
        $role = $user->role;
        if ($role == 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($role == 'user') {
            return redirect()->route('user.dashboard');
        }
    }

    // Redirect to the login page if the user is not authenticated or has no role
    return view('home');
});


Route::get('/login', 'App\Http\Controllers\LoginController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\LoginController@login');
Route::post('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');
Route::get('/register', 'App\Http\Controllers\LoginController@showRegisterForm');
Route::post('/register', 'App\Http\Controllers\LoginController@register');




Route::get('/subscribers', [EmailSubscriberController::class, 'index'])->name('subscribers.index');
Route::post('/subscribers', [EmailSubscriberController::class, 'store'])->name('subscribers.store');
Route::delete('/subscribers/{id}', [EmailSubscriberController::class, 'destroy'])->name('subscribers.destroy');

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');


Route::get('/packages', [ServicePackageController::class, 'index'])->name('packages.index');
Route::get('/all-packages', [ServicePackageController::class, 'homeindex'])->name('packages.index.home');
Route::get('/packages/create', [ServicePackageController::class, 'create'])->name('packages.create');
Route::post('/packages', [ServicePackageController::class, 'store'])->name('packages.store');
Route::get('/packages/{package}/edit', [ServicePackageController::class, 'edit'])->name('packages.edit');
Route::get('/packages/{id}', [ServicePackageController::class, 'details_page'])->name('packages.details_page');
Route::put('/packages/{package}', [ServicePackageController::class, 'update'])->name('packages.update');
Route::delete('/packages/{package}', [ServicePackageController::class, 'destroy'])->name('packages.destroy');


Route::put('/ultradeliveries/{id}', [UltraServiceDeliveryController::class, 'update'])->name('ultradeliveries.update');
Route::get('/ultradeliveries', [UltraServiceDeliveryController::class, 'index'])->name('ultradeliveries.index');
Route::get('/ultradeliveriesForAdmin', [UltraServiceDeliveryController::class, 'index2'])->name('ultradeliveries.index2');
Route::post('/ultradeliveries', [UltraServiceDeliveryController::class, 'store'])->name('ultradeliveries.store');


Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register.direct');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'admin', 'middleware' => 'role:admin'], function () {
        Route::get('/dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('admin.dashboard');
    });

    Route::group(['prefix' => 'user', 'middleware' => 'role:user'], function () {
        Route::get('/dashboard', 'App\Http\Controllers\UserController@dashboard')->name('user.dashboard');
    });
});
