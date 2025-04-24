@extends('layout.admin')

@section('content')
<div class="w-50 mx-auto shadow p-3">
    <h1>Thêm loại sản phẩm (Eloquent ORM)</h1>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('cateaddpost2') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="catename">Tên danh mục</label>
            <input type="text" name="catename" id="catename" class="form-control" value="{{ old('catename') }}">

        @if($errors->has('catename'))
        <p class="text-danger">{{ $errors->first('catename') }}</p>
    @endif
        </div>
        
        <div class="form-group">
            <label for="description">Mô tả</label>
            <textarea name="description" id="description" class="form-control" rows="5"></textarea>

            @if($errors->has('description'))
            <p class="text-danger">{{ $errors->first('description') }}</p>
        @endif
        </div>
        
        <button type="submit" class="btn btn-primary">Thêm mới</button>
    </form>
</div>
@endsection