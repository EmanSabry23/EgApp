@extends('layouts.admin')
@section('content')

<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"><i class="mdi mdi-newspaper"></i> اضافة جديدة </h4>
      <a href="{{route('admin.service.index')}}" class="link btn btn-primary btn-icon-text">
        <i class="mdi mdi-newspaper"></i>
         عرض الكل
      </a>
      
      <form class="forms-sample" action="{{route('admin.service.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputName"> الاسم</label>
          <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="ادخل الاسم ....." required>
        </div>
        <div class="form-group">
          <label for="exampleInputDescription"> الوصف</label>
          <input type="text" name="description" class="form-control" id="exampleInputDescription" placeholder="ادخل الوصف ....." required>
        </div>
        <div class="form-group">
          <label for="exampleInputDescription"> الفئه</label>
          <select name="servicecategoryid" id="" class="form-control">
            @foreach ($serviceCategory as $category)
              <option value="{{$category -> id}}">{{$category -> title}}</option>
            @endforeach
          </select>
        </div>
        {{-- <div class="form-group">
          <label for="exampleInputphoto">الصورة</label>
          <input type="file" name="photo" class="form-control" id="exampleInputphoto" required>
        </div> --}}
        <button type="submit" class="btn btn-primary mr-2">حفـظ</button>
        <button class="btn btn-light">الغاء</button>
      </form>
    </div>
  </div>
</div>

@stop