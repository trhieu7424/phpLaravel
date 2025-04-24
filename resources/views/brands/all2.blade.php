@extends('layout.admin')

@section('content')
    <h3>Danh sách thương hiệu</h3>
    <a href="{{ route('brandcreate') }}" class="btn btn-success">Thêm mới</a>
    
    <div id="accordion" class="w-75 m-3">
        @foreach ($list as $item)
        <div class="card">
            <div class="card-header">
                <a class="btn" data-bs-toggle="collapse" href="#collapse{{ $loop->index + 1 }}">
                    {{ $item->brandname }}
                </a>
            </div>
            
            <div id="collapse{{ $loop->index + 1 }}" class="collapse" data-bs-parent="#accordion">
                <div class="card-body">
                    @foreach ($item->products as $product)
                        <div>{{ $product->proname }}</div>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/admin.js') }}"></script>
@endsection