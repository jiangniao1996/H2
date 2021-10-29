<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $coach_id 
 * @property string $coach_level 
 * @property string $coach_level_name 
 * @property string $date 
 * @property int $group_num 
 * @property int $private_num 
 * @property string $basic_wage 
 * @property string $group_commission 
 * @property string $private_commission 
 * @property string $sales_commission 
 * @property string $camp_commission 
 * @property string $fine 
 * @property string $wage 
 * @property string $real_wage 
 * @property string $config 
 * @property string $group_coefficient 
 * @property string $private_coefficient 
 * @property string $sales_coefficient 
 * @property string $camp_coefficient 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property int $store_id 
 */
class CoachWage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'coach_wages';
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
    protected $casts = ['id' => 'integer', 'coach_id' => 'integer', 'group_num' => 'integer', 'private_num' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'store_id' => 'integer'];
}