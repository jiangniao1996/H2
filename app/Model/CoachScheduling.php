<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $coach_id 
 * @property int $course_type 
 * @property int $source 
 * @property string $start 
 * @property string $end 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class CoachScheduling extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'coach_schedulings';
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
    protected $casts = ['id' => 'integer', 'coach_id' => 'integer', 'course_type' => 'integer', 'source' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}