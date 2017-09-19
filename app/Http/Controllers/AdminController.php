<?php

namespace App\Http\Controllers;

use App\LandingPage;
use App\Broker;
use App\Source;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function indexLanding()
    {

        $landingPages = LandingPage::latest()->get();

        return view('admin.landings', compact('landingPages'));
    }


    public function indexSource()
    {
        $sources = Source::latest()->get();
        return view('admin.sources', compact('sources'));
    }

    public function storeLanding(Request $request)
    {
        $isTwoStep = $request->is_two_step == "on" ? true : false;
        $landing = LandingPage::forceCreate([
            "name" => $request->name,
            "title" => $request->title,
            "is_two_step" => $isTwoStep,
            "second_name" => $request->second_name,
            "settings" => json_encode([
                "use_email_verification" => $request->has('use_email_verification'),
                "use_phone_verification" => $request->has('use_phone_verification'),
                "use_sms_verification" => $request->has('use_sms_verification')
            ])

        ]);

        return redirect('admin/landings');
    }


    public function createLanding()
    {
        return view('admin.createLanding');
    }

    public function createSource()
    {
        $landings = LandingPage::latest()->get();
        $brokers = Broker::latest()->get();
        $stoken = $this->generateUniqueSourceToken();
        return view('admin.createSource', compact('landings', 'brokers', 'stoken'));
    }

    public function generateUniqueSourceToken()
    {
        do {
            $random = str_random(10);
            $source = Source::where("stoken", $random)->first();
        } while (!is_null($source));

        return $random;
    }


    public function editSource($id)
    {
        $source = Source::find($id);

        $landings = LandingPage::latest()->get();
        $brokers = Broker::latest()->get();

        return view('admin.editSource', compact('source', 'landings', 'brokers'));
    }


    public function editLanding($name)
    {
        $landing = LandingPage::findByName($name);
        return view('admin.editLanding', compact('landing'));
    }

    public function updateLanding(Request $request, $name)
    {
        $landing = LandingPage::findByName($name);

        if (is_null($landing))
            return redirect()->back()->with("error", "Could not find the landing page");
        $isTwoStep = $request->is_two_step == "on" ? true : false;
        $landing->update(
            ["name" => $request->name,
                "title" => $request->title,
                "is_two_step" => $isTwoStep,
                "second_name" => $request->second_name ? $request->second_name : null,
                "settings" => json_encode([
                    "use_email_verification" => $request->has('use_email_verification'),
                    "use_phone_verification" => $request->has('use_phone_verification'),
                    "use_sms_verification" => $request->has('use_sms_verification')
                ])
            ]
        );

        return redirect('admin/landings');

    }


    public function storeSource(Request $request)
    {

        if ($this->updateOrCreateSource($request)) {
            return redirect('admin/sources');
        }
        return redirect()->back()->with("error", "Could not find the source");
    }


    public function updateSource(Request $request, $id)
    {
        if ($this->updateOrCreateSource($request, $id)) {
            return redirect('admin/sources');
        }
        return redirect()->back()->with("error", "Could not find the source");


    }


    public function updateOrCreateSource($request, $id = null)
    {
        $source = Source::find($id);
        if (!$source) {
            $source = new Source();
        }

        $landing = LandingPage::findByName($request->landing_page_name);
        $broker = Broker::findByName($request->broker_name);
        $source->setRawAttributes(array(
            'landing_page_id' => $landing->id,
            'broker_id' => $broker->id,
            'campaign_id' => intval($request->campaign_id),
            'redirect_url' => $request->redirect_url,
            'stoken' => $request->stoken
        ));

        return $source->save();

    }

    public function toggleActiveStatus(Request $request, $id)
    {
        $source = Source::find($id);

        $source->active = !$source->active;
        $source->save();

        return redirect()->back();
    }

    public function toggleLogoDisplay(Request $request, $id)
    {
        $source = Source::find($id);
        $source->display_logo = !$source->display_logo;
        $source->save();
        return redirect()->back();
    }


    public function destroyLanding($name)
    {
        $landing = LandingPage::findByName($name);
        $landing->delete();
        return redirect('admin/landings');
    }


    public function destroySource($id)
    {
        $source = Source::find($id);
        $source->delete();
        return redirect()->back();
    }
}
