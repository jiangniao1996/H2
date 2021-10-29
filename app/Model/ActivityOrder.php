<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $user_id 
 * @property int $store_id 
 * @property int $order_id 
 * @property string $money 
 * @property int $activity_id 
 * @property int $is_checked 
 * @property int $is_sign 
 * @property int $status 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class ActivityOrder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'activity_orders';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'store_id' => 'integer', 'order_id' => 'integer', 'activity_id' => 'integer', 'is_checked' => 'integer', 'is_sign' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}