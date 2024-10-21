<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class AdminModel extends Authenticatable
{
    use Notifiable;

    protected $table = 'admin';
    public $timestamps = false;

    // Rest of your model code...
}