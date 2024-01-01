@extends('layouts.client')
@section('title')
<title>Home</title>
@endsection

{{-- @section('head')

@endsection --}}

@section('content')
@include('components.post_blog_box')
@include('components.blog_strip')
@include('components.footer')
@endsection