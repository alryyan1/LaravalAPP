<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class PatientController extends Controller
{
    public function index()
    {
        $doctors =  Doctor::all();

        // dd($doctors);
        return view('patient.new', [
            'doctors' => $doctors
        ]);
    }
    public function store(HttpFoundationRequest $request)
    {
        // return $request;
        Patient::create([
            'name' => $request->name,
            'doctor_id' => $request->doctor,
            'phone' => $request->phone,
            'age' => $request->age,
            'address' => $request->address,
        ]);

        return redirect('patient/list');
    }
    public function show(){
       $patients =  Patient::with(['doctor'])->get();
       return view('patient.list',[
        'patients' => $patients
       ]);
    }
}
