@extends('templates.master')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>HRM</h1>
        </div>

        @if(Auth::check())
            <p>
                <a href="{{ url('/') }}/user/create" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
            </p>
            <table  width="" class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th >Action</th>

                </tr>
                @foreach($arr_all_user as $arr_single_user)

                    <tr class="row_{{ $arr_single_user->id }}">
                        <td>{{$arr_single_user->name}}</td>
                        <td>{{$arr_single_user->email}}</td>
                        <td>
                            <a href="{{url('/')}}/user/{{$arr_single_user->id}}/edit" class="btn btn-primary" ><i class="glyphicon glyphicon-pencil"></i></a> &nbsp;
                            <a href="javascript:delete_obj('{{ $arr_single_user->id }}','{{ csrf_token() }}','user)" class="btn btn-danger"
                                    data-token="">
                                <i class="glyphicon glyphicon-trash"></i>
                            </a>

                        </td>
                    </tr>
                @endforeach
            </table>
        @else
            Chào bạn, vui lòng <a href="{{ url('/') }}/auth/login">Đăng nhập </a>
            hoặc <a href="{{ url('/') }}/auth/register">Đăng ký</a>
        @endif

    </div>
    <script>

    </script>
@stop


