@extends('site.layout')
@section('title' , 'حوافل || مكتبة الصور والفيديوهات')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
@endsection
@section('content')
<!-- /////////////////////||||||||||| bread crumbs |||||||||||||||||||| -->
<section class="all-sections sec-about single-work">
   <div class="single-workdiv">
      <h3 class="titlebread" >  مكتبة الصور والمالتيمديا </h3>
      <p class="breadcrum"> <a href="../">الرئيسية</a> / <a href="{{url('multimedia')}}"> مكتبة الصور والمالتيمديا</a>  / <a href="{{url('singleMulti')}}"> تفاصيل</a> </p>
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
<section class="all-sections">
   <div class="container">
    <div class="imgcontent imgmultisingle">
        <img  src="{{asset('website/dist/img/asset20.png')}}" alt="">
    </div>
    <div>
        <p class="titlmulti">اسم الصورة</p>
        <p class="multip">هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة</p>
    </div>
   </div>
</section>
<!-- /////// ||||||||||||||||||||end breadcrumbs|||||||||||||||||||| ///////// -->
<!-- ////////////////////////send subscribe////////////////////////////////// -->
<section class="all-sections Subscribe">
   <div class="container">
      <div class="contentimgsub">
         <a href="../"><img src="{{asset('website/dist/img/favicon_white.png')}}" alt=""></a>
      </div>
      <div class="aligne-center">
         <h3 class="subscribeh3">اشترك معنا ليصلك عروضنا</h3>
         <P>نحن متجرك المفضل لمنتجات العناية بالبشرة والشعر</P>
         <form action="">
            <div class="subdiv">
               <input class="form-control inputsubscribe" type="email" placeholder="البريد الالكتروني">
               <button><i class="fas fa-arrow-left"></i></button>
            </div>
         </form>
      </div>
   </div>
</section>
<!-- ///////||||||||||||||||||end breadCrumbs|||||||||||||||||||||||||||//// -->
<!-- /////////////////////|||||||||||End sections |||||||||||||||||||| -->
@endsection
@section('scripts')
<script src="{{asset('website/dist/js/jquery.fancybox.min.js')}}"></script>
@endsection
