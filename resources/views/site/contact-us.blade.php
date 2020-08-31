@extends('site.layout')
@section('title' , 'حوافل || اتصل بنا')
@section('styles')

<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
@endsection
@section('content')

<!-- /////////////////////||||||||||| bread crumbs |||||||||||||||||||| -->
<section class="all-sections single-work">
    <div class="single-workdiv">
        <h3 class="titlebread" > اتصل بنا </h3>
        <p class="breadcrum"> <a href="#">الرئيسية</a> / اتصل بنا </p>
    </div>

</section>
<!-- ///////||||||||||||||||||end breadCrumbs|||||||||||||||||||||||||||//// -->

<div id="map"></div>

<section class="address">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="haveadrs animate__animated wow animate__slideInUp">
                    <img src="{{asset('website/dist/img/phone.png')}}" alt="">
                    <div class="contntbb">
                        <b>العنوان</b>
                        <b class="regular">السعودية - القصيم - طريق الملك فهد </b>
                    </div>
                    <div class="contntbb">
                        <b>رقم الهاتف</b>
                        <a  href="tel:+999485489522">+999485489522</b></a>
                    </div>
                    <div class="contntbb">
                        <b>الجوال </b>
                        <a  href="tel:+999485489522">+999485489522</b></a>
                    </div>
                    <div class="contntbb">
                        <b>البريد الالكتروني </b>
                        <a  href="mailto:webmaster@example.com">hawafel@admin.com</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /////////////////////////////////////////////////////////////////// -->
<section class="all-sections secall">
   <div class="container">
    <h3 class="hMessage">يمكنك ارسال رسالة</h3>
    <p class="smllheader">او التواصل معنا عبر برامج
        <span>التواصل الاجتماعي</span>
    </p>
    <div class="formContact ">
            <form class="">
                <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                    <input type="text" class="form-control inputspn" placeholder="الاسم">
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                    <input type="email" class="form-control inputspn" placeholder="البريد الالكتروني">
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                    <input type="number" class="form-control inputspn" placeholder="رقم الجوال">
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                    <textarea rows="3" type="text" class="form-control inputspn" placeholder="الرسالة"></textarea>
                    </div>
                </div>
                </div>
               <!--  <button href="#" class="btn-hvr cartmargtop a-btn btnauto " type="submit">
                    ارسال
                </button> -->
                <div class="relativeZ">
                    <button class="btn-hvr editwidthbtn"> ارسال</button>
                </div>

            </form>

        <div class="social-buttons">
            <!-- facebook  Button -->
            <a href="http://www.facebook.com" target="blank" class="social-margin">
            <div class="social-icon facebook">
            <i class="fab fa-facebook-f"></i>
            </div>
            </a>
            <!-- TwitterButton -->
            <a href="http://twitter.com/" target="blank" class="social-margin">
            <div class="social-icon twitter">
                <i class="fab fa-twitter" aria-hidden="true"></i>
            </div>
            </a>
            <a href="http://twitter.com/" target="blank" class="social-margin">
            <div class="social-icon instagram">
                <i class="fab fa-instagram"></i>
            </div>
            </a>
        </div>


   </div>
</section>
<!-- /////////////////////|||||||||||End sections |||||||||||||||||||| -->
@endsection
@section('scripts')
<script src="https://tympanus.net/Development/TextInputEffects/js/classie.js"></script>

<script>
         // The following example creates a marker in Stockholm, Sweden using a DROP
         // animation. Clicking on the marker will toggle the animation between a BOUNCE
         // animation and no animation.



         function initMap() {
             var map = new google.maps.Map(document.getElementById('map'), {
                 zoom: 8,
                 center: {
                     lat: 26.3515732,
                     lng: 45.3483186
                 }
             });
         var marker;
             marker = new google.maps.Marker({
                 map: map,
                 draggable: true,
                 animation: google.maps.Animation.DROP,
                 position: {
                     lat: 26.3515732,
                     lng: 45.3483186
                 }
             });
             marker.addListener('click', toggleBounce);
         }

         function toggleBounce() {
             if (marker.getAnimation() !== null) {
                 marker.setAnimation(null);
             } else {
                 marker.setAnimation(google.maps.Animation.BOUNCE);
             }
         }

      </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiOgBoR0bz-6mj23O0Wmk1CScy41joFMY&callback=initMap"
    async defer></script>

@endsection
