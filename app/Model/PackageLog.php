<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $package_user_id 
 * @property int $order_id 
 * @property int $user_id 
 * @property int $package_id 
 * @property int $gain 
 * @property int $balance_num 
 * @property int $admin_id 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property int $store_id 
 */
class PackageLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'package_logs';
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
    protected $casts = ['id' => 'integer', 'package_user_id' => 'integer', 'order_id' => 'integer', 'user_id' => 'integer', 'package_id' => 'integer', 'gain' => 'integer', 'balance_num' => 'integer', 'admin_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'store_id' => 'integer'];
}