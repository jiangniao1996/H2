<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $subject_id 
 * @property string $subject_type 
 * @property int $width 
 * @property int $height 
 * @property string $path 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class Pic extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pics';
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
    protected $casts = ['id' => 'integer', 'subject_id' => 'integer', 'width' => 'integer', 'height' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}