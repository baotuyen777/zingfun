@extends('templates.master')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Thông tin người dùng</h1>
        </div>

        @if(Auth::check())
            @if(Session::has('message'))
                <p>
                    {{Session::get('message')}}
                </p>
            @endif
            {!! Form::model($data_action['user'], array('method'=>'put','route'=>['user.update',$data_action['user']->id],'class'=>'form')) !!}
                <div class="form-group">
                {!! Form::label('Tên')!!}
                {!! Form::text('name',null,array('required','class'=>'form-control','placeholder'=>'Tên của bạn')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Email')!!}
                    {!! Form::text('email',null,array('required','class'=>'form-control','placeholder'=>'Địa chỉ email')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Quyền')!!}
                    {!! Form::select('role',$data_action['arr_role'],null, array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Điện thoại')!!}
                    {!! Form::text('phone',null,array('','class'=>'form-control','placeholder'=>'Số điện thoại')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Địa chỉ')!!}
                    {!! Form::text('address',null,array('','class'=>'form-control','placeholder'=>'Địa chỉ')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Ngày bắt đầu làm')!!}
                    {!! Form::date('date_start',null, array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Team')!!}
                    {!! Form::select('department_id',$data_action['arr_department'],null, array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Trạng thái')!!}
                    {!! Form::checkbox('active',1) !!}
                </div>
            <a href="{{ url('/') }}/user/list" class="btn btn-warning"><i class="glyphicon glyphicon-arrow-left"></i> Quay về</a>
            {!! Form::submit('Cập nhật thông tin!',array('class'=>'btn btn-primary'))!!}

            {!! Form::close() !!}
        @else
            Chào bạn, vui lòng <a href="{{ url('/') }}/auth/login">Đăng nhập </a>
            hoặc <a href="{{ url('/') }}/auth/register">Đăng ký</a>
        @endif

    </div>
@stop

<h1></h1>

</body>
</html>