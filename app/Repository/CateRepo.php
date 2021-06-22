<?php


namespace App\Repository;


use App\Models\Category;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class CateRepo
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    function index(): \Illuminate\Database\Eloquent\Collection|array
    {
       return $this->category->all();
    }

    function store($request)
    {
        $this->category->name = $request->input('name');
        $this->category->save();
    }

    function destroy($id)
    {
        DB::beginTransaction();
        try {
            $category = $this->category->findOrFail($id);
            $category->posts()->update(['category_id' => null]);
            $category->delete();
            DB::commit();
        }catch (Exception $exception)
        {
            DB::rollBack();
            echo $exception->getMessage();
        }

    }
    function findById($id)
    {
        return Category::findOrFail($id);
    }

    function update($id , $request)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->input('name');
        $category->save();
    }
}
