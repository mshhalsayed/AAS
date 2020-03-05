<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
    protected $fillable = [
        'Eid', 'dep', 'Pemail','officeNumber','user_id'
    ];
}