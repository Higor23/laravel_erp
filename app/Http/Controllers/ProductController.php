<?php

namespace App\Http\Controllers;

use App\Measure;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $product, $measure;

    public function __construct(Product $product, Measure $measure)
    {
        $this->product = $product;
        $this->measure = $measure;
    }

    
    public function index()
    {

        $products = $this->product->paginate();
        $measures = Measure::all();


        return view('products.index', [
            'products' => $products, 'measures' => $measures
        ]);
        
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


    public function show($id)
    {
        $product = $this->product->find($id);

        if(!$product){
            return redirect()->back();
        }

        return view('products.show', ['product'=> $product]);
    }


    public function edit($id)
    
    {
        $product = $this->product->find($id);
        
        $measures = $this->measure::all();
        
        return view('products.edit', ['product' => $product, 'measures' =>  $measures]);
    }


    public function update(Request $request, $id)
    {
        $product = $this->product->find($id);
        // $request->validate([
        //     'descricao' => 'required',
        //     'quantidade' => 'required',
        //     'preco' => 'required',
        //     'custo' => 'required',
        //     'unidadeMedida_id' => 'required',
        // ]);

        
        $product->update($request->all());

        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
