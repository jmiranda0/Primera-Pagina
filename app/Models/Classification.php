<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Classification
 *
 * @property $id
 * @property $ESRB
 * @property $created_at
 * @property $updated_at
 *
 * @property Post[] $posts
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Classification extends Model
{
  use HasFactory;
    static $rules = [
		'ESRB' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ESRB'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'classifications_id', 'id');
    }
    

}
