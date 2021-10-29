<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $store_id 
 * @property int $coach_id 
 * @property string $name 
 * @property string $en_name 
 * @property int $course_type 
 * @property string $team_type 
 * @property string $price 
 * @property string $discount 
 * @property int $num 
 * @property string $start 
 * @property string $end 
 * @property string $content 
 * @property string $remark 
 * @property int $days 
 * @property int $status 
 * @property int $is_offline 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class Package extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'packages';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'coach_id' => 'integer', 'course_type' => 'integer', 'num' => 'integer', 'days' => 'integer', 'status' => 'integer', 'is_offline' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}