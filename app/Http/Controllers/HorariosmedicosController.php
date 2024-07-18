<?php

namespace App\Http\Controllers;

use App\Models\horariosmedicos;
use Illuminate\Http\Request;

class HorariosmedicosController extends Controller
{
    public function index()
    {
        $medicos = horariosmedicos::all();
        return view('horariosMedicos', ['medicos' => $medicos]);
    }

    public function create()
    {
        return view("");

    }


    public function show($id)
    {

    }

    public function edit($id)
    {
       
    }

    public function store(Request $request)
    {
       
    }



    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    
    }
}
