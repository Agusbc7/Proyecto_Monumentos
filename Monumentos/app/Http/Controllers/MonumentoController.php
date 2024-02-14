<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monumento;
use App\Http\Requests\MonumentoRequest;

class MonumentoController extends Controller
{

    public function read()
    {
        $monumentos = Monumento::with('provincia')->get();
        $json = json_encode($monumentos);
        return view('index', compact('monumentos', 'json'));
    }

    public function create()
    {
        return view('monumentosCreate');
    }

    public function store(MonumentoRequest $request)
    {
        Monumento::create($request->all());
        return redirect()->route('index');
    }
}
