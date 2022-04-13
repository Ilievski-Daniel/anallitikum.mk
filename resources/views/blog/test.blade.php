@extends('layouts.app')

@section('content')


<div class="container">
    <div class="nav-scroller py-1 mb-2" >
      <nav class="nav d-flex justify-content-between" id="center">
        
        @foreach ($blog as $key =>$value)
          <a href="{{route('blog.single',$value->id)}}">
            <div class="card textcon bg-dark text-white g-2">
              <img src="/storage/cover_images/{{$value->cover_image}}" class="mediaheight card-img " alt="..." style="  ;">
              <div class="content">
                <h3 class="post-title fontlarge fw-bold" >{{$value->title}}</h3>
                
              </div>
              
            </div>
          </a>
          @endforeach
        </nav>
      </div>
</div>



@endsection