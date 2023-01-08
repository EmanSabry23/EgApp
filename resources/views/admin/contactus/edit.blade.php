@extends('layouts.admin')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"> Contact Us</h4>
        <p class="card-description">
          عرض الكل
        </p>
        <form action="">
          <div class="form-group">
            <label for="">name</label>
            <input type="text" name="name" value="{{$data -> name}}">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" value="{{$data -> email}}">
          </div>
          <div class="form-group">
            <label for="">Phone</label>
            <input type="number" name="phone" value="{{$data -> phone}}">
          </div>
          <div class="form-group">
            <label for="">name</label>
            <input type="text" name="name" value="{{$data -> name}}">
          </div>
          <div class="form-group">
            <label for="">name</label>
            <input type="text" name="name" value="{{$data -> name}}">
          </div>
        </form>
      </div>
    </div>
</div>

@stop