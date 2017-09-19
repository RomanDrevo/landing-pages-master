<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    protected $fillable = ["landing_page_id", "broker_id", "active", "redirect_url", "campaign_id"];

    public function landing_page()
    {
        return $this->belongsTo(LandingPage::class);
    }

    public function broker()
    {
        return $this->belongsTo(Broker::class);
    }
}


