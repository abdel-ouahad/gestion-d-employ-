@extends('layouts.app')
@section('content')
<div class="d-flex flex-row justify-content-between my-4 container">
    <h1 class="text-success">List Of Departements</h1>
    <button class="btn btn-success"><a class="nav-link" href="{{route('departement.create')}}">Ajouter a new Departement</a></button>
</div>
<table class="table rounded container table-bordered shadow p-5 mb-5">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col ">Number Of Employe</th>
        <th scope="col">Chekc</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($departements as $departement)
            <tr>
                <td> {{$departement->name}}</td>
                <td> {{$departement->employe_count}}</td>
                <td class="d-flex flex-row "> 
            <button class="btn btn-primary me-2"><a class="nav-link" href="{{route('departement.show' , $departement->id)}}">
                <svg xmlns="http://www.w3.org/2000/    svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/></svg></a>
            </button>

              
              
            <button class="btn btn-warning me-2"><a class="nav-link" href="{{route('departement.edit' , $departement->id)}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg></a></button>
            
            <form action="{{route('departement.destroy' , $departement->id)}}" method="post" >
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                </svg></button>
            </form>
                </td>
            </tr>
      @endforeach
    </tbody>
  </table>
  <div class="d-flex justify-content-center ">
    {{$departements->onEachSide(1)->links()}}
  </div>
@endsection