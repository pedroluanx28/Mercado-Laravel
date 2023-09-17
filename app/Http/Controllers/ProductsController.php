<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductsController extends Controller
{
    public function index(Product $product)
    {
        $products = $product->paginate(5);

        return view('Pages/Home', compact('products'));
    }

    public function formproducts(Category $category)
    {
        $categories = $category->all();

        return view('Pages/Form-products', compact('categories'));
    }

    public function storeproducts(Request $request, Product $product)
    {
        $dados = $request->all();

        $product->create($dados);   

        return redirect()->route('dashboard');
    }

    public function edit($id, Product $product, Category $category)
    {
        $categories = $category->all();

        $product = $product->find($id);

        return view('/Pages/edit-product', compact('product', 'categories'));
    }
}
