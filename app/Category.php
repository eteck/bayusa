<?php

namespace bayusa;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
	protected $fillable = ['id','parent_id','name','description','slug'];

	//Relación entre los productos y las categorias
	public function products()
    {
        return $this->hasMany('bayusa\Product');
    }

    //obtiene categorias hija dell padre
    public function replies()
    {
        return $this->hasMany('bayusa\Category', 'parent_id');
    }
   
}
