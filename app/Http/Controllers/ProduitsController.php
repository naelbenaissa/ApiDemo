<?php

namespace App\Http\Controllers;

use App\Models\Client;
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


    function ajouterProduit(Request $request)
    {
        $nom_produit = $request->nom;
        $description = $request->description;
        $lien_image = $request->lien_image;
        $prix = $request->prix;
        $tva = $request->tva;

        $produit = new Produit();

        $produit->nom = $nom_produit;
        $produit->description = $description;
        $produit->lien_image = $lien_image;
        $produit->prix = $prix;
        $produit->tva = $tva;

        $produit->save();

        return response()->json(['status' => "Produit ajouté", 'data' => $produit]);
    }

}
