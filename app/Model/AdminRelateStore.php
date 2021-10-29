<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $admin_id 
 * @property int $store_id 
 */
class AdminRelateStore extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admin_relate_stores';
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
    protected $casts = ['admin_id' => 'integer', 'store_id' => 'integer'];
}