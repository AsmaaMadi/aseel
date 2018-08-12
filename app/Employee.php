<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'birthDate', 'firstName', 'lastName','hireDate'
    ];
    public function manager()
    {
        return $this->belongsTo(Manager::class);
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    public function salary()
    {
        return $this->hasOne(Salary::class);
    }

    public function title()
    {
        return $this->belongsTo(Title::class);
    }
}
