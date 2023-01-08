@extends('layouts.admin')
@section('content')


<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"><i class="mdi mdi-newspaper"></i> تعديل</h4>
      <a href="{{route('admin.users.index')}}" class="link btn btn-primary btn-icon-text">
        <i class="mdi mdi-newspaper"></i>
         عرض الكل
      </a>
      <form class="forms-sample" action="{{route('admin.users.update' , $users -> id)}}" method='POST' enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="exampleInputDescription">الاسم</label>
              <input type="text" name='name' value='{{$users -> name}}' class="form-control" id="exampleInputDescription" placeholder="ادخل الوصف ....." required>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="exampleInputDescription">البريد الالكتروني </label>
              <input type="email" name='email' value='{{$users -> email}}' class="form-control" id="exampleInputDescription" placeholder="ادخل الوصف ....." required>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="exampleInputDescription"> رقم الهاتف</label>
              <input type="number" name='phone' value='{{$users -> phone}}' class="form-control" id="exampleInputDescription" placeholder="ادخل الوصف ....." required>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="exampleInputDescription">  العنوان</label>
              <input type="text" name='address' value='{{$users -> address}}' class="form-control" id="exampleInputDescription" placeholder="ادخل الوصف ....." required>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="exampleInputDescription">  كلمه المرور</label>
              <input type="password" name='password' value='{{$users -> password}}' class="form-control" id="exampleInputDescription" placeholder="ادخل الوصف ....." required>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary mr-2">حفـظ</button>
        <button class="btn btn-light">الغاء</button>
      </form>
    </div>
  </div>
</div>

@stop