@extends('layouts.admin')
@section('content')

<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"><i class="mdi mdi-newspaper"></i> تعديل</h4>
      <a href="{{route('admin.category.index')}}" class="link btn btn-primary btn-icon-text">
        <i class="mdi mdi-newspaper"></i>
         عرض الكل
      </a>
      
      <form class="forms-sample" action="{{route('admin.category.update' , $data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="old-img">
          <img src="{{$data -> photo}}" alt="">
        </div>
        <div class="form-group">
          <label for="exampleInputDescription">الوصف</label>
          <input type="text" name="description" value="{{$data -> description}}" class="form-control" id="exampleInputDescription" placeholder="ادخل الوصف .....">
        </div>
        <div class="form-group">
          <label for="exampleInputphoto">تغير الصورة</label>
          <input type="file" name="photo" class="form-control" id="exampleInputphoto">
        </div>
        <button type="submit" class="btn btn-primary mr-2">حفـظ</button>
        <button class="btn btn-light">الغاء</button>
      </form>
    </div>
  </div>
</div>

@stop