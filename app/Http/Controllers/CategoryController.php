<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function all()
    {
        $list = DB::table('categories')
            ->select('cateid', 'catename')
            ->get();

        return view('categories.all', ['list' => $list]);
    }
    public function create()
    {
        return view('categories.create');
    }
    public function createpost(Request $req)
    {
        $data = [
            'catename' => $req->catename
        ];
        DB::table('categories')->insert($data);
        return redirect()->route('cateall');
    }

    public function edit($id)
    {
        $data = DB::table('categories')->where('cateid', $id)->first();
        return view('categories.edit', ['data' => $data]);
    }
    public function editpost(Request $req)
    {
        $data = [
            'catename' => $req->catename
        ];

        $affected = DB::table('categories')
            ->where('cateid', $req->cateid)
            ->update($data);

        $message = "Thực hiện update thành công";
        if ($affected == 0) {
            $message = "Thực hiện update thất bại";
        }

        return redirect()->route('cateedit', ['id' => $req->cateid])->with('message', $message);
    }
    public function del($id)
    {
        $affected = DB::table('categories')->where('cateid', $id)->delete();

        if ($affected > 0) {
            $message = "Xóa thành công mã loại: $id";
        } else {
            $message = "Xóa thất bại mã loại: $id";
        }

        return redirect()->route('cateall')->with('message', $message);
    }
}
