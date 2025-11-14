<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\User\ArticleController as UserArticleController;
use App\Http\Controllers\User\TestController as UserTestController;
use App\Http\Controllers\User\ChatbotController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\MoodController;
/*
|--------------------------------------------------------------------------
| General & Auth Routes
|--------------------------------------------------------------------------
*/


Route::post('/save-mood', [MoodController::class, 'saveMood'])->name('save.mood');

Route::get('/', fn() => view('user.landingpage'));
Route::get('/app', fn() => view('app'));
Route::get('/auth', fn() => view('auth.login'));

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/', fn() => view('user.landingpage'));


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    // 🧭 Dashboard
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');

    // 👥 Manajemen User
    Route::resource('users', UserController::class);
    Route::get('users/search', [UserController::class, 'search'])->name('users.search');

    // 📰 Manajemen Artikel
    Route::get('/artikel', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/artikel/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/artikel', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('/artikel/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('/artikel/{id}', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/artikel/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');

    // ✅ Tambahan untuk toggle publish/unpublish artikel
Route::patch('/artikel/{id}/toggle', [ArticleController::class, 'toggleStatus'])->name('articles.toggle');

    // 🧩 Tes & Pertanyaan
    Route::get('/tes', [TestController::class, 'index'])->name('tests.index');
    Route::get('/tes/create', [TestController::class, 'create'])->name('tests.create');
    Route::post('/tes', [TestController::class, 'store'])->name('tests.store');
    Route::delete('/tes/{id}', [TestController::class, 'destroy'])->name('tests.destroy');
Route::patch('/tes/{id}/toggle', [TestController::class, 'toggleStatus'])->name('tests.toggle');

    Route::prefix('tes/{test}')->group(function () {
        Route::resource('questions', QuestionController::class)->except(['show']);
    });

    // 💬 Halaman Admin Lainnya
    Route::get('/chatbot', fn() => view('admin.chatbot'))->name('chatbot');
    Route::get('/reports', fn() => view('admin.laporan'))->name('reports');
    Route::get('/edukasi', fn() => view('admin.edukasi.manajemen-edukasi'))->name('edukasi');
    Route::get('/forum', fn() => view('admin.manajemen-forum'))->name('forum');
    Route::get('/profil', fn() => view('admin.profil'))->name('profil');
    Route::get('/setting', fn() => view('admin.settings'))->name('settings');
});


/*
|--------------------------------------------------------------------------
| User Routes (Dashboard)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('dashboard')->group(function () {

    // 🏠 Dashboard utama
    Route::get('/', fn() => view('dashboard'))->name('user.dashboard');

    // 📰 Artikel
    Route::get('/artikel', [UserArticleController::class, 'index'])->name('articles.index');
    Route::get('/artikel/{slug}', [UserArticleController::class, 'show'])->name('articles.show');
    Route::post('/artikel/like/{slug}', [UserArticleController::class, 'like'])->name('articles.like');

    // 📘 Edukasi
    Route::get('/edukasi', fn() => view('user.edukasi'))->name('user.edukasi');

    // 🤖 Chatbot
    Route::get('/chatbot', fn() => view('user.chatbot'))->name('user.chatbot');

    // 💬 Forum
    Route::get('/forum', fn() => view('user.forum'))->name('user.forum');

    // 👤 Profil & Settings
    Route::get('/profil', fn() => view('user.profile'))->name('user.profile');
    Route::get('/setting', fn() => view('user.settings'))->name('user.settings');

    // 🧠 Tes Mental
    Route::get('/tes', [UserTestController::class, 'index'])->name('tes.index');
});

