<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoriqueController extends Controller
{
    public function index()
{
    $historiques = Historique::with(['user', 'cuve'])->orderBy('created_at', 'desc')->get();
    return view('historiques.index', compact('historiques'));
}
}
