<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function Search(Request $request){
        $search = $request->input('search');
        $results = DB::table('tools')->where('name','LIKE','%'.$search.'%')->get();
        return view('search',['results'=>$results]);
    }
}
