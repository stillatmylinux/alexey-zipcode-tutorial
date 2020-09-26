<?php

namespace App\Http\Controllers\Deliveries;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Deliveries\ZipcodeService;

class DeliveryController extends Controller {

	private $zipcode_service;

	public function __construct() {
		$this->zipcode_service = new ZipcodeService();
	}

	public function index(Request $request) {
		return view('deliveries.index')->with([
			'zipcodes' => $this->zipcode_service->get_zipcodes(),
		]);
	}
}
