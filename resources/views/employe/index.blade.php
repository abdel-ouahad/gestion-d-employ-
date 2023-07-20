@extends('layouts.app')

@section('content')

<div class="d-flex flex-row justify-content-between my-4 container">
    <h1 class="text-success">List Of Employe</h1>
    <button class="btn btn-success"><a class="nav-link" href="{{route('employe.create')}}">Ajouter a new employe</a></button>
</div>
    <x-index :variabls="$employes" />
  <div class="d-flex justify-content-center ">
      {{$employes->onEachSide(1)->links()}}
    </div>
@endsection