@extends('layout.admin')

@section('content')
    <h3>Danh sách loại sản phẩm</h3>

    <a href="{{ route('cateadd') }}" class="btn btn-success">Thêm loại sản phẩm</a>

    @if (Session::has('message'))
        <div class="alert alert-info mt-3">
            {{ Session::get('message') }}
        </div>
    @endif

<div class="table-overflow">
    <table class="table table-striped table-bordered table-hover w-75 m-2">
        <thead>
        </thead>
        <tbody>
            @foreach ($list as $item)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $item->cateid }}</td>
                <td>{{ $item->catename }}</td>
                <td class="text-center col" style="max-width: 50px;">
                    <a href="{{ route('cateedit', ['id' => $item->cateid]) }}" class="btn btn-warning">Sửa</a>
                    <a href="{{ route('catedel', ['id' => $item->cateid]) }}" class="btn btn-danger">Xóa</a>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal" 
                    data-bs-info="{{ $item->cateid }} - {{ $item->catename }}"
                    data-bs-mer="{{ route('catedel', $item->cateid) }}">
                    Xóa 2
                </button>
                
                </td>
            
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xác nhận xóa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5>Bạn có đồng ý xóa loại sản phẩm?</h5>
                <input type="hidden" name="cateid" id="cateid">
                <p class="category-info"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <a href="#" class="btn btn-primary" id="btn-del">Xóa</a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{asset('js/admin.js   ')}}"></script>
@endsection