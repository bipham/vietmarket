@extends('admin.master')
@section('content')
<div class="col-lg-12 col-sm-12">
    <h1>Category <small>Thêm</small></h1>
</div>
<div class="col-lg-7 col-sm-12" style="padding-bottom:120px">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{!!route('admin.cate.getAdd')!!}" method="POST">
        <input type="hidden" name="_token" value="{!!csrf_token()!!}"/>
        <div class="form-group">
            <label>Category Chính</label>
            <select class="form-control">
                <option value="0">Chọn Category</option>
                <option value="1">Điện thoại</option>
                <option value="2">Máy tính</option>
                <option value="3">Sách</option>
            </select>
        </div>
        <div class="form-group">
            <label>Tên Category</label>
            <input class="form-control" name="txtCateName" placeholder="Xin nhập tên Category" />
        </div>
        <div class="form-group">
            <label>Thứ tự Category</label>
            <input class="form-control" name="txtOrder" placeholder="Xin nhập thứ tự Category" />
        </div>
        <div class="form-group">
            <label>Trạng thái Category</label>
            <label class="radio-inline">
                <input name="rdoStatus" value="1" checked="" type="radio">Hiện
            </label>
            <label class="radio-inline">
                <input name="rdoStatus" value="2" type="radio">Ẩn
            </label>
        </div>
        <button type="submit" class="btn btn-default">Thêm Category</button>
        <button type="reset" class="btn btn-default">Reset</button>
    <form>
</div>
@endsection()