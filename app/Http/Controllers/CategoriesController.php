<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function store(Category $category, Request $request)
    {
        $dados = $request->all();

        $category->create($dados);

        return redirect()->route('dashboard');
    }

    public function index(Category $category)
    {
        $categories = $category->paginate(5);

        return view('Pages/Categories', compact('categories'));
    }
}
