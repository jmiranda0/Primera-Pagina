<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Social
 *
 * @property $id
 * @property $name
 * @property $url
 * @property $created_at
 * @property $updated_at
 *
 * @property PostsSocial[] $postsSocials
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Social extends Model
{
  use HasFactory;

    static $rules = [
		'name' => 'required',
		'url' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','url'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postsSocials()
    {
        return $this->hasMany('App\Models\PostsSocial', 'socials_id', 'id');
    }
    

}
