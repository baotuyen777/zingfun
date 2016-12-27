@extends('templates.master')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Thêm mới nhân viên</h1>
        </div>

        @if(Auth::check())
            <form method="POST" action={{url('/dep/store')}}>
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
                    {!! Form::label('Tên phòng ban')!!}
                    {!! Form::text('name',null,array('required','class'=>'form-control','placeholder'=>'Tên phòng ban')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Mã phòng ban')!!}
                    {!! Form::text('code',null,array('required','class'=>'form-control','placeholder'=>'Mã phòng ban')) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('SM')!!}
                    {!! Form::select('user_id',$data_action['arr_user_select'],null, array('class' => 'form-control')) !!}
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
