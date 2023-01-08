@extends('layouts.admin')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"><i class="mdi mdi-content-save-all"></i>  عرض الكل</h4>
      

        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>البريد الالكتروني</th>
                <th>الأجراءات  </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($newsletter as $news)
                <tr>
                   
                    <td>
                        {{$news -> email}}
                    </td>
                   
                    <td>
                      
                      <a href="{{route('admin.newsletter.destroy' , $news -> id)}}" class="btn btn-danger btn-icon-text">
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