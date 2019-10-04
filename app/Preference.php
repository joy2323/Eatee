<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
   
    protected $guarded = ['id'];
    protected $table = 'preferences';
    protected $fillable = ['user_id', 'date', 'duration', 'budget', 'allergies', 'meat_status', 'fish_status'];

}
