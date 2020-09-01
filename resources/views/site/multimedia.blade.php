@extends('site.layout')
@section('title' , 'حوافل || مكتبة الصور والفيديوهات')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/jquery.fancybox.min.css')}}">

<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
@endsection
@section('content')

<!-- /////////////////////||||||||||| bread crumbs |||||||||||||||||||| -->
<section class="all-sections single-work">
    <div class="single-workdiv">
        <h3 class="titlebread" >  مكتبة الصور والمالتيمديا </h3>
        <p class="breadcrum"> <a href="../">الرئيسية</a> / <a href=""> مكتبة الصور والمالتيمديا</a> </p>
    </div>

</section>
<!-- /////// ||||||||||||||||||||end breadcrumbs|||||||||||||||||||| ///////// -->
<!-- /////// |||||||||||||||||||| breadcrumbs|||||||||||||||||||| ///////// -->
<section class="all-sections">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div>
                <a data-fancybox="gallery" href="{{asset('website/dist/css/img/Asset4.jpg')}}">
                    <img class="imgcontent" src="{{asset('website/dist/img/asset20.png')}}" alt="">
                </a>
                </div>
                 <a href="#" class="imgname"> <p class="imgname">اسم الصورة</p></a>
                <p class="productp"> هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة</p>
            </div>
        </div>
    </div>
</section>

<!-- /////// ||||||||||||||||||||end breadcrumbs|||||||||||||||||||| ///////// -->
<!-- ////////////////////////send subscribe////////////////////////////////// -->
<section class="all-sections Subscribe">
    <div class="container">
    <div class="contentimgsub">
        <img src="{{asset('website/dist/img/Layer_1.png')}}" alt="">
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
