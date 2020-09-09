@extends('site.layout')
@section('title' , 'حوافل || اسم البرودكت')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/owl.carousel.css')}}">
<!-- <link rel="stylesheet" href="http://127.0.0.1:8001/website/css/a-style.css"> -->
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
@endsection
@section('content')
<!-- /////// |||||||||||||||||||| section |||||||||||||||||||| ///////// -->
<section class="all-sections  about">
   <div class="container  ">
   <p class="company-bransh-main"> </p>
   <div class="padingback bacWhite ">
      <div class="row">
         <div class="col-xs-12 col-md-6 ">
            <div class="product-imgs">
               <div class="slider-chose clearfix">
                  <div class="row">
                     <div class="col-xs-12 col-sm-9 leftresp">
                        <div id="sync1" class="owl-carousel owl-theme">
                           <div class="item imagee" data-hash="zero">
                              <a data-fancybox="صور المنتج" data-caption="كرسى" href="{{asset('website/dist/img/product2.png')}}">
                              <img src="{{asset('website/dist/img/product2.png')}}" class="scaleimg">
                              </a>
                           </div>
                           <div class="item imagee" data-hash="one">
                              <a data-fancybox="صور المنتج" data-caption="كرسى" href="{{asset('website/dist/img/product2.png')}}">
                              <img src="{{asset('website/dist/img/product2.png')}}" class="scaleimg">
                              </a>
                           </div>
                           <div class="item imagee" data-hash="two">
                              <a data-fancybox="صور المنتج" data-caption="كرسى" href="{{asset('website/dist/img/asset5.png')}}">
                              <img src="{{asset('website/dist/img/asset5.png')}}" class="scaleimg">
                              </a>
                           </div>
                           <div class="item imagee" data-hash="three">
                              <a data-fancybox="صور المنتج" data-caption="كرسى" href="{{asset('website/dist/img/asset5.png')}}">
                              <img src="{{asset('website/dist/img/asset5.png')}}" class="scaleimg">
                              </a>
                           </div>
                           <div class="item imagee" data-hash="four">
                              <a data-fancybox="صور المنتج" data-caption="كرسى" href="{{asset('website/dist/img/asset5.png')}}">
                              <img src="{{asset('website/dist/img/asset5.png')}}" class="scaleimg">
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12  col-sm-3 leftresp">
                        <div class="img-show">
                           <a class="button secondary url active" href="#zero"><img src="{{asset('website/dist/img/product2.png')}}"></a>
                           <a class="button secondary url" href="#one"><img src="{{asset('website/dist/img/product2.png')}}"></a>
                           <a class="button secondary url" href="#two"><img src="{{asset('website/dist/img/asset5.png')}}"></a>
                           <a class="button secondary url" href="#three"><img src="{{asset('website/dist/img/asset5.png')}}"></a>
                           <a class="button secondary url" href="#four"><img src="{{asset('website/dist/img/asset5.png')}}"></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-md-6 align-resp">
            <div class="flexe3llan">
               <p class="product-layName"> مجموعة العناية بالبشرة </p>
            </div>
            <p class="disccolor"><span>3999 ريال</span> <span>4250 ريال</span> </p>
            <p class="p-detalies">هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحةهذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحةهذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة</p>
            <p class="mountP"><span>الوحدات المتاحة</span></p>

            <div class="custom_radio bordetopbotm">
                <ul class="inlineradio">
                    <li>
                        <input type="radio" id="featured-1" name="featured" checked=""><label for="featured-1">اسم الوحدة </label>
                    </li>
                    <li>
                        <input type="radio" id="featured-2" name="featured"><label for="featured-2"> اسم الوحدة  </label>
                    </li>
                    <li>
                        <input type="radio" id="featured-3" name="featured"><label for="featured-3"> اسم الوحدة  </label>
                    </li>
                </ul>
            </div>
         </div>
      </div>
   </div>
</section>



<!-- //////////////////////////////////////////////// -->

<section class="all-sections">
   <div class="container">
      <ul class="nav nav-tabs navmulti">
         <li class="active"><a data-toggle="tab" href="#home">تفاصيل المنتج </a></li>
         <li><a data-toggle="tab" href="#menu1">التقييمات</a></li>

      </ul>
      <div class="tab-content">
         <div id="home" class="tab-pane fade in active">

         </div>
         <div id="menu1" class="tab-pane fade">

         </div>

      </div>
   </div>
</section>
<!-- /////////////////////|||||||||||End sections |||||||||||||||||||| -->
@endsection
@section('scripts')
<script src="{{asset('website/dist/js/jquery.fancybox.min.js')}}"></script>
<script src= "{{asset('website/dist/js/owl.carousel.min.js')}}"></script>
<script>
   /*Start Product*/
   $('#sync1').owlCarousel({
       rtl: true,
       loop: true,
       margin: 0,
       autoplay: false,
       smartSpeed: 2000,
       dragEndSpeed: 2000,
       dots: false,
       nav: true,
       navText: ["<i class='fa fa-angle-left'>", "<i class='fa fa-angle-right'>"],
       responsive: {
           0: {
               items: 1
           },
           600: {
               items: 1
           },
           1000: {
               items: 1
           }
       }
   });
   /*End Product*/

</script>
@endsection
