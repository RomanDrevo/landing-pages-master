<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrackingValidationRequest;
use App\LandingPage;
use App\Source;
use Illuminate\Http\Request;
use App\Lead;
use Illuminate\Support\Facades\Validator;

class TrackingController extends Controller
{


    public function storeLead(TrackingValidationRequest $request)
    {

        $source = Source::where("stoken", $request->source_token)->first();

        $lead = Lead::findByEmail($request->email);
        if (!$lead) {
            $lead = new Lead();
        }
        $lead->setRawAttributes(array(
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
            'landing_page_id' => $source->landing_page_id,
            'platform_name' => $source->broker->platfrom,
            'offer_id' => session()->get('offer_id'),
            'transaction_id' => session()->get('transaction_id'),
            'affiliate_id' => session()->get('affiliate_id')
        ));
        $result = $lead->save();
        return Controller::ajaxResult($result);
    }


}
