<?php

namespace App\Http\Controllers;

use App\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BiodataController extends Controller {

	public function index(){
		$listBiodata = Biodata::all();
		$data = [
			'listBiodata' => $listBiodata,
		];

		return view('biodata.index', $data);
	}

	public function create(){
		return view('biodata.create');
	}

	public function store(Request $requests){
		$this->validate($requests, [
			'name' => 'required',
			'address' => 'required',
			'email' => 'required'
		]);

		Biodata::create($requests->all());

		return redirect('/');
	}
}