<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id 
 * @property int $review_id 
 * @property int $user_id 
 * @property string $real_name 
 * @property int $id_card_front 
 * @property int $id_card_back 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class CoachApplication extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'coach_applications';
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
    protected $casts = ['id' => 'integer', 'review_id' => 'integer', 'user_id' => 'integer', 'id_card_front' => 'integer', 'id_card_back' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}