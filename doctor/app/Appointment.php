<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table ="Appointment";
    protected $fillable = ['name', 'phone', 'email', 'time_to', 'time_from', 'approved', 'status', 'date'];
}
