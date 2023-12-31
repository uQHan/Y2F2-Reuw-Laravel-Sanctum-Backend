@extends('layouts.account')
@section('content')
<div class=" row">
    <div class="col-12 col-lg-4 offset-lg-4 cover">
        <div class="d-flex flex-column align-items-center justify-content-center my-5 row">
            <div class="text-center">
                <a href="#" class="btn emp-block border-0 rounded-5 text-decoration-none m-1 m-md-2">
                    <i class="fa-solid fa-spider p-1 p-md-2" style="font-size: 32px; color: red"></i>
                </a>
            </div>
            <div class="pt-5" id="loginHeader">
                <h3 class="text-center mb-5" href="#loginForm">Moderator Login</h3>
            </div>
            <div class="col-12 col-lg-8" id="loginForm">
                <form aria-labelledby="loginHeader">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="email">Email*</label>
                        <input name="loginEmail" type="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group mb-2">
                        <label for="passoword">Password* </label>
                        <input name="loginPassword" type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="d-flex justify-content-between">
                        <label>
                            <input type="checkbox" name="loginRemember"> Remember Me
                        </label>
                    </div>
                    <div class="d-flex justify-content-around mt-3">
                        <button type="submit" class="btn w-50 m-2 rounded-0 btn-outline-dark fw-bold">Log
                            In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection