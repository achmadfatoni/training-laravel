<?php 

namespace App\Http\Controllers;

class FakultasController extends Controller
{
	public function index(){
		$name = 'Achmad Fatoni';
		$data = [
			'name' => $name
		];
		return view('fakultas', $data);
	}
}

