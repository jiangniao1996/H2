<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $date 
 * @property int $type 
 * @property string $data 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class Censu extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'census';
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
    protected $casts = ['id' => 'integer', 'type' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}