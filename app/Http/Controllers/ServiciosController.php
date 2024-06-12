<?php

namespace App\Http\Controllers;
// use DB;


use Illuminate\Http\Request;
use App\Models\Persona;

class ServiciosController extends Controller
{
    public function servicios(){
        
        // $servicios = Servicio::paginate(10);


        $servicios = Persona::latest()->paginate();

        return view('servicios', compact('servicios'));
        // $servicios = Servicio::latest()->paginate(10);


        // $servicios=Servicio::latest('titulo')->get();
        // $servicios=Servicio::get();
        // $servicios = Servicio::latest()->paginate();
        
        // $servicios=[
        //     ['titulo'=>'Mantenimiento'],
        //     ['titulo'=>'Afinamiento'],
        //     ['titulo'=>'cambio de aceite'],
        //     ['titulo'=>'Lavado tipo salón'],
        // ];
        
    }
    public function show($id){

        return view('show',[
            'servicio'=>Servicio::find($id)
        ]);

        // return Servicio::find($id);
    }
}
