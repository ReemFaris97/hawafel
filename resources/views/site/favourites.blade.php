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
            <div class="relative">
               <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-sort-amount-down"></i>
               </button>
               <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                  <div class="custom_radio">
                    <ul class="inlineradio">
                        <li>
                            <input type="radio" id="featured-1" name="featured" checked=""><label for="featured-1">الخصم العام</label>
                        </li>
                        <li>
                            <input type="radio" id="featured-2" name="featured"><label for="featured-2"> عرض منتجين و منتج مجاني</label>
                        </li>
                        <li>
                            <input type="radio" id="featured-3" name="featured"><label for="featured-3"> عرض منتج ومنتج مجاني</label>
                        </li>
                        <li>
                            <input type="radio" id="featured-4" name="featured"><label for="featured-4">عرض الكمية</label>
                        </li>
                        <li>
                            <input type="radio" id="featured-5" name="featured"><label for="featured-5">خصم النسبة </label>
                        </li>
                        <li>
                            <a href="#">عروض الاقسام</a>
                        </li>
                        <li>
                            <a href="#">كبونات الخصم</a>
                        </li>
                    </ul>
                  </div>
               </div>
            </div>
            <div class="list-view-button"><i class="fa fa-bars" aria-hidden="true"></i>  </div>
            <div class="grid-view-button"><i class="fa fa-th-large" aria-hidden="true"></i>  </div>
            <div class="dropdown">
            </div>
         </div>
      </div>
      <div class="row list list-view-filter">
         <div class="col-md-6  col-sm-4 col-xs-6 parentfav listgrid">
            <div class="fleximgfav">
               <img src="{{asset('website/dist/img/asset6.png')}}" alt="">
               <div class="descrpp">
                  <a href="{{url('single-product')}}"><p class="nameprodfav">زيت الارغان الاصلي</p></a>
                  <b><span>100</span>  ريال سعودي </b>
                  <b class="favpp">هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة</b>
                  <div class="flex flexadd">
                     <div class="deleteaa"><i class="far fa-trash-alt"></i></div>
                     <div class="addcard">اضافة للسلة <i class="fas fa-cart-plus"></i></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6  col-sm-4 col-xs-6 parentfav listgrid">
            <div class="fleximgfav">
               <img src="{{asset('website/dist/img/asset6.png')}}" alt="">
               <div class="descrpp">
                 <a href="{{url('single-product')}}"><p class="nameprodfav">زيت الارغان الاصلي</p></a>
                  <b><span>100</span>  ريال سعودي </b>
                  <b class="favpp">هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة</b>
                  <div class="flex flexadd">
                     <div class="deleteaa"><i class="far fa-trash-alt"></i></div>
                     <div class="addcard">اضافة للسلة <i class="fas fa-cart-plus"></i></div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- <div class="row list list-view-filter">
         <div class="col-md-6  col-sm-4 col-xs-6 parentfav listgrid list4">
            <div class="fleximgfav">
               <img src="{{asset('website/dist/img/asset6.png')}}" alt="">
               <div class="descrpp">
                  <a href="{{url('single-product')}}"><p class="nameprodfav">زيت الارغان الاصلي</p></a>
                  <b><span>100</span>  ريال سعودي </b>
                  <b class="favpp">هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة</b>
                  <div class="flex flexadd">
                     <div class="deleteaa"><i class="far fa-trash-alt"></i></div>
                     <div class="addcard">اضافة للسلة <i class="fas fa-cart-plus"></i></div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
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
<script>
   const listViewButton = document.querySelector('.list-view-button');
          const gridViewButton = document.querySelector('.grid-view-button');
          const list = document.querySelector('.list.list-view-filter');

          listViewButton.onclick = function () {
          list.classList.remove('grid-view-filter');
          list.classList.add('list-view-filter');
          $(".listgrid").addClass( "col-md-6 listgrida" );
          $(".listgrid").removeClass( "col-md-3 " );
          $(".list-view-button").addClass( "classListGrid" );
          $(".grid-view-button").removeClass( "classListGrid" );




          }

          gridViewButton.onclick = function () {
          list.classList.remove('list-view-filter');
          list.classList.add('grid-view-filter');
          $(".listgrid").addClass( "col-md-3" );
          $(".listgrid").removeClass( "col-md-6 listgrida" );
          $(".grid-view-button").addClass( "classListGrid" );
          $(".list-view-button").removeClass( "classListGrid" );


          }

</script>


@endsection
