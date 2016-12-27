@extends('templates.master')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Đăng nhập</h1>
        </div>

        @if(Auth::check())
            Xin chào, {{Auth::user()->name}}!
            <a href="{{ url('/') }}/auth/logout">Đăng xuất</a>
            <h3>Thông tin người dùng</h3>
            <ul>
                <li>Tên:{{Auth::user()->name}}</li>
                <li>Email:{{Auth::user()->email}}</li>
            </ul>
        @else
            <form method="POST" action={{url('/auth/login')}} role="form">
                {!! csrf_field() !!}
                @if(count($errors)>0)
                    <div>
                        Co loi xay ra
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="text" name="password" id="name" class="form-control">
                </div>
                <div class="checkbox">
                   <label> <input type="checkbox" name="remember">Remember</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @endif

    </div>
@stop