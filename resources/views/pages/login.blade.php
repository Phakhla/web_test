<!-- การเรียกใช้งาน Tempate -->
@extends('layouts.main_template')
@section('title') เข้าสู่ระบบ @endsection
@section('content')

<div class="container mt-5 align-items-center">
        
    <form class="col-xs-12 offset-xs-0 col-md-4 offset-md-4" action="dashboard.html">
        <p class="mb-5 text-center"><img src="{{asset('assets/images/logo.jpg')}}" width="150"></p>
        <div class="mb-3 form-group row">
            <label for="email" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="email" id="email" placeholder="ป้อนอีเมล์">
            </div>
        </div>

        <div class="mb-3 form-group row">
            <label for="password" class="col-sm-4 col-form-label">Password</label>
            <div class="col-sm-8">
                <input type="password" class="form-control" name="password" id="password" placeholder="ป้อนรหัสผ่าน">
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-sm-4 col-form-label"></label>
            <div class="col-sm-8">
                <input type="submit" class="btn btn-block btn-primary" value="Login">
            </div>
        </div>
    </form>

</div>


@endsection