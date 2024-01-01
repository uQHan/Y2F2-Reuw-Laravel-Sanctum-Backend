@extends('layouts.client')
@section('title')
<title>Home</title>
@endsection

{{-- @section('head')

@endsection --}}

@section('content')
<div class="card border-0 rounded-0 text-start">
    <div class="text-white d-flex flex-row" style="background-color: #000; height:200px;">
        <div class="ms-4 mt-5 d-flex flex-column ratio ratio-1x1" style="width: 150px;">
            <img class="card-img-bottom rounded-circle prof-img img-thumbnail mt-5 z-1"
                src="{{ asset('client/image/pfp/'.$user->settings->pfp_url)}}" alt="profile_pic">
        </div>
        <div class="ms-3 flex-fill" style="margin-top: 130px;">
            <h5>{{ $user->settings->username }}</h5>
            <div class="d-flex justify-content-between">
                <p>{{ $user->email }}</p>
                <a href="{{url('settings')}}" class="text-end text-white me-4"><i class="fa-solid fa-gear"></i></a>
            </div>
        </div>
    </div>
    <div class="p-4 text-black bg-white">
        <div class="mt-4 d-flex flex-column">
            <div class="ms-3 mt-2">
                <h5>{{ $user->settings->bio }}</h5>
                <a>{{ $user->settings->website }}</a>
            </div>
        </div>
        <div class="d-flex justify-content-end text-center py-1">
            <div class="me-1">
                <p class="mb-1 h5">{{auth()->user()->blogs->count()}}</p>
                <p class="small text-muted mb-0">Posts</p>
            </div>
            {{-- <div class="px-3">
                <p class="mb-1 h5">0</p>
                <p class="small text-muted mb-0">Followers</p>
            </div>
            <div>
                <p class="mb-1 h5">0</p>
                <p class="small text-muted mb-0">Following</p>
            </div> --}}
        </div>
    </div>
</div>
@include('components.post_blog_box')
@include('components.blog_strip')
@endsection

@section('js')
@include('library.post_buttons_js_ajax')
@include('library.jScroll')
@endsection