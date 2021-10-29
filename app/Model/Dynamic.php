<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $user_id 
 * @property string $content 
 * @property string $remark 
 * @property int $video 
 * @property int $status 
 * @property int $like_num 
 * @property int $comment_num 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 * @property string $address 
 */
class Dynamic extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dynamics';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'video' => 'integer', 'status' => 'integer', 'like_num' => 'integer', 'comment_num' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}