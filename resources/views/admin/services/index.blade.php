@extends('layouts.admin')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><i class="mdi mdi-content-save-all"></i>  عرض الكل</h4>
        <a href="{{route('admin.service.create')}}" class="link btn btn-primary btn-icon-text">
          <i class="ti-file btn-icon-prepend"></i>
          اضافة جديدة
        </a>

        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>الاسم</th>
                <th>الوصف</th>
                <th>الفئة</th>
                <th>الأجراءات  </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                <tr>
                    
                    <td>
                        {{$service -> name}}
                    </td>
                    <td>
                        {{$service -> description}}
                    </td>
                    <td>
                        {{-- {{$service -> service_category -> title}} --}}
                    </td>
                    <td>
                      <a href="{{route('admin.service.edit' , $service -> id)}}" class="btn btn-dark btn-icon-text">
                         تعديل
                        <i class="ti-file btn-icon-append"></i>                          
                      </a>
                      <a href="{{route('admin.service.destroy' , $service -> id)}}" class="btn btn-danger btn-icon-text">
                        <i class="mdi mdi-delete"></i>                                                    
                        حذف
                      </a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>

@stop