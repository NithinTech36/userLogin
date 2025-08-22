<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userwellnesspillars extends Model
{
    /** @use HasFactory<\Database\Factories\UserwellnesspillarsFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id',
        'wellness_pillar_id',
    ];
    protected $table = 'user_wellness_pillars';
    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function wellnessPillar()
    {
        return $this->belongsTo(Userwellnesspillars::class);
    }

}
