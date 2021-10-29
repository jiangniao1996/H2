<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $refund_sn 
 * @property int $order_id 
 * @property string $money 
 * @property string $remark 
 * @property int $admin_id 
 * @property int $status 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $finished_at 
 */
class Refund extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'refunds';
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
    protected $casts = ['id' => 'integer', 'order_id' => 'integer', 'admin_id' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}