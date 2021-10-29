<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $discount_id 
 * @property int $course_id 
 */
class DiscountRelateCourse extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'discount_relate_courses';
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
    protected $casts = ['discount_id' => 'integer', 'course_id' => 'integer'];
}