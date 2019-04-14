<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billet extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'created', 'updated', 'user_id', 'title', 'content','tags'    ];

}
 