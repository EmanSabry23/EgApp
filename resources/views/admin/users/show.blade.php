@extends('layouts.admin')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">عرض الكل </h4>
        <p class="card-description">
          
        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>الاسم</th>
                <th>البريد الالكتروني</th>
                <th>رقم الهاتف  </th>
                <th> العنوان </th>
                <th> تاريخ الاضافه </th>
                <th> تاريخ التعديل </th>
                <th> الأجراءات  </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                   
                    <td>
                        {{$user -> name}} 
                    </td>
                    <td>
                        {{$user -> email}}
                    </td>
                    <td>
                        {{$user -> address}}
                    </td>
                    <td>
                        {{$user -> phone}}
                    </td>
                    <td>
                        {{$user -> created_at->diffForHumans()}}
                    </td>
                    <td>
                        {{$user -> updated_at->diffForHumans()}}
                    </td>
                    <td>

                        <a href="{{route('admin.users.edit' , $user -> id)}}" class="btn btn-dark btn-icon-text">
                          تعديل
                          <i class="ti-file btn-icon-append"></i>                          
                        </a>
                        <a href="{{route('admin.users.destroy' , $user -> id)}}" class="btn btn-danger btn-icon-text">
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