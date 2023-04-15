@extends('layout.produitsTemplate')

@section('cardTitle','Informations sur le produit')

@section('headerButtons')
    <a class="btn btn-secondary" href="{{url('produits')}}">Liste des produits</a>
@endsection
@section('ajouterButton')
    <a href="{{url('ajoutform')}}" class="btn btn-outline-primary">Ajouter un produit</a>
@endsection
@section('cardBody')
<table class="table table-bordered">
    <tr>
        <td class="w-25">Référence</td>
        <td><b>{{$produit->reference}}</b></td>
    </tr>
    <tr>
        <td class="w-25">Désignation</td>
        <td>{{$produit->designation}}</td>
    </tr>
    <tr>
        <td class="w-25">Prix unitaire</td>
        <td><b>{{$produit->prix}} MAD</b></td>
    </tr>
    <tr>
        <td class="w-25">Quantité</td>
        <td><b>{{$produit->quantite}} unités</b></td>
    </tr>
    <tr>
        <td class="w-25">TVA</td>
        <td><b>{{$produit->tva}} %</b></td>
    </tr>
    <tr>
        <td class="w-25">Dernière modification</td>
        <td>{{$produit->updated_at}}</td>
    </tr>
    <tr>
        <td class="w-25">Chiffre d'affaire</td>
        <td><b>0 MAD</b></td>
    </tr>
    <tr>
        <td class="w-25">Description</td>
        <td>{{$produit->description}}</td>
    </tr>
</table>
<div class="float-end">
    <a class="btn btn-danger" href="{{route('modifierproduitform',['id'=>$produit->id])}}">Modifier</a>
</div>
@endsection
