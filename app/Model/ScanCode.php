<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $store_id 
 * @property int $user_id 
 * @property int $order_id 
 * @property string $qrcode 
 * @property int $membership_order_id 
 * @property int $status 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class ScanCode extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'scan_codes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'user_id' => 'integer', 'order_id' => 'integer', 'membership_order_id' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}