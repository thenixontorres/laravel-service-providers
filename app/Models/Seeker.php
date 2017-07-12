<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Seeker
 * @package App\Models
 * @version July 12, 2017, 2:07 pm UTC
 */
class Seeker extends Model
{
    use SoftDeletes;

    public $table = 'seekers';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fullname',
        'gender',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fullname' => 'string',
        'gender' => 'string',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fullname' => 'required',
        'gender' => 'required',
        'user_id' => 'required'
    ];

    
}
