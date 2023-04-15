<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitCotroller extends Controller
{
    public function lsProduits(Request $request){
        $produits = Produit::paginate(8);
        return view('produits',['produits'=>$produits]);
    }
    private function getProduitByRef($ref){
        $produit = Produit::where('reference','=',$ref);
        return $produit;
    }
    private function getProduitByDes($des){
        $produit = Produit::whereRaw('designation like %?%',$des);
        return $produit;
    }
    public function lsOneProduit($id){
        $produit = Produit::find($id);
        return view('produit',['produit'=>$produit]);
    }
    public function ajoutForm(){
        return view('ajoutform');
    }
    public function ajouterProduit(Request $request){
        $reference = $request->reference;
        $designation = $request->designation;
        $prix = $request->prix;
        $tva = $request->tva;
        $quantite = $request->quantite;
        $description = $request->description;
        Produit::create([
            'reference'=>$reference,
            'designation'=>$designation,
            'prix'=>$prix,
            'tva'=>$tva,
            'quantite'=>$quantite,
            'description'=>$description
        ]);
        return redirect(url('produits'));
    }
    public function supprimerProduit($id){
        $produit = Produit::find($id);
        $produit->delete();
        return redirect()->back();
    }
    public function chercherProduit(Request $request){
        $searchBy = $request->searchby;
        $query = $request->query->get('query');
        if ($searchBy == 'ref'){
            $produits = Produit::where('reference','=',$query)->paginate(8);
        }
        else if ($searchBy == 'des'){
            $produits = Produit::where('designation','like','%'.$query.'%')->paginate(8);
        }
        $produits->withPath('chercher?searchby='.$searchBy.'&query='.$query);
        return view('produits',['produits'=>$produits,'query'=>$query,'searchby'=>$searchBy]);
    }
    public function modifierProduitForm($id){
        $produit = Produit::find($id);
        return view('modifform',['produit'=>$produit]);
    }
    public function modifierProduit($id,Request $request){
        $produit = Produit::find($id);
        $produit->reference = $request->reference;
        $produit->designation = $request->designation;
        $produit->prix = $request->prix;
        $produit->tva = $request->tva;
        $produit->description = $request->description;
        $produit->quantite = $request->quantite;
        $produit->save();
        return redirect()->back();
    }
}
