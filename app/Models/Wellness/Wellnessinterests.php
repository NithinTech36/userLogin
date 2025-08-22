<?php

namespace App\Models\wellness;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Wellnessinterests extends Model
{
    /** @use HasFactory<\Database\Factories\WellnessinterestsFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'wellness_group_id'
    ];
    protected $table = 'wellness_interests';
    // Additional methods or relationships can be defined here
    function wellnessGroup()
    {
        return $this->belongsTo(Wellnessgroups::class);
    }
      protected  function name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($value),
            set: fn ($value) => strtolower($value)
        );
    }

}
