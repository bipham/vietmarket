@extends('admin.master')
@section('controller')Category
@endsection()
@section('action')Danh sách
@endsection()
@section('content')
<!-- /.col-lg-12 -->
<table class="table table-hover" id="dataTables">
    <thead class="thead-inverse">
        <tr align="center">
            <th>ID</th>
            <th>Name</th>
            <th>Category Parent</th>
            <th>Status</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>1</th>
            <td>Máy tính</td>
            <td>None</td>
            <td>Hiện</td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
        </tr>
        <tr>
            <th>2</th>
            <td>Điện thoại</td>
            <td>None</td>
            <td>Ẩn</td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
        </tr>
    </tbody>
</table>
@endsection()