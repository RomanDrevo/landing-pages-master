<?php
namespace App\Liantech\Repositories;

use Carbon\Carbon;
use Liantech\Spot;
use Illuminate\Http\Request;
use App\Liantech\Classes\IP_Inspector;

/**
 * Spot Repository to wrap all panda integration
 */

class SpotRepository
{
    protected $broker;

    protected $username;

    protected $password;

    function __construct($username, $password, $broker)
    {
        $this->username = $username;
        $this->password = $password;
        $this->broker = $broker;
    }







    public function createUserFromRequest(Request $request, $source)
    {




        $ipInspector = new IP_Inspector();
        $countryForSpotOption = $ipInspector->getCountryAlpha2($request->country_code);

//        dd($countryForSpotOption);

        $spot = new Spot( $this->username, $this->password, $this->broker );
        $FullName = explode(" ", $request->name);
        $firstName = $FullName[0];
        (isset($FullName[1])) ? $lastName = $FullName[1]: $lastName = 'empty';
        $transaction_id = session()->get('transaction_id');
        $data = [
            "FirstName"			=>	$firstName,
            "LastName"			=>	$lastName,
            "email"				=>	$request->email,
            "Phone"		        =>	$request->phone,
            "password"			=>	$request->password,
            "Country"			=>	$countryForSpotOption,
            "campaignId"		=>	$source->campaign_id,
            "subCampaign"       =>  $source->landing_page->title,
            "currency"          =>  "USD",
            "a_aid"              =>  $transaction_id,
            "birthday"			=>	"1980-07-21"
        ];
        return $spot->callWithModuleAndCommand("Customer", "add", $data);
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

}