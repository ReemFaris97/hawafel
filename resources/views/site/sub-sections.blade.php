@extends('site.layout')
@section('title' , 'حوافل || العروض ')
@section('styles')

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="{{asset('website/dist/css/jquery.fancybox.min.css')}}" />
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
                  <p> الفنادق</p>
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
                  <div class="col-sm-4 col-xs-12 wow animate__ animate__backInUp animated divcontentitem notmrgrsp">
                     <div class=" item">
                        <figure class="gradient-overlay-hover icon-zoom-hover zoom-image-hover">
                            <div class="heartabs">
                                <input id="toggle-heart" type="checkbox"/>
                                <label for="toggle-heart"><i class="fas fa-heart"></i></label>
                            </div>
                           <a data-fancybox="gallery" href="{{asset('website/dist/img/Asset4.jpg')}}">
                           <span class="fancyaa"><i class="fas fa-eye"></i></span>
                           <img src="{{asset('website/dist/img/Asset4.jpg')}}" alt="Sea">
                           <span class="absDate">26 jun - 30 jun</span>
                           <span class="absDisc">50% خصم</span>
                           </a>
                        </figure>
                        <div class="gallery_item_info editbook">
                            <div class="hottelname"><a href="{{url('booking-details')}}">فندق كمبينسكي العثمان</a></div>
                            <div class="flexstar">
                                <i class="fas fa-star starrate"></i>
                                <i class="fas fa-star starrate"></i>
                                <i class="fas fa-star starnorate"></i>
                                <i class="fas fa-star starnorate"></i>
                                <i class="fas fa-star starnorate"></i>
                                <span>255</span>
                            </div>
                            <div class="priceflex">
                                <span class="block">200 ريال </span>
                                <span class="block">سعر الليلة</span>
                            </div>

                        </div>
                     </div>
                  </div>


                  <div class="col-xs-12 relativeZ">
                    <a href="{{url('categories')}}" class="btn-hvr see-more">عرض الكل</a>
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
