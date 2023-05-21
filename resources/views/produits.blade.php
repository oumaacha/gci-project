@extends('layout.produitsTemplate')

@section('cardTitle','La liste des Produits')

@section('headerButtons')
    <form method="get" action="{{route('chercherproduit')}}" class="d-flex align-items-center gap-2">
        <select name="searchby" class="form-select form-select-sm w-50" aria-label=".form-select-sm example">
            @if(isset($searchby) && $searchby=='des')
                <option value="ref">Référence</option>
                <option value="des" selected>Désignation</option>
            @else
                <option value="ref" selected>Référence</option>
                <option value="des">Désignation</option>
            @endif
        </select>
        <input class="form-control me-2" value="{{isset($query) ? $query : ''}}" name="query" type="search" placeholder="Chercher un produit" aria-label="Search">
        <button class="btn btn-outline-success btn-sm" type="submit">Chercher</button>
    </form>
@endsection
@section('ajouterButton')
    <a href="{{route('ajoutform')}}" class="btn btn-outline-primary">Ajouter un produit</a>
@endsection
@section('cardBody')
    @if(count($produits)>0)
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Référence</th>
            <th scope="col">Désignation</th>
            <th scope="col">Prix</th>
            <th scope="col">Quantité</th>
            <th scope="col">Opérations</th>
            <th scope="col">Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($produits as $produit)
            <tr>
                <th scope="row">{{$produit->reference}}</th>
                <td>{{$produit->designation}}</td>
                <td>{{$produit->prix}}</td>
                <td>{{$produit->quantite}}</td>
                <td>
                    <a href="{{url('produit')}}/{{$produit->id}}" class="btn btn-sm btn-primary">Plus</a>
                    <button value="{{$produit->id}}" class="btn btn-sm btn-danger deletebtn" data-bs-toggle="modal" data-bs-target="#deletemodal">Supprimer</button>
                    <a href="{{route('modifierproduitform',['id'=>$produit->id])}}" class="btn btn-sm btn-warning">Modifier</a>
                </td>
                <td>Date added</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <div class="alert alert-warning" role="alert">
            Le produit n'existe pas
        </div>
    @endif
@endsection

@section('paginator')
    <div class="pagination-bar">
        <div class="paginator">
            {{$produits->links()}}
        </div>
    </div>
@endsection
@section('confirmmodal')
    <div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Êtes-vous sûre de supprimer ce produit ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Non</button>
                    <a type="button" class="btn btn-danger" id="deleteoui">Oui</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        const deletebtn = document.getElementsByClassName('deletebtn');
        const deleteoui = document.getElementById('deleteoui')
        for (const deletebtnElement of deletebtn) {
            deletebtnElement.addEventListener('click',()=>{
                deleteoui.setAttribute('href','/produit/supprimer/'+deletebtnElement.value)
            })
        }
    </script>
@endsection
