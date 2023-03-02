@extends('Template.default')
@section('title','blog')
@section('content')
      
      
      <!--header section end -->
      <!-- blog section start -->
      @foreach($blog as $Item)
      <div class="blog_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="blog_img"><img src="images/blog-img.png"></div>
               </div>
               <div class="col-md-6">
                  <h1 class="blog_taital">{{$Item['blog_title']}}</h1>
                  <p class="blog_text">{{$Item['blog_desc']}} </p>
                  <div class="read_bt"><a href="#">Read More</a></div>
               </div>
            </div>
         </div>
      </div>
      @endforeach
     @endsection