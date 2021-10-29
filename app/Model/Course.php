<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $store_id 
 * @property int $type 
 * @property int $grade 
 * @property string $name 
 * @property string $en_name 
 * @property int $video 
 * @property int $pic 
 * @property string $introduce 
 * @property string $notice 
 * @property string $price 
 * @property string $discount 
 * @property int $max_num 
 * @property int $min_num 
 * @property int $status 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 * @property string $team_type 
 * @property int $classify 
 */
class Course extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'courses';
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
    protected $casts = ['id' => 'integer', 'store_id' => 'integer', 'type' => 'integer', 'grade' => 'integer', 'video' => 'integer', 'pic' => 'integer', 'max_num' => 'integer', 'min_num' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'classify' => 'integer'];
}