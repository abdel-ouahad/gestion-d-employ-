@extends('layouts.app')
@section('content')
<h1 class="container text-success my-3">Ajoute Employe</h1> 

<form class="container border p-5 bg-light-subtle shadow rounded-5" method="POST" action="{{route('employe.store')}} ">
    @csrf
    <div class="mb-3">
      <label for="fullname" class="form-label text-primary" >Full name</label>
      <input type="text" name="fullname" class="form-control" value="{{old('fullname')}}" id="fullname">
    </div>
    <div class="mb-3">
      <label for="registretion_number" class="form-label text-primary">Register Number</label>
      <input type="number" name="registretion_number" class="form-control" id="registretion_number"  value="{{old('registretion_number')}}">
    </div>


    <div class="mb-3">
      <label for="phone" class="form-label text-primary">Phone Number</label>
      <input type="tel" name="phone" class="form-control" id="phone"  value="{{old('phone')}}">
    </div>
    <div class="mb-3">
      <label for="adresse" class="form-label text-primary">Adresse</label>
      <input type="text" name="adresse" class="form-control" id="adresse"  value="{{old('adresse')}}">
    </div>
    <div class="mb-3">
      <label for="city" class="form-label text-primary"> City</label>
      <input type="text" name="city" class="form-control" id="city"  value="{{old('city')}}">
    </div>
    <div class="mb-3">
      <label for="hire_date" class="form-label text-primary">Hire Date</label>
      <input type="date" name="hire_date" class="form-control" id="hire_date"  value="{{old('hire_date')}}">
    </div>
    <div class="mb-3">
      <label for="departement" class="form-label text-primary" >Departement</label>
      <select name="departement" id="departement" class="form-select" 
      onclick="document.getElementById('selected').style.display = 'none'"
      >
        <option selected id="selected">choose a departement</option>
        <option value="Health ">Health </option>
        <option value="Education ">Education </option>
        <option value="Law Enforcement ">Law Enforcement </option>
        <option value="Finance and Economy ">Finance and Economy </option>
        <option value="Social Services ">Social Services </option>
      </select>
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