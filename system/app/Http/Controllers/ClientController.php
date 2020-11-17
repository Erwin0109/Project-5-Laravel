<?php 

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Produk;

class ClientController extends Controller{

	function showHome(){
		$data['list_produk'] = Produk::all();
		$data['list_kategori'] = Kategori::all();
		return view('client.home', $data);
	}
}