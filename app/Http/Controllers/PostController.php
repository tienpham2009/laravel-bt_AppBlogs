<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repository\CateRepo;
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
        $categorys = Category::all();
        return view('blogs.create' , compact('categorys'));
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
        $categorys = Category::all();
        $blog = $this->postRePo->getById($id);
        return view('blogs.update' , compact('blog' , 'categorys'));
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
