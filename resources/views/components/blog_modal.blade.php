<div class="modal fade" id="blogModal{{$blog->blog_id}}" tabindex="-1" role="dialog">
    <div class="card modal-dialog modal-xl modal-content mt-4 border-0 text-start" role="document">
        <div class="modal-header"></div>
        <div class="modal-body">
            <div class="d-flex">
                <div class="pt-2">
                    <img class="rounded-circle pfp-img ms-2"
                        src="{{ asset('client/image/pfp/'.$settings->pfp_url)}}" alt="pfp">
                </div>
                <div class="flex-fill">
                    <div class="pt-2 ps-2">
                        <span class="me-2"><b>{{ $settings->username }}</b></span>
                        <div class="text-secondary">
                            <span class="me-1">
                                {{\Carbon\Carbon::parse($blog->created_at)->format('d/m/Y')}}
                            </span>
                            •
                            <span class="ms-1">
                                {{$blog->created_at->diffForHumans(null, false , true)}}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="pt-2 d-md-block d-none">
                    <div class="ms-2" style="width: 50px"></div>
                </div>
                <div class="p-2 w-100">
                    <div>
                        <h4 class="card-text linelimit-3">{{$blog->title}}</h4>
                        <p class="card-text linelimit-6">{{$blog->content}}</p>
                    </div>
                    @if ($blog->image_url != null)
                    <div class="pt-2">
                        <img class="img-fluid" style="background-color: lightgray"
                            src="{{ asset('client/image/'. $blog->image_url)}}" alt="">
                    </div>
                    @endif
                    <div class="card-footer container d-flex justify-content-center p-0">
                        <div>
                            <button class="btn btn-outline-secondary border-0 px-4 mx-2" onclick="like({{$blog->blog_id}})">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                        </div>
                        <div>
                            <button type="button" class="btn btn-outline-secondary border-0 px-4 mx-2"
                                data-bs-target="#blogModal" data-bs-toggle="modal">
                                <i class="fa-regular fa-comment"></i>
                            </button>
                        </div>
                        <div>
                            <button class="btn btn-outline-secondary border-0 px-4 mx-2"
                                onclick="bookmark({{$blog->blog_id}})">
                                <i class="fa-regular fa-bookmark"></i>
                            </button>
                        </div>
                        <div>
                            <button class="btn btn-outline-secondary border-0 px-4 mx-2">
                                <i class="fa-regular fa-share-from-square"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card mt-2 border-0 text-start">
                        <form action="/comment" enctype="multipart/form-data" method="POST">
                            @csrf
                            <input type="hidden" name="blogID" value="{{$blog->blog_id}}">
                            <div class="card-body">
                                Comment
                                <div>
                                    <textarea name="commentText" class="form-control" id="" rows="3"
                                        placeholder="Text"></textarea>
                                </div>
                            </div>
                            <div class="d-flex card-footer border-0 justify-content-between container py-1">
                                <div>
                                    <input type="file" accept="image/*" id="commentImage" name="commentImage"
                                        class="btn-check" autocomplete="off">
                                    <label for="commentImage" class="btn">
                                        <i class="fa-regular fa-image"></i>
                                    </label>
                                </div>
                                <div>
                                    <button class="btn btn-outline-secondary" type="submit">Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @foreach ($comments as $comment)
            <div class="d-flex">
                <div class="pt-2">
                    <img class="rounded-circle pfp-img ms-2"
                        src="{{ asset('client/image/pfp/'.$comment->user->settings->pfp_url)}}" alt="pfp">
                </div>
                <div class="flex-fill mb-3">
                    <div class="pt-2 ps-2">
                        <span class="me-2"><b>{{ $comment->user->settings->username }}</b></span>
                        <div class="text-secondary">
                            <span class="me-1">
                                {{\Carbon\Carbon::parse($comment->created_at)->format('d/m/Y')}}
                            </span>
                            •
                            <span class="ms-1">
                                {{$comment->created_at->diffForHumans(null, false , true)}}
                            </span>
                        </div>
                    </div>
                    <div class="pt-2 ps-2">
                        <p class="card-text linelimit-6">{{$comment->content}}</p>
                    </div>
                </div>
            </div>                
            @endforeach
            <div class="p-5 m-5"></div>
        </div>
    </div>
</div>
