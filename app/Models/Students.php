<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Students extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table ="students";
    protected $primaryKey = 'student_id';

//these funcations transform the first letter of your name to upper case 
//use of Mutator
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }

    public function setStateAttribute($value)
    {
        $this->attributes['state'] = ucwords($value);
    }

    public function setCountryAttribute($value)
    {
        $this->attributes['country'] = ucwords($value);
    }

//use of Accessor
    public function getDobAttribute($value)
    {
        return date('d-M-Y', strtotime($value));
    }
}
