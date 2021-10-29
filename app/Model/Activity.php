<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $store_id 
 * @property string $name 
 * @property string $price 
 * @property string $vip_price 
 * @property string $address 
 * @property int $apply_num 
 * @property int $check 
 * @property string $content 
 * @property string $start 
 * @property string $apply_start 
 * @property string $apply_end 
 * @property string $end 
 * @property int $banner 
 * @property int $pic 
 * @property int $sort 
 * @property int $is_banner 
 * @property int $status 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class Activity extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'activities';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'apply_num' => 'integer', 'check' => 'integer', 'banner' => 'integer', 'pic' => 'integer', 'sort' => 'integer', 'is_banner' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}