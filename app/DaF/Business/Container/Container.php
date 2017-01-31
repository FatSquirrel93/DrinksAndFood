<?php

namespace App\DaF\Business\Container;

use Illuminate\Database\Eloquent\Model;

class Container extends Model
{

    protected $table = 'container';

    public function drink()
    {
        // many containers have one drink
        return $this->belongsTo('App\DaF\Business\Drink\Drink\Drink');
    }

    public function unit()
    {
        // many containers have one unit
        return $this->belongsTo('App\DaF\Business\Drink\Unit\Unit');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'type', 'size',
    ];

}
