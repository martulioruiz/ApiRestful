<?php

namespace App;

use App\buyer;
use App\product;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $fillable = [
    	'quantity',
    	'buyer_id',
    	'product_id',
    ];

    public function buyer(){
    	$this->belongsTo(buyer::class);
    }

    public function product(){
    	$this->belongsTo(product::class);
    }
}
