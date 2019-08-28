@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Diem</div>

                <div class="card-body">
                <form action="{{route('diem.save')}}" method="post">
                @csrf
                <div class="form-group">
                <label for="usr">Diem lan 1 </label>
                <input type="text" class="form-control" name="diemlan1">
                </div>
                <div class="form-group">
                <label for="usr">diem lan 2</label>
                <input type="text" class="form-control" name="diemlan2">
                </div>
                <div class="form-group">
                <label for="usr">hoc ki</label>
                <input type="text" class="form-control" name="hocki">
                </div>
                <div class="form-group">
                <label for="usr">ma sinh vien</label>
                <input type="text" class="form-control" name="msv">
                </div>
                <div class="form-group">
                <label for="usr">ma mon hoc</label>
                <input type="text" class="form-control" name="mamh">
                </div>
                
                <p><button>save</button></p>
                
                </form>
               
               
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
