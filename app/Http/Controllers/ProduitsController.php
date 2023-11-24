<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    function liste()
    {
        return response()->json(Produit::all());
    }

    function detail($id)
    {
        return response()->json(Produit::find($id));
    }
}
