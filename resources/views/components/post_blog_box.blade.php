@if (Auth::check())
<div class="card mt-2 border-0 text-start">
   <div class="card-header bg-black text-white fw-bold">Create a post</div>
   <form action="/post" enctype="multipart/form-data" method="POST">
      @csrf
      <div class="card-body">
         <div class="mb-2">
            {{-- <label class="ms-2 fw-bold" for="postTitle">Title*</label> --}}
            <input name="postTitle" type="text" class="form-control" placeholder="Title">
         </div>
         <div>
            <textarea name="postText" class="form-control" id="" rows="3" placeholder="Text(Optional)"></textarea>
         </div>
      </div>
      <div class="d-flex card-footer justify-content-between container py-1">
         <div>
            <input type="file" accept="image/*" id="postImage" name="postImage" class="btn-check" autocomplete="off">
            <label for="postImage" class="btn">
               <i class="fa-regular fa-image"></i>
            </label>
         </div>
         <div>
            <button class="btn btn-dark" type="submit"><strong>POST</strong></button>
         </div>
      </div>
   </form>
</div>
@else
<div class="card mt-2 border-5 d-flex justify-content-center align-items-center btn btn-outline-light"
   style="height: 200px">
   <div class="text-center">
      <a class="stretched-link" href="{{url('welcome')}}">
         <i class="fa-solid fa-plus-circle" style="font-size: 100px; color: lightgray"></i>
      </a>
   </div>
   <div class="">
      <h6>Login or Singup to create a new post!</h6>
   </div>
</div>
@endif