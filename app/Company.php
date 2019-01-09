<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['id','name', 'price', 'fuel_type', 'transmission','gears','power_steering','power_windows','climate_control','air_conditioner','fuel_capacity','seating_capacity','airbag'];
}
