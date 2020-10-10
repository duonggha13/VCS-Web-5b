@extends('layouts.index')
@section('content')
    <div class="mt-5">
        <a class="float-right" href="{{route('user/get_add_user')}}"><i class="fas fa-user-plus"></i> Thêm học viên</a>
        <br><br>
        <ul class="list-group">
            @foreach($users as $user)
                <li class="list-group-item">
                    <a class="float-left" href="user/detail/{{$user->username}}">{{$user->name}}</a>
                    <span class="float-right">{{$user->username}}</span>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
