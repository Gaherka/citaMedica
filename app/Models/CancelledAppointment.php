<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CancelledAppointment extends Model
{
    public function cancelled_by(){
        return $this->belongsTo(User::class);
    }
}
