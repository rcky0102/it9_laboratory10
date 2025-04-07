<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
    protected $primaryKey = 'dependent_id';
    public $timestamps = false;

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
