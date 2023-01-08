@extends('layouts.admin')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"> Contact Us</h4>
        <p class="card-description">
          عرض الكل
        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>الاسم</th>
                <th>البريد الالكتروني</th>
                <th>رقم الهاتف </th>
                <th> الشرط </th>
                <th> رساله </th>
                <th>الأجراءات  </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                <tr>
                   
                    <td>
                        {{$data -> name}}
                    </td>
                    <td>
                        {{$data -> email}}
                    </td>
                    <td>
                        {{$data -> phone}}
                    </td>
                    <td>
                        {{$data -> selectCondition}}
                    </td>
                    <td>
                        {{$data -> message}}
                    </td>
                    <td>
                      <a href="{{route('admin.contactAdmin.show' , $data -> id)}}" class="btn btn-dark btn-icon-text">
                         عرض
                        <i class="ti-file btn-icon-append"></i>                          
                      </a>
                      <a href="{{route('admin.contactAdmin.destroy' , $data -> id)}}" class="btn btn-danger btn-icon-text">
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