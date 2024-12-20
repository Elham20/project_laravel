<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mouts;         
use App\Models\Historiques;    
use App\Models\Cuves;         
use Illuminate\Support\Facades\Auth;

class MoutController extends Controller
{
    
    public function addMout(Request $request, $cuveId)
    {
        $request->validate([
            'volume' => 'required|numeric',
            'type' => 'required|string',
            'origine' => 'required|string',
        ]);
        $mout = new Mout();
        $mout->volume = $request->volume;
        $mout->type = $request->type;
        $mout->origine = $request->origine;
        $mout->cuve_id = $cuveId;
        $mout->save();
        Historique::create([
            'user_id' => Auth::id(), 
            'cuve_id' => $cuveId,
            'action' => 'Ajout de moût : Volume ' . $request->volume . ', Type ' . $request->type,
        ]);
        return redirect()->back()->with('success', 'Moût ajouté avec succès et action historisée.');
    }
}
