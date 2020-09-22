<?php

namespace App\Models;

use App\User;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Prestamo
 * @package App\Models
 * @version September 22, 2020, 11:45 am UTC
 *
 * @property integer book_id
 * @property integer user_id
 * @property date startDate
 * @property date endDate
 */
class Prestamo extends Model
{
    use SoftDeletes;

    public $table = 'prestamos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'book_id',
        'user_id',
        'startDate',
        'endDate'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'book_id' => 'integer',
        'user_id' => 'integer',
        'startDate' => 'date',
        'endDate' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    
}
