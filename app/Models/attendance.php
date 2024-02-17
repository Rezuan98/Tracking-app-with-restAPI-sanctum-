<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Attendance extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded = [];
    public $timestamps = true;

    // public static function totalShiftTime($userId, $date)
    // {
    //     $attendances = Attendance::where('user_id', $userId)
    //         ->whereDate('date', $date)
    //         ->get();

    //     $totalShiftTime = 0;

    //     foreach ($attendances as $attendance) {
    //         // Calculate the difference between start_time and end_time for each attendance
    //         $startTime = strtotime($attendance->start_time);
    //         $endTime = strtotime($attendance->end_time);
    //         $shiftTimeInSeconds = $endTime - $startTime;

    //         // Add the shift time to the total
    //         $totalShiftTime += $shiftTimeInSeconds;
    //     }

    //     // Convert total shift time from seconds to hours and minutes
    //     $totalShiftTimeHours = floor($totalShiftTime / 3600);
    //     $totalShiftTimeMinutes = floor(($totalShiftTime % 3600) / 60);

    //     return $totalShiftTimeHours . ' hours ' . $totalShiftTimeMinutes . ' minutes';
    // }

}
