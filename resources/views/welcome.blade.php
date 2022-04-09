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

</head>

<body>

  {{-- header--------------------------------------------------- --}}
<section style="background-color: #dc1921">

  <div class="container" >
    <header class="blog-header py-1">
      <div class="row flex-nowrap justify-content-between align-items-center">
        
        <div class="col-6 ">
          <div class="justify-content-center">
            <img src="{{URL::asset('img\logo.jpg')}}" alt="profile Pic" height="" width="150">
          </div>
          {{-- <a class="blog-header-logo text-white" href="#">Large</a> --}}
        </div>
      <div class="col-6 d-flex justify-content-end align-items-center">
      {{-- <a class="text-white" href="#" aria-label="Search" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
      </a> --}}
      <a class="text-white fw-bolder" href="#">Subscribe</a>
        <a class="nav-link text-white "  data-bs-toggle="modal" href="#exampleModalToggle" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class=" fw-bolder bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg></i></a>
        <div class="modal " id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Пребарувај</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="input-group mb-4 border rounded-pill p-1">
                  <input type="search" placeholder="Што ке читаме денес?" aria-describedby="button-addon3" class="form-control bg-none border-0">
                  <div class="input-group-append border-0">
                    <button id="button-addon3" type="button" class="btn text-dark"><i class="bi bi-search"></i></button>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn text-white btn-light" style="background-color: #dc1921" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Затвори</button>
              </div>
            </div>
          </div>
        </div>     
      
      
    </div>
  </div>
  </header>
    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex " id="center" style="font-size: 14px;">
        <a class="p-2 text-white fw-bold" href="#">ФОРУМ</a>
        <a class="p-2 text-white fw-bold" href="#">КУЛТУРА</a>
        <a class="p-2 text-white fw-bold" href="#">ИНТЕРВЈУ</a>
        <a class="p-2 text-white fw-bold" href="#">ФИЛМОВИ</a>
        <a class="p-2 text-white fw-bold" href="#">СПОРТ</a>
        <a class="p-2 text-white fw-bold" href="#">ДОНАЦИИ</a>
        <a class="p-2 text-white fw-bold" href="#">ЦИТАТИ</a>
        <a class="p-2 text-white fw-bold" href="#">КОНТАКТ</a>
        
      </nav>
    </div>
  </div>


</section>
{{-- vesti---------------------------------- --}}
<section>
  <div class="container mt-2">
    <div class="bg-red d-inline-block mb-2 ">
      <h3 class="fw-bold text-white heading border-bottom">
        Вести
      </h3>
    </div>
    
      
    </div>
    
  </div>
</section>
{{-- Форум--------------------------------------/// --}}
<section>
  <div class="container mt-2">
    <div class="bg-red d-inline-block mb-2 ">
      <h3 class="fw-bold text-white heading border-bottom">
        Форум
      </h3>
    </div>
    <div class="row row-cols-2 row-cols-md-3 g-3">
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px ;max-width: 18rem;">
          <div class="card-img-overlay">
            <h5 class="card-title text-center">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay">
            <h5 class="card-title text-center">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay">
            <h5 class="card-title text-center">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay ">
            <h5 class="card-title text-center align-items-end">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay ">
            <h5 class="card-title text-center align-items-end">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay ">
            <h5 class="card-title text-center align-items-end">NASLOV</h5>
            
          </div>
        </div>
      </div>
      
    </div>
    
  </div>
</section>
{{-- kultura---------------------- --}}
<section>
  <div class="container mt-2">
    <div class="bg-red d-inline-block mb-2 ">
      <h3 class="fw-bold text-white heading border-bottom">
        Култура
      </h3>
    </div>
    <div class="row row-cols-2 row-cols-md-3 g-3">
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px ;max-width: 18rem;">
          <div class="card-img-overlay">
            <h5 class="card-title text-center">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay">
            <h5 class="card-title text-center">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay">
            <h5 class="card-title text-center">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay ">
            <h5 class="card-title text-center align-items-end">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay ">
            <h5 class="card-title text-center align-items-end">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay ">
            <h5 class="card-title text-center align-items-end">NASLOV</h5>
            
          </div>
        </div>
      </div>
      
    </div>
    
  </div>
</section>
{{-- intervju------------------------- --}}
<section>
  <div class="container mt-2">
    <div class="bg-red d-inline-block mb-2 ">
      <h3 class="fw-bold text-white heading border-bottom">
        Интервју
      </h3>
    </div>
    <div class="row row-cols-2 row-cols-md-3 g-3">
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px ;max-width: 18rem;">
          <div class="card-img-overlay">
            <h5 class="card-title text-center">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay">
            <h5 class="card-title text-center">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay">
            <h5 class="card-title text-center">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay ">
            <h5 class="card-title text-center align-items-end">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay ">
            <h5 class="card-title text-center align-items-end">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay ">
            <h5 class="card-title text-center align-items-end">NASLOV</h5>
            
          </div>
        </div>
      </div>
      
    </div>
    
  </div>
</section>
{{-- filmovi-------------------------- --}}
<section>
  <div class="container mt-2">
    <div class="bg-red d-inline-block mb-2 ">
      <h3 class="fw-bold text-white heading border-bottom">
        Филмови
      </h3>
    </div>
    <div class="row row-cols-2 row-cols-md-3 g-3">
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px ;max-width: 18rem;">
          <div class="card-img-overlay">
            <h5 class="card-title text-center">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay">
            <h5 class="card-title text-center">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay">
            <h5 class="card-title text-center">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay ">
            <h5 class="card-title text-center align-items-end">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay ">
            <h5 class="card-title text-center align-items-end">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay ">
            <h5 class="card-title text-center align-items-end">NASLOV</h5>
            
          </div>
        </div>
      </div>
      
    </div>
    
  </div>
</section>
{{-- sport------------------------- --}}
<section>
  <div class="container mt-2">
    <div class="bg-red d-inline-block mb-2 ">
      <h3 class="fw-bold text-white heading border-bottom">
        Спорт
      </h3>
    </div>
    <div class="row row-cols-2 row-cols-md-3 g-3">
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px ;max-width: 18rem;">
          <div class="card-img-overlay">
            <h5 class="card-title text-center">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay">
            <h5 class="card-title text-center">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay">
            <h5 class="card-title text-center">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay ">
            <h5 class="card-title text-center align-items-end">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay ">
            <h5 class="card-title text-center align-items-end">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay ">
            <h5 class="card-title text-center align-items-end">NASLOV</h5>
            
          </div>
        </div>
      </div>
      
    </div>
    
  </div>
</section>
{{-- donaci---------------------------------- --}}
<section>
  <div class="container mt-2">
    <div class="bg-red d-inline-block mb-2 ">
      <h3 class="fw-bold text-white heading border-bottom">
        Донаци
      </h3>
    </div>
    <div class="row row-cols-2 row-cols-md-3 g-3">
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px ;max-width: 18rem;">
          <div class="card-img-overlay">
            <h5 class="card-title text-center">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay">
            <h5 class="card-title text-center">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay">
            <h5 class="card-title text-center">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay ">
            <h5 class="card-title text-center align-items-end">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay ">
            <h5 class="card-title text-center align-items-end">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay ">
            <h5 class="card-title text-center align-items-end">NASLOV</h5>
            
          </div>
        </div>
      </div>
      
    </div>
    
  </div>
</section>
{{-- citati--------------------------------------- --}}
<section>
  <div class="container mt-2">
    <div class="bg-red d-inline-block mb-2 ">
      <h3 class="fw-bold text-white heading border-bottom">
        Цитати
      </h3>
    </div>
    <div class="row row-cols-2 row-cols-md-3 g-3">
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px ;max-width: 18rem;">
          <div class="card-img-overlay">
            <h5 class="card-title text-center">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay">
            <h5 class="card-title text-center">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay">
            <h5 class="card-title text-center">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay ">
            <h5 class="card-title text-center align-items-end">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay ">
            <h5 class="card-title text-center align-items-end">NASLOV</h5>
            
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card bg-dark text-white">
          <img src="" class="card-img" alt="..." style="height: 170px">
          <div class="card-img-overlay ">
            <h5 class="card-title text-center align-items-end">NASLOV</h5>
            
          </div>
        </div>
      </div>
      
    </div>
    
  </div>
</section>
{{-- Контакт------------------------ --}}
<section>
  <div class="container mt-2">
    <div class="bg-red d-inline-block mb-2 ">
      <h3 class="fw-bold text-white heading border-bottom">
        Контакт
      </h3>
    </div>

    <div class="row row-cols-1 row-cols-md-2 ">

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
        </div>
      </div>
      
    </div>




  </div>
</section>



    <footer class="text-center mt-4 text-lg-start" style="background-color: #dc1921;height:50px ">
      <!-- Copyright -->
      <div class="text-center  text-white p-3" >
        © 2020 Copyright:
        <a class="text-white" href="#">Analitikum.mk</a>
      </div>
      <!-- Copyright -->
    </footer>
        



      <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>