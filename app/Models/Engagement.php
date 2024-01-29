<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Engagement extends Model
{
    use HasFactory;

    protected $fillable = [
        'dispatch_number',
        'address',
        'unit',
        'verticles',
        'letter',
        'memo',
        'pstart_date',
        'pend_date',
        'estart_date',
        'eend_date'
    ];

    public function issues()
    {
        return $this->hasMany(Issue::class, 'engagement_id');
    }


}
