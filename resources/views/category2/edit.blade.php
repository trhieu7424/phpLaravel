@extends('layout.admin')

@section('content')
<form action="{{ route('cateeditpost2') }}" class="w-50 mx-auto shadow p-3" method="POST">
    @csrf
    <h1>Sửa danh mục (Eloquent ORM)</h1>
    
    <div class="form-group">
        <label for="cateid">Mã danh mục</label>
        <input type="text" name="cateid" id="cateid" class="form-control" value="{{ $data->cateid }}" readonly>
    </div>
    
    <div class="form-group">
        <label for="catename">Tên danh mục</label>
        <input type="text" name="catename" id="catename" class="form-control" value="{{ $data->catename }}">
    </div>
    
    <div class="form-group">
        <label for="description">Mô tả</label>
        <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{ $data->description }}</textarea>
    </div>
    
    <a href="{{ route('cateall2') }}" class="btn btn-primary">←</a>
    <input type="submit" value="Lưu" class="btn btn-warning m-2">

    @if (Session::has('mess'))
        <p class="alert alert-info">{{ Session::get('mess') }}</p>
    @endif
</form>
@endsection