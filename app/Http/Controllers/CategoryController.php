<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function CategoryView(){
        $data['allData'] = Category::all();
        return view('category.view_category', $data);
    }

    public function CategoryAdd(){
        $data['allData'] = Category::all();
        return view('category.add_category', $data);
    }

    public function CategoryStore(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|unique:categories,name',
        ]);
        $data = new Category();
        $data->name = $request->name;
        $data->description = $request->description;
        $data->save();

        $notification = array(
            'message'=> 'Category added successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('category.view')->with($notification);
    }

    public function CategoryEdit($id){
        $editData = Category::find($id);
        return view('category.edit_category', compact('editData'));
    }

    public function CategoryUpdate(Request $request, $id){
        $data = Category::find($id);
        $validatedData = $request->validate([
            'name' => 'required|unique:categories,name,'.$data->id
        ]);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->save();

        $notification = array(
            'message' => 'Category updated successfully',
            'alert-type' => 'info',
        );
        return redirect()->route('category.view')->with($notification);
    }

    public function CategoryDelete($id){
        $category = Category::find($id);
        $category->delete();

        $notification = array(
            'message' => 'Category deleted successfully',
            'alert-type' => 'info',
        );
        return redirect()->route('category.view')->with($notification);
    }
}
