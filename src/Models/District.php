<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class District extends Model
{
    use   HasFactory,  SoftDeletes;
    protected $table = "districts";
    protected $fillable = [
        "name",
        "local_name",
        "district_code",
        "country_id",
        "state_id",
        "state_code",
        "guid",
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($district) {
            if (empty($district->guid)) {
                $district->guid = Str::uuid()->toString();
            }
        });
    }

    public function subDistricts()
    {
        return $this->hasMany(SubDistrict::class);
    }
}
