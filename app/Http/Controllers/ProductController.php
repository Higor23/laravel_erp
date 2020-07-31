<?php

namespace App\Http\Controllers;

use App\Measure;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $unidadeMedidas = Measure::all();
        $products = Product::latest()->paginate(5);

        return view('products.index', ['unidadeMedidas' => $unidadeMedidas, 'products' => $products])
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {

        $unidadeMedidas = Measure::all();
        return view('products.create', ['unidadeMedidas' => $unidadeMedidas]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'descricao' => 'required',
            'quantidade' => 'required',
            'preco' => 'required',
            'custo' => 'required',
            'unidadeMedida_id' => 'required',
        ]);

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
