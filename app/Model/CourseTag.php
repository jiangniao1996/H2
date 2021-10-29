<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $course_id 
 * @property int $tag_id 
 */
class CourseTag extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'course_tags';
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
    protected $casts = ['course_id' => 'integer', 'tag_id' => 'integer'];
}