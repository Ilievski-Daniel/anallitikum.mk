@extends('layouts.app')


@section('content')
{{-- Форум--------------------------------------/// --}}
<section>
  <div class="container mt-2 mb-4">
    <div class="bg-red d-inline-block mb-2 ">
      <h3 class="fw-bold text-white heading border-bottom">
        Форум
      </h3>
    </div>
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