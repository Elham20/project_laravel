<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuveController extends Controller
{
    public function index()
{
    $cuves = Cuve::with('mouts')->get();
    return view('cuves.index', compact('cuves'));
}

public function show($id)
{
    $cuve = Cuve::with('mouts')->findOrFail($id);
    return view('cuves.show', compact('cuve'));
}
}
