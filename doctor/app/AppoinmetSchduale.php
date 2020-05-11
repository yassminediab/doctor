<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppoinmetSchduale extends Model
{
    protected $fillable = ['day_number', 'time_from','time_to','duration','is_weekend'];

    public const WORKINGDAY = [0 => 'sunday', 1 => 'monday', 2 => 'tuesday', 3 => 'wednesday', 4 => 'thursday', 5 => 'friday', 6 => 'saturday'];
    public const WORKINGDAYAR = [0 => 'الأحد', 1 => 'ألأثنين', 2 => 'ألثلاثاء', 3 => 'الإربعاء', 4 => 'الخميس', 5 => 'الجمعه', 6 => 'السبت'];
}
