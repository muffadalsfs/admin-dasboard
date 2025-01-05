<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'first_name', 
        'last_name', 
        'middle_name', 
        'zip_code', 
        'date_of_birth', 
        'date_of_hire', 
        'country_id', 
        'state_id', 
        'city_id', 
        'department_id'
    ];

    // Define the relationship with Country
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    // Define the relationship with State
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    // Define the relationship with City
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    // Define the relationship with Department
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
 
}
