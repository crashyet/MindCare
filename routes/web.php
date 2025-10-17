<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\User\ArticleController as UserArticleController;
use App\Http\Controllers\User\TestController as UserTestController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\User\ChatbotController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;

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





Route::prefix('admin')->name('admin.')->group(function () {
    // Route::get('/users', [UserController::class, 'index'])->name('users.index');
    // Route::get('/users/add', [UserController::class, 'create'])->name('users.create');
    // Route::post('/users/add', [UserController::class, 'store'])->name('users.store');

    Route::resource('users', UserController::class);
    Route::get('users/search', [UserController::class, 'search'])->name('users.search');
});




// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::resource('artikel', ArticleController::class);
// });




Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/artikel', [ArticleController::class, 'index'])->name('admin.articles.index');
    Route::get('/artikel/create', [ArticleController::class, 'create'])->name('admin.articles.create');
    Route::post('/artikel', [ArticleController::class, 'store'])->name('admin.articles.store');
    Route::get('/artikel/{id}/edit', [ArticleController::class, 'edit'])->name('admin.articles.edit');
    Route::put('/artikel/{id}', [ArticleController::class, 'update'])->name('admin.articles.update');
    Route::delete('/artikel/{id}', [ArticleController::class, 'destroy'])->name('admin.articles.destroy');
});



Route::middleware(['auth'])->prefix('admin')->group(function () {
    // Route::resource('tes', TestController::class);
    Route::get('/tes', [TestController::class, 'index'])->name('admin.tests.index');
    Route::get('/tes/create', [TestController::class, 'create'])->name('admin.tests.create');
    Route::post('/tes', [TestController::class, 'store'])->name('admin.tests.store');
    Route::delete('/tes/{id}', [TestController::class, 'destroy'])->name('admin.tests.destroy');

    Route::prefix('tes/{test}')->group(function () {
        Route::resource('questions', QuestionController::class)->except(['show']);
    });
});




Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

// Route::get('/admin/artikel', function () {
//     return view('admin.artikel.manajemen-artikel');
// });

Route::get('/admin/chatbot', function () {
    return view('admin.chatbot');
});

Route::get('/admin/reports', function () {
    return view('admin.laporan');
});

Route::get('/admin/edukasi', function () {
    return view('admin.edukasi.manajemen-edukasi');
});

Route::get('/admin/forum', function () {
    return view('admin.manajemen-forum');
});

// Route::get('/admin/tes', function () {
//     return view('admin.test.manajemen-tes');
// });

// Route::get('/admin/users', function () {
//     return view('admin.manajemen-user');
// });

Route::get('/admin/profil', function () {
    return view('admin.profil');
});

Route::get('/admin/setting', function () {
    return view('admin.settings');
});









/**   User user routes   */

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route::get('/dashboard/artikel', function () {
//     return view('artikel');
// });

Route::get('/dashboard/artikel', [UserArticleController::class, 'index'])->name('articles.index');

Route::post('/artikel/like/{slug}', [UserArticleController::class, 'like'])->name('articles.like');
Route::get('/dashboard/artikel/{slug}', [UserArticleController::class, 'show'])->name('articles.show');
// Route untuk like (simple - tanpa tracking user)


// Route::get('/dashboard/artikel', [ArticleController::class, 'index'])->name('artikel');

Route::get('/dashboard/edukasi', function () {
    return view('user/edukasi');
});

Route::get('/dashboard/chatbot', function () {
    return view('user/chatbot');
});

Route::get('/dashboard/forum', function () {
    return view('user/forum');
});

Route::get('/dashboard/profil', function () {
    return view('user/profile');
});

Route::get('/dashboard/setting', function () {
    return view('user/settings');
});

// Route::get('/dashboard/tes', function () {
//     return view('user/tes-mental');
// });

Route::get('/dashboard/tes', [UserTestController::class, 'index'])->name('tes.index');