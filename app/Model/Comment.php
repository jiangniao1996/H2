<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $post_id 
 * @property int $comment_id 
 * @property int $pid 
 * @property int $user_id 
 * @property int $reply_id 
 * @property int $like_num 
 * @property string $content 
 * @property int $type 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class Comment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comments';
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
    protected $casts = ['id' => 'integer', 'post_id' => 'integer', 'comment_id' => 'integer', 'pid' => 'integer', 'user_id' => 'integer', 'reply_id' => 'integer', 'like_num' => 'integer', 'type' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}