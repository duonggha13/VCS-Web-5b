@extends('layouts.index')
@section('content')
    <table class="table mt-5">
        <thead>
        <tr>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone_number}}</td>
            <td><button herf="messages/{{$user->username}}" title="Nhắn tin"><i class="fas fa-comment-dots"></i></button></td>
            <td><button herf="edit/{{$user->username}}" title="Sửa thông tin"><i class="fas fa-user-edit"></i></button></td>
            <td><button herf="dele/{{$user->username}}" title="Xóa tài khoản"><i class="far fa-trash-alt"></i></button></td>
        </tr>
        </tbody>
    </table>
@endsection
