<?php

namespace Gujarat\LocationData\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;



class State extends Model
{
    use   HasFactory,  SoftDeletes;
    protected $table = "states";
    protected $fillable = [
        "name",
        "local_name",
        "guid",
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($state) {
            if (empty($state->guid)) {
                $state->guid = Str::uuid()->toString();
            }
        });
    }
}
