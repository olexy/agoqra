<?php

namespace agoqra\Repositories;

use agoqra\Models\Role;
use agoqra\Repositories\BaseRepository;

/**
 * Class RoleRepository
 * @package agoqra\Repositories
 * @version June 6, 2019, 11:46 am UTC
*/

class RoleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Role::class;
    }
}
