<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Employee extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'employee';

    protected $fillable = [
        'EmpFirstName',
        'EmpLastName',
        'EmpMiddleName',
        'EmpEmail',
        'password',
        'EmpContactNumber',
        'EmpImage',
    ];
    
    protected static function boot()
    {
        parent::boot();

        // Listen for the "saving" event to hash the password before saving
        static::saving(function ($employee) {
            $employee->password = Hash::make($employee->password);
        });
    }

    public function product(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
