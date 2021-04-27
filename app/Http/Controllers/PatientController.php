<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index()
    {
        $status_code = 200;
        $status_msg = 'success';
        $patients = Patient::all();
        return response()->json([
          'status_code' => $status_code,
          'status_msg' => $status_msg,
          'data' => $patients
        ]);
    }
}
