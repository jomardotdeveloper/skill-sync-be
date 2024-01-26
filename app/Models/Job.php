<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'location',
        'salary',
        'requirements',
        'user_id',
    ];

    // ... (any other model properties, relationships, etc.)

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
