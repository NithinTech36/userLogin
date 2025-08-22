<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userwellnessinterest extends Model
{
    /** @use HasFactory<\Database\Factories\UserwellnessinterestFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id',
        'wellness_interest_id',
    ];
    protected $table = 'user_wellness_interests';
    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function wellnessInterest()
    {
        return $this->belongsTo(Userwellnessinterest::class);
    }

}
