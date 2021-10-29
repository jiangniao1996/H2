<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $order_id 
 * @property int $user_id 
 * @property int $order_user_id 
 * @property int $package_id 
 * @property int $coach_id 
 * @property int $total_num 
 * @property int $remain_num 
 * @property string $money 
 * @property string $expire 
 * @property int $status 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property int $store_id 
 */
class PackageUser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'package_users';
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
    protected $casts = ['id' => 'integer', 'order_id' => 'integer', 'user_id' => 'integer', 'order_user_id' => 'integer', 'package_id' => 'integer', 'coach_id' => 'integer', 'total_num' => 'integer', 'remain_num' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'store_id' => 'integer'];
}