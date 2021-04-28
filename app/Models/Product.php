<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'articul';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'articul',
        'category_id',
        'price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
