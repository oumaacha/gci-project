@extends('layout.produitsTemplate')

@section('cardTitle','Modification d\'un produit')

@section('headerButtons')
    <a class="btn btn-secondary" href="{{url('produits')}}">Liste des produits</a>
@endsection
@section('ajouterButton')
    <a href="{{url('ajoutform')}}" class="btn btn-outline-primary">Ajouter un produit</a>
@endsection

@section('cardBody')
    <form method="post" action="{{route('modifierproduit',['id'=>$produit->id])}}">
        @csrf
        <table class="table">
            <tr>
                <td class="w-25">Référence</td>
                <td><input class="form-control" type="text" value="{{$produit->reference}}" name="reference"></td>
            </tr>
            <tr>
                <td class="w-25">Désignation</td>
                <td><input class="form-control" type="text" value="{{$produit->designation}}" name="designation"></td>
            </tr>
            <tr>
                <td class="w-25">Prix unitaire</td>
                <td><input class="form-control" type="number" value="{{$produit->prix}}" name="prix" aria-owns="prix"></td>
            </tr>
            <tr>
                <td class="w-25">Quantité</td>
                <td><input class="form-control" type="number" value="{{$produit->quantite}}" name="quantite"></td>
            </tr>
            <tr>
                <td class="w-25">TVA</td>
                <td><input class="form-control" type="number" value="{{$produit->tva}}" name="tva"></td>
            </tr>
            <tr>
                <td class="w-25">Description</td>
                <td>
                    <textarea class="form-control" name="description" rows="5">{{$produit->description}}</textarea>
                </td>
            </tr>
        </table>
        <button id="submit-btn" type="submit" hidden></button>
    </form>
    <div class="float-end">
        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modifiermodal">Modifier</button>
        <a class="btn btn-warning" href="{{route('produits')}}">Annuler</a>
    </div>
@endsection
@section('confirmmodal')
    <div class="modal fade" id="modifiermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Êtes-vous sûre de modifier ce produit ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Non</button>
                    <button type="button" class="btn btn-danger" id="modifiereoui">Oui</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const modifiereoui = document.getElementById('modifiereoui')
        const submitBtn = document.getElementById('submit-btn')
        modifiereoui.addEventListener('click',function (){
            submitBtn.click();
        })
    </script>
@endsection
