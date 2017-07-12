<?php

namespace App\Repositories;

use App\Models\Seeker;
use InfyOm\Generator\Common\BaseRepository;

class SeekerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fullname',
        'gender',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Seeker::class;
    }
}
