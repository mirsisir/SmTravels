<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    


    protected $table = 'packages';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    protected $fillable = [
                  'title',
                  'image',
                  'discription',
                  'notes',
                  'price',
                  'time',
                  'category_id'
              ];


    protected $dates = [];


    protected $casts = [];

    /**
     * Get the category for this model.
     *
     * @return App\Models\Category
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }



            public function img()
        {
            return asset('storage/'.$this->image);
        }
}
