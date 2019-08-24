@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form action="them" method="POST">
                        <input type="hidden" name="_token" value="{{  csrf_token()  }}">

                        <div>
                            <label>Tên bệnh nhân</label>
                            <br>
                            <input type="text" name="tenbenhnhan" style="width: 680px" required="required" maxlength="20">
                        </div>    
                    
                        <div>
                            <label>Nhập tên thuốc</label>
                            <br>
                            <textarea name="tenthuoc" style="width: 680px; height: 300px" required="required" minlength="5" maxlength="255"></textarea>
                        </div>
                        
                        <div>
                            <label>Thành tiền</label><br>
                            <input type="text" name="gia" style="width: 680px">
                        </div>

                        <button>Thêm</button>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>  
@endsection