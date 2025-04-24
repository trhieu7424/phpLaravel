@extends('layout.admin')

@section('content')
<h3>Danh sách thương hiệu</h3>
<a href="{{ route('brandcreate') }}" class="btn btn-success">Thêm mới</a>
<table class="table table-bordered table-striped w-75">
    <thead>
        <tr>
            <th>STT</th>
            <th>Mã</th>
            <th>Tên thương hiệu</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($list as $item)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $item->id }}</td>
            <td>{{ $item->brandname }}</td>
            <td>{{ $item->show }}</td>
            <td class="text-center col" style="max-width: 80px;">
                <a href="{{ route('brandedit', ['id' => $item->id]) }}" class="btn btn-warning">Sửa</a>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" 
                        data-bs-target="#deleteModal"
                        data-id="{{ $item->id }}"
                        data-name="{{ $item->brandname }}"
                        data-href="{{ route('branddel', $item->id) }}">
                    Xóa
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Xác nhận xóa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Bạn có chắc chắn muốn xóa:</h5>
                    <p class="info"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <a href="#" class="btn btn-danger" id="btn-del">Xóa</a>
                </div>
            </div>
        </div>
    </div>
    

</div>
@endsection

@section('js')
<script src="{{ asset('js/admin.js') }}"></script>
@endsection