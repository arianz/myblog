@extends('master')
@section('title', 'Home')

@section('content')
     <section id="intro" style="background: url(/assets/img/parallax.jpg) center center no-repeat; background-size: cover;" class="intro-section pb-2"> 
   <div class="container text-center"> 
    <div data-animate="fadeInDown" class="logo">
     <img src="/assets/img/logo-rpl.png" alt="logo" width="130">
    </div> 
    <h1 data-animate="fadeInDown" class="text-shadow mb-5">Halo!</h1> 
    <p data-animate="slideInUp" class="h3 text-shadow text-400">Saya mencoba membuat website portofolio semenarik mungkin.</p> 
   </div> 
  </section> 
@endsection