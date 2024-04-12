<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;
use App\Models\User;

class Reward extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'description',
        'reward_image',
        'coins',

    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
