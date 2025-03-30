@extends('layout.master')

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
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection