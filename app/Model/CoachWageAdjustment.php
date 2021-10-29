<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $coach_wage_id 
 * @property string $money 
 * @property string $remark 
 * @property int $admin_id 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class CoachWageAdjustment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'coach_wage_adjustments';
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
    protected $casts = ['id' => 'integer', 'coach_wage_id' => 'integer', 'admin_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}