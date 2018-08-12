<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $fillable = [
        'fromDate', 'ToDate','title'
    ];
    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
