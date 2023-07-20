@extends('layouts.app') 

@section('content')
<h1 class="container text-success my-4 text-center">{{$departement->name}}</h1> 
<form class="container border p-5 bg-light-subtle shadow rounded-5"  >
        <div class="mb-3">
      <label for="NumberOfEmploye" class="form-label text-primary">Number Of Employe</label>
      <input  disabled type="number" name="NumberOfEmploye" class="form-control" id="NumberOfEmploye"  value="{{$departement->employe_count}}">
    </div>
   
  </form>    
@endsection