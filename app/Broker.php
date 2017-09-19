<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Broker extends Model
{
    protected $fillable = ["name", "platform"];

    public static function findByName($name)
    {
        return static::where('name', $name)->first();
    }


    public function sources()
    {
        return $this->hasMany(Source::class);
    }
}
