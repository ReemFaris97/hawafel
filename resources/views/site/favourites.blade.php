@extends('site.layout')
@section('title' , 'حوافل ||  المفضلة')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
@endsection
@section('content')
<!-- /////////////////////||||||||||| bread crumbs |||||||||||||||||||| -->
<section class="all-sections  single-work">
   <div class="single-workdiv">
      <h3 class="titlebread" >  المفضلة </h3>
      <p class="breadcrum"> <a href="../">الرئيسية</a> / <a href="{{url('favourites')}}">المفضلة</a> </p>
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
<section class="all-sections seccateg ">
   <div class="container">
      <div class="flexpagin">
        <div class="pagenum">
            <span>عدد الصفحات :</span>
            <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
         </ul>
        </div>
         <div class="filter-buttons">
            <div class="list-view-button"><i class="fa fa-bars" aria-hidden="true"></i>  </div>
            <div class="grid-view-button"><i class="fa fa-th-large" aria-hidden="true"></i>  </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 parentfav">
            <div class="fleximgfav">
               <img src="{{asset('website/dist/img/asset6.png')}}" alt="">
               <div>
                  <p class="nameprodfav">زيت الارغان الاصلي</p>
                  <b><span>100</span>  ريال سعودي </b>
                  <b class="favpp">هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة</b>
                  <div class="flex flexadd">
                    <div class="deleteaa"><i class="far fa-trash-alt"></i></div>
                    <div class="addcard">اضافة للسلة  <i class="fas fa-shopping-bag"></i></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- /////////////////////|||||||||||End sections |||||||||||||||||||| -->
@endsection
@section('scripts')
<script src="{{asset('website/dist/js/jquery.fancybox.min.js')}}"></script>
<script>
    $(".deleteaa").click(function() {
            $(this).parents(".parentfav").fadeOut(300);
            $(this).parents(".parentfav").remove(3);
        });
</script>
@endsection
