@extends('layouts.app')

@section('content')
    
<section>
  <div class="container mt-4">
    
    <div class="d-flex justify-content-center ">
      
          <div class="card p-3" style="width:900px">
            
            <h1 class="p-1 fontres fw-bolder">{{$blog->title}}</h1>
            
            <div class="d-flex justify-content-start align-items-baseline mb-2 ">
              <h6 class="ps-2 fw-bolder" style="color: #dc1921">ANALITIKUM</h6>
              <p class="ps-2 card-text" style="margin: 0"><small class="text-muted">{{ date('M j, Y', strtotime($blog->created_at))}}</small></p>
              <p class="ps-2 card-text"><small class="text-muted"><i class="bi bi-eye-fill"></i>326</small></p>
            </div>
              
            <img src="https://static.wixstatic.com/media/a1e95a_26e1b79e48d5425589a6c5d5741abdc7~mv2.jpg/v1/fill/w_754,h_502,al_c,q_90/a1e95a_26e1b79e48d5425589a6c5d5741abdc7~mv2.webp" alt="" style="height: 100%" class="img-fluid" data-pagespeed-url-hash="3951709250" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">           
            <p class="p-1 fw-bold mt-4" style="font-size: 16px">{{$blog->body}}</p>
          </div> 
        
      </div>
    </div>

    

  </div>
</section>
@endsection