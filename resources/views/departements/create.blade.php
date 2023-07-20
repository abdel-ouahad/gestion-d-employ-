@extends('layouts.app')
@section('content')
<h1 class="container text-success my-3">Ajoute Departement</h1> 

<form class="container border p-5 bg-light-subtle shadow rounded-5" method="POST" action="{{route('departement.store')}} ">
    @csrf


    <div class="mb-3">
      <label for="name" class="form-label text-primary">Departement name</label>
      <input type="text" name="name" class="form-control" id="name"  value="{{old('name')}}">
    </div>




    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  <div class="text-end">

    <button type="submit" class="btn btn-info ">Ajouter</button>
  </div>
  </form>
@endsection