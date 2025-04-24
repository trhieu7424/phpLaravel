<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand; 

class BrandController extends Controller
{
    public function all()
    {
        $list = Brand::select('id', 'brandname')->get();
        return view('brands.all', ['list' => $list]);
    }
    public function all2()
    {
        $list = Brand::select('id', 'brandname')->get();
        return view('brands.all2', ['list' => $list]);
    }

    public function create()
    {
        return view('brands.create');
    }

    public function createpost(Request $req)
    {

    $req->validate([
        'brandname' => 'required|min:10|max:20|unique:brands,brandname',
        'description' => 'bail|nullable|regex:/^[^@#$]*$/'
    ], [
        'brandname.required' => 'Tên thương hiệu không được để trống',
        'brandname.min' => 'Tên thương hiệu phải có độ dài từ 10 đến 20 ký tự',
        'brandname.max' => 'Tên thương hiệu phải có độ dài từ 10 đến 20 ký tự',
        'brandname.unique' => 'Tên thương hiệu đã tồn tại',
        'description.regex' => 'Mô tả không được chứa ký tự @, #, $'
    ]);
    
    // Xử lý lưu dữ liệu
    $data = [
        'brandname' => $req->brandname,
        'description' => $req->description ??''
    ];

    Brand::create($data);
    
    return redirect()->route('brandall')->with('success', 'Thêm danh mục thành công!');
// }
//         $brand = new Brand();
//         $brand->brandname = $req->brandname;
//         $brand->save();

//         return redirect()->route('brandall');
    }

    public function edit($id)
    {
        $data = Brand::find($id);
        return view('brands.edit', ['data' => $data]);
    }

    public function editpost(Request $req)
    {
        $brand = Brand::find($req->brandid);
        $brand->brandname = $req->brandname;
        $affected = $brand->save();

        $message = "Thực hiện update thành công";
        if (!$affected) {
            $message = "Thực hiện update thất bại";
        }

        return redirect()->route('brandedit', ['id' => $req->brandid])->with('message', $message);
    }

    public function del($id)
    {
        $brand = Brand::find($id);
        if ($brand) {
            $brand->delete();
            $message = "Xóa thành công mã thương hiệu: $id";
        } else {
            $message = "Xóa thất bại mã thương hiệu: $id";
        }

        return redirect()->route('brandall')->with('message', $message);
    }
}