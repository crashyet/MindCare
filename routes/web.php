<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/app', function () {
  return view('app');
});

Route::get('/', function () {
    return view('landingpage');
});



Route::get('/auth', function () {
    return view('auth.login');
});


Route::get('/login', [AuthController::class, 'showLogin'])->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        if (Auth::user()->role === 'admin') {
            return view('admin.dashboard');
        }
    })->name('dashboard');
});





// Route::get('/admin', function () {
//     return view('admin.dashboard');
// });

Route::get('/admin/artikel', function () {
    return view('admin.manajemen-artikel');
});

Route::get('/admin/chatbot', function () {
    return view('admin.chatbot');
});

Route::get('/admin/reports', function () {
    return view('admin.laporan');
});

Route::get('/admin/edukasi', function () {
    return view('admin.manajemen-edukasi');
});

Route::get('/admin/forum', function () {
    return view('admin.manajemen-forum');
});

Route::get('/admin/tes', function () {
    return view('admin.manajemen-tes');
});

Route::get('/admin/users', function () {
    return view('admin.manajemen-user');
});

Route::get('/admin/profil', function () {
    return view('admin.profil');
});

Route::get('/admin/setting', function () {
    return view('admin.settings');
});






// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/dashboard/artikel', function () {
    return view('artikel');
});

Route::get('/dashboard/edukasi', function () {
    return view('edukasi');
});

Route::get('/dashboard/chatbot', function () {
    return view('chatbot');
});

Route::get('/dashboard/forum', function () {
    return view('forum');
});

Route::get('/dashboard/profil', function () {
    return view('profile');
});

Route::get('/dashboard/setting', function () {
    return view('settings');
});

Route::get('/dashboard/tes', function () {
    return view('tes-mental');
});

