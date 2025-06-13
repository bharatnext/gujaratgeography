<?php

namespace Gujarat\LocationData\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class SubDistrict extends Model
{
    use   HasFactory,  SoftDeletes;
    protected $table = "sub_districts";
    protected $fillable = [
        "name",
        "local_name",
        "sub_district_code",
        "country_id",
        "state_id",
        "state_code",
        "district_id",
        "district_code",
        "guid",
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($subdistrict) {
            if (empty($subdistrict->guid)) {
                $subdistrict->guid = Str::uuid()->toString();
            }
        });
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function villages()
    {
        return $this->hasMany(Village::class);
    }
}
