<?php

namespace App\Http\Controllers;

use App\Broker;
use Illuminate\Contracts\Logging\Log;
use Illuminate\Http\Request;
use App\Source;
use App\Lead;
use App\Liantech\Repositories\PandaRepository;
use App\Liantech\Repositories\SpotRepository;
use App\Http\Requests\LandingValidationRequest as LandingValidationRequest;
use League\Flysystem\Exception;

class SourceController extends Controller
{

    public function show(Request $request, $stoken)
    {
        $source = Source::where('stoken', $stoken)->first();
        if (is_null($source) || !$source->active) {
            return response('Unauthorized Request', 402);
        }

       if(session("redirect_success")){
           $redirect = parse_url(session("redirect_success"))['host'];
           return redirect('https://' . $redirect);
       }

		$request->session()->put([
			'transaction_id' 	=> $request->transaction_id,
			'offer_id' 			=> $request->offer_id,
			'affiliate_id' 		=> $request->affiliate_id,
		]);
        $platform = $source->broker->platform;
        $method = 'create' . ucfirst($platform);

        $step = ($request->has("step") && $request->step == 2) ? 2 : 1;

        if (method_exists($this, $method)) {
            return $this->$method($source, $step);
        }

        return response('Unauthorized Request', 402);
    }


    private function createSpot(Source $source, $step)
    {
        $settings = json_decode($source->landing_page->settings);
        $landing = $source->landing_page;

        if($source->landing_page->is_two_step && $step == 2){
            return view('landings.' . $source->landing_page->second_name, compact('landing', 'source', 'settings'));
        }

        return view('landings.' . $source->landing_page->name, compact('landing', 'source', 'settings'));
    }

    private function createPanda(Source $source, $step)
    {

        $settings = json_decode($source->landing_page->settings);
        $landing = $source->landing_page;

        if($source->landing_page->is_two_step && $step == 2){
            return view('landings.' . $source->landing_page->second_name, compact('landing', 'source', 'settings'));
        }

        return view('landings.' . $source->landing_page->name, compact('landing', 'source', 'settings'));
    }


    public function store(LandingValidationRequest $request, $stoken)
    {
        $source = Source::where('stoken', $stoken)->first();
        if (is_null($source)) {
            return response('Unauthorized Request', 402);
        }
        $method = 'store' . ucfirst($source->broker->platform);

        if (method_exists($this, $method)) {
            return $this->$method($request, $source);
        }

        return response('Unauthorized Request', 402);

    }


    private function storeSpot(Request $request, Source $source)
    {


        $broker = Broker::find($source->broker_id);

        $broker_upper = strtoupper(str_replace(' ', '_', $broker->name));
        $broker_lower = strtolower(str_replace(' ', '', $broker->name));
        $repo = new SpotRepository(env('SPOT_' . $broker_upper . '_USERNAME'), (env('SPOT_'. $broker_upper . '_PASSWORD')), $broker_lower);

        $request["password"] = $repo->generatePassword();

        $response = $repo->createUserFromRequest($request, $source);

        if (!$response["success"]) {
            return Controller::ajaxResult(FALSE, $response["data"]["errors"]["error"]);
        }

        //$this->postToHasOffers();
        $lead = Lead::findByEmail($request->email);
        if (!is_null($lead)) {
            $lead->setAsCustomer()->save();
        }

        $redirectUrl = $this->generateRedirectLink($source, $request);


        session()->put("redirect_success", $redirectUrl);

        return response()->json([
            "redirect"  =>  $redirectUrl
        ], 200);
    }

    private function storePanda(Request $request, Source $source)
    {

        $repo = new PandaRepository(14462, '2ad64c6c850276617d2a732cfc51e70f495843f2f6a5a06b0767c51a9d9dbac8');

        $response = $repo->createUserFromRequest($request, $source);


        if (!$response["success"]) {
            return Controller::ajaxResult(FALSE, [$response["data"]->error]);
        }

        //$this->postToHasOffers();
        $lead = Lead::findByEmail($request->email);

        if (!is_null($lead)) {
            $lead->setAsCustomer()->save();
        }

        return Controller::ajaxResult(TRUE, [], $source->redirect_url);
    }

    /**
     * This method will generate a string url based on the user parameters request
     * 
     * @param  Source  $source  
     * @param  Request $request 
     * @return String
     */
    public function generateRedirectLink(Source $source, Request $request)
    {
        $urlParts = explode("?", $source->redirect_url);

        if(isset($urlParts[1])){
            $fields = ["{name}", "{email}", "{password}", "{offer_id}", "{affiliate_id}", "{transaction_id}"];
            $values = [$request->name, $request->email, $request->password, session()->get('offer_id'), session()->get('affiliate_id'), session()->get('transaction_id')];
            $urlParts[1] = str_replace($fields, $values, $urlParts[1]);
        }
        $urlParts[1] = urldecode($urlParts[1]);


        $url = implode("?", $urlParts);

        return $url;
        //return urlencode($url);
    }


    public function postToHasOffers()
    {
        $offer_id = session()->get('offer_id');
        $transaction_id = session()->get('transaction_id');
        try {
            $client = new \GuzzleHttp\Client();
            $client->request('GET', "http://track.traffiroo.com/aff_lsr?offer_id=$offer_id&transaction_id=$transaction_id");
        } catch (Exception $e) {

        }

    }

    public function isHasOffers(Request $request)
    {
        return $request->has('transaction_id');
    }
}
