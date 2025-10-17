<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Test;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalArticles = Article::count();
        $totalTests = Test::count();
        return view('admin.dashboard', compact(['totalUsers', 'totalArticles', 'totalTests']));

    }
}
