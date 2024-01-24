<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnProduct extends Model
{
    use HasFactory;
    protected $table = 'returnproduct';
    
    public $fillable = [
        'CategoryID',
        'ProdName',
        'Quantity',
        'ReturnReason',
        'ReturnDate',
        'CreatedBy',
        'UpdatedBy',
    ];

   
    public function employee(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
