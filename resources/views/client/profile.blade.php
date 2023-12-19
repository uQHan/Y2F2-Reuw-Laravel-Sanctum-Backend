@extends('layouts.client')
@section('title')
<title>Home</title>
@endsection

{{-- @section('head')

@endsection --}}

@section('content')
<div class="card border-0 rounded-0 text-start">
    <div class="text-white d-flex flex-row" style="background-color: #000; height:200px;">
        <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
            <img class="card-img-bottom rounded-circle prof-img img-thumbnail mt-4 z-1"
                src="{{ asset('client/image/test-square.jpg')}}" alt="">
            <button type="button" class="btn btn-dark" style="z-index: 1;">
                Edit profile
            </button>
        </div>
        <div class="ms-3" style="margin-top: 130px;">
            <h5>Username</h5>
            <p>@@username</p>
        </div>
    </div>
    <div class="p-4 text-black bg-white">
        <div class="mt-5 d-flex flex-column">
            <div class="ms-3 mt-2">
                <h5>Bio Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur est dicta voluptatem,
                    quisquam explicabo iste, tenetur quis impedit facilis maiores repellat quasi consequatur harum
                    aperiam fugit quas? Delectus, officia sint?</h5>
                <a>website.com</a>
            </div>
        </div>
        <div class="d-flex justify-content-end text-center py-1">
            <div>
                <p class="mb-1 h5">4</p>
                <p class="small text-muted mb-0">Photos</p>
            </div>
            <div class="px-3">
                <p class="mb-1 h5">2</p>
                <p class="small text-muted mb-0">Followers</p>
            </div>
            <div>
                <p class="mb-1 h5">10</p>
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