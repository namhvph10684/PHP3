<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'description',
        //id	name	description	price	thumbnail_url	short_description	quantity	status	category_id	created_at	updated_at	
        'price',
        'thumbnail_url',
        'short_description',
        'quantity',
        'status',
        'category_id',
        
    ];
    
}
