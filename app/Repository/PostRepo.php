<?php


namespace App\Repository;


use App\Models\Post;
use Carbon\Carbon;

class PostRepo
{
    function store($request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->teaser = $request->input('teaser');
        $post->content = $request->input('content');
        $post->created = Carbon::now();
        $post->	category_id = $request->input('category_id');
        $post->save();
    }

    function index()
    {
        return Post::with('category')->get();
    }

    function getById($id)
    {
        return Post::findOrFail($id);
    }

    function update($request , $id)
    {
        $blog = Post::findOrFail($id);
        $blog->title = $request->input('title');
        $blog->teaser = $request->input('teaser');
        $blog->content = $request->input('content');
        $blog->created = $request->input('dateCreate');
        $blog->category_id = $request->input('category_id');

        $blog->save();
    }

    function destroy($id)
    {
        $blog = Post::findOrFail($id);
        $blog->delete();
    }
}
