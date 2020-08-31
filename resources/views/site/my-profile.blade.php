@extends('site.layout')
@section('title' , 'حوافل || صفحتى الشخصية')
@section('styles')
<link rel="stylesheet" href="{{asset('website/dist/css/jquery.fancybox.min.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/Datatable/jquery.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('website/dist/css/Datatable/responsive.dataTables.min.css')}}">
<link rel="stylesheet" href="{{asset('website/scss/profile.css')}}">
@endsection
@section('content')

<!-- /////////////////////||||||||||| start sections |||||||||||||||||||| -->
<section class="my_profile">
   <div class="container">

   <ul class="nav-tabs">
    <li class="active"><a data-toggle="tab" href="#my_profile">البيانات الشخصية</a></li>
    <li><a data-toggle="tab" href="#my_reservations">حجوزاتى</a></li>
    <li><a data-toggle="tab" href="#my_wallet">محفظتى</a></li>
  </ul>

  <div class="tab-content">
         <!-- Start first tap pane -->
    <div id="my_profile" class="tab-pane fade in active">
      <div class="flex-left">
         <a href="{{url('editprofile')}}"> تعديل الحساب <span><i class="far fa-edit"></i></span> </a>
      </div>
      <div class="my_info">
         <a href="{{asset('website/dist/img/user.png')}}" data-fancybox="gallery" class="user_img"> <img src="{{asset('website/dist/img/user.png')}}"> </a>
         <ul class="user_info">
            <li>
               <span> <i class="fas fa-user"></i> </span>
               <p>اسم المستخدم</p>
               <h4>ريم فارس</h4>
            </li>
            <li>
               <span> <i class="fas fa-envelope"></i> </span>
               <p>البريد الإلكترونى</p>
               <h4>reem@faris.com</h4>
            </li>
            <li>
               <span> <i class="fas fa-phone"></i> </span>
               <p>رقم الجوال</p>
               <h4>+964384765</h4>
            </li>
            <li>
               <span> <i class="fas fa-map-marker-alt"></i> </span>
               <p>المدينة</p>
               <h4>السعودية - القصيم - بريدة</h4>
            </li>
         </ul>
      </div>
   </div>
 
      <!-- Start second tab pane -->
    <div id="my_reservations" class="tab-pane fade">
      <table class="datatable display nowrap">
        <thead>
            <tr>
                <th>الرقم.</th>
                <th>تاريخ الحجز</th>
                <th>تاريخ الوصول</th>
                <th>تاريخ المغادرة</th>
                <th>الحالة</th>
                <th>العمليات</th>
            </tr>
        </thead>
        <tbody>
            <tr>
               <td>1</td>
               <td>22 Nov 2020</td>
               <td>22 Nov 2020</td>
               <td>22 Nov 2020</td>
               <td>منتهى</td>
               <td>
                  <div class="flex-r">
                     <a href="{{url('booking-details')}}" class="btn-hvr andShow">عرض</a>
                     <!-- لو حالة الحجز //منتهى// اظهر تقييم -->
                     <a href="{{url('voting')}}" class="btn-hvr andVote">تقييم</a>
                  </div>
               </td>
            </tr>
            <tr>
               <td>2</td>
               <td>22 Nov 2020</td>
               <td>22 Nov 2020</td>
               <td>22 Nov 2020</td>
               <td>حالى</td>
               <td>
                  <div class="flex-r">
                     <a href="{{url('booking-details')}}" class="btn-hvr andShow">عرض</a>
                     <!-- لو حالة الحجز //حالى// اظهر تقييم -->
                     <a href="#" class="btn-hvr andCancel">إلغاء</a>
                  </div>
               </td>
            </tr>
        </tbody>
    </table>
       </div>

   <!-- Start third tab pane -->
       <div id="my_wallet" class="tab-pane fade">
          <div class="wallet">
          <h2>إجمالى المبلغ</h2>
          <h3>3000</h3>
          <p>ريال سعودى</p>
          </div>
       </div>
    
</div>
   </div>
</section>
<!-- /////////////////////|||||||||||End sections |||||||||||||||||||| -->
@endsection

@section('scripts')
<script src="{{asset('website/dist/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('website/dist/js/Datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('website/dist/js/Datatable/dataTables.responsive.min.js')}}"></script>
<script>
$(document).ready(function () {
    $('#example').DataTable({
        responsive: true
    });
    $('.datatable').DataTable({
        responsive: true
    });

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        $($.fn.dataTable.tables(true)).DataTable()
           .columns.adjust()
           .responsive.recalc();
    });    
});
</script>
@endsection
