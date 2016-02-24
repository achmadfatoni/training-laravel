<?php

namespace App\Http\Controllers;

use App\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller {

	public function index(){
		return 'halo';
	}

	public function create(){
		return view('biodata.create');
	}

	public function store(Request $requests){
		Biodata::create($requests->all());

		return redirect()->back();
	}
}