<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()  {
        $doctors =  Doctor::all();
        return view('patient.new',[
            'doctors' => $doctors
        ]);
    }

    
}
