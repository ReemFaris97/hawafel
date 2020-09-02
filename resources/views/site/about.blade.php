@extends('site.layout')
@section('title' , 'حوافل || الاقسام')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/jquery.fancybox.min.css')}}">

<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
@endsection
@section('content')

<!-- /////////////////////||||||||||| bread crumbs |||||||||||||||||||| -->
<section class="all-sections single-work">
    <div class="single-workdiv">
        <h3 class="titlebread" > الاقسام</h3>
        <p class="breadcrum"> <a href="../">الرئيسية</a> / <a href="">الاقسام</a> </p>
    </div>
    <img class="absimgbread" alt="" src="{{asset('website/dist/img/grass.png')}}">
    <div id="leaves">
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
  <i></i>
</div>
</section>
<!-- /////// ||||||||||||||||||||end breadcrumbs|||||||||||||||||||| ///////// -->
<!-- /////// |||||||||||||||||||| breadcrumbs|||||||||||||||||||| ///////// -->
<section class="all-sections seccateg">
    <div class="container">


    </div>
</section>


<!-- /////////////////////|||||||||||End sections |||||||||||||||||||| -->
@endsection
@section('scripts')

<script src="{{asset('website/dist/js/jquery.fancybox.min.js')}}"></script>

@endsection
