<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\LandingPage;
use App\Liantech\Classes\IP_Inspector;
use App\Liantech\Repositories\PandaRepository;
use App\Liantech\Repositories\SpotRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Kickbox\Client;
use GuzzleHttp\Client as GuzzleHttp;
use App\Http\Requests\LandingValidationRequest as LandingValidationRequest;
class LandingController extends Controller
{
    


	public function getIp(Request $request)
	{
		$ipInspector = new IP_Inspector();
	    $countryObj = $ipInspector->getLocationArray();

	    if( !is_null($countryObj) )
	        return $countryObj["country_code"];
	    
	    return "RO";
	}


	public function validateEmail()
	{
		$email = request('email');

		if(!$email)
			return "error";

	    $client   = new Client( env('KICKBOX_APP_ID') );
	    $kickbox  = $client->kickbox();

	    try {
	        $response = $kickbox->verify($email);
	    }
	    catch (Exception $e) {
	        return "error";
	    }  

	    if( $response->body["result"] != "deliverable"){
	        return "error";
	    }

	    return "ok";

	}

}
