<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $user_id 
 * @property int $store_id 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class Employee extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'employees';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'store_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}