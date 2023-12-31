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
                src="{{ asset('client/image/pfp/'.Auth::user()->settings->pfp_url)}}" alt="" style="object-fit: cover">
        </div>
        <div class="ms-3 flex-fill" style="margin-top: 130px;">
            <h5>{{ Auth::user()->settings->username }}</h5>
            <div class="d-flex justify-content-between">
                <p>{{ Auth::user()->email }}</p>
                <a href="{{url('settings')}}" class="text-end text-white me-4"><i class="fa-solid fa-gear"></i></a>
            </div>
        </div>
    </div>
    <div class="p-4 text-black bg-white">
        <div class="mt-4 d-flex flex-column">
            <div class="ms-3 mt-2">
                <h5>{{ Auth::user()->settings->bio }}</h5>
                <a>{{ Auth::user()->settings->website }}</a>
            </div>
        </div>
        <div class="d-flex justify-content-end text-center py-1">
            <div class="me-1">
                <p class="mb-1 h5">0</p>
                <p class="small text-muted mb-0">Posts</p>
            </div>
            <div class="px-3">
                <p class="mb-1 h5">0</p>
                <p class="small text-muted mb-0">Followers</p>
            </div>
            <div>
                <p class="mb-1 h5">0</p>
                <p class="small text-muted mb-0">Following</p>
            </div>
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
                <p class="card-text linelimit-3 p-1 p-lg-0">Some quick example text to build on the card title and make
                    up
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
                <p class="card-text linelimit-3 p-1 p-lg-0">Some quick example text to build on the card title and make
                    up
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