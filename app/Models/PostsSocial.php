<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PostsSocial
 *
 * @property $id
 * @property $posts_id
 * @property $socials_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Post $post
 * @property Social $social
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PostsSocial extends Model
{
    use HasFactory;

    static $rules = [
		'posts_id' => 'required',
		'socials_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['posts_id','socials_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function post()
    {
        return $this->hasOne('App\Models\Post', 'id', 'posts_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function social()
    {
        return $this->hasOne('App\Models\Social', 'id', 'socials_id');
    }
    

}
