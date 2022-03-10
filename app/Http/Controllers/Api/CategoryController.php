<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreUpdateCategoryFormRequest;

class CategoryController extends Controller
{
    private $category;
    public function  __construct(Category $category){
        $this->category = $category;
    }
    public function index(Category $category){
        $categorys = $category->all();
        return response()->json($categorys);
    }
    public function store(StoreUpdateCategoryFormRequest $request){
        $category = $this->category->create($request->all());
        return response()->json($category,201);
    }
    public function update(Request $request,$id){
        $category = $this->category->find($id);
        if(!$category)
            return response()->json(['error'=>'Não encontrado'],404);
        $category->update($request->all());
        return response()->json($category,200);
    }
    public function destroy($id){
        $category = $this->category->find($id);
        if(!$category)
            return response()->json(['error'=>'Id não encontrado'],404);
        $category->delete();
        return response()->json(['sucsses'=>true],204);
    }
    public function show($id){
        if(!$category=$this->category->find($id))
            return response()->json(['error'=>'Não encontrou'],404);
        return response()->json($category, 200);
    }

}