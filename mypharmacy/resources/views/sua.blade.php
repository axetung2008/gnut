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
                            <label>Tên bệnh nhân</label>
                            <br>
                            <input type="text" name="tenbenhnhan" style="width: 680px" value="{{ $donthuoc->tenbenhnhan }}">
                        </div>    
                    
                        <div>
                            <label>Nhập tên thuốc</label>
                            <br>
                            <textarea name="tenthuoc" style="width: 680px; height: 300px">{{ $donthuoc->tenthuoc }}</textarea>
                        </div>
                        
                        <div>
                            <label>Thành tiền</label><br>
                            <input type="text" name="gia" style="width: 680px" value="{{ $donthuoc->gia }}">
                        </div>

                        <button>Cập nhật</button>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>  
@endsection