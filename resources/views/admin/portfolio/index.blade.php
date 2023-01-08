@extends('layouts.admin')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><i class="mdi mdi-content-save-all"></i>  عرض الكل</h4>
        <a href="{{route('admin.portfolio.create')}}" class="link btn btn-primary btn-icon-text">
          <i class="ti-file btn-icon-prepend"></i>
          اضافة جديدة
        </a>

        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>الصورة</th>
                <th> العنوان</th>
                <th>الوصف</th>
                <th>اللينك</th>
                <th>الأجراءات  </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($portfolio as $port)
                <tr>
                    <td class="py-1">
                      <img src="{{$port -> photo}}" alt="image">
                    </td>
                    <td>
                        {{$port -> title}}
                    </td>
                    <td>
                        {{$port -> description}}
                    </td>
                    <td>
                        <p style="width: 300px;overflow:hidden;">
                          {{$port -> link}}
                        </p>
                    </td>
                   
                    <td>
                      
                      <a href="{{route('admin.portfolio.edit' , $port -> id)}}" class="btn btn-dark btn-icon-text">
                         تعديل
                        <i class="ti-file btn-icon-append"></i>                          
                      </a>
                      
                      <a href="{{route('admin.portfolio.destroy' , $port -> id)}}" class="btn btn-danger btn-icon-text">
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