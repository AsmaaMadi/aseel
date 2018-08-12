<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $fillable = [
        'fromDate', 'ToDate'
    ];
    public function employee()
    {
        return $this->hasMany(Employee::class);
    }

    public function departement()
    {
        return $this->hasOne(Departement::class);
    }
}
