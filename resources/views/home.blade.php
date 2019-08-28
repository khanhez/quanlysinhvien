@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Tên môn học</th>
                                <th>Số tín chỉ</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody><?php $STT =1; ?>
                            @foreach($monhoc as $mh)
                            <tr class="odd gradeX" align="center">
                                <td>{{$STT}}</td>
                                <td>{{$mh->tenmonhoc}}</td>
                                <td>{{$mh->sotinchi}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{ route('post.delete',$mh->_id)}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('post.getupdate',$mh->_id) }}">Edit</a></td>
                            </tr>
                            <?php $STT++; ?>
                            @endforeach
                            
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                      
                            <tr align="center">
                                <th>STT</th>
                                <th>Diem lan 1</th>
                                <th>Diem lan 2</th>
                                <th>Hoc ki</th>
                                <th>Ma sinh vien</th>
                                <th>Ma mon hoc</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                           
                        </thead>
                        <tbody><?php $STT=1 ;?>
                        @foreach($diem as $d)
                            <tr class="odd gradeX" align="center">
                                <td>{{$STT}}</td>
                                <td>{{$d->diemlan1}}</td>
                                <td>{{$d->diemlan2}}</td>
                                <td>{{$d->hocki}}</td>
                                <td>{{$d->msv}}</td>
                                <td>{{$d->mamh}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route ('diem.delete',$d->_id)}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('diem.getupdate',$d->_id) }}">Edit</a></td>
                            </tr>
                            <?php $STT++ ;?>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
