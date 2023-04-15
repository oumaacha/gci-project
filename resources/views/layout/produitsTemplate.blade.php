@extends('layout.layout')

@section('content')
    <div class="card carte">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div>
                @yield('cardTitle')
            </div>
            <div class="card-buttons d-flex gap-3">
                @yield('headerButtons')
                @yield('ajouterButton')
                @yield('confirmmodal')
            </div>
        </div>
        <div class="card-body mt-3">
            @yield('cardBody')
        </div>
    </div>
    @yield('paginator')
@endsection

