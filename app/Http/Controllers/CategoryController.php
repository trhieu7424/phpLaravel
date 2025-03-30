<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function all()
    {
        $list= DB::table('categories')
        ->select('cateid','catename')
        ->get();

        return view('categories.all',['list'=>$list]);
    }
    public function create()
    {
        return view('categories.create');
    }
     public function createpost(Request $req){
    $data = [
        'catename' => $req->catename
    ];
    DB::table('categories')->insert($data);
    return redirect()->route('cateall');
    }
}
