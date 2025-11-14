<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use App\Models\LikeForums;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeForumController extends Controller
{
    public function toggle(Request $request)
    {
        // $user = Auth::user();

        // $forum_id = $request->forum_id;
        // $reply_id = $request->reply_id;

        // $like = LikeForums::where('user_id', $user->id)
        //             ->where(function($q) use ($forum_id, $reply_id) {
        //                 if ($forum_id) $q->where('forum_id', $forum_id);
        //                 if ($reply_id) $q->where('reply_id', $reply_id);
        //             })
        //             ->first();

        // if ($like) {
        //     $like->delete();
        //     return response()->json(['liked' => false]);
        // } else {
        //     LikeForums::create([
        //         'user_id' => $user->id,
        //         'forum_id' => $forum_id,
        //         'reply_id' => $reply_id,
        //     ]);
        //     return response()->json(['liked' => true]);
        // }

        $forum = Forum::findOrFail($request->forum_id);
        $user = Auth::user();

        if ($forum->isLikedBy($user)) {
            $forum->likes()->where('user_id', $user->id)->delete();
            $liked = false;
        } else {
            $forum->likes()->create(['user_id' => $user->id]);
            $liked = true;
        }

        return response()->json([
            'liked' => $liked,
            'count' => $forum->likes()->count(),
        ]);
    }

    public function toggleReply(Request $request)
    {
        $reply = Reply::findOrFail($request->reply_id);
        $user = Auth::user();

        $like = LikeForums::where('reply_id', $reply->id)
                    ->where('user_id', $user->id)
                    ->first();

        if ($like) {
            $like->delete();
            $liked = false;
        } else {
            LikeForums::create([
                'reply_id' => $reply->id,
                'user_id' => $user->id,
            ]);
            $liked = true;
        }

        return response()->json([
            'liked' => $liked,
            'count' => $reply->likes()->count(),
        ]);
    }
}
