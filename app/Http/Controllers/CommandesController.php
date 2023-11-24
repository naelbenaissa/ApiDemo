<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommandesController extends Controller
{
    function liste()
    {
        return response()->json(Commande::all());
    }

    function detail($id)
    {
        return response()->json(Commande::find($id));
    }

    function ajouterCommande(Request $request)
    {
        $id_client = $request->id_client;
        $id_produit = $request->id_produit;
        $quantite = $request->quantite;

        $commande = new Commande();

        $commande->id_client = $id_client;
        $commande->id_produit = $id_produit;
        $commande->quantite = $quantite;
        $commande->date = Carbon::now();

        $commande->save();

        return response()->json(['status' => "Commande ajouté", 'data' => $commande]);
    }

    function commandesClient($idClient)
    {

    }
}
