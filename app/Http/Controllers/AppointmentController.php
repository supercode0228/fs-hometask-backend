<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function show($patient_name)
    {
        $status_code = 200;
        $status_msg = 'success';
        $appointments = Appointment::where('patient_name', '=', $patient_name)
            ->orderBy('start_date', 'DESC')
            ->orderBy('start_time', 'DESC')
            ->get();
        return response()->json([
          'status_code' => $status_code,
          'status_msg' => $status_msg,
          'data' => $appointments
        ]);
    }
}
