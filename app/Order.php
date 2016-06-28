<?php

namespace bayusa;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['subtotal','shipping','user_id','type_order'];

    //Relacion de pediod por Usuario
    public function user(){
    	return $this->belongsTo('bayusa\User');
    }

    public function order_items(){
    	return $this->hasMany('bayusa\OrderItem');
    }
}
