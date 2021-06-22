<?php

namespace App\Http\Controllers;

use App\Repository\CateRepo;
use Illuminate\Http\Request;
use function Symfony\Component\String\s;

class CategoryController extends Controller
{
    protected $cateRepo;

    public function __construct(CateRepo $cateRepo ,)
    {
        $this->cateRepo = $cateRepo;
    }

    function index()
    {
       $categorys =  $this->cateRepo->index();
       return view('category.list' , compact('categorys'));
    }

    function create()
    {
        return view('category.create');
    }

    function store(Request $request)
    {
        $this->cateRepo->store($request);
        return redirect()->route('category.index');
    }

    function destroy($id)
    {
        $this->cateRepo->destroy($id);
        return redirect()->route('category.index');
    }

    function edit($id)
    {
        $category = $this->cateRepo->findById($id);
        $categorys = $this->cateRepo->index();
        return view('category.update' , compact('categorys' , 'category'));
    }

    function update($id , Request $request)
    {
        $this->cateRepo->update($id , $request);
        return redirect()->route('category.index');
    }
}
