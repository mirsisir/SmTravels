<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    


    protected $table = 'contacts';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    protected $fillable = [
                  'name',
                  'email',
                  'message',
                  'phone'
              ];


    protected $dates = [];


    protected $casts = [];




}
