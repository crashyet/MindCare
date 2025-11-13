<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MoodController extends Controller
{
    public function saveMood(Request $request)
    {
        $request->validate([
            'mood' => 'required|string',
        ]);

        $user = Auth::user();
        $user->mood = $request->mood;
        $user->save();

        return response()->json(['success' => true]);
    }
}
