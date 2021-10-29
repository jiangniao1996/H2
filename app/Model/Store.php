<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $company_id 
 * @property string $name 
 * @property int $province 
 * @property int $city 
 * @property int $area 
 * @property string $address 
 * @property string $latitude 
 * @property string $longitude 
 * @property string $tel 
 * @property string $customer_service_phone 
 * @property string $trade_time 
 * @property string $content 
 * @property string $notice 
 * @property string $money 
 * @property int $status 
 * @property int $show_in_user 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class Store extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'stores';
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
    protected $casts = ['id' => 'integer', 'company_id' => 'integer', 'province' => 'integer', 'city' => 'integer', 'area' => 'integer', 'status' => 'integer', 'show_in_user' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}