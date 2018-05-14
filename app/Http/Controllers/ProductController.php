<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Store;
use App\Product_Store;
class ProductController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete']]);
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        \Log::info('We are in INDEX function.');
        return view("products.index", [
          "products" => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $stores = Store::all();
      return view("products.create", [
        "stores" => $stores
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Log::info('We are in store function.');
        $product = new Product;
        $product->title = $request->input("title");
        $product->brand = $request->input("brand");
        $product->image = $request->input("image");
        $product->description = $request->input("description");
        $product->price = $request->input("price");
        $product->save();
        foreach ($request->input("stores") as $store)
        {
          $productStore = new Product_Store;
          $productStore->store_id = $store;
          $productStore->product_id = $product->id;
          $productStore->save();
        }
        return redirect()->route('producs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $product = Product::find($id);
      return view("products.show", [
        "product" => $product
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$this->middleware('auth');
        $product = Product::find($id);
        return view("products.edit", [
          "product" => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->title = $request->input("title");
        $product->brand = $request->input("brand");
        $product->image = $request->input("image");
        $product->description = $request->input("description");
        $product->price = $request->input("price");
        $product->save();
        return redirect()->route('producs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      \Log::info('Delet');
      Product::destroy($id);
      return redirect()->route('producs.index');
    }
}
