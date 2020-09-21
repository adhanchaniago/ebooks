<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Book
 * @package App\Models
 * @version September 21, 2020, 12:43 pm UTC
 *
 * @property string title
 * @property string review
 * @property string cover
 * @property integer autho_id
 */
class Book extends Model
{
    use SoftDeletes;

    public $table = 'books';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'review',
        'cover',
        'autho_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'review' => 'string',
        'cover' => 'string',
        'autho_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'review' => 'required|max:255'
    ];

    
}
