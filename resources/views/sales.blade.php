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
@endsection
