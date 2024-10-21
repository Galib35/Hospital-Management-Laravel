<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class DoctorModel extends  Authenticatable
{   

    use Notifiable;
    protected $table = 'doctor';
    public $timestamps=false;
   use HasFactory;
}