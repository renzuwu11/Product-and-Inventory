<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    
    public $fillable = [
        'CategoryID',
        'ProdName',
        'ProdDescription',
        'ProdMaterial',
        'ProdWeight',
        'ProdSize',
        'UnitPrice',
        'ProdDiscount',
        'Stock',
        'ProdImage',
        'CreatedBy',
        'UpdatedBy',
    ];

   
    public function employee(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}