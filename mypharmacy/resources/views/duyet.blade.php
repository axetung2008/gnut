@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form action="{{ $donthuoc->id }}" method="POST">
                    <input type="hidden" name="_token" value="{{  csrf_token()  }}">
                    <div>
                        <h1 style="text-align: center">Đơn thuốc</h1>
                        <br>
                        <b><td>{{ $donthuoc->tenbenhnhan }}</td></b>
                        <br>
                        <td>{{ $donthuoc->tenthuoc }}</td>
                        </tr>
                        <br>
                        <td>{{ $donthuoc->gia }}</td>
                        <input  type="hidden" name="queue" id="queue" value="{{ $donthuoc->queue=1 }}">
                    </div>    
                    
                    <br>
                    <button>Hoàn thành</button>
                    <a href="{{ url('/home') }}">Quay về</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection