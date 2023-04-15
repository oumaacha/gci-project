@extends('layout.produitsTemplate')

@section('cardTitle','Ajouter un produit')

@section('headerButtons')
    <a href="{{url('produits')}}" class="btn btn-secondary">Retour</a>
@endsection

@section('cardBody')
    <form method="post" action="{{route('ajouterproduit')}}">
        @csrf
        <div class="container w-75">
        <div class="row mb-3">
            <div class="col">
                <label for="reference" class="form-label">Référence</label>
                <input type="text" name="reference" class="form-control form-control-sm" id="reference" placeholder="Ex: 1D27W23T">
            </div>
            <div class="col">
                <label for="prix" class="form-label">Prix unitaire (MAD)</label>
                <input type="text" name="prix" class="form-control form-control-sm" id="prix" placeholder="Ex: 250">
            </div>
        </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="designation" class="form-label">Désignation</label>
                    <input type="text" name="designation" class="form-control form-control-sm" id="designation" placeholder="Ex: Engrais maroc">
                </div>
            </div>
        <div class="row mb-3">
            <div class="col">
                <label for="quantite" class="form-label">Quantité (unité)</label>
                <input type="number" name="quantite" class="form-control form-control-sm" id="quantite" placeholder="Ex: 320">
            </div>
            <div class="col">
                <label for="tva" class="form-label">TVA (%)</label>
                <input type="text" name="tva" class="form-control form-control-sm" id="tva" placeholder="Ex: 5">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control form-control-sm" name="description" id="description" rows="5" placeholder="Ecrire..."></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary w-25 float-end me-2">Ajouter</button>
        <button type="reset" class="btn btn-warning float-end me-2">Effacer</button>
        </div>
    </form>
@endsection
