<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $name 
 * @property string $fee 
 * @property string $price 
 * @property int $days 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property int $status 
 */
class Admission extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admissions';
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
    protected $casts = ['id' => 'integer', 'days' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'status' => 'integer'];
}