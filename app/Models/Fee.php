<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cost'
    ];

    // using mutators: setters    
    /**
     * setTitleAttribute : Mutator
     *
     * @param mixed $value
     *
     * @return void
     */
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtoupper($value);
        //  return strtoupper($this->title);
    }


    /**
     * getTitleAttribute : Mutator
     *
     * @param mixed $value
     *
     * @return void
     */
    public function getTitleAttribute()
    {
         return ucfirst($this->title);
    }
    
    
    
}
