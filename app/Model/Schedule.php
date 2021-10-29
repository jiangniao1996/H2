<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $course_id 
 * @property int $coach_id 
 * @property int $store_id 
 * @property int $place_id 
 * @property int $camp_id 
 * @property int $scheduling_id 
 * @property int $order_num 
 * @property string $special_offer 
 * @property string $start 
 * @property string $end 
 * @property string $publish_time 
 * @property int $status 
 * @property int $coach_check 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class Schedule extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'schedules';
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
    protected $casts = ['id' => 'integer', 'course_id' => 'integer', 'coach_id' => 'integer', 'store_id' => 'integer', 'place_id' => 'integer', 'camp_id' => 'integer', 'scheduling_id' => 'integer', 'order_num' => 'integer', 'status' => 'integer', 'coach_check' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}