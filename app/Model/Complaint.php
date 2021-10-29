<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $target_id 
 * @property string $target_type 
 * @property int $user_id 
 * @property int $tag_id 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class Complaint extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'complaints';
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
    protected $casts = ['id' => 'integer', 'target_id' => 'integer', 'user_id' => 'integer', 'tag_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}