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


<section class="address">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="haveadrs">
                    <img src="{{asset('website/dist/img/phone.png')}}" alt="">
                    <div class="contntbb">
                        <b>العنوان</b>
                        <b class="regular">السعودية - القصيم - طريق الملك فهد </b>
                    </div>
                    <div class="contntbb">
                        <b>رقم الهاتف</b>
                        <a  href="tel:+999485489522">+999485489522</b>
                    </div>
                    <div class="contntbb">
                        <b>الجوال </b>
                        <a  href="tel:+999485489522">+999485489522</b>
                    </div>
                    <div class="contntbb">
                        <b>البريد الالكتروني </b>
                        <a  href="mailto:webmaster@example.com">hawafel@admin.com</b>
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
                <div class="form-group">
                <input type="text" class="form-control inputspn" placeholder="اسم المستخدم">
                <span class="focus-bg"></span>
                </div>
                <div class="form-group">
                <input type="email" class="form-control inputspn" placeholder="رقم الجوال">
                <span class="focus-bg"></span>
                </div>

                <div class="form-group">
                <textarea rows="3" type="text" class="form-control inputspn" placeholder="الرسالة"></textarea>
                <span class="focus-bg"></span>
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
@endsection
