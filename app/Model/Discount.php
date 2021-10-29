<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $store_id 
 * @property string $name 
 * @property int $total 
 * @property int $type 
 * @property string $discount 
 * @property int $grant_condition 
 * @property int $grant_people 
 * @property int $scene 
 * @property string $grant_start 
 * @property string $grant_end 
 * @property int $use_time_type 
 * @property int $days 
 * @property string $start 
 * @property string $end 
 * @property string $description 
 * @property int $status 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class Discount extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'discounts';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'total' => 'integer', 'type' => 'integer', 'grant_condition' => 'integer', 'grant_people' => 'integer', 'scene' => 'integer', 'use_time_type' => 'integer', 'days' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}