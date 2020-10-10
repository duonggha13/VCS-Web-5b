@extends('layouts.index')
@section('content')

    <form role="form" class="mt-5">
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label font-weight-bold">Tên đăng nhập</label>
            <div class="col-lg-9">
                <input class="form-control" type="text" value={{$user->username}} @if (Auth::user()->level == 0) readonly @endif>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label font-weight-bold">Mật khẩu</label>
            <div class="col-lg-9">
                <input class="form-control" type="text" value=""/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label font-weight-bold">Họ tên</label>
            <div class="col-lg-9">
                <input class="form-control" type="text" value={{$user->name}} @if (Auth::user()->level == 0) readonly @endif>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label font-weight-bold">Email</label>
            <div class="col-lg-9">
                <input class="form-control" type="email" value={{$user->email}}>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-lg-3 col-form-label form-control-label font-weight-bold">Số điện thoại</label>
            <div class="col-lg-9">
                <input class="form-control" type="text" value={{$user->phone_number}}>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-9 ml-auto text-right">
                <input type="reset" class="btn btn-outline-secondary" value="Hủy">
                <input type="button" class="btn btn-primary" value="Lưu">
            </div>
        </div>
    </form>
@endsection
