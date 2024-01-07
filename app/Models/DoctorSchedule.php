<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class DoctorSchedule extends Model
{
    protected $table = 'doctor_schedules';

    protected $fillable = ['start_time', 'end_time', 'user_id'];

    public function doctor()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
