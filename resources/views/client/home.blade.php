@extends('layouts.client')
@section('title')
<title>Home</title>
@endsection

{{-- @section('head')

@endsection --}}

@section('content')
<div class="card mt-4 btn p-0 border-0 btn-outline-dark text-start">
   <div class="card-header">Someone liked this</div>
   <div class="row g-0">
      <div class="col-lg-1 p-1 pt-2">
         <img class="card-img-bottom rounded-circle" src="{{ asset('client/image/test-square.jpg')}}" alt="">
      </div>
      <div class="col-lg-11">
         <div class="p-2 ps-0">
            <span class="me-2">Username</span>
            <span class="text-secondary me-2">email@exp.com
            </span class="text-secondary me-2"><span>4h ago</span>
         </div>
         <div class="card-body p-2 ps-0 con">
            <h5 class="card-title">Card title</h5>
            <p class="card-text linelimit-3">Some quick example text to build on the card title and make up the bulk
               of the card's content.</p>
         </div>
         <div class="container ps-0 pe-4">
            <img class="card-img-bottom rounded-0" src="{{ asset('client/image/test.jpg')}}" alt="">
         </div>
         
         <div>

         </div>
      </div>
   </div>
</div>
@endsection

{{-- @section('js')

@endsection --}}