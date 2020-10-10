@extends('layouts.index')
@section('content')

    <form role="form">
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label font-weight-bold">Tên đăng nhập</label>
            <div class="col-lg-9">
                <input class="form-control" type="text" value="username"/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label font-weight-bold">Mật khẩu</label>
            <div class="col-lg-9">
                <input class="form-control" type="text" value="password"/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label font-weight-bold">Họ tên</label>
            <div class="col-lg-9">
                <input class="form-control" type="text" value="name"/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label font-weight-bold">Email</label>
            <div class="col-lg-9">
                <input class="form-control" type="email" value="email"/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label font-weight-bold">Số điện thoại</label>
            <div class="col-lg-9">
                <input class="form-control" type="text" value="phone number"/>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-9 ml-auto text-right">
                <input type="reset" class="btn btn-outline-secondary" value="Hủy"/>
                <input type="button" class="btn btn-primary" value="Lưu"/>
            </div>
        </div>
    </form>
@endsection
