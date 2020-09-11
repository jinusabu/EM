<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leave extends Model
{
    protected $table = 'leaves';

    protected $fillable = [
        'user_id','reason','start_date','end_date','btw_date','status'
    ];
    protected $casts = [
        'stops' => 'array'
      ];
}
