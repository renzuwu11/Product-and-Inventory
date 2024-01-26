<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes; 

    protected $table = 'product';
    protected $primaryKey = 'ProductID'; 

    protected $fillable = [
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

    public function category()
    {
        return $this->belongsTo(Category::class, 'CategoryID', 'CategoryID');
    }

    public function employee(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
