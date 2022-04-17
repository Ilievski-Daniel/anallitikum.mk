
@extends('layouts.app')


@section('content')



{{-- vesti---------------------------------- --}}
<section>
  <div class="bg-red " >
    <div class="container  ">
      <div class="row flex-nowrap justify-content-between align-items-center ">
        <div class="col-6">
          <h3 class="fw-bold  text-white " style="    ">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" style="position: relative;
            bottom: 3px;" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
            </svg>
            Вести
          </h3>
        </div>
        <div class="col-6 d-flex justify-content-end align-items-center ">
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
    
    <div class="row row-cols-2 row-cols-md-3 g-1">
      {{-- @for ($i = 0; $i < 6; $i++) --}}
      {{-- array_slice($section['Article'], 0, 3) as $article --}}
        @foreach ($blog as $key =>$value)

          
            @if ($value->category_id == 1)
              
          
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
      {{-- @endfor --}}
      
      </div>
      
    </div>
    
  </div>
</section>
{{-- Форум--------------------------------------/// --}}
<section>
  <div class="bg-red pt-2">
    <div class="container pb-1">
      <h3 class="fw-bold  text-white heading  " style="    ">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" style="position: relative;
        bottom: 3px;" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
        </svg>
        Форум
      </h3>
    </div>
  </div>
  <div class="container mt-2 mb-4">
    
    <div class="row row-cols-2 row-cols-md-3 g-2">

      {{-- $blog->slice(0, 7) as $key =>$value --}}
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
{{-- kultura---------------------- --}}
<section>
  <div class="bg-red pt-2">
    <div class="container pb-1">
      <h3 class="fw-bold  text-white heading  " style="    ">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" style="position: relative;
        bottom: 3px;" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
        </svg>
        Култура
      </h3>
    </div>
  </div>
  <div class="container mt-2 mb-4">
    
    <div class="row row-cols-2 row-cols-md-3 g-2">


      @foreach ($blog as $key =>$value)
      @if ($value->category_id == 3)
          
      
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
{{-- intervju------------------------- --}}
<section>
  <div class="bg-red pt-2">
    <div class="container pb-1">
      <h3 class="fw-bold  text-white heading  " style="    ">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" style="position: relative;
        bottom: 3px;" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
        </svg>
        Интервју
      </h3>
    </div>
  </div>
  <div class="container mt-2 mb-4">
    
    <div class="row row-cols-2 row-cols-md-3 g-2">


      @foreach ($blog as $key =>$value)
      @if ($value->category_id == 4)
          
      
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
{{-- filmovi-------------------------- --}}
<section>
  <div class="bg-red pt-2">
    <div class="container pb-1">
      <h3 class="fw-bold  text-white heading  " style="    ">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" style="position: relative;
        bottom: 3px;" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
        </svg>
        Филмови
      </h3>
    </div>
  </div>
  <div class="container mt-2 mb-4">
    
    <div class="row row-cols-2 row-cols-md-3 g-2">


      @foreach ($blog as $key =>$value)
      @if ($value->category_id == 5)
          
      
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
{{-- sport------------------------- --}}
<section>
  <div class="bg-red pt-2">
    <div class="container pb-1">
      <h3 class="fw-bold  text-white heading  " style="    ">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" style="position: relative;
        bottom: 3px;" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
        </svg>
        Спорт
      </h3>
    </div>
  </div>
  
  <div class="container mt-2 mb-4">
    
    <div class="row row-cols-2 row-cols-md-3 g-2">


      @foreach ($blog as $key =>$value)
      @if ($value->category_id == 6)
          
      
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
{{-- donaci---------------------------------- --}}
<section>
  <div class="bg-red pt-2">
    <div class="container pb-1">
      <h3 class="fw-bold  text-white heading  " style="    ">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" style="position: relative;
        bottom: 3px;" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
        </svg>
        Донаци
      </h3>
    </div>
  </div>
  
  <div class="container mt-2 mb-4">
    
    <div class="row  g-2">


      @foreach ($blog as $key =>$value)
      @if ($value->category_id == 7)
          
      
      <div class="col-sm-12">
          
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
{{-- citati--------------------------------------- --}}
<section>
  <div class="bg-red pt-2">
    <div class="container pb-1">
      <h3 class="fw-bold  text-white heading  " style="    ">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" style="position: relative;
        bottom: 3px;" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
        </svg>
        Цитати
      </h3>
    </div>
  </div>
  
  <div class="container mt-2 mb-4">
    
    <div class="row row-cols-2 row-cols-md-3 g-2">


      @foreach ($blog as $key =>$value)
      @if ($value->category_id == 8)
          
      
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
{{-- Контакт------------------------ --}}
<section>
  <div class="bg-red pt-2 ">
    <div class="container pb-1">
      <h3 class="fw-bold  text-white heading  " style="    ">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" style="position: relative;
        bottom: 3px;" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
        </svg>
        Контакт
      </h3>
    </div>
  </div>
  <div class="container mt-2 mb-4">

    <div class="row row-cols-1 row-cols-md-2 g-2">

      <div class="col">
        <div class="card p-4">
          
            <!-- Bootstrap 5 starter form -->
            <form id="contactForm ">

              <!-- Name input -->
              <div class="mb-3">
                <label class="form-label fw-bold" for="name">Име и Презиме</label>
                <input class="form-control" id="name" type="text" placeholder="Име и Презиме" />
              </div>

              <!-- Email address input -->
              <div class="mb-3">
                <label class="form-label fw-bold" for="emailAddress">Е-Пошта</label>
                <input class="form-control" id="emailAddress" type="email" placeholder="Е-пошта" />
              </div>

              <!-- Message input -->
              <div class="mb-3">
                <label class="form-label fw-bold" for="message">Коментар или порака</label>
                <textarea class="form-control" id="message" type="text" placeholder="Коментар или порака" style="height: 10rem;"></textarea>
              </div>

              <!-- Form submit button -->
              <div class="d-grid">
                <button class="btn fw-bold text-white bg-red btn-lg" type="submit">Испрати</button>
              </div>

            </form>


        </div>
      </div>

      <div class="col">
        <div class="card p-4" style="height: 478px;">
          <p class="lh-base card-text fw-bold">Информативен портал со дневни информации е во Топ 20 македонски информативни портали од 2019 година до денес.

            Analitikum.mk не сноси никаква одговорност за коментарите и споделувањата на социјалните мрежи, кои се генерираат преку Facebook, Twitter и други. За нив важат правилата и условите на социјалната мрежа.</p>

            <div class="fb-page fb_iframe_widget" data-href="http://www.facebook.com/113270886889742" data-width="319" 
            data-height="130" data-show-posts="false" data-hide-cover="false" data-show-facepile="false" 
            data-adapt-container-width="true" data-testid="fb-page-element" fb-xfbml-state="rendered" 
            fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=304553036307597&amp;container_width=0&amp;
            height=130&amp;hide_cover=false&amp;href=http%3A%2F%2Fwww.facebook.com%2F113270886889742&amp;locale=en_US&amp;
            sdk=joey&amp;show_facepile=false&amp;show_posts=false&amp;width=319"><span style="vertical-align: bottom;
             width: 319px; height: 130px;">
             <iframe name="f24ed2979348988" width="130px" height="130px" 
             data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" 
             allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" 
             src="https://www.facebook.com/v2.4/plugins/page.php?adapt_container_width=true&amp;
             app_id=304553036307597&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df3e4cba1001d9a%26domain%3Dwww.analitikum.mk%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252F
             www.analitikum.mk%252Ff3af738a938470c%26relation%3Dparent.parent&amp;container_width=0&amp;height=130&amp;hide_cover=false&amp;href=http%3A%2F%2Fwww.facebook.com%2F113270886889742&amp;locale=en_US&amp;sdk=joey&amp;
             show_facepile=false&amp;show_posts=false&amp;width=319"
              style="border: none; visibility: visible; width: 100%; height: 130px;" class=""></iframe></span>
            </div>

        </div>
      </div>
      
    </div>




  </div>
</section>

@endsection  