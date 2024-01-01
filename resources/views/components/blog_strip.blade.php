<div class="scrolling-pagination">
   @foreach ($blogs as $blog)
   @if (!$blog->deleted)
   @php
      $user = $blog->user;
      $settings = $user->settings;
      $likes = $blog->likes;
      $comments = $blog->comments;
      $bookmarks = $blog->bookmarks;
   @endphp
   <div class="card mt-4 border-0 text-start">
      <div class="card-header"></div>
      <div class="d-flex">
         <div class="pt-2">
            <img class="rounded-circle pfp-img ms-2"
               src="{{ asset('client/image/pfp/'.$settings->pfp_url)}}" alt="pfp">
         </div>
         <div class="w-100">
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
         <div class="p-2">
            <div>
               <h4 class="card-text linelimit-3">{{$blog->title}}</h4>
               @if ($blog->content)
               <p class="card-text linelimit-6">{{$blog->content}}</p>                  
               @endif
            </div>
            @if ($blog->image_url)
            <div class="pt-2 blog-img-container">
               <img class="rounded-4" src="{{ asset('client/image/'. $blog->image_url)}}" alt="">
            </div>
            @endif
         </div>
      </div>
      @include('components.post_buttons', compact('blog'))
      @include('components.blog_modal', compact('blog'))
   </div>
   @endif
   @endforeach
   {{ $blogs->links() }}
</div>
<div class="p-5"></div>