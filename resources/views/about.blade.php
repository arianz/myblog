@extends('master')
@section('title', 'About')

@section('content')
    <!-- About--> 
  <section id="about" class="about-section"> 
   <div class="container"> 
    <header class="text-center"> 
     <h2 data-animate="fadeInDown" class="title">About me</h2> 
    </header>
    <div class="row"> 
    <div data-animate="fadeInUp" class="col-lg-6">
      <p><strong>Lorem ipsum dolor sit amet</strong>, conse
      <p>Aenean commodo ligula eget dolor. Aenean massa. </
      <p>Cum sociis natoque penatibus et magnis dis parturi
     </div> 
     <div data-animate="fadeInUp" class="col-sm-6 mx-auto mt-5">
      <img src="/assets/img/kruxcel.jpg" alt="Andika" class="image rounded-circle img-fluid">
     </div>
    </div> 
   </div> 
  </section> 
@endsection
