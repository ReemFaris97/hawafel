@extends('site.layout')
@section('title' , 'حوافل || الحجوزات ')
@section('styles')
<!-- special for this page -->
<!-- for timepiker -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="{{asset('website/dist/css/jquery.fancybox.min.css')}}" />
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/a-sass.css')}}">
<!-- end sppecial for this page -->
@endsection
@section('content')
<!-- /////////////////////||||||||||| start sections |||||||||||||||||||| -->
<section class="bookingheader">
   <div class="relative relativebook">
      <img class="imgoffer" src="{{asset('website/dist/img/Asset7.jpg')}}" alt="">
      <!--  <span class="absDate">26 jun - 30 jun</span>
         <span class="absDisc">50% خصم</span> -->
   </div>
</section>
<!---//////////// Start header Search Form //////////////////------------>
<section class="search-box">
   <div class="container">
      <div class="srch-form srchedit wow animate__ animate__backInUp animated">
         <div class="width100">
            <div class="flexnamebook">
               <div class="namehotelbook">
                  <p>فندق كمبينسكي العثمان</p>
                  <div>السعودية , القصيم</div>
               </div>
               <div class="contshare">
                  <div class="pulseee" data-toggle="modal" data-target="#shareModal">
                     <i class="fas fa-share-alt"></i>
                  </div>
                  <div class="heartabs heartrelative">
                     <input id="toggle-heart" type="checkbox"/>
                     <label for="toggle-heart"><i class="fas fa-heart"></i></label>
                  </div>
                  <div class="relativeZ">
                     <a href="{{url('booking-confirmation')}}" class="btn-hvr see-more">حجز</a>
                  </div>
               </div>
            </div>
            <div class="flexnamebook margt10">
               <div class="strbookname">
                  <i class="fas fa-map-marker-alt"></i>
                  <span>2 كم</span>
                  <div class="flexstar color">
                     <i class="fas fa-star evalute"></i>
                     <i class="fas fa-star evalute"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <span>255</span>
                  </div>
               </div>
               <div>
                  <div class="priceryel"><span>100</span><span>ريال</span></div>
                  <div class="nightprice">سعر االليلة</div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!---//////////// End header Search Form //////////////////------------>

<section class="my-services borderbttm">
      <div class="container  ">
         <div class="formhagz">
            <p class="hagztitle">تفاصيل الفندق</p>
            <div id="text" class="text preadmore " data-clamp="3" >
                هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة  هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة
            </div>
        </div>
    </div>
</section>
<!-- /////////////////////////////////// -->
<section class="my-services borderbttm imgMore nobacimg">
      <div class="container  ">
         <div class="formhagz">
         <div class="relative">
                     <p class="titleserv">الصور والفيديوهات</p>
                     <span>عرض الكل</span>
                  </div>
         <div class="notrow">
                  <div class="row">
                     <div class="col-md-3 col-xs-6 owlhavimg  wow animate__ animate__backInUp animated">
                        <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                           <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset6.jpg')}}">
                           <span class="fancyaa"><i class="fas fa-eye"></i></span>
                           <img src="{{asset('website/dist/img/Asset6.jpg')}}" alt="Sea">
                           </a>
                        </figure>
                     </div>
                     <div class="col-md-3 col-xs-6  owlhavimg  wow animate__ animate__backInUp animated">
                        <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                           <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset4.jpg')}}">
                           <span class="fancyaa"><i class="fas fa-eye"></i></span>
                           <img src="{{asset('website/dist/img/Asset4.jpg')}}" alt="Sea">
                           </a>
                        </figure>
                     </div>
                     <div class="col-md-3 col-xs-6  owlhavimg  wow animate__ animate__backInUp animated">
                        <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                           <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset7.jpg')}}">
                           <span class="fancyaa"><i class="fas fa-eye"></i></span>
                           <img src="{{asset('website/dist/img/Asset7.jpg')}}" alt="Sea">
                           </a>
                        </figure>
                     </div>
                     <div class="col-md-3 col-xs-6  owlhavimg  wow animate__ animate__backInUp animated">
                        <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                           <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset3.jpg')}}">
                           <span class="fancyaa"><i class="fas fa-eye"></i></span>
                           <img src="{{asset('website/dist/img/Asset3.jpg')}}" alt="Sea">
                           </a>
                        </figure>
                     </div>
                  </div>
                </div>
        </div>
    </div>
</section>
<!-- //////////////////////////// -->
<section class="my-services borderbttm nobacimg">
      <div class="container  ">
         <div class="formhagz">
         <div id="map"> </div>
         </div>
    </div>
</section>
<!-- //////////////////////////////////////// -->
<!-- /////////////////////////////////////// -->
<section class="my-services borderbttm nobacimg">
      <div class="container  ">
         <div class="formhagz">
         <div class="relative">
            <p class="titleserv">الصور والفيديوهات</p>
            <span>عرض الكل</span>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12 servfont">مكيف هواء في الغرف</div>
            <div class="col-md-6 col-xs-12 servfont">مكيف هواء في الغرف</div>
            <div class="col-md-6 col-xs-12 servfont">مكيف هواء في الغرف</div>
            <div class="col-md-6 col-xs-12 servfont">مكيف هواء في الغرف</div>
            <div class="col-md-6 col-xs-12 servfont">مكيف هواء في الغرف</div>
            <div class="col-md-6 col-xs-12 servfont">مكيف هواء في الغرف</div>
        </div>
         </div>
    </div>
</section>
<!-- //////////////////////////////////////// -->
<!-- /////////////////////////////////////// -->
<section class="my-services borderbttm nobacimg">
      <div class="container  ">
         <div class="formhagz">
         <div class="flextitlerate">
                     <p>4.8</p>
                     <div>
                        <b>التقييم الكلي</b>
                        <div class="flexstar flexstarcolor">
                           <i class="fas fa-star checks star"></i>
                           <i class="fas fa-star checks star"></i>
                           <i class="fas fa-star checks star"></i>
                           <i class="fas fa-star star"></i >
                           <i class="fas fa-star star"></i>
                        </div>
                     </div>
                  </div>
                  <div class='contentprogress'>
                     <span>الغرفة</span>
                     <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="50"
                           aria-valuemin="0" aria-valuemax="100" style="width:50%">
                           <span class="sr-only">70% Complete</span>
                        </div>
                     </div>
                  </div>
                  <div class='contentprogress'>
                     <span>الخدمة</span>
                     <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70"
                           aria-valuemin="0" aria-valuemax="100" style="width:70%">
                           <span class="sr-only">70% Complete</span>
                        </div>
                     </div>
                  </div>
                  <div class='contentprogress'>
                     <span>المكان</span>
                     <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="30"
                           aria-valuemin="0" aria-valuemax="100" style="width:30%">
                           <span class="sr-only">70% Complete</span>
                        </div>
                     </div>
                  </div>
                  <div class='contentprogress'>
                     <span>السعر</span>
                     <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70"
                           aria-valuemin="0" aria-valuemax="100" style="width:70%">
                           <span class="sr-only">70% Complete</span>
                        </div>
                     </div>
                  </div>
         </div>
    </div>
</section>


<form class="" action="">
   <section class="my-services borderbttm">
      <div class="container  ">
         <div class="formhagz">
            <p class="hagztitle">تفاصيل الفندق</p>
            <div class="row">
               <div class="form-group col-sm-6 col-xs-12">
                  <label for="usr">تاريخ الوصول</label>
                  <input type="text" class="form-control" id="datepicker" value="3 june 2020"  readonly>
               </div>
               <div class="form-group col-sm-6 col-xs-12">
                  <label for="pwd">تاريخ المغادرة</label>
                  <input type="text" class="form-control" id="datepicker1" value="3 june 2020" readonly >
               </div>
               <div class="form-group col-sm-6 col-xs-12">
                  <label for="pwd">البريد الالكتروني </label>
                  <input type="email" class="form-control" value="asmaaesmail0@gmail.com" readonly>
               </div>
               <div class="form-group col-sm-6 col-xs-12">
                  <label for="pwd">رقم الجوال </label>
                  <input type="number" class="form-control" value="01532020" readonly>
               </div>
               <div class="form-group col-sm-6 col-xs-12">
                  <label for="pwd"> المنطقة</label>
                  <select class="form-control">
                     <option value="">مكة</option>
                     <option value="">المدينة</option>
                     <option value="">الرياض</option>
                  </select>
               </div>
               <div class="form-group col-sm-6 col-xs-12">
                  <label for="pwd">المدينة </label>
                  <select class="form-control" readonly>
                     <option value="">مكة</option>
                     <option value="">القصيم</option>
                     <option value="">ابها</option>
                  </select>
               </div>
               <div class="form-group col-sm-6 col-xs-12">
                  <label for="pwd">العمارة </label>
                  <select class="form-control" readonly>
                     <option value="">مكة</option>
                     <option value="">القصيم</option>
                     <option value="">ابها</option>
                  </select>
               </div>
               <div class="form-group col-sm-6 col-xs-12">
                  <label for="pwd">الدور </label>
                  <select class="form-control" readonly>
                     <option value="">1</option>
                     <option value="">2</option>
                     <option value="">3</option>
                  </select>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- //////////////////////////////////////// -->
   <section class="my-services payed">
      <div class="container  ">
         <div class="formhagz" action="">
            <p class="hagztitle">تفاصيل الدفع</p>
            <div class="row">
               <div class="col-md-6">
                  <label>
                     <input type="radio" name="product" class="card-input-element"  onclick="show2();" />
                     <div class=" card-input activecheck">
                        <div class="contcard">
                           دفع الكتروني
                        </div>
                        <div class="abschecked"></div>
                     </div>
                  </label>
               </div>
               <div class="col-md-6">
                  <label>
                     <input type="radio" name="product" class="card-input-element"  onclick="show1()" />
                     <div class=" card-input ">
                        <div  class="contcard">
                           دفع عند الوصول
                        </div>
                        <div class="abschecked"></div>
                     </div>
                  </label>
               </div>
            </div>
            <div id="div1" class="hidee activenothide">
               <div class="radio">
                  <input id="radio-1" name="payment_way" value="visa" type="radio">
                  <label for="radio-1" class="radio-label">
                  <img src="{{asset('website/dist/img/pay.png')}}" class="master">
                  <span class="pay-span"> الدفع عن طريق المحفظة</span>
                  </label>
               </div>
               <div class="radio">
                  <input id="radio-2" name="payment_way" value="visa" type="radio">
                  <label for="radio-2" class="radio-label">
                  <img src="{{asset('website/dist/img/master.png')}}" class="master">
                  <span class="pay-span">الدفع عن طريق الماستر كارد</span>
                  </label>
               </div>
               <div class="radio">
                  <input id="radio-3" name="payment_way" value="visa" type="radio">
                  <label for="radio-3" class="radio-label">
                  <img src="{{asset('website/dist/img/visa.png')}}" class="master">
                  <span class="pay-span">الدفع  عند طريق الفيزا</span>
                  </label>
               </div>
               <div class="radio">
                  <input id="radio-4" name="payment_way" value="visa" type="radio">
                  <label for="radio-4" class="radio-label">
                  <img src="{{asset('website/dist/img/mada.png')}}" class="master">
                  <span class="pay-span">الدفع  عند طريق المدي</span>
                  </label>
               </div>
            </div>
            <div class="contbtnsub">
            <button type="submit" class="btn100 btnsubmit">حفظ</button>
            </div>
            <div class="flexbtnmag">
               <div class="magmo3">
                  <b>المجموع الكلي</b>
                  <b>500 ريال </b>
               </div>

               <div class="relativeZ">
                    <button  class="btn-hvr see-more">عرض الكل</button>
                </div>

            </div>
         </div>
      </div>
   </section>
</form>
<!-- //////////////////////////////////////// -->
<!-- /.End Sharing modal -->
@endsection
@section('scripts')
<!-- sppecial for this page -->

<script>
   $( function() {
     $( "#datepicker" ).datepicker();
     $( "#datepicker1" ).datepicker();
   } );
</script>
<script src="{{asset('website/dist/js/range-slider.js')}}"></script>
<script src="{{asset('website/dist/js/jquery.fancybox.min.js')}}"></script>
<script>
   $('#myCollapsible').collapse({
   toggle: false
   })



   $( document ).ready(function() {
   var customizer = $(".customizer")
     // Customizer toggle & close button click events  [Remove customizer code from production]
     $('.customizer-toggle').on('click', function (e) {
    /*    e.preventDefault(); */
    console.log("sduh")
       $(customizer).toggleClass('open');
     });

     });
</script>
<!---------- Sharing ------->
<script src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50bd330b4fbbfeb2"></script>
<script>
   var addthis_config = {
       ui_click: true
   }
   // Do this when the AddThis API is ready
   function addthisReady(evt) {
       // Place the color of your website here.
       var websiteColor = "#749EAC";
       // This changes the color once the "addThis" buttons have been loaded
       $('.addthis_toolbox > a').find('span').css("background-color", websiteColor);
   }
   // Listen for the ready event
   addthis.addEventListener('addthis.ready', addthisReady);
   $('.addthis_toolbox > a').hover(function() {
       $('.addthis_toolbox > a').not(this).stop().fadeTo("fast", 0.3);
   }, function() {
       $('.addthis_toolbox > a').not(this).stop().fadeTo("fast", 1);
   });
</script>
<!-- show and hide -->

<!-- read more -->
<script>
   var text = document.getElementById("text");
   var dataClamp = text.dataset.clamp;
   var style = window.getComputedStyle(text, null).getPropertyValue('font-size');
   var fontSize = parseFloat(style) + 4;
   var readMore = document.createElement('div');
   var nextSibling = text.nextSibling;
   let isOpen = false;

   window.onload = function(){

     text.setAttribute('style', 'line-height: '+fontSize+'px');

     var textHeight = text.offsetHeight;
     var lineHeight = parseInt(text.style.lineHeight);
     var lines = textHeight / lineHeight;

     if (lines > dataClamp) {
       text.setAttribute('style', 'display: -webkit-box; -webkit-line-clamp: '+dataClamp+'; -webkit-box-orient: vertical; overflow: hidden;');
       readMore.innerHTML = "<span class='read-more' onclick='readToggle()'>اقراء المزيد </span>";
       text.parentNode.insertBefore(readMore,text.nextSibling);

     }

   }

   function readToggle() {
       isOpen = !isOpen;
       if (isOpen) {
         readMore.innerHTML = "<span class='read-more' onclick='readToggle()'>اقراء المزيد </span>";
         text.parentNode.insertBefore(readMore,text.nextSibling);
         text.setAttribute('style', 'display: -webkit-box; -webkit-line-clamp: '+dataClamp+'; -webkit-box-orient: vertical; overflow: hidden;');
       } else {
         readMore.innerHTML = "<span class='read-more' onclick='readToggle()'>اقراء اقل</span>";
         text.parentNode.insertBefore(readMore,text.nextSibling);
         text.removeAttribute('style', 'display: -webkit-box; -webkit-line-clamp: '+dataClamp+'; -webkit-box-orient: vertical; overflow: hidden;');
       }
   }


</script>
<!-------------- MAp --------------->
<script>
   var lat = "26.3814513";
   var lng = "43.9956951";

     function initMap() {

         var uluru = {lat: parseFloat(lat) , lng: parseFloat(lng) };
         var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 15,
             center : uluru

         });
         var image ="{{asset('website/dist/img/location.png')}}";
         var beachMarker = new google.maps.Marker({
             position: uluru,
             map: map,
             icon: image
         });
     }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDF-7f4KwYdJHXqb4DFU5q341ry19VnnGg&callback=initMap"></script>
<!-- end sppecial for this page -->
@endsection
