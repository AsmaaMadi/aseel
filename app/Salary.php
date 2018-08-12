<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $fillable = [
        'fromDate', 'ToDate'
    ];
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
