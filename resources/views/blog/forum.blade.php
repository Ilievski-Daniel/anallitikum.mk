@extends('layouts.app')


@section('content')
{{-- Форум--------------------------------------/// --}}
<section>
  
  <div class="bg-red ">
    <div class="container pb-1 ">
      <div class="row flex-nowrap justify-content-between align-items-center ">
        <div class="col-7">
          <h3 class="fw-bold  text-white" style="    ">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" style="position: relative;
            bottom: 3px;" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
            </svg>
            Форум
          </h3>
        </div>
        <div class="col-5 d-flex justify-content-end align-items-center ">
          <h4 class=" text-white card-text " style="margin: 0">2°C
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" style="color: #fcd616;position: relative;
            bottom: 3px;" class="bi bi-brightness-low-fill" viewBox="0 0 16 16">
              <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8.5 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 11a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm5-5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm-11 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9.743-4.036a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm-7.779 7.779a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm7.072 0a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707zM3.757 4.464a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707z"/>
            </svg>
          </h4>

          
        </div>
      </div>
    
    </div>
  </div>
  <div class="container mt-2 mb-4">
    
    <div class="row row-cols-2 row-cols-md-3 g-2">


      @foreach ($blog as $key =>$value)
      @if ($value->category_id == 2)
          
      
      <div class="col-sm-6">
          
            <a href="{{route('blog.single',$value->id)}}">
              <div class="card textcon bg-dark text-white">
                <img src="/storage/cover_images/{{$value->cover_image}}" class="mediaheight card-img " alt="..." style="height:  ;">
                <div class="content">
                  <h3 class="post-title fontlarge fw-bold" >{{$value->title}}</h3>
                  
                </div>
                
              </div>
            </a>
          
        
      </div>
      @endif
      @endforeach

      
      </div>
      
    </div>
    
  </div>
</section>
@endsection  