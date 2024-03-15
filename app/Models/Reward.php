<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;

class Reward extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'description',
        'reward_image',

    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
