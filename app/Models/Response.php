<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $fillable = [
        'issue_id',
        'meeting_type',
        'meeting_date',
        'meeting_decision',
        'status'
    ];

    public function response()
    {
        return $this->belongsTo(Issue::class, 'issue_id');
    }
}
