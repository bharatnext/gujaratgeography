<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;


class Village extends Model
{
    use   HasFactory,  SoftDeletes;
    protected $table = "villages";
    protected $fillable = [
        "name",
        "local_name",
        "sub_district_code",
        "country_id",
        "state_id",
        "state_code",
        "district_id",
        "district_code",
        "sub_district_id",
        "guid",
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($village) {
            if (empty($village->guid)) {
                $village->guid = Str::uuid()->toString();
            }
        });
    }
}
