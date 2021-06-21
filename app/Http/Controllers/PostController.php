<?php

namespace App\Http\Controllers;

use App\Repository\PostRepo;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postRePo;

    public function __construct(PostRepo $repo)
    {
        $this->postRePo = $repo;
    }

    function create()
    {
        return view('blogs.create');
    }

    function store(Request $request)
    {
        $this->postRePo->store($request);
        return redirect()->route('blogs.index');
    }

    function index()
    {
        $blogs = $this->postRePo->index();
        return view('blogs.list' , compact('blogs'));
    }

    function edit($id)
    {
        $blog = $this->postRePo->getById($id);
        return view('blogs.update' , compact('blog'));
    }

    function update(Request $request , $id)
    {

        $this->postRePo->update( $request , $id);
        return redirect()->route('blogs.index');
    }

    function detail($id)
    {
        $blog = $this->postRePo->getById($id);
        return view('blogs.detail' , compact('blog'));
    }

    function destroy($id)
    {
        $this->postRePo->destroy($id);
        return redirect()->route('blogs.index');
    }
}
