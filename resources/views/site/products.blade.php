@extends('site.layout')
@section('title' , 'حوافل || الخدمات ')
@section('styles')

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="{{asset('website/dist/css/jquery.fancybox.min.css')}}" />
<link rel="stylesheet" href="{{asset('website/dist/css/r-style.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/a-sass.css')}}">
@endsection
@section('content')
<!-- /////////////////////||||||||||| start sections |||||||||||||||||||| -->
<section class="all-sections secall secnopading">
   <div class="container containeredit">
      <div class="row rowflexx">
         <div class="col-md-3 customizer accordionaaa">
            <a class="customizer-toggle" href="javascript:void(0)">
            <i class="fas fa-cog "></i>
            </a>
            <div class="customescroll">
            <div class="flexfiltter">
               <b>فلتر</b>
               <b>مسح</b>
            </div>
            <div id="accordion">
               <div class="card">
                  <div class="card-header" id="headingOne">
                     <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        التصنيفات
                        <i class="fas fa-chevron-down"></i>
                        </button>
                     </h5>
                  </div>
                  <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                     <div class="card-body card-bodyaa">
                        <a class="asideactive"> شاليهات <span>(25)</span></a>
                        <a> حمام سباحة <span>(100)</span></a>
                        <a> شقق <span>(25)</span></a>
                        <a> محلات <span>(25)</span></a>
                        <a> عمارات <span>(10)</span></a>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="headingTwo">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        تاريخ الوصول
                        <i class="fas fa-chevron-down"></i>
                        </button>
                     </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                     <div class="card-body card-bodytime">
                        <div id="datepicker"></div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="headingThree">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        السعر
                        <i class="fas fa-chevron-down"></i>
                        </button>
                     </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                     <div class="card-body">
                        <!---------- Range Slider ------------->
                        <div class="price">
                           <div class="row">
                              <div class="col-sm-12">
                                 <div id="slider-range"></div>
                              </div>
                           </div>
                           <div class="row slider-labels">
                              <div class="col-xs-6 text-right caption1">
                                 <p>الحد الأقصى:</p>
                                 <span class="price2" id="slider-range-value2"></span>
                              </div>
                              <div class="col-xs-6 text-left caption1">
                                 <p>الحد الأدنى:</p>
                                 <span class="price2" id="slider-range-value1"></span>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-12">
                                 <form>
                                    <input type="hidden" name="min-value" value="">
                                    <input type="hidden" name="max-value" value="">
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="headingfour">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                        عدد الافراد
                        <i class="fas fa-chevron-down"></i>
                        </button>
                     </h5>
                  </div>
                  <div id="collapsefour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                     <div class="card-body">
                        <select name="" id="">
                           <option value="">6</option>
                           <option value="">4</option>
                           <option value="">5</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="headingfive">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapseThree">
                        تاريخ المغادرة
                        <i class="fas fa-chevron-down"></i>
                        </button>
                     </h5>
                  </div>
                  <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                     <div class="card-body card-bodytime">
                        <div id="datepicker2"></div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header" id="headingsex">
                     <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsesex" aria-expanded="false" aria-controls="collapsesex">
                        المنطقة
                        <i class="fas fa-chevron-down"></i>
                        </button>
                     </h5>
                  </div>
                  <div id="collapsesex" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                     <div class="card-body">
                        <select name="" id="">
                           <option value="">المدينة</option>
                           <option value="">القصيم</option>
                           <option value="">مكة</option>
                        </select>
                        <select name="" id="">
                           <option value="">الحي</option>
                           <option value="">حي 1 </option>
                           <option value="">حي 2</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </div>
         <div class="col-md-9 clo-xs-12">
            <div class=" all-sections">
               <div class="hash">
                  <div>x jun 26 - 30 jun</div>
                  <div> منتجعات x</div>
                  <div> 6 افراد x </div>
                  <div> السعودية x</div>
                  <div> القصيم x</div>
               </div>
               <div class="flexheader">
                  <p> الخدمات</p>
                  <div class="aprice">
                     <span>السعر </span>
                     <span>من الاعلي للاقل</span>
                     <span>من الاقل للاعلي
                  </div>
                  <div class="orderrr">
                     <span>الترتيب</span>
                     <select name="" id="">
                        <option value="">حسب الاعلي تقييم</option>
                        <option value="">حسب الاعلي زيارة</option>
                     </select>
                  </div>
               </div>
               <div class="row grid grid1">
                  <div class="col-sm-4 col-xs-6 wow animate__ animate__backInUp animated"">
                     <div class=" item">
                        <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                           <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset4.jpg')}}">
                           <span class="fancyaa"><i class="fas fa-eye"></i></span>
                           <img src="{{asset('website/dist/img/Asset4.jpg')}}" alt="Sea">
                           </a>
                        </figure>
                        <a href="{{url('sub-sections')}}">
                           <div class="gallery_item_info">
                              <div class="vilacity">
                                 <span class="block">شاليهات</span>
                                 <span class="block">السعودية</span>
                              </div>
                              <div class="numvilacity">
                                 <span class="block">225</span>
                                 <span class="block">فندق</span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-4 col-xs-6 wow animate__ animate__backInUp animated"">
                     <div class=" item">
                        <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                           <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset4.jpg')}}">
                           <span class="fancyaa"><i class="fas fa-eye"></i></span>
                           <img src="{{asset('website/dist/img/Asset4.jpg')}}" alt="Sea">
                           </a>
                        </figure>
                        <a href="{{url('sub-sections')}}">
                           <div class="gallery_item_info">
                              <div class="vilacity">
                                 <span class="block">شاليهات</span>
                                 <span class="block">السعودية</span>
                              </div>
                              <div class="numvilacity">
                                 <span class="block">225</span>
                                 <span class="block">فندق</span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-4 col-xs-6 wow animate__ animate__backInUp animated"">
                     <div class=" item">
                        <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                           <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset4.jpg')}}">
                           <span class="fancyaa"><i class="fas fa-eye"></i></span>
                           <img src="{{asset('website/dist/img/Asset4.jpg')}}" alt="Sea">
                           </a>
                        </figure>
                        <a href="{{url('sub-sections')}}">
                           <div class="gallery_item_info">
                              <div class="vilacity">
                                 <span class="block">شاليهات</span>
                                 <span class="block">السعودية</span>
                              </div>
                              <div class="numvilacity">
                                 <span class="block">225</span>
                                 <span class="block">فندق</span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-4 col-xs-6 wow animate__ animate__backInUp animated"">
                     <div class=" item">
                        <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                           <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset4.jpg')}}">
                           <span class="fancyaa"><i class="fas fa-eye"></i></span>
                           <img src="{{asset('website/dist/img/Asset4.jpg')}}" alt="Sea">
                           </a>
                        </figure>
                        <a href="{{url('sub-sections')}}">
                           <div class="gallery_item_info">
                              <div class="vilacity">
                                 <span class="block">شاليهات</span>
                                 <span class="block">السعودية</span>
                              </div>
                              <div class="numvilacity">
                                 <span class="block">225</span>
                                 <span class="block">فندق</span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-4 col-xs-6 wow animate__ animate__backInUp animated"">
                     <div class=" item">
                        <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                           <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset4.jpg')}}">
                           <span class="fancyaa"><i class="fas fa-eye"></i></span>
                           <img src="{{asset('website/dist/img/Asset4.jpg')}}" alt="Sea">
                           </a>
                        </figure>
                        <a href="{{url('sub-sections')}}">
                           <div class="gallery_item_info">
                              <div class="vilacity">
                                 <span class="block">شاليهات</span>
                                 <span class="block">السعودية</span>
                              </div>
                              <div class="numvilacity">
                                 <span class="block">225</span>
                                 <span class="block">فندق</span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-4 col-xs-6 wow animate__ animate__backInUp animated"">
                     <div class=" item">
                        <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                           <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset4.jpg')}}">
                           <span class="fancyaa"><i class="fas fa-eye"></i></span>
                           <img src="{{asset('website/dist/img/Asset4.jpg')}}" alt="Sea">
                           </a>
                        </figure>
                        <a href="{{url('sub-sections')}}">
                           <div class="gallery_item_info">
                              <div class="vilacity">
                                 <span class="block">شاليهات</span>
                                 <span class="block">السعودية</span>
                              </div>
                              <div class="numvilacity">
                                 <span class="block">225</span>
                                 <span class="block">فندق</span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-sm-4 col-xs-6 wow animate__ animate__backInUp animated"">
                     <div class=" item">
                        <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                           <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset4.jpg')}}">
                           <span class="fancyaa"><i class="fas fa-eye"></i></span>
                           <img src="{{asset('website/dist/img/Asset4.jpg')}}" alt="Sea">
                           </a>
                        </figure>
                        <a href="{{url('sub-sections')}}">
                           <div class="gallery_item_info">
                              <div class="vilacity">
                                 <span class="block">شاليهات</span>
                                 <span class="block">السعودية</span>
                              </div>
                              <div class="numvilacity">
                                 <span class="block">225</span>
                                 <span class="block">فندق</span>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
                  <div class="col-xs-12 relativeZ">
                    <button class="btn-hvr see-more">عرض الكل</button>
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
<script src="{{asset('website/dist/js/jquery-ui.js')}}"></script>
<script src="{{asset('website/dist/js/range-slider.js')}}"></script>
<script src="{{asset('website/dist/js/jquery.fancybox.min.js')}}"></script>
<script>
   $( function() {
     $( "#datepicker" ).datepicker();
     $( "#datepicker2" ).datepicker();
   } );
</script>
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
@endsection
