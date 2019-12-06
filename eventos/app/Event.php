<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $dates = ['date'];

    public function category()
    {
    	return $this->belongsTo(Category::class); //tengo uno y el foreing key está en esta tabla
    	// return $this->hasOne(); tengo uno y el foreing key está en la otra tabla
    	// return $this->hasMany(); tengo muchos y el foreing key está en la otra tabla
    	// return $this->belongsToMany(); relación de muchos a muchos y hay una tabla pivot
    }
}
