<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salary extends Model
{
    protected $table = 'salary';
    protected $fillable = [
        'user_id','depname','bsalary','bonous','pfund','total'
    ];

}
