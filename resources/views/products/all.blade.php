@extends('layout.admin')

@section('content')

    <h1>Danh Sách Sản Phẩm</h1>
    <table class ="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Mô tả sản phẩm</th>
                <th>Loại Sản Phẩm</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->proname }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->cateid }}</td> 

                    <td class="text-center col" style="max-width: 50px;">
                        <a href="{{ route('proedit', ['id' => $product->id]) }}" class="btn btn-warning">Sửa</a>
                        <a href="{{ route('prodel', ['id' => $product->id]) }}" class="btn btn-danger">Xóa</a>
    
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" 
                        data-bs-info="{{ $product->id }} - {{ $product->proname }}"
                        data-bs-mer="{{ route('prodel', $product->id) }}">
                        Xóa 2
                    </button>
                    
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection