<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Produit;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    function liste()
    {
        return response()->json(Client::all());
    }

    function detail($id)
    {
        return response()->json(Client::find($id));
    }

    function ajouterClient(Request $request)
    {
        $nom_client = $request->nom;
        $prenom_client = $request->prenom;
        $email = $request->email;
        $password = $request->password;

        $client = new Client();

        $client->nom = $nom_client;
        $client->prenom = $prenom_client;
        $client->email = $email;
        $client->password = $password;

        $client->save();

        return response()->json(['status' => "Client ajouté", 'data' => $client]);
    }

    function authentifierClient(Request $request){
        $email = $request->email;
        $password = $request->password;

        $client = Client::where('email', $email)->first();

        if ($client) {
            //if (password_verify($password, $client->password)) {
            if ($password === $client->password) {
                return $client;
            } else {
                return response()->json(['Erreur' => 'Mot de passe Incorrect'], 401);
            }
        } else {
            return response()->json(['Erreur' => 'Le client n\'existe pas'], 404);
        }
    }
}
