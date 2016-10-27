<?php

namespace bayusa;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
	protected $fillable = ['id','code','name', 'slug', 'description', 'stract', 'quantity','min_quantity', 'price','image','visible','category_id'];

    public function setImageAttribute($image){
        $this->attributes['image'] = $this->id.'_'.$image->getClientOriginalName();
        $name = $this->id.'_'.$image->getClientOriginalName();
        \Storage::disk('local')->put($name,\File::get($image));
    }
    
    // Relation with Category
    public function category()
    {
        return $this->belongsTo('bayusa\Category');
    }

    //Relación de categorias padre
    public function nestedComments()
    {
        return $this->hasMany('bayusa\Category')->where('parent_id', null);
    }

    // Relation with OrderItem
    public function order_item()
    {
        return $this->hasOne('bayusa\OrderItem');
    }

}
