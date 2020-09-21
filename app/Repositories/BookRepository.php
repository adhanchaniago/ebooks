<?php

namespace App\Repositories;

use App\Models\Book;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BookRepository
 * @package App\Repositories
 * @version September 21, 2020, 12:43 pm UTC
 *
 * @method Book findWithoutFail($id, $columns = ['*'])
 * @method Book find($id, $columns = ['*'])
 * @method Book first($columns = ['*'])
*/
class BookRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'review',
        'cover',
        'autho_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Book::class;
    }
}
