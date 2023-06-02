<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tool;

class ToolController extends Controller
{
    public function ToolView(){
        $data['allData'] = Tool::all();
        return view('tool.view_tool', $data);
    }

    public function ToolAdd(){
        return view('tool.add_tool', $data);
    }

    public function ToolStore(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|unique:tools,name',
        ]);
        $data = new Tool();
        $data->name = $request->name;
        $data->category_id = $request->category_id;
        $data->quantity = $request->quantity;
        $data->cost = $request->cost;
        $data->supplier = $request->supplier;
        $data->purchase_date = $request->purchase_date;
        $data->condition = $request->condition;
        $data->location = $request->location;
        $data->save();

        $notification = array(
            'message'=> 'Tool added successfully',
            'alert-type' => 'success',
        );
        return redirect()->route('tool.view')->with($notification);
    }

    public function ToolEdit($id){
        $editData = Tool::find($id);
        return view('tool.edit_tool', compact('editData'));
    }

    public function ToolUpdate(Request $request, $id){
        $data = Tool::find($id);
        $validatedData = $request->validate([
            'name' => 'required|unique:tools,name,'.$data->id
        ]);
        $data->name = $request->name;
        $data->category_id = $request->category_id;
        $data->quantity = $request->quantity;
        $data->cost = $request->cost;
        $data->supplier = $request->supplier;
        $data->purchase_date = $request->purchase_date;
        $data->condition = $request->condition;
        $data->location = $request->location;
        $data->save();

        $notification = array(
            'message' => 'Tool updated successfully',
            'alert-type' => 'info',
        );
        return redirect()->route('tool.view')->with($notification);
    }

    public function ToolDelete($id){
        $tool = Tool::find($id);
        $tool->delete();

        $notification = array(
            'message' => 'Tool deleted successfully',
            'alert-type' => 'info',
        );
        return redirect()->route('tool.view')->with($notification);
    }
}
