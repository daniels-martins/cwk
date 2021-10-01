<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Course extends Pivot
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * @var mixed $table indicates the database table associated with the model.
     */
    protected $table = 'courses';

    
}
