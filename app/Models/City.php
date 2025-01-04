<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name', 'state_id'];

    // Define the relationship with the State model
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function employees(): hasmany 
    {
        return $this ->HasMany(Employess::class);
    } 
}
