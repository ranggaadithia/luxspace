<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // set title
        $title = "Product List";
        // get all products
        $products = Product::paginate(5);
        // add truncated description
        foreach ($products as $product) {
            $product->truncated_description = Str::limit($product->description, 100);
        }
        // get all categories for input
        $categories = Category::all();
        // return view with all variable
        return view('dashboard.index', compact('title', 'products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // validate input request
        $validate = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'category_id' => 'required',
        ]);
        // change cover name (avoid duplicate name)
        $imageName = time() . '.' . $request->cover->extension();
        // check if cover is uploaded and store it in public/images folder
        if ($request->file('cover')) {
            $validate['cover'] =  $request->cover->storeAs('images', $imageName, 'public');
        }
        // create product
        Product::create($validate);
        // return view with success message
        return redirect()->route('product.index')->with('success', 'Product has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validate input request
        $validate = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'category_id' => 'required',
        ]);

        // find the product by ID
        $product = Product::findOrFail($id);

        // check if cover is uploaded   
        if ($request->file('cover')) {
            // delete old cover
            Storage::disk('public')->delete($product->cover);
            // change cover name (avoid duplicate name)
            $imageName = time() . '.' . $request->cover->extension();
            // store new cover
            $validate['cover'] =  $request->cover->storeAs('images', $imageName, 'public');
        }

        $product->update($validate);

        // return view with success message
        return redirect()->route('product.index')->with('success', 'Product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $product = Product::findOrFail($id);

        Storage::disk('public')->delete($product->cover);

        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product has been deleted');
    }
}
