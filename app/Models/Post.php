<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 *
 * @property $id
 * @property $title
 * @property $content
 * @property $image
 * @property $authors_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Author $author
 * @property PostsSocial[] $postsSocials
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Post extends Model
{
    use HasFactory;

    static $rules = [
		'title' => 'required',
		'content' => 'required',
		'image' => 'required',
		'authors_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','content','image','authors_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function author()
    {
        return $this->hasOne('App\Models\Author', 'id', 'authors_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postsSocials()
    {
        return $this->hasMany('App\Models\PostsSocial', 'posts_id', 'id');
    }
    

}
