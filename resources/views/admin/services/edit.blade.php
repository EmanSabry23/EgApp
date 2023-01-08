@extends('layouts.admin')
@section('content')

<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"><i class="mdi mdi-newspaper"></i> تعديل</h4>
      <a href="{{route('admin.service.index')}}" class="link btn btn-primary btn-icon-text">
        <i class="mdi mdi-newspaper"></i>
         عرض الكل
      </a>

      
      
      <form class="forms-sample" action="{{route('admin.service.update' , $service->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- <div class="old-img">
          <img src="{{$service -> photo}}" alt="">
        </div> --}}
        <div class="form-group">
          <label for="exampleInputName">الاسم</label>
          <input type="text" name="name" value="{{$service -> name}}" class="form-control" id="exampleInputName" placeholder="ادخل الاسم .....">
        </div>
        <div class="form-group">
          <label for="exampleInputDescription">الوصف</label>
          <input type="text" name="description" value="{{$service -> description}}" class="form-control" id="exampleInputDescription" placeholder="ادخل الوصف .....">
        </div>
        <div class="form-group">
          <label for="exampleInputDescription">الفئة</label>
          <select name="service_category_service[]" id="" class="form-control" multiple>
            @foreach ($serviceCategories as $sC)
              <option value="{{ $sC->id }}" class="text-capitalize"
                  {{ isset($service) &&in_array($service->id,$sC->services()->pluck('service_id')->toArray())? 'selected': '' }}>
                  {{ $sC->title }}
              </option>
            @endforeach
            {{-- @foreach ($category as $category)
              <option value="{{$category -> id}}" @if($category -> id == $service -> service_category_id) selected @endif>{{$category -> title}}</option>
            @endforeach --}}
          </select>
        </div>
        {{-- <div class="form-group">
          <label for="exampleInputphoto">تغير الصورة</label>
          <input type="file" name="photo" class="form-control" id="exampleInputphoto">
        </div> --}}
        <button type="submit" class="btn btn-primary mr-2">حفـظ</button>
        <button class="btn btn-light">الغاء</button>
      </form>
    </div>
  </div>
</div>

@stop