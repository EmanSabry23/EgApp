@extends('layouts.admin')
@section('content')

<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"><i class="mdi mdi-newspaper"></i> تعديل</h4>
      <a href="{{route('admin.portfolio.index')}}" class="link btn btn-primary btn-icon-text">
        <i class="mdi mdi-newspaper"></i>
         عرض الكل
      </a>
      
      <form class="forms-sample" action="{{route('admin.portfolio.update' , $portfolio->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="old-img">
          <img src="{{$portfolio -> photo}}" alt="">
        </div>
        <div class="form-group">
          <label for="exampleInputDescription">العنوان</label>
          <input type="text" name="title" value="{{$portfolio -> title}}" class="form-control" id="exampleInputDescription" placeholder="ادخل العنوان .....">
        </div>
        <div class="form-group">
          <label for="exampleInputDescription">الوصف</label>
          <input type="text" name="description" value="{{$portfolio -> description}}" class="form-control" id="exampleInputDescription" placeholder="ادخل الوصف .....">
        </div>
        <div class="form-group">
          <label for="exampleInputlink">اللينك</label>
          <input type="text" name="link" value="{{$portfolio -> link}}" class="form-control" id="exampleInputlink" placeholder="ادخل اللينك .....">
        </div>
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