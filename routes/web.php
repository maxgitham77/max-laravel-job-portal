<?php

    use App\Http\Controllers\Frontend\Candidate\Dashboard\CandidateDashboardController;
    use App\Http\Controllers\Frontend\Company\Dashboard\CompanyDashboardController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

    require __DIR__.'/auth.php';

// Candidate Group Middleware
    /*Route::group(['prefix' => '/candidate'] ,function () {
        Route::get('/dashboard', [CandidateDashboardController::class, 'index'])->name('candidate.dashboard');
    })->middleware(['auth', 'verified', 'user.role:candidate']);*/
    Route::group(
        [
            'middleware' => ['auth', 'verified', 'user.role:candidate'],
            'prefix' => 'candidate',
            //'as'. 'candidate.'
        ], function () {
        Route::get('/dashboard', [CandidateDashboardController::class, 'index'])->name('candidate.dashboard');
    });

    // Company Group Middleware
    /*Route::group(['prefix' => '/company'] ,function () {
        Route::get('/dashboard', [CompanyDashboardController::class, 'index'])->name('company.dashboard');
    })->middleware(['auth', 'verified', 'user.role:company']);*/
    Route::group(
        [
            'middleware' => ['auth', 'verified', 'user.role:company'],
            'prefix' => 'company',
            //'as'. 'company.'
        ], function () {
        Route::get('/dashboard', [CompanyDashboardController::class, 'index'])->name('company.dashboard');
    });


