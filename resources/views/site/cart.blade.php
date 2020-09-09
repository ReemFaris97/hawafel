@extends('site.layout')
@section('title' , 'حوافل || سلة المشتريات')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/a-style.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/profile.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/cart.css')}}">
@endsection
@section('content')

<!-- /////////////////////||||||||||| bread crumbs |||||||||||||||||||| -->
<section class="all-sections sec-about single-work">
    <div class="single-workdiv">
        <h3 class="titlebread"> سلة المشتريات </h3>
        <p class="breadcrum"> <a href="../">الرئيسية</a> / سلة المشتريات</p>
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

<!-- /////////////////////||||||||||| start cart |||||||||||||||||||| -->
<section class="my_cart">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-xs-12">
                <div class="items_r">

                    <div class="flexx cart_item">
                        <button class="nav-icon remove_item"> <i class="far fa-trash-alt"></i> </button>
                        <div class="item_dtls">
                            <a href="{{url('single-product')}}" class="i_img">
                                <img src="{{asset('website/dist/img/asset8.png')}}">
                            </a>
                            <div class="right_dtls">
                                <a href="{{url('single-product')}}" class="item_nm">مجموعة الصابون الطبيعى</a>
                                <span class="spanSec">حوافل</span>
                                <div class="i_prices">
                                    <p class="old_price"><span></span><span>300 ر.س</span></p>
                                    <p class="new_price"><span class="current_price">100</span><span> ر.س</span></p>
                                    <p class="hint">الشحن مجانا لفترة محدودة!</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="number-input">
                                <button onclick="this.parentNode.querySelector('.quantity').stepUp()" class="plus"> <i class="fas fa-plus"></i> </button>
                                <input class="quantity" min="0" name="quantity" value="0" type="number">
                                <button onclick="this.parentNode.querySelector('.quantity').stepDown()" class="minus"> <i class="fas fa-minus"></i> </button>
                            </div>

                            <div class="left_price">
                                <span class="updatePrice">100</span><span>ر.س</span>
                            </div>
                        </div>
                    </div>
                    <div class="flexx cart_item">
                        <button class="nav-icon remove_item"> <i class="far fa-trash-alt"></i> </button>
                        <div class="item_dtls">
                            <a href="{{url('single-product')}}" class="i_img">
                                <img src="{{asset('website/dist/img/asset8.png')}}">
                            </a>
                            <div class="right_dtls">
                                <a href="{{url('single-product')}}" class="item_nm">مجموعة الصابون الطبيعى</a>
                                <span class="spanSec">حوافل</span>
                                <div class="i_prices">
                                    <p class="old_price"><span></span><span>300 ر.س</span></p>
                                    <p class="new_price"><span class="current_price">100</span><span> ر.س</span></p>
                                    <p class="hint">الشحن مجانا لفترة محدودة!</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="number-input">
                                <button onclick="this.parentNode.querySelector('.quantity').stepUp()" class="plus"> <i class="fas fa-plus"></i> </button>
                                <input class="quantity" min="0" name="quantity" value="0" type="number">
                                <button onclick="this.parentNode.querySelector('.quantity').stepDown()" class="minus"> <i class="fas fa-minus"></i> </button>
                            </div>

                            <div class="left_price">
                                <span class="updatePrice">100</span><span>ر.س</span>
                            </div>
                        </div>
                    </div>
                    <div class="flexx cart_item">
                        <button class="nav-icon remove_item"> <i class="far fa-trash-alt"></i> </button>
                        <div class="item_dtls">
                            <a href="{{url('single-product')}}" class="i_img">
                                <img src="{{asset('website/dist/img/asset8.png')}}">
                            </a>
                            <div class="right_dtls">
                                <a href="{{url('single-product')}}" class="item_nm">مجموعة الصابون الطبيعى</a>
                                <span class="spanSec">حوافل</span>
                                <div class="i_prices">
                                    <p class="old_price"><span></span><span>300 ر.س</span></p>
                                    <p class="new_price"><span class="current_price">100</span><span> ر.س</span></p>
                                    <p class="hint">الشحن مجانا لفترة محدودة!</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="number-input">
                                <button onclick="this.parentNode.querySelector('.quantity').stepUp()" class="plus"> <i class="fas fa-plus"></i> </button>
                                <input class="quantity" min="0" name="quantity" value="0" type="number">
                                <button onclick="this.parentNode.querySelector('.quantity').stepDown()" class="minus"> <i class="fas fa-minus"></i> </button>
                            </div>

                            <div class="left_price">
                                <span class="updatePrice">100</span><span>ر.س</span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <div class="col-md-3 col-xs-12">
                <div class="left-calc">
                    <h3>ملخص السلة</h3>
                    <!---- start copoun --->
                    <div class="copounbar">
                            <p class="paycolor"><i class="fas fa-percentage"></i> هل لديك كوبون خصم؟ <b>ادخل الكود هنا</b></p>
                            <form action="#" class="coupon-form">
                                <input type="text" name="code" placeholder="الكود">
                                <button type="submit" class="btn-hvr" type="submit">
                                    <span class="z-span">تحقق</span>
                                </button>
                            </form>
                            <span class="coupon-result">هذا الكود غير صحيح</span>
                    </div>
                    <!---- End copoun --->
                    <p class="left-card">
                        <span class="rigt-span ">المجموع:</span>
                        <span class="left-span"><span id="totalss" class="price-value">3200 </span>ر.س</span>
                    </p>
                    <p class="left-card discount">
                        <span class="rigt-span"> الخصم :<span class="coupon-perc">10</span>%</span>
                        <span class="left-span red"><span class="discount-value">3200 </span> ر.س</span>
                    </p>
                    <p class="left-card discount">
                        <span class="rigt-span"> الضريبة :</span>
                        <span class="left-span red"><span class="discount-value">3200 </span> ر.س</span>
                    </p>
                    <p class="left-card">
                        <span class="rigt-span">المجموع الإجمالى: </span>
                        <span class="left-span"> <span id="all-totalss" class="totalPrice">3200</span>
                            ر.س</span>
                    </p>
                    <!--- start choose address --->
                    <div class="sha7n_adrs">
                    <select class="js-select2 form-control" title="عنوان الشحن">
                            <option>الحى </option>
                            <option>قصيم </option>
                            <option>بريدة </option>
                        </select>
                        <button type="button" data-toggle="modal" data-target="#newAdrsModal" class="to_new_adrs">
                            <i class="fas fa-plus"></i>إضافة عنوان اخر
                        </button>
                    </div>
                    <!--- end choose address --->
                    <a href="{{url('/')}}" class="btn-hvr submit_cart" type="submit">
                        <span class="z-span">تأكيد الدفع</span>
                    </a>

                </div>

            </div>
        </div>
    </div>
</section>
<!-- /////////////////////|||||||||||End cart |||||||||||||||||||| -->

@include('site.modals.new-adrs-modal')

@endsection

@section('scripts')
<!---- select2 init --->
<script src="{{asset('website/dist/js/select2.full.js')}}"></script>
<script>
    $(document).ready(function() {
         $(".js-select2").select2();
         $('select:not(.normal)').each(function () {
                $(this).select2({
                    dropdownParent: $(this).parent()
                });
            });
    });
</script>
@endsection