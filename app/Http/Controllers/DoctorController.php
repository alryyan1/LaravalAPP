<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;
use App\Models\Doctor;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function index()  {
        return view('doctor.new');
    }
    public function store(HttpFoundationRequest $request){
        Doctor::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'percentage' => $request->percentage,
            'specialist_id' => $request->specialist,
        ]);

        return redirect('/doctor/list');
    }
    public function show()  {
    //    $doctors =  Doctor::all();
       $doctors =   DB::table('doctors')->get();
       // the method get return Illuminate/Support/Collection

       return view('doctor.list',[
        'doctors' => $doctors
       ]);
    }
}
