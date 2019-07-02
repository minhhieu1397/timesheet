<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    use Notifiable;
    protected $table = 'timesheet';
     protected $fillable = [
        'name', 'details','submit_date','issue','intention','late_flg','start_time','end_time',
    ];

}
