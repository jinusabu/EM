<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addproject extends Model
{
    protected $table = 'assign_project';
    protected $fillable = [
        'user_id','prctname','psd','status'
    ];
}
