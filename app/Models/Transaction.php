<?php

namespace agoqra\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Transaction",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="user_id",
 *          description="user_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="qrcode_owner_id",
 *          description="qrcode_owner_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="qrcode_id",
 *          description="qrcode_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="payment_method",
 *          description="payment_method",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="message",
 *          description="message",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="amount",
 *          description="amount",
 *          type="float",
 *          format="float"
 *      ),
 *      @SWG\Property(
 *          property="company_name",
 *          description="company_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Transaction extends Model
{
    use SoftDeletes;

    public $table = 'transactions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'qrcode_owner_id',
        'qrcode_id',
        'payment_method',
        'message',
        'amount',
        'company_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'qrcode_owner_id' => 'integer',
        'qrcode_id' => 'integer',
        'payment_method' => 'integer',
        'message' => 'string',
        'amount' => 'float',
        'company_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'qrcode_id' => 'required',
        'amount' => 'required',
        'company_name' => 'required'
    ];

    
}
