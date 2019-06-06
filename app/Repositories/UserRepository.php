<?php

namespace agoqra\Repositories;

use agoqra\Models\User;
use agoqra\Repositories\BaseRepository;

/**
 * Class UserRepository
 * @package agoqra\Repositories
 * @version June 6, 2019, 11:49 am UTC
*/

class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'role_id',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }
}
