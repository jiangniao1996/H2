<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property string $avatar 
 * @property string $secure_password 
 * @property int $store_id 
 * @property string $nickname 
 * @property string $real_name 
 * @property int $gender 
 * @property string $phone 
 * @property string $password 
 * @property int $age 
 * @property string $birthday 
 * @property string $summary 
 * @property string $occupation 
 * @property string $admin_remark 
 * @property string $emergency_contact 
 * @property string $emergency_contact_phone 
 * @property string $balance 
 * @property int $carte 
 * @property int $status 
 * @property int $is_in 
 * @property string $last_login 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */

class User extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'gender' => 'integer', 'age' => 'integer', 'carte' => 'integer', 'status' => 'integer', 'is_in' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}