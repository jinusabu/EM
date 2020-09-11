<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = [ 'users'];
    protected $fillable = [
        'name','dep','email','phone','password',
    ];
}
