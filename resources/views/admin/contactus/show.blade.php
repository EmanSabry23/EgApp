@extends('layouts.admin')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"> عرض التفاصيل </h4>

        <div class="view">
          <div class="details">
              <p>
                  <strong><i class="mdi mdi-rename-box"></i> الاسم : </strong>
                  <span>{{$data -> name}}</span>
              </p>
              <p>
                  <strong><i class="mdi mdi-email-open"></i> البريد الالكتروني :</strong>
                  <span>{{$data -> email}}</span>
              </p>
              <p>
                  <strong><i class="mdi mdi-cellphone-iphone"></i> رقم الهاتف :</strong>
                  <span>{{$data -> phone}}</span>
              </p>
              <p>
                  <strong><i class="mdi mdi-message"></i> الرسالة:</strong>
                  <span>{{$data -> message}}</span>
              </p>
              
          </div>
        </div>

      </div>
    </div>
</div>

@stop