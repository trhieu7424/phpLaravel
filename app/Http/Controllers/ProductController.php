<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function all()
    {
        $list = DB::table('products')
            ->join('categories', 'products.cateid', '=', 'categories.cateid')
            ->select('products.*', 'categories.catename as catename')
            ->get();

        return view('products.all', ['list' => $list]);
    }
    public function create()
    {
        return view('products.create');
    }
    public function createpost(Request $req)
    {
        $data = [
            'proname' => $req->proname,
            'price' => $req->price,
            'cateid' => $req->cateid,
            'description' => $req->description,


        ];
        DB::table('products')->insert($data);
        return redirect()->route('proall');
    }
    public function edit($id)
    {
        $data = DB::table('products')->where('id', $id)->first();
        return view('products.edit', ['data' => $data]);
    }
    public function editpost(Request $req)
    {
        $data = [
            'proname' => $req->proname,  
            'price' => $req->price,
            'cateid' => $req->cateid,    
            'description' => $req->description
        ];
    

        $affected = DB::table('products')
                ->where('id', $req->id)
                ->update($data);

        $message = "Thực hiện update thành công";
        if ($affected == 0) {
            $message = "Thực hiện update thất bại";
        }

        return redirect()->back()->with('message', $message);
    }
    public function del($id)
    {
        $affected = DB::table('products')->where('id', $id)->delete();

        if ($affected > 0) {
            $message = "Xóa thành công mã loại: $id";
        } else {
            $message = "Xóa thất bại mã loại: $id";
        }

        return redirect()->route('proall')->with('message', $message);
    }
}
