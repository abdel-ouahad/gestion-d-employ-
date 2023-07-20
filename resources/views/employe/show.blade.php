@extends('layouts.app')
@section('content')
<h1 class="container text-success my-4 text-center">{{$employe->fullname}}</h1> 
<form class="container border p-5 bg-light-subtle shadow rounded-5"  >
    <div class="mb-3">
      <label for="registretion_number" class="form-label text-primary">Register Number</label>
      <input  disabled type="number" name="registretion_number" class="form-control" id="registretion_number"  value="{{$employe->registretion_number}}">
    </div>
    <div class="mb-3">
      <label for="depart" class="form-label text-primary">Departement</label>
      <input  disabled type="text" name="depart" class="form-control" id="depart"  value="{{$employe->departement->name}}">
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label text-primary">Phone Number</label>
      <input  disabled type="tel" name="phone" class="form-control" id="phone"  value="{{$employe->phone}}">
    </div>
    <div class="mb-3">
      <label for="adresse" class="form-label text-primary">Adresse</label>
      <input  disabled type="text" name="adresse" class="form-control" id="adresse"  value="{{$employe->adresse}}">
    </div>
    <div class="mb-3">
      <label for="city" class="form-label text-primary"> City</label>
      <input  disabled type="text" name="city" class="form-control" id="city"  value=" {{$employe->city}}">
    </div>
        <div class="mb-3">
      <label for="hire_date" class="form-label text-primary">Hire Date</label>
      <input  disabled type="date" name="hire_date" class="form-control" id="hire_date"  value="{{$employe->hire_date}}">
    </div>
    <div class="text-end">
            <a href="{{route('vacationrequest' , $employe->id)}}" class="btn btn-outline-dark me-2">Vacation Request</a>
            <a href="{{route('workcertification' , $employe->id)}}" class="btn btn-outline-dark">Work Certification</a>
    </div>
  </form>
  
@endsection