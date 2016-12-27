@extends('templates.master')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Đăng ký</h1>
        </div>

        @if(Auth::check())
            <form method="POST" action={{url('/auth/register')}}>
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
                    <label>Tên</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" name="password" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nhập lại mật khẩu</label>
                    <input type="password" name="password_confirmation" id="pass_confirmation" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @else
            Chào bạn, vui lòng <a href="{{ url('/') }}/auth/login">Đăng nhập </a>
            hoặc <a href="{{ url('/') }}/auth/register">Đăng ký</a>

        @endif

    </div>
@stop
