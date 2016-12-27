@extends('templates.master')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Thêm mới nhân viên</h1>
        </div>

        @if(Auth::check())
            <form method="POST" action={{url('/user/store')}}>
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
                    <label>Quyền</label>
                    <select name="role" id="email" class="form-control">
                        @foreach($data_action['arr_role'] as $key=>$value)

                        <option value="{{ $key }}" {{$selectd=$key == 2 ? 'selected' : ''}}>{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" name="password" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nhập lại mật khẩu</label>
                    <input type="password" name="password_confirmation" id="pass_confirmation" class="form-control">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Điện thoại</label>
                    <input type="text" name="phone" id="name" class="form-control">
                </div>
                <div class="form-group">
                    {!! Form::label('Ngày bắt đầu làm')!!}
                    {!! Form::date('date_start',\Carbon\Carbon::now(), array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Team')!!}
                    {!! Form::select('department_id',$data_action['arr_department'],null, array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Trạng thái')!!}
                    {!! Form::checkbox('active',1) !!}
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @else
            Chào bạn, vui lòng <a href="{{ url('/') }}/auth/login">Đăng nhập </a>
            hoặc <a href="{{ url('/') }}/auth/register">Đăng ký</a>

        @endif

    </div>
@stop
