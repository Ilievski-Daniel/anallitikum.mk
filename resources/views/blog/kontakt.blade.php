@extends('layouts.app')

@section('content')
    {{-- Контакт------------------------ --}}
<section>
    <div class="container mt-2 mb-4">
      <div class="bg-red d-inline-block mb-2 ">
        <h3 class="fw-bold text-white heading border-bottom">
          Контакт
        </h3>
      </div>
  
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


              <div class="fb-page fb_iframe_widget" data-href="http://www.facebook.com/113270886889742" data-width="319" data-height="130" data-show-posts="false" data-hide-cover="false" data-show-facepile="false" data-adapt-container-width="true" data-testid="fb-page-element" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=304553036307597&amp;container_width=0&amp;height=130&amp;hide_cover=false&amp;href=http%3A%2F%2Fwww.facebook.com%2F113270886889742&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=false&amp;show_posts=false&amp;width=319"><span style="vertical-align: bottom; width: 319px; height: 130px;"><iframe name="f24ed2979348988" width="319px" height="130px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.4/plugins/page.php?adapt_container_width=true&amp;app_id=304553036307597&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df3e4cba1001d9a%26domain%3Dwww.analitikum.mk%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.analitikum.mk%252Ff3af738a938470c%26relation%3Dparent.parent&amp;container_width=0&amp;height=130&amp;hide_cover=false&amp;href=http%3A%2F%2Fwww.facebook.com%2F113270886889742&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=false&amp;show_posts=false&amp;width=319" style="border: none; visibility: visible; width: 319px; height: 130px;" class=""></iframe></span></div>

          </div>
        </div>
        
      </div>
  
  
  
  
    </div>
  </section>
@endsection