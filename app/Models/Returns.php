<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Returns extends Model
{
    use HasFactory;
    protected $table = 'returns';

    public $fillable = [
        'ProductID',
        'CategoryID',
        'ReturnQuantity',
        'ReturnDate',
        'ReasonofReturn',
    ];
    
    public $timestamps = false; 

    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductID');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'CategoryID');
    }
}
