<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BudgetModel;
use App\Models\FloorTileModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class BudgetController extends Controller
{
    public function askBudget($id)
    {

        $_data['floorTile'] = FloorTileModel::where('id', $id)->first()->toArray();
        
        return view('makeBudget', $_data);
    }

    public function saveBudget(Request $request)
    {

        unset($request["_token"], $request["submit"]); // Quitar del request el token y submit (en la plantilla trae value)
        $data = $request->all();                       // Pasar todos los campos del formulario a la variable data

        $data['fecha_finalizacion'] = str_replace('/', '-', $data['fecha_finalizacion']);
        $data['fecha_finalizacion'] = date('Y-m-d', substr(strtotime($data['fecha_finalizacion']), 0, 10)); // Dar formato de datetime a la fecha

        $data["fecha_solicitud"] = Carbon::now()->toDateString(); // Guardar en el campo fecha_solictud la fecha de hoy
        $data["validado"] = false; // Guardar en el campo valiado que el presupuesto no está validado todavía
        $data["aprobado"] = false; // Guardar en el campo aprobado que el presupuesto no está aprobado todavía (no se aprueba hasta que el cliente lo acepte)
        
        try {
            BudgetModel::insert($data);
            // Mensaje indicando que la solicitud de presupuesto se ha guardado correctamente
            $msg['icon'] = 'success';
            $msg['title'] = 'Solicitud Guardada';
            $msg['text'] = 'Se ha guardado su solicitud. Le responderemos lo antes posible en el email que ha proporcionado';
            $request->session()->flash('response-form', $msg);
        } catch (\Exception $e) {
            // DB::rollback();
            // Mensaje si ha habido algún error al insertar el presupueso en la base de datos
            $msg['icon'] = 'error';
            $msg['title'] = 'Error al guardar la solicitud.';
            $msg['text'] = 'Por favor inténtelo más tarde o póngase en contacto con nosotros';
            $request->session()->flash('response-form', $msg);
        }

        return redirect()->route('index');

    }

    public function listBudgets(){
        $_data['budgets'] = BudgetModel::select('presupuestos.id','nombre_apellidos', 'presupuestos.email', 'presupuestos.telefono', 'presupuestos.direccion', 'presupuestos.codigo_postal', 'presupuestos.metros_cuadrados', 'presupuestos.tipo_habitacion', 'presupuestos.id_baldosa', 'presupuestos.fecha_finalizacion', 'presupuestos.fecha_solicitud', 'presupuestos.validado', 'presupuestos.aprobado', 'baldosas.nombre as tipo_suelo')
        ->join('baldosas', 'presupuestos.id_baldosa', '=', 'baldosas.id')->get()->toArray();
        return view('listBudgets', $_data);
    }
}
