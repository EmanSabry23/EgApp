@extends('layouts.admin')
@section('content')


    <div class="view">
        <div class="row">
            <div class="col-md-4">
                <img src="/images/vacancies/{{$data -> photo}}" alt="">
            </div>
            <div class="col-md-8">
                <div class="details">
                    <p>
                        <strong><i class="mdi mdi-rename-box"></i> الاسم : </strong>
                        <span>{{$data -> username}} {{$data -> lastname}}</span>
                    </p>
                    <p>
                        <strong><i class="mdi mdi-email-open"></i> البريد الالكتروني :</strong>
                        <span>{{$data -> email}}</span>
                    </p>
                    <p>
                        <strong><i class="mdi mdi-cellphone-iphone"></i> رقم الهاتف :</strong>
                        <span>{{$data -> phone}}</span>
                    </p>
                   
                </div>
            </div>
        </div>
    </div>

@stop