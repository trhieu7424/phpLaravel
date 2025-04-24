<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class Category2Controller extends Controller
{
    // Hiển thị tất cả danh mục
    public function all()
    {
        $data = Category::orderBy('catename')->get();
        return view('category2.all', ['list' => $data]);
    }

    // Hiển thị form thêm danh mục
    public function add()
    {
        return view('category2.add');
    }

    // Xử lý thêm danh mục
    public function addPost(Request $req)
    {
        $req->validate([
            'catename' => 'required|min:5|max:20',
            'description' => 'bail|nullable|min:10|max:100|regex:/^[^@#$*]*$/',
        ], [
            'catename.required' => 'Tên loại sản phẩm không được để trống',
            'catename.min' => 'Tên loại sản phẩm phải có độ dài từ 5 đến 20 ký tự',
            'catename.max' => 'Tên loại sản phẩm phải có độ dài từ 5 đến 20 ký tự',
            'description.min' => 'Mô tả phải có độ dài từ 10 đến 100 ký tự',
            'description.max' => 'Mô tả phải có độ dài từ 10 đến 100 ký tự',
            'description.regex' => 'Mô tả không được bắt đầu bằng',
        ]);
    
        $data = [
            'catename' => $req->catename,
            'description' => $req->description ??''
        ];
    
        Category::create($data);
        
        return redirect()->route('cateall2')->with('success', 'Thêm danh mục thành công!');
    }

    // Hiển thị form sửa danh mục
    public function edit($id)
    {
        $data = Category::findOrFail($id);
        return view('category2.edit', ['data' => $data]);
    }

    // Xử lý cập nhật danh mục
    public function editPost(Request $request)
    {
        $id = $request->route('id');
        $request->validate([
            'catename' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'catename' => $request->catename,
            'description' => $request->description
        ]);

        return redirect()->route('cateall2')->with('success', 'Cập nhật danh mục thành công!');
    }

    // Xóa danh mục
    public function del($id)
    {
        $mess =null;

        try{
            $affect = Category::where('cateid', $id)->delete();
            $mess = "Xóa thành công mã loại: $id";

            if($affect ==0) $mess = "Xóa thất bại mã loại: $id";

        }catch(\Throwable $th){
            $mess = "Có lỗi. Vui lòng thử lại".$th->getMessage();
        }
        return redirect()->route('cateall2')->with('mess', $mess);
    }
}