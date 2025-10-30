<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */



       public function index()
    {
        $posts = Posts::latest()->paginate(10);
        return view('posts.index', compact('posts'));
    }




    public function create()
    {
        return view('posts.create');
    }




    public function store(Request $request)
    {
        $data = $request->validate([
            // 'user_id' => ['required','string','max:255'],
            'title'   => ['required','string','max:255'],
            'body'    => ['required','string'],
            'status'  => ['nullable','in:draft,published'],
        ]);
        $data['status'] = $data['status'] ?? 'draft';

        $data['user_id'] = auth()->id();            // 👈 set from logged-in user
        $post = Posts::create($data);
        return redirect()->route('posts.show', $post)->with('success','Post created.');
    }





    public function show(Posts $post)
    {
        $post->load('comments');
        return view('posts.show', compact('post'));
    }



    
    public function edit(Posts $post)
    {
        return view('posts.edit', compact('post'));
    }





    public function update(Request $request, Posts $post)
    {
        $data = $request->validate([
            'title'   => ['required','string','max:255'],
            'body'    => ['required','string'],
            'status'  => ['nullable','in:draft,published'],
        ]);
        $post->update($data);
        return redirect()->route('posts.show', $post)->with('success','Post updated.');
    }




    public function destroy(Posts $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success','Post moved to trash.');
    }




    public function trashed()
    {
        $posts = Posts::onlyTrashed()->paginate(10);
        return view('posts.trashed', compact('posts'));
    }



    public function restore($postId)
    {
        $post = Posts::onlyTrashed()->findOrFail($postId);
        $post->restore();
        return redirect()->route('posts.index')->with('success','Post restored.');
    }
}
