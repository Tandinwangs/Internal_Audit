<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DispatchNumber extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'number'
    ];

    public function engagements() 
    {
        return $this->hasMany(Engagement::class, 'dispatch_id');
    }

}
