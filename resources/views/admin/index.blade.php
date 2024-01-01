@extends('layouts.admin')
@section('dashpath')
Index
@endsection
@section('content')
<div class="bg-light text-center p-4 fs-5 cover">
   <div class="w-100 p-2">
      <h1>There are currently</h1>
   </div>
   <div class="d-flex justify-content-center">
      {{-- <div class="col text-center mt-5 pt-5">
         <i class="fa-solid fa-person" style="font-size: 200px"></i>
         <h1 class="mt-2">{{ $usersCount }} users</h1>
      </div>
      <div class="col text-center mt-5 pt-5">
         <i class="fa-solid fa-book" style="font-size: 200px"></i>
         <h1 class="mt-2">{{ $blogsCount }} blog post</h1>
      </div>
      <div class="col text-center mt-5 pt-5">
         <i class="fa-solid fa-heart" style="font-size: 200px"></i>
         <h1 class="mt-2">{{ $likesCount }} likes</h1>
      </div>
      <div class="col text-center mt-5 pt-5">
         <i class="fa-solid fa-bookmark" style="font-size: 200px"></i>
         <h1 class="mt-2">{{ $bookmarksCount }} bookmarks</h1>
      </div> --}}
      <canvas id="barChart" style="max-width: 1000px;" class="z-10"></canvas>
   </div>
</div>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>
   var xValues = ["Users", "Blog Posts", "Likes", "Bookmarks"];
   var yValues = [{{ $usersCount }}, {{ $blogsCount }}, {{ $likesCount }}, {{ $bookmarksCount }}];
   var barColors = ["red", "green","blue","orange"];

   new Chart("barChart", {
      type: "bar",
      data: {
         labels: xValues,
         datasets: [{
            backgroundColor: barColors,
            data: yValues
         }]
      },
      options: {
         legend: {display: false},
         title: {
            display: true,
            text: "Reuw Overall Statistics"
         },
         scales: {
            yAxes: [{ticks: {min: 0}}]
         }
      }
   });
</script>
@endsection