<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engagement extends Model
{
    use HasFactory;

    protected $fillable = [
        'dispatch_id',
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

    public function dispatch()
    {
        return $this->belongsTo(DispatchNumber::class, 'dispatch_id');
    }


}
