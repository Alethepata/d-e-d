<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    public function race()
    {
        return $this->belongsTo(Race::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    protected $fillable = [
        'name',
        'height',
        'weight',
        'background',
        'image',
        'armor_class',
        'for',
        'des',
        'cos',
        'int',
        'sag',
        'car'
    ];

    //protected $guarded = ["id"]
}
