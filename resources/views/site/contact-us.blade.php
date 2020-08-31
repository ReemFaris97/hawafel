@extends('site.layout')
@section('title' , 'حوافل || اتصل بنا')
@section('styles')

<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
@endsection
@section('content')

<!-- /////////////////////||||||||||| start sections |||||||||||||||||||| -->
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
