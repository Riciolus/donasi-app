<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    use HasFactory;

    // Specify the table name (optional if it follows naming conventions)
    protected $table = 'funds';

    // Define which columns are mass assignable
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'goal_amount',
        'collected_amount',
        'image_url',
        'category'
    ];

    // Define relationships (if any)

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function contributions()
{
    return $this->hasMany(Contribution::class);
}

    
}