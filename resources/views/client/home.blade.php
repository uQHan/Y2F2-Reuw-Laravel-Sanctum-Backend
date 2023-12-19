@extends('layouts.client')
@section('title')
<title>Home</title>
@endsection

{{-- @section('head')

@endsection --}}

@section('content')
<div class="card mt-2 border-0 text-start">
   <div class="card-header bg-black text-white">Create a post</div>
   <div class="card-body">
      <div class="mb-2">
         <input type="email" class="form-control" placeholder="Title">
      </div>
      <div>
         <textarea class="form-control" id="" rows="3" placeholder="Enxpand on your stories here"></textarea>
      </div>
   </div>
   <div class="d-flex card-footer justify-content-between container py-1">
      <div>
         <button class="btn btn-outline-dark border-0"><i class="fa-regular fa-image"></i></button>
      </div>
      <div>
         <button class="btn btn-dark"><strong>POST</strong></button>
      </div>
   </div>
</div>
<div class="card mt-4 border-0 text-start">
   <div class="card-header">Someone liked this</div>
   <div class="row g-0">
      <div class="d-inline-block d-lg-block col-2 col-lg-1 p-1 pt-2">
         <img class="card-img-bottom rounded-circle pfp-img" src="{{ asset('client/image/test-square.jpg')}}" alt="">
      </div>
      <div class="col-10 col-lg-11">
         <div class="pt-2 ps-lg-0">
            <span class="me-2"><b>Username</b></span>
            <div class="text-secondary me-2 at d-block">@@username<span class="ms-4">4h ago</span></div>
         </div>
      </div>
      <div class="col-lg-11 offset-lg-1">
         <div class="card-body p-2 ps-0 pt-0 con">
            <p class="card-text linelimit-3 p-1 p-lg-0">Some quick example text to build on the card title and make up
               the bulk
               of the card's content.</p>
         </div>
         <div class="container ps-0 mb-3 blog-img-container">
            <img class="rounded-4" src="{{ asset('client/image/portrait-test.webp')}}" alt="">
         </div>
      </div>
   </div>
   <div class="card-footer container d-flex justify-content-center">
      <div>
         <button class="btn btn-outline-dark border-0 px-4"><i class="fa-regular fa-heart"></i></button>
      </div>
      <div>
         <button class="btn btn-outline-dark border-0 px-4"><i class="fa-regular fa-comment"></i></button>
      </div>
      <div>
         <button class="btn btn-outline-dark border-0 px-4"><i class="fa-regular fa-bookmark"></i></button>
      </div>
      <div>
         <button class="btn btn-outline-dark border-0 px-4"><i class="fa-regular fa-share-from-square"></i></button>
      </div>
   </div>
</div>
<div class="card mt-4 border-0 text-start">
   <div class="card-header">Someone liked this</div>
   <div class="row g-0">
      <div class="d-inline-block d-lg-block col-2 col-lg-1 p-1 pt-2">
         <img class="card-img-bottom rounded-circle pfp-img" src="{{ asset('client/image/test-square.jpg')}}" alt="">
      </div>
      <div class="col-10 col-lg-11">
         <div class="pt-2 ps-lg-0">
            <span class="me-2"><b>Username</b></span>
            <div class="text-secondary me-2 at d-block">@@username<span class="ms-4">4h ago</span></div>
         </div>
      </div>
      <div class="col-lg-11 offset-lg-1">
         <div class="card-body p-2 ps-0 pt-0 con">
            <p class="card-text linelimit-3 p-1 p-lg-0">Some quick example text to build on the card title and make up
               the bulk
               of the card's content.</p>
         </div>
         <div class="container pe-0 ps-0 pe-lg-3">
            <img class="card-img-bottom rounded-0" src="{{ asset('client/image/test.jpg')}}" alt="">
         </div>
      </div>
   </div>
   <div class="card-footer container d-flex justify-content-center">
      <div>
         <button class="btn btn-outline-dark border-0 px-4"><i class="fa-regular fa-heart"></i></button>
      </div>
      <div>
         <button class="btn btn-outline-dark border-0 px-4"><i class="fa-regular fa-comment"></i></button>
      </div>
      <div>
         <button class="btn btn-outline-dark border-0 px-4"><i class="fa-regular fa-bookmark"></i></button>
      </div>
      <div>
         <button class="btn btn-outline-dark border-0 px-4"><i class="fa-regular fa-share-from-square"></i></button>
      </div>
   </div>
</div>
@endsection

{{-- @section('js')

@endsection --}}