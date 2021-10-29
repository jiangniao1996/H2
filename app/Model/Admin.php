<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $username 
 * @property string $password 
 * @property string $name 
 * @property int $admin_id 
 * @property int $status 
 * @property int $is_super 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class Admin extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admins';
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
    protected $casts = ['id' => 'integer', 'admin_id' => 'integer', 'status' => 'integer', 'is_super' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}