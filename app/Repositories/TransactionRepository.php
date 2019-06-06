<?php

namespace agoqra\Repositories;

use agoqra\Models\Transaction;
use agoqra\Repositories\BaseRepository;

/**
 * Class TransactionRepository
 * @package agoqra\Repositories
 * @version June 6, 2019, 11:47 am UTC
*/

class TransactionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'qrcode_owner_id',
        'qrcode_id',
        'payment_method',
        'message',
        'amount',
        'company_name'
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
        return Transaction::class;
    }
}
