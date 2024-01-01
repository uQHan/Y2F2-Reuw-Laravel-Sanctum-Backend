<div class="card-footer container d-flex justify-content-center p-1">
    @csrf
    <div>
        <a  href = "{{url('/like/'.$blog->blog_id)}}"
            class="btn btn-outline-secondary border-0 px-4 mx-2">
            <i class="fa-regular fa-heart"></i>
            {{ $likes->count() }}
        </a>
    </div>
    <div>
        <button type="button" class="btn btn-outline-secondary border-0 px-4 mx-2" data-bs-target="#blogModal{{$blog->blog_id}}"
            data-bs-toggle="modal" onclick="">
            <i class="fa-regular fa-comment"></i>
            {{ $comments->count() }}
        </button>
    </div>
    <div>
        <a  href = "{{url('/bookmark/'.$blog->blog_id)}}"
            class="btn btn-outline-secondary border-0 px-4 mx-2">
            <i class="fa-regular fa-bookmark"></i>
            {{ $bookmarks->count() }}
        </a>
    </div>
    {{-- <div>
        <button class="btn btn-outline-secondary border-0 px-4 mx-2">
            <i class="fa-regular fa-share-from-square"></i>
        </button>
    </div> --}}
</div>