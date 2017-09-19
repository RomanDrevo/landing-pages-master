<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{

    protected $fillable = ["name", "title", "is_two_step", "second_name"];

    public static function findByName($name)
    {
        return static::where('name', $name)->first();
    }

    public function leads()
    {
        return $this->hasMany(Lead::class);
    }

    public function sources()
    {
        return $this->hasMany(Source::class);
    }

}
