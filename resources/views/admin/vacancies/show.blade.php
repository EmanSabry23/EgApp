@extends('layouts.admin')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">وظائف شاغرة</h4>
        <p class="card-description">
          عرض الكل
        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>الصورة</th>
                <th>الاسم</th>
                <th>البريد الالكتروني</th>
                <th>رقم الهاتف </th>
                <th>الأجراءات  </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                <tr>
                    <td class="py-1">
                      <img src="/images/vacancies/{{$data -> photo}}" alt="image">
                    </td>
                    <td>
                        {{$data -> username}} {{$data -> lastname}}
                    </td>
                    <td>
                        {{$data -> email}}
                    </td>
                    <td>
                        {{$data -> phone}}
                    </td>
                    <td>
                        <a href=" {{route('admin.vacancies_Admin.view' , $data -> id)}} " class="btn btn-dark btn-icon-text">
                          عرض
                          <i class="ti-file btn-icon-append"></i>                          
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