<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        // ambil semua artikel yang dipublikasikan
        $tests = Test::where('status_publikasi', true)
                    ->latest()
                    ->get();

        // kirim ke view
        return view('user.tes-mental', compact('tests'));
    }
}
