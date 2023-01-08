@extends('layouts.admin')
@section('content')

<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"><i class="mdi mdi-newspaper"></i> اضافة جديدة </h4>
      <a href="{{route('admin.portfolio.index')}}" class="link btn btn-primary btn-icon-text">
        <i class="mdi mdi-newspaper"></i>
         عرض الكل
      </a>
      
      <form class="forms-sample" action="{{route('admin.portfolio.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputTitle">العنوان</label>
          <input type="text" name="title" class="form-control" id="exampleInputTitle" placeholder="ادخل العنوان  ....." required>
        </div>
        <div class="form-group">
          <label for="exampleInputDescription">الوصف</label>
          <input type="text" name="description" class="form-control" id="exampleInputDescription" placeholder="ادخل الوصف ....." required>
        </div>
        <div class="form-group">
          <label for="exampleInputlink">اللينك</label>
          <input type="text" name="link" class="form-control" id="exampleInputlink" placeholder="ادخل اللينك ....." required>
        </div>
        <div class="form-group">
          <label for="exampleInputphoto">الصورة</label>
          <input type="file" name="photo" class="form-control" id="exampleInputphoto" required>
        </div>
        <button type="submit" class="btn btn-primary mr-2">حفـظ</button>
        <button class="btn btn-light">الغاء</button>
      </form>
    </div>
  </div>
</div>

@stop