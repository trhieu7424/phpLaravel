@extends('layout.master')

@section('content')
<table class ="table table-bordered">
    <thead>
        <tr>
            <th>Mã </th>
            <th>Tên Loại </th>
        </tr>
    </thead>
    <tbody>
        @foreach($list as $item)
            <tr>
                <td>{{ $item->cateid }}</td>
                <td>{{ $item->catename }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection