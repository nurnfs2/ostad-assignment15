<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            // Add more validation rules as per your product fields
        ]);

        // Create a new product
        $product = Product::create($validatedData);

        // Redirect or do further processing
        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            // Add more validation rules as per your product fields
        ]);

        // Find the product
        $product = Product::findOrFail($id);

        // Update the product
        $product->update($validatedData);

        // Redirect or do further processing
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        // Find the product
        $product = Product::findOrFail($id);

        // Delete the product
        $product->delete();

        // Redirect or do further processing
        return redirect()->route('products.index');
    }
}
