<?php

namespace App\Http\Controllers;

use App\Measure;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $measures = Measure::all();
        $products = Product::latest()->paginate(5);

        return view('products.index', ['measures' => $measures, 'products' => $products])
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {

        $measures = Measure::all();
        return view('products.create', ['measures' => $measures]);
    }

    public function store(Request $request)
    {

        // $request->validate([
        //     'description' => 'required',
        //     'quantidade' => 'required',
        //     'preco' => 'required',
        //     'custo' => 'required',
        //     'unidadeMedida_id' => 'required',
        // ]);

        Product::create($request->all());

        return redirect()->route('products.index');
    }


    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }


    public function edit(Product $product)
    {
        $unidadeMedidas = Measure::all();
        return view('products.edit', ['product'=>$product, 'unidadeMedidas' =>  $unidadeMedidas]);
    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'descricao' => 'required',
            'quantidade' => 'required',
            'preco' => 'required',
            'custo' => 'required',
            'unidadeMedida_id' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
