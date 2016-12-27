@extends('templates.master')
@section('content')
    <div class="container">
        <div class="page-header">
            <h1>HRM</h1>
        </div>

        @if(Auth::check())
            <p>
                <a href="{{ url('/') }}/dep/create" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
            </p>
            <table  width="" class="table table-bordered">
                <tr>
                    <th>Tên</th>
                    <th>Mã</th>
                    <th >Hành động</th>

                </tr>
                @foreach($arr_all_dep as $arr_single_dep)

                    <tr class="row_{{ $arr_single_dep->id }}">
                        <td>{{$arr_single_dep->name}}</td>
                        <td>{{$arr_single_dep->code}}</td>
                        <td>
                            <a href="{{url('/')}}/dep/{{$arr_single_dep->id}}/edit" class="btn btn-primary" ><i class="glyphicon glyphicon-pencil"></i></a> &nbsp;
                            <a href="javascript:delete_obj('{{ $arr_single_dep->id }}','{{ csrf_token() }}','dep')" class="btn btn-danger"
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


