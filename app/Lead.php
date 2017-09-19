<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        "name",
        "email",
        "phone",
        "transaction_id",
        "offer_id",
        "affiliate_id",
        "platform_name",
        "extra_data",
        "landing_page_id"
    ];


    public function landingPage()
    {
        return $this->belongsTo(LandingPage::class);
    }

    public static function findByEmail($email)
    {
        return static::where('email', $email)->first();
    }

    public function setAsCustomer()
    {
        $this->is_lead = true;

        return $this;
    }

}
