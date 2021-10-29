<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $discount_id 
 * @property int $package_id 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class DiscountRelatePackage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'discount_relate_packages';
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
    protected $casts = ['discount_id' => 'integer', 'package_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}