<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name'];

    // Example of a relationship (if you have one with employees)
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }}
