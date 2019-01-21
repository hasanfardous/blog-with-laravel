<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;

class Categorys extends Controller
{
    public function index(){
        // $cats = DB::table('category_table')->get();
        
        return view('admin.categorys.categorys');
    }

    public function create(){
        return view('admin.categorys.new-category');
    }

    public function store(Request $request){
        $name = $request->name;
        
        $category = new Category();

        $category->name = $name;
        $category->save();

        return redirect('/admin/categorys')->with('cat-added', 'Category has been added');
    }
}
