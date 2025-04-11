@extends('layout.admin')

@section('content')
    <form action="{{ route('cateaddpost') }}" method="POST">
        @csrf
        <div class="mb-3 mt-3">
            <label for="catename" class="form-label">Tên loại sản phẩm</label>
            <input type="text" class="form-control" id="catename" placeholder="" name="catename">
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
@endsection