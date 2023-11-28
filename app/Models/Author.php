<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Author
 *
 * @property $id
 * @property $name
 * @property $image
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @property Post[] $posts
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Author extends Model
{
  
    use HasFactory;
    
    static $rules = [
		'name' => 'required',
		'image' => 'required',
		'description' => 'required',
    ];

    protected $perPage = 20;
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','image','description'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'authors_id', 'id');
    }
    

}
