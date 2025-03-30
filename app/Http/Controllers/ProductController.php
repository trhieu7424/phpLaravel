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
public function create(){
    return view('products.create');
}
public function createpost(Request $req){
    $data = [
        'proname' => $req->proname,
        'price' => $req->price,
        'cateid' => $req->cateid,
        'description' => $req->description,
      

    ];
    DB::table('products')->insert($data);
    return redirect()->route('proall');
    }
}
