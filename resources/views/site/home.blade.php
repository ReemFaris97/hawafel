@extends('site.layout')
@section('title' , 'حوافل || الرئيسية')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/first.css')}}">
<style>
    .navbar{
    position: fixed;
    background-color: transparent;
}
</style>
@endsection
@section('content')
<!---//////////// Start Header //////////////////------------>
<header class="my-header">
    <img src="{{asset('website/dist/img/asset1.png')}}">
    <div class="container head-txt">
            <p class="wow animate__animated animate__fadeInDownBig">حوافل للعناية بالبشرة</p>
            <h2>منتجات</h2>
            <h2> صنعت من</h2>
            <h3 class="wow animate__animated animate__fadeInRightBig">مكونات طبيعية للعناية ببشرتك</h3>
        <a href="{{url('categories')}}" class="btn-hvr btn-flex">
            <img src="{{asset('website/dist/img/favicon_white.png')}}">
            <span class="z-span"> تسوق الان </span>
            <span class="btn-icon"><i class="fas fa-long-arrow-alt-left"></i></span>
        </a>
    </div>
</header>
<!---//////////// End header //////////////////------------>

<!---//////////// Start About Section //////////////////------------>
<section class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-5 col-xs-12">
                <div class="shapes">
                    <img class="wow animate__animated animate__rubberBand" src="{{asset('website/dist/img/asset19.png')}}">
                    <img class="wow animate__animated animate__fadeInTopRight" src="{{asset('website/dist/img/asset11.png')}}">
                    <img class="wow animate__animated animate__tada" src="{{asset('website/dist/img/favicon.png')}}">
                </div>
            </div>
            <div class="col-md-6 col-sm-7 col-xs-12">
                <div class="about-left">
                    <h3>تعرف على المزيد <img src="{{asset('website/dist/img/about.png')}}"></h3>
                    <h3>
                        نحن متجرك المفضل لمنتجات العناية بالبشرة والشعر الطبيعية
                    </h3>
                    <p>
                        هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة
                        هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة
                        هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة
                    </p>
                    <p>
                        هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة
                        هذا النص هو
                    </p>
                    <div class="buttons_cont">
                        <a href="{{url('categories')}}" class="btn-hvr btn-flex">
                        <span class="z-span">تسوق الان </span>
                            <span class="btn-icon"><i class="fas fa-long-arrow-alt-left"></i></span>
                        </a>
                        <a href="{{url('contact-us')}}" class="btn-hvr btn-flex">
                             <span class="btn-icon"><i class="fas fa-phone-volume"></i></span>
                            <span class="z-span">تواصل معنا</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---//////////// End About Section //////////////////------------>

<!---//////////// Start Categories Section //////////////////------------>
<section class="categories-r">
    <div class="container">
        <div class="head-title">
            <div class="head-in">
                <h2>الأقسام</h2>
            </div>
            <p>نحن متجرك المفضل لمنتجات العناية بالبشرة والشعر الطبيعية</p>
        </div>

        <div class="row">
            <div class="col-xs-6 col-md-3 overhidden editmargingallery editcategory">
                <div class="department">
                    <div class="bigdivcont">
                        <div class="smlldivcont">
                            <img  src="{{asset('website/dist/img/asset10.png')}}" alt="">
                        </div>
                    </div>
                   <div class="divcontp">
                        <a class="categoryhref" href="{{url('sub-sections')}}">العناية بالبشرة</a>
                        <p>هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة </p>
                   </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 overhidden editmargingallery editcategory">
                <div class="department">
                    <div class="bigdivcont">
                        <div class="smlldivcont">
                            <img  src="{{asset('website/dist/img/asset10.png')}}" alt="">
                        </div>
                    </div>
                   <div class="divcontp">
                        <a class="categoryhref" href="{{url('sub-sections')}}">العناية بالبشرة</a>
                        <p>هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة </p>
                   </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 overhidden editmargingallery editcategory">
                <div class="department">
                    <div class="bigdivcont">
                        <div class="smlldivcont">
                            <img  src="{{asset('website/dist/img/asset10.png')}}" alt="">
                        </div>
                    </div>
                   <div class="divcontp">
                        <a class="categoryhref" href="{{url('sub-sections')}}">العناية بالبشرة</a>
                        <p>هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة </p>
                   </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 overhidden editmargingallery editcategory">
                <div class="department">
                    <div class="bigdivcont">
                        <div class="smlldivcont">
                            <img  src="{{asset('website/dist/img/asset10.png')}}" alt="">
                        </div>
                    </div>
                   <div class="divcontp">
                        <a class="categoryhref" href="{{url('sub-sections')}}">العناية بالبشرة</a>
                        <p>هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة </p>
                   </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 overhidden editmargingallery editcategory">
                <div class="department">
                    <div class="bigdivcont">
                        <div class="smlldivcont">
                            <img  src="{{asset('website/dist/img/asset10.png')}}" alt="">
                        </div>
                    </div>
                   <div class="divcontp">
                        <a class="categoryhref" href="{{url('sub-sections')}}">العناية بالبشرة</a>
                        <p>هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة </p>
                   </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 overhidden editmargingallery editcategory">
                <div class="department">
                    <div class="bigdivcont">
                        <div class="smlldivcont">
                            <img  src="{{asset('website/dist/img/asset10.png')}}" alt="">
                        </div>
                    </div>
                   <div class="divcontp">
                        <a class="categoryhref" href="{{url('sub-sections')}}">العناية بالبشرة</a>
                        <p>هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة </p>
                   </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3 overhidden editmargingallery editcategory">
                <div class="department">
                    <div class="bigdivcont">
                        <div class="smlldivcont">
                            <img  src="{{asset('website/dist/img/asset10.png')}}" alt="">
                        </div>
                    </div>
                   <div class="divcontp">
                        <a class="categoryhref" href="{{url('sub-sections')}}">العناية بالبشرة</a>
                        <p>هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة هذا النص هو مثال لنص يمكن ان يستبدل في هذة المساحة </p>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---//////////// End Categories Section //////////////////------------>


@endsection
@section('scripts')
@endsection