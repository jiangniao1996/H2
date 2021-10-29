<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $store_id 
 * @property int $user_id 
 * @property string $profile 
 * @property string $level 
 * @property string $last_login 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 * @property int $status 
 */
class Coach extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'coaches';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'user_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'status' => 'integer'];
}