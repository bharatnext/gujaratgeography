<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class Country extends Model
{
    use   HasFactory,  SoftDeletes;
    protected $table = "countries";
    protected $fillable = [
        "name",
        "local_name",
        "guid",
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($country) {
            if (empty($country->guid)) {
                $country->guid = Str::uuid()->toString();
            }
        });
    }
}
