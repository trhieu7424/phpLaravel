@extends('layout.admin')

@section('content')

    <form action="{{ route('proeditpost') }}" class="w-50 mx-auto shadow p-3" method="POST">
        @csrf
        <h1>Sửa sản phẩm</h1>
        <input type="hidden" name="id" value="{{ $data->id }}">

        <div class="form-group">
            <label for="proname">Tên sản phẩm</label>
            <input type="text" name="proname" id="proname" class="form-control" value="{{ $data->proname }}" >
        </div>
        <div class="mb-3">
            <label for="cateid" class="form-label">Mã danh mục</label>
            <select class="form-select" id="cateid" name="cateid">
                <option value="1">Loại 1</option>
                <option value="2">Loại 2</option>
                <option value="3">Loại 3</option>
            </select>
        </div>
        <div class="form-group">
            <label for="price">Giá</label>
            <input type="text" name="price" id="price" class="form-control" value="{{ $data->price }}">
        </div>
        <div class="form-group">
            <label for="description">Mô tả</label>
            <input type="text" name="description" id="description" class="form-control" value="{{ $data->description }}">
        </div>
        <a href="{{ route('proall') }}" class="btn btn-primary">←</a>
        <input type="submit" value="Lưu" class="btn btn-warning m-2">
        @if (Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif
    </form>
@endsection