<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Posts;
use App\Models\Comments;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function store(Request $request, Posts $post)
    {
        $data = $request->validate([
            // 'user_id' => ['required','integer','exists:users,id'],
            'body'    => ['required','string'],
        ]);
        $data['user_id'] = auth()->id();
        $data['post_id'] = $post->id;

        Comments::create($data);
        return back()->with('success','Comment added.');
    }

    public function destroy(Comments $comment)
    {
        $comment->delete();
        return back()->with('success','Comment deleted.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }


}
