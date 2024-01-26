<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ReturnProduct extends Model
{
    use HasFactory;

    protected $table = 'returnproduct';

    protected $fillable = [
        'CategoryID',
        'ProdName',
        'Quantity',
        'ReturnReason',
        'ReturnDate',
        'CreatedBy',
        'UpdatedBy',
    ];

    //protected $factory = \Database\Factories\ReturnProductsFactory::class;

    public function employee(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
