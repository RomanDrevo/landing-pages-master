<?php

namespace App\Liantech\Repositories;

use Carbon\Carbon;
use Liantech\Panda;
use Illuminate\Http\Request;

/**
* Panda Repository to wrap all panda integration
*/
class PandaRepository
{
	
	protected $partner_id;

	protected $secret_key;

	function __construct($partner_id, $secret_key)
	{
		$this->partner_id = $partner_id;
		$this->secret_key = $secret_key;
	}

	public function createUserFromRequest(Request $request, $source)
	{
		$panda = new Panda( $this->partner_id, $this->secret_key );

        //dd($request->all());


		$FullName = explode(" ", $request->name);

	    $firstName = $FullName[0];


        (isset($FullName[1])) ? $lastName = $FullName[1]: $lastName = 'empty';

		$data = [
			"firstName"			=>	$firstName,
			"lastName"			=>	$lastName,
			"email"				=>	$request->email,
			"birthDate"			=>	Carbon::now()->subYears(30)->format("d/m/Y"),
			"city"				=>	"",
			"address"			=>	"",
			"postalCode"		=>	"",
			"phoneCountryCode"	=>	$request->country_code,
			"phoneNumber"		=>	$request->phone,
			"password"			=>	$this->generatePassword(),
			"newsletter"		=>	"0",
			"referral"			=>	$this->buildReferral($request, $source)
		];



		return $panda->createCustomer($data);
	}

	public function generatePassword($length = 12, $special_chars = true)
	{
	    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	    $pass = array();
	    $alphaLength = strlen($alphabet) - 1;
	    for ($i = 0; $i < $length; $i++) {
	        $n = rand(0, $alphaLength);
	        $pass[] = $alphabet[$n];
	    }
	    return implode($pass);
	}


	private function buildReferral(Request $request, $source)
	{
		if( !$request->has("transaction_id") )
			return "";

		return "transaction_id=" . $request->transaction_id . "|offer_id=" . $request->offer_id . "|affiliate_id=" . $request->affiliate_id . "|subCampaign=" . $source->landing_page->name;
	}
}