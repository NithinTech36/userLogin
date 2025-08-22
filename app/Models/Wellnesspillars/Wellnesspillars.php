<?php

namespace App\Models\wellnesspillars;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Wellnesspillars extends Model
{
    /** @use HasFactory<\Database\Factories\WellnesspillarsFactory> */
    use HasFactory;
   protected $fillable = [
       'name',
   ];
   protected $table = 'wellness_pillars';

   protected function name(): Attribute
   {
       return Attribute::make(
           get: fn ($value) => ucfirst($value),
           set: fn ($value) => strtolower($value)
       );
   }
}
