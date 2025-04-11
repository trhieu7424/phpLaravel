@extends ('layout.admin')

@section('content')
<form action="{{ route('proaddpost') }}" method="POST">
@csrf
<div class="mb-3 mt-3">
    <label for="proname" class="form-label">Tên sản phẩm</label>
    <input type="text" class="form-control" id="proname" placeholder="" name="proname">
</div>
<div class="mb-3">
    <label for="price" class="form-label">Giá sản phẩm</label>
    <input type="text" class="form-control" id="price" placeholder="" name="price">
</div>
<div class="mb-3">
    <label for="description" class="form-label">Mô tả sản phẩm</label>
    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
</div>

<div class="mb-3">
    <label for="cateid" class="form-label">Loại sản phẩm</label>
    <select class="form-select" id="cateid" name="cateid">
        <option value="1">Loại 1</option>
        <option value="2">Loại 2</option>
        <option value="3">Loại 3</option>
    </select>
</div>
<button type="submit" class="btn btn-primary">Thêm</button>

</form>

@endsection