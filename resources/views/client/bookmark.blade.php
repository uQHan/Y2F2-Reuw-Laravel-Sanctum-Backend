@extends('layouts.client')
@section('title')
<title>Your Bookmarks</title>
@endsection

{{-- @section('head')

@endsection --}}

@section('content')
<div class="card mt-2 border-5 d-flex justify-content-center align-items-center btn btn-outline-light"
   style="height: 100px">
   <div class="">
      <i class="fa-solid fa-book-bookmark fs-1"></i><span class="fs-3 fw-bold ms-2">Check out your bookmarks</span>
   </div>
</div>
@include('components.blog_strip')
@endsection

@section('js')
@include('library.post_buttons_js_ajax')
@include('library.jScroll')
@endsection
