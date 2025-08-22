<?php

namespace App\Models\wellness;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Wellnessgroups extends Model
{
    /** @use HasFactory<\Database\Factories\WellnessgroupFactory> */
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    protected $table = 'wellness_group';
    protected $primaryKey = 'id';
    // Additional methods or relationships can be defined here
    function wellnessInterests()
    {
        return $this->hasMany(Wellnessinterests::class);
    }
  protected  function name(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($value),
            set: fn ($value) => strtolower($value)
        );
    }

}
