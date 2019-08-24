@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <ul>
                        <form action="{{ url('/them') }}"><button>Thêm</button></form>
                    </ul>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 style="text-align: center">Toa thuốc</h1>
                    @foreach($donthuoc as $dt)
                        <tr>
                        <b><td>{{ $dt->tenbenhnhan }}</td></b>
                        <br>
                        <td>{{ $dt->tenthuoc }}</td>
                        </tr>
                        <br>
                        <td>{{ $dt->gia }}</td>
                        <br>
                        @if($dt->queue==0)
                            <h4 style="color: red">Đang xử lý...</h4>
                        @endif

                        @if($dt->queue==1)
                            <h4 style="color: green">Hoàn thành</h4>
                        @endif

                        @can('editor')
                            @if($dt->queue==0)
                                <a href="duyet/{{$dt->id}}">Xử lý</a>
                            @endif 
                        @endcan

                        @can('admin')
                        <a href="sua/{{$dt->id}}">Sửa</a>
                        <a href="xoa/{{$dt->id}}">Xóa</a>
                        @endcan
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
