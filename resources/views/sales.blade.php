@extends('layout.produitsTemplate')

@section('cardTitle','Informations sur le produit')

@section('headerButtons')
    <a class="btn btn-secondary" href="{{url('produits')}}">Liste des produits</a>
@endsection
@section('ajouterButton')
    <a href="{{url('ajoutform')}}" class="btn btn-outline-primary">Ajouter un produit</a>
@endsection
@section('cardBody')
    <h1>Sales Page</h1>
    <table class="table table-bordered">
    <tr>
        <td class="w-25">Référence</td>
        <td><b>14575</b></td>
    </tr>
    <tr>
        <td class="w-25">Désignation</td>
        <td>Produit 1</td>
    </tr>
    <tr>
        <td class="w-25">Prix unitaire</td>
        <td><b>150 MAD</b></td>
    </tr>
    <tr>
        <td class="w-25">Quantité</td>
        <td><b>20 unités</b></td>
    </tr>
    <tr>
        <td class="w-25">TVA</td>
        <td><b>20 %</b></td>
    </tr>
    <tr>
        <td class="w-25">Dernière modification</td>
        <td>21/05/2023</td>
    </tr>
    <tr>
        <td class="w-25">Chiffre d'affaire</td>
        <td><b>1450 MAD</b></td>
    </tr>
    <tr>
        <td class="w-25">Description</td>
        <td>this is description</td>
    </tr>
</table>
<h1>Sales Actions Successfully Added</h1>
@endsection
