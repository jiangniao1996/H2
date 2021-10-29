<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $store_id 
 * @property int $order_id 
 * @property int $coupon_id 
 * @property int $course_id 
 * @property int $user_id 
 * @property int $schedule_id 
 * @property int $package_id 
 * @property int $package_user_id 
 * @property int $coach_id 
 * @property string $coach_confirm_time 
 * @property int $admin_id 
 * @property string $student_confirm_time 
 * @property int $user_check 
 * @property int $comment_id 
 * @property string $comment_time 
 * @property int $score 
 * @property int $is_complain 
 * @property int $is_new 
 * @property string $code 
 * @property int $use_qrcode 
 * @property string $money 
 * @property int $status 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class ScheduleOrder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'schedule_orders';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'order_id' => 'integer', 'coupon_id' => 'integer', 'course_id' => 'integer', 'user_id' => 'integer', 'schedule_id' => 'integer', 'package_id' => 'integer', 'package_user_id' => 'integer', 'coach_id' => 'integer', 'admin_id' => 'integer', 'user_check' => 'integer', 'comment_id' => 'integer', 'score' => 'integer', 'is_complain' => 'integer', 'is_new' => 'integer', 'use_qrcode' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}