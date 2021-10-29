<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $store_id 
 * @property int $user_id 
 * @property int $discount_id 
 * @property string $start_time 
 * @property string $end_time 
 * @property int $order_id 
 * @property int $status 
 * @property int $coach_id 
 * @property string $gift_time 
 * @property int $is_notice 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class Coupon extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'coupons';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'user_id' => 'integer', 'discount_id' => 'integer', 'order_id' => 'integer', 'status' => 'integer', 'coach_id' => 'integer', 'is_notice' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}