@extends('layout.admin')

@section('content')
<div class="container-fluid">
    <h3>Danh sách danh mục sản phẩm (Eloquent ORM)</h3>
    <a href="{{ route('cateadd2') }}" class="btn btn-success mb-3">Thêm mới</a>

    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>STT</th>
                            <th>Tên danh mục</th>
                            <th>Mô tả</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $item)
                        <tr>
                            <td>{{ $loop-> index + 1 }}</td>
                            <td>{{ $item->cateid }}</td>
                            <td>{{ $item->catename }}</td>
                            <td>{{ $item->description ?? 'Không có mô tả' }}</td>
                          <td class ="text-center col" style="max-width:80px;">  
                            <a href="{{ route('cateedit2',['id'=>$item->cateid])}}" class ="btn btn-warning btn-sm">Sửa</a>
                            <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal"
                            data-info="{{$item->catename}}" data-href="{{route('catedel2',$item->cateid)}}">Xóa</a>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Xác nhận Xóa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5>Bạn có đồng ý xóa loại sản phẩm: </h5>
                <p class="info"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                <a href="{{route('catedel2',$item->cateid)}}" class="btn btn-primary" id="btn-del">Đồng ý</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('js/admin.js') }}"></script>
{{-- <script>
  
    $(document).ready(function() {
        $('.delete-btn').click(function(e) {
            if(!confirm('Bạn có chắc chắn muốn xóa danh mục này?')) {
                e.preventDefault();
            }
        });
    });
</script> --}}
@endsection