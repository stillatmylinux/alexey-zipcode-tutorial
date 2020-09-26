<?php

namespace App\Http\Controllers\Zipcodes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Deliveries\ZipcodeService;

class ZipcodeController extends Controller {

	private $zipcode_service;

	public function __construct() {
		$this->zipcode_service = new ZipcodeService();
	}

	public function index(Request $request) {
		return view('zipcodes.index');
	}

	public function new(Request $request) {
		return view('zipcodes.new');
	}

	public function create(Request $request) {

		$request->validate([
			'zipcode' => 'required|min:5|max:5',
			'state' => 'required|min:2|max:2',
		]);

		$zipcode = $request->input('zipcode');
		$state = $request->input('state');

		$this->zipcode_service->create_zipcode($zipcode, $state);

		return redirect()->route('zipcodes');
	}
}
