@extends('layout.admin')

@section('content')
    <form action="{{ route('brandcreatepost') }}" method="POST">
        @csrf
        <div class="mb-3 mt-3">
            <label for="brandname" class="form-label">Tên thương hiệu</label>
            <input type="text" class="form-control" id="brandname" placeholder="" name="brandname" value="{{ old('brandname') }}">
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
@endsection