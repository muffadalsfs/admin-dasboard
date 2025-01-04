<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name']; // Make sure 'name' is mass assignable


// Define the relationship with the State model
public function state()
{
    return $this->HasMany(State::class);
}
public function employees()
{
    return $this ->HasMany(Employee::class);
} 
}