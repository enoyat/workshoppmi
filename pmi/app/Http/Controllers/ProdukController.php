<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
class ProdukController extends Controller
{
    public function index(){
        $data['produk'] = Produk::all();
        return view('produk.index',$data);
    }
    //
}
