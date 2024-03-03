<?php

    use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
    use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
    use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
    use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
    use App\Http\Controllers\Admin\Auth\NewPasswordController;
    use App\Http\Controllers\Admin\Auth\PasswordController;
    use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
    use App\Http\Controllers\Admin\Auth\RegisteredUserController;
    use App\Http\Controllers\Admin\Auth\VerifyEmailController;
    use App\Http\Controllers\Admin\Dashboard\AdminDashboardController;
    use Illuminate\Support\Facades\Route;

    Route::group(['middleware' => ['guest:admin'], 'prefix' => 'admin/jobby', 'as' => 'admin.'], function () {

        Route::get('/login', [AuthenticatedSessionController::class, 'create'])
            ->name('login');

        Route::post('login', [AuthenticatedSessionController::class, 'store']);

        Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
            ->name('password.request');

        Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
            ->name('password.email');

        Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
            ->name('password.reset');

        Route::post('/reset-password', [NewPasswordController::class, 'store'])
            ->name('password.store');
    });

    Route::group(['middleware' => ['auth:admin'], 'prefix' => 'admin'], function () {

        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

        /*Route::get('verify-email', EmailVerificationPromptController::class)
            ->name('verification.notice');

        Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
            ->middleware(['signed', 'throttle:6,1'])
            ->name('verification.verify');

        Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
            ->middleware('throttle:6,1')
            ->name('verification.send');

        Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
            ->name('password.confirm');

        Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

        Route::put('password', [PasswordController::class, 'update'])->name('password.update');
*/
        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('admin.logout');
    });
