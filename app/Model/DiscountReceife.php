<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $store_id 
 * @property string $name 
 * @property int $discount_id 
 * @property string $url 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class DiscountReceife extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'discount_receives';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'discount_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}