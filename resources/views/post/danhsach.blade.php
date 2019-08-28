@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mon hoc</div>

                <div class="card-body">
                <form action="{{route('post.postupdate',$monhoc->_id)}}" method="post">
                @csrf
                <div class="form-group">
                <label for="usr">Tên môn học</label>
                <input type="text" class="form-control" name="tenmonhoc" value="{{$monhoc->tenmonhoc}}">
                </div>
                <div class="form-group">
                <label for="pwd">số tín chỉ:</label>
                <textarea name="sotinchi"  class="form-control" rows="10" >{{$monhoc->sotinchi}}</textarea>
                <p  align="center" ><button class="btn btn-primary" >save</button></p>
                
                </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
