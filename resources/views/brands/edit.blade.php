@extends('layout.admin')

@section('content')
    <form action="{{ route('brandeditpost') }}" class="w-50 mx-auto shadow p-3" method="POST">
        @csrf
        <h1>Sửa thương hiệu</h1>
        
        <input type="hidden" name="brandid" value="{{ $brand->id }}">
        
        <div class="form-group">
            <label for="brandname">Tên thương hiệu</label>
            <input type="text" name="brandname" id="brandname" class="form-control" 
                   value="{{ $brand->brandname }}" required>
        </div>
        
        <div class="form-group">
            <label for="description">Mô tả</label>
            <textarea name="description" id="description" class="form-control" 
                      rows="3">{{ $brand->description }}</textarea>
        </div>
        
        <div class="form-group form-check">
            <input type="checkbox" name="show" id="show" class="form-check-input" 
                   value="1" {{ $brand->show ? 'checked' : '' }}>
            <label class="form-check-label" for="show">Hiển thị</label>
        </div>
        
        <div class="d-flex justify-content-between">
            <a href="{{ route('brandall') }}" class="btn btn-primary">← Quay lại</a>
            <button type="submit" class="btn btn-warning">Cập nhật</button>
        </div>
        
        @if (Session::has('message'))
            <div class="alert alert-info mt-3">
                {{ Session::get('message') }}
            </div>
        @endif
    </form>
@endsection