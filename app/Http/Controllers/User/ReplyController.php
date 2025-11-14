<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReplyController extends Controller
{
    public function store(Request $request, $forum_id)
    {
        $request->validate([
            'content' => 'required',
        ]);

        Reply::create([
            'forum_id' => $forum_id,
            'user_id' => Auth::id(),
            'content' => $request->input('content'),
        ]);

        return back()->with('success', 'Balasan berhasil dikirim!');
    }

    
}
