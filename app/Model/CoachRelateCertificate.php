<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $user_id 
 * @property int $review_id 
 * @property int $coach_id 
 * @property int $pic_id 
 * @property int $tag_id 
 * @property int $status 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class CoachRelateCertificate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'coach_relate_certificates';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'review_id' => 'integer', 'coach_id' => 'integer', 'pic_id' => 'integer', 'tag_id' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}