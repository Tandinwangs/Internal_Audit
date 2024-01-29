<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    protected $fillable = [
        'engagement_id',
        'title',
        'description',
        'remarks',
        'risk_type',
        'issue_type',
        'status'
    ];

    
    public function engagement()
    {
        return $this->belongsTo(Engagement::class, 'engagement_id');
    }

}
