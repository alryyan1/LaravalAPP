<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class SpecialistController extends Controller
{
    public function index()
    {

        $specialists = Specialist::all();
        return view('specialist.new', [
            'specialists' => $specialists
        ]);
    }
    public function show(HttpFoundationRequest $request)
    {
        $specialists = Specialist::all();


        return view('specialist.list', [
            'specialists' => $specialists
        ]);
    }
    public function store(HttpFoundationRequest $request)
    {

        Specialist::create([
            'name' => $request->name
        ]);
        return redirect('specialist/list');
    }
}
