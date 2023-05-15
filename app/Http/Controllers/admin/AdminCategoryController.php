<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index(){

        $categories = Category::select()->orderBy("id", "DESC")->paginate(3);

        return view("admin.categorylist", [
            "categories" => $categories,
        ]);
    }

    public function addPage(){

        return view("admin.categoryAdd");
    }

    public function add(Request $request){

        $category = new Category;

        $category->category = $request->category;

        if($category->save())
        {
            $request->session()->flash('alert-success-add-category', 'Category added.');
        } else {
            $request->session()->flash('alert-errors-add-category', 'Category not added.');
        }

        return redirect()->route("categorylist");
    }

    public function editPage($id){

        $category = Category::find($id);

        return view("admin.categoryEditPage", [
            "category" => $category,
        ]);
    }

    public function edit(Request $request){

        $category = Category::find($request->id);


        $category->category = $request->category;

        if($category->save())
        {
            $request->session()->flash('alert-success-edit-category', 'Category edited.');
        } else {
            $request->session()->flash('alert-errors-edit-category', 'Category not edited.');
        }

        return redirect()->route("categoryEditPage", ["id" => $request->id]);
    }
    
    public function delete(Request $request, $id){

        $category = Category::with("post")->find($id);

        $success = true;

        foreach ($category->post as $post) {
            if (!$post->delete()) {
                $success = false;
                break;
            }
        }

        if($category->delete())
        {   
            $request->session()->flash('alert-success-delete-category', 'Category deleted');
        } else {
            $request->session()->flash('alert-error-delete-category', 'Category not deleted');
        }
        return redirect()->route('categorylist');
    }
}
