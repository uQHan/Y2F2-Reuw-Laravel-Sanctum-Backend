@extends('layouts.account')
@section('title')
<title>Finish setting up your account</title>
@endsection
@section('content')
<div class=" row">
    <div class="col-12 cover">
        <div class="d-flex flex-column align-items-center justify-content-center my-5 row">
            <div class="text-center">
                <a href="#" class="btn emp-block border-0 rounded-5 text-decoration-none m-1 m-md-2">
                    <i class="fa-solid fa-spider p-1 p-md-2" style="font-size: 32px;"></i>
                </a>
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="alert alert-warning col-6 offset-3 mt-4">{{$error}}</p>
                @endforeach
                @endif
            </div>
            <div class="pt-5">
                <h3 class="text-center mb-5">Set up account details</h3>
            </div>
            <div class="col-lg-8">
                <form method="POST" action="/setup-account" class="row" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3 col-lg-6">
                        <label for="date-of-birth">Date of birth*</label>
                        <div class="input-group" name="date-of-birth">
                            <select name="date" class="form-select form-select-lg mb-3">
                                <option class="d-none">Date</option>
                                @for ($d = 1; $d < 32; $d++) <option value="{{$d}}">{{$d}}</option>
                                    @endfor
                            </select>
                            <select name="month" class="form-select form-select-lg mb-3">
                                <option class="d-none">Month</option>
                                @for ($m = 1; $m < 13; $m++) <option value="{{$m}}">{{\Carbon\Carbon::create(null,
                                    $m)->format('F')}}</option>
                                    @endfor
                            </select>
                            <select name="year" class="form-select form-select-lg mb-3">
                                <option class="d-none">Year</option>
                                @for ($d = date("Y"); $d > date("Y")-100; $d--)
                                <option value="{{$d}}">{{$d}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-3 col-lg-6">
                        <label>Gender(Optional)</label>
                        <div class="btn-group w-100">
                            <input type="radio" name="gender" id="male" value="male" class="btn-check"
                                autocomplete="off">
                            <label class="btn btn-outline-dark btn-lg w-50" for="male">
                                <i class="fa-solid fa-person fa-xl"></i>
                            </label>

                            <input type="radio" name="gender" value="female" id="female" class="btn-check"
                                autocomplete="off">
                            <label class="btn btn-outline-dark btn-lg w-50" for="female">
                                <i class="fa-solid fa-person-dress fa-xl"></i>
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="row">
                            <div class="col align-item-center">
                                <label for="username">Username*</label>
                                <input type="text" name="username" class="form-control mb-3" minlength="6">
                                <label for="pfp">Profile pic</label>
                                <input type="file" name="pfp" class="form-control"
                                    accept="image/png, image/gif, image/jpeg"
                                    onchange="displaySelectedImage(event, 'selectedAvatar')">
                            </div>
                            <div class="ms-4 col">
                                <img id="selectedAvatar" src={{ asset('client/image/pfp/default-pfp.jpg') }}
                                    class="rounded-circle" style="width: 200px; height: 200px; object-fit: cover;"
                                    alt="pfp placeholder" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="bio">Bio*</label>
                        <textarea name="bio" name="bio" id="bio" rows="5" class="form-control"
                            maxlength="250" minlength="1"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="url">Website</label>
                        <input type="url" name="website" class="form-control">
                    </div>
                    <div class="d-flex justify-content-around mt-3">
                        <button type="submit" class="btn w-50 m-2 rounded-0 btn-outline-dark fw-bold">Save &
                            Continue</button>
                    </div>
                </form>
                <div class="p-5 m-5"></div>
                <div class="p-5 m-5"></div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function(){
        $('input[type="url"]').on('blur', function(){
        var string = $(this).val();
        if (!string.match(/^https?:/) && string.length) {
            string = "https://" + string;
            $(this).val(string)
            }
        });
    });

    $('label').click(function(e) {
        e.preventDefault();

        var radio = $(this).prev();

        if (radio.is(':checked')) {
        e.stopImmediatePropagation();
        $(this).removeClass("active");
        radio.prop('checked', false);
        } else {
        radio.prop('checked', true);

        }
    });
    
    function displaySelectedImage(event) {
    const selectedImage = document.getElementById('selectedAvatar');
    const fileInput = event.target;

    if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            selectedImage.src = e.target.result;
            };

        reader.readAsDataURL(fileInput.files[0]);
        }
    }
</script>
@endsection