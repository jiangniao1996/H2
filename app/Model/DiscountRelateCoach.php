<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $discount_id 
 * @property int $coach_id 
 */
class DiscountRelateCoach extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'discount_relate_coaches';
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
    protected $casts = ['discount_id' => 'integer', 'coach_id' => 'integer'];
}