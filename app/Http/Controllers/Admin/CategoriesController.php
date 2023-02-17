<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index() {
        
        $categories = Category::orderBy("name", "asc")->get();

        return view('admin.categories', compact('categories'));
    }

    public function insert_category(Request $request) {

        $request->validate([
            "name" => "required|unique:categories,name"
        ]);

        $c = new Category();
        $c->name = $request->name;
        $c->save();

    }
}
