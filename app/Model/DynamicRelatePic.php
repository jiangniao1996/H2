<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $dynamic_id 
 * @property int $pic_id 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property int $id 
 */
class DynamicRelatePic extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dynamic_relate_pics';
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
    protected $casts = ['dynamic_id' => 'integer', 'pic_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'id' => 'integer'];
}