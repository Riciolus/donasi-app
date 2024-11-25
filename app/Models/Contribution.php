<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    use HasFactory;

    // Specify the table name (optional if it follows the convention 'contributions')
    protected $table = 'contributions';

    // Define which columns are mass assignable
    protected $fillable = [
        'fund_id',        // The ID of the related fund
        'user_id',        // The ID of the user who contributed
        'amount',         // Contribution amount
        'message',        // Optional message from the contributor
        'contribution_date', // Date of the contribution
    ];

    // Define the relationship with the Fund model (many contributions belong to one fund)
    public function fund()
    {
        return $this->belongsTo(Fund::class);
    }

    // Define the relationship with the User model (many contributions made by one user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}