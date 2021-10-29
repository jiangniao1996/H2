<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $coach_id 
 * @property int $course_id 
 * @property string $price 
 * @property string $discount 
 * @property int $type 
 * @property int $grade 
 * @property string $name 
 * @property string $en_name 
 * @property int $max_num 
 * @property int $min_num 
 * @property int $pic 
 * @property int $video 
 * @property string $introduce 
 * @property string $notice 
 * @property int $status 
 * @property int $classify 
 * @property string $team_type 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class CoachRelateCourse extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'coach_relate_courses';
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
    protected $casts = ['id' => 'integer', 'coach_id' => 'integer', 'course_id' => 'integer', 'type' => 'integer', 'grade' => 'integer', 'max_num' => 'integer', 'min_num' => 'integer', 'pic' => 'integer', 'video' => 'integer', 'status' => 'integer', 'classify' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}