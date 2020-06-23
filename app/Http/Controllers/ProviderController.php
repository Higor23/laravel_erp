<?php

namespace App\Http\Controllers;

use App\Industry;
use App\Measure;
use App\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{

    public function index()
    {
        $providers = Provider::latest()->paginate(5);

        return view('providers.index', ['providers' => $providers])
            ->with('i', (request()->input('page', 1)-1)*5);
    }

    public function create()
    {
        $industries = Industry::all();
        return view('providers.create', ['industries' => $industries ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'fantasia' => 'required',
            'telefone1' => 'required',

        ]);

        Provider::create($request->all());

        return redirect()->route('providers.index');
    }

    public function show(Provider $provider)
    {
        //
    }

    public function edit(Provider $provider)
    {
        $industries = Industry::all();
        return view('providers.edit', ['provider' => $provider, 'industries' => $industries]);
    }

    public function update(Request $request, Provider $provider, Measure $industries)
    {
        $request->validate([
            'fantasia' => 'required',
            'telefone1' => 'required',

        ]);


        $provider->update($request->all());


        return redirect()->route('providers.index');

    }

    public function destroy(Provider $provider)
    {
        //
    }
}
