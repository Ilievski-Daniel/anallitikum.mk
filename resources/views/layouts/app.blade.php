<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Analitikum.mk</title>
  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">

  <meta name="theme-color" content="#7952b3">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }
    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="/css/style.css">
  <script>
   
  </script>
</head>

<body>

  {{-- header--------------------------------------------------- --}}
<section style="background-color: #dc1921">

  <div class="container" >
    <header class="blog-header py-1">
      <div class="row flex-nowrap justify-content-between align-items-center">
        
        <div class="col-6 ">
          <div class="justify-content-center">
            <a href="{{ route('blog.index')}}">
              <img src="{{URL::asset('img\logo.jpg')}}" alt="profile Pic" height="" width="150">
            </a>
            
          </div>
          {{-- <a class="blog-header-logo text-white" href="#">Large</a> --}}
        </div>
      <div class="col-6 d-flex justify-content-end align-items-center">
      {{-- <a class="text-white" href="#" aria-label="Search" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
      </a> --}}
      <a class="text-white fw-bolder" href="https://www.facebook.com/v2.4/plugins/error/confirm/page?iframe_referer=http%3A%2F%2F127.0.0.1%3A8000%2F&kid_directed_site=false&secure=true&plugin=page&return_params=%7B%22adapt_container_width%22%3A%22true%22%2C%22app_id%22%3A%22304553036307597%22%2C%22channel%22%3A%22https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df3e4cba1001d9a%26domain%3Dwww.analitikum.mk%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.analitikum.mk%252Ff3af738a938470c%26relation%3Dparent.parent%22%2C%22container_width%22%3A%220%22%2C%22height%22%3A%22130%22%2C%22hide_cover%22%3A%22false%22%2C%22href%22%3A%22http%3A%2F%2Fwww.facebook.com%2F113270886889742%22%2C%22locale%22%3A%22en_US%22%2C%22sdk%22%3A%22joey%22%2C%22show_facepile%22%3A%22false%22%2C%22show_posts%22%3A%22false%22%2C%22width%22%3A%22319%22%2C%22ret%22%3A%22sentry%22%2C%22act%22%3Anull%7D" target="_blank">Subscribe
      </a>
        <a class="nav-link text-white "  data-bs-toggle="modal" href="#exampleModalToggle" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class=" fw-bolder bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg></i></a>
        <div class="modal " id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">????????????????????</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="input-group mb-4 border rounded-pill p-1">
                  <input type="search" placeholder="?????? ???? ???????????? ???????????" aria-describedby="button-addon3" class="form-control bg-none border-0">
                  <div class="input-group-append border-0">
                    <button id="button-addon3" type="button" class="btn text-dark"><i class="bi bi-search"></i></button>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn text-white btn-light" style="background-color: #dc1921" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">??????????????</button>
              </div>
            </div>
          </div>
        </div>     
      
      
    </div>
  </div>
  </header>
    <div class="nav-scroller py-1 ">
      <nav class="nav d-flex " id="center" style="font-size: 15px; ">
        <a class="p-2 text-white fw-bold" href="{{route('blog.forum')}}">??????????</a>
        <a class="p-2 text-white fw-bold" href="{{route('blog.kultura')}}">??????????????</a>
        <a class="p-2 text-white fw-bold" href="{{route('blog.intervju')}}">????????????????</a>
        <a class="p-2 text-white fw-bold" href="{{route('blog.filmovi')}}">??????????????</a>
        <a class="p-2 text-white fw-bold" href="{{route('blog.sport')}}">??????????</a>
        <a class="p-2 text-white fw-bold" href="{{route('blog.donaci')}}">??????????????</a>
        <a class="p-2 text-white fw-bold" href="{{route('blog.citati')}}">????????????</a>
        <a class="p-2 text-white fw-bold" href="{{route('blog.kontakt')}}">??????????????</a>
        
      </nav>
    </div>
  </div>


</section>


@yield('content')

<footer class="text-center  mt-4 text-lg-start" style="background-color: #dc1921;height:50px ">
  <!-- Copyright -->
  <div class="text-center  text-white p-3" >
    ?? 2020 Copyright:
    <a class="text-white" href="#">Analitikum.mk</a>
  </div>
  <!-- Copyright -->
</footer>
        



      <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>