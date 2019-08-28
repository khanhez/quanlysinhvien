@extends('admin.layout.index')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Môn học
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/monhoc/them" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Ten mon hoc</label>
                                <input class="form-control" name="txtCateName" placeholder="Môn học" />
                            </div>
                            <div class="form-group">
                                <label>So tin chi</label>
                                <input class="form-control" name="txtOrder" placeholder="Tin chỉ" />
                            </div>
                           
                            <button type="submit" class="btn btn-default">Category Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

 @stop   