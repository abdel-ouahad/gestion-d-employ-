@extends('layouts.app')

@section('content')
<div class="container shadow rounded-5  card w-50 my-5">
    <h1 class="card-head text-center mt-4 text-success">Vacation Request</h1>
    <hr>
    <div class="card-body ">
 
        <h3 class=""> <span class="text-success " >{{$employe->fullname}}</span> is presently employed with me in the following : </h3>
        <h3>Departement : {{$employe->depart}}</h3>
        <h3>He's requesting for a vacation starting from _________</h3>
        <h3>And ends on _______</h3>
        <p class="text-end">______ ________</p>
        <p class="text-end">______ ________</p>
        <div class="" id="print">
            <a href="#"
            onclick="
            document.getElementById('print').style.display = 'none'
            setTimeout(function(){document.getElementById('print').style.display = 'inline-block'},1000);
            window.print()"
            class="btn btn-primary my-4"> 
                
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                    <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                    <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                </svg></a>
        </div>
    </div>
</div>
    
@endsection