@extends('layout.admin')

@section('content')

    <form action="{{ route('cateeditpost') }}" class="w-50 mx-auto shadow p-3" method="POST">
        @csrf
        <h1>Sửa sản phẩm</h1>
        <div class="form-group">
            <label for="cateid">Mã danh mục</label>
            <input type="text" name="cateid" id="cateid" class="form-control" value="{{ $data->cateid }}" readonly>
        </div>
        <div class="form-group">
            <label for="catename">Tên danh mục</label>
            <input type="text" name="catename" id="catename" class="form-control" value="{{ $data->catename }}">
        </div>
        <a href="{{ route('cateall') }}" class="btn btn-primary">←</a>
        <input type="submit" value="Lưu" class="btn btn-warning m-2">
        @if (Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif
    </form>
@endsection