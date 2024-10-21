<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_RecordModel extends Model
{   
    protected $table='patient_record';

    
    public $timestamps=false;
    use HasFactory;
}
