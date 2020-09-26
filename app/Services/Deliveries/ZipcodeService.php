<?php

namespace App\Services\Deliveries;

use App\Models\Zipcode;

class ZipcodeService {

	public function get_zipcodes($state_abbr = null) {

		if($state_abbr) {
			return Zipcode::where([
				['state', '=', $state_abbr],
			])->pluck('zipcode')->toArray();
		} else {
			$zipcodes = Zipcode::all()->pluck('zipcode');
		}

		return $this->more_zipcodes($zipcodes->toArray());
	}

	public function more_zipcodes($zipcodes) {
		return array_merge($zipcodes, [55833, 44442]);
	}

	public function create_zipcode($zipcode, $state_abbr) {
		Zipcode::create([
			'zipcode' => $zipcode,
			'state' => $state_abbr,
		]);
	}
}