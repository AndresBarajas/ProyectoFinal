<?php

namespace App\Http\Controllers;

use App\Models\Facturas;
use Illuminate\Http\Request;

class FacturasController extends Controller
{
    public function obtain(){
        $facturas = Facturas::all();
        return $facturas;
    }
    public function create(Request $request)
    {
      $data =  $request->validate([
            'idCliente'  => 'required|numeric',
            'Fecha' => 'required|date',
            'Numero' => 'required|numeric',
            'IVA'=>'required|numeric'
        ]);

        $facturas = Facturas::create($data);
        return response([
            'message' => 'se creo con exito la factura ',
            'id' => $facturas['id']
        ], 201);

    }
    public function modify(Request $request)
    {
        $facturas = Facturas::where('id','=',$request['id'])->first();
        //VALIDAR SI EXISTE USUARIO

        if(!$facturas){
            return response([
                'message' =>'Error, no se encontro la factura con la id' . $request['idCliente']
            ], 404);
        }

        //TODO BIEN
        $data =  $request->validate($this->validacion());
        $facturas->update($data);
        return response([
            'message' => 'Se modifico con exito la factura'
        ]);
    }

    public function validacion(){
        return[
            'idCliente'  => 'required|numeric',
            'Fecha' => 'required|date',
            'Numero' => 'required|numeric',
            'IVA'=>'required|numeric'
        ];
    }

    public function delete(Request $request, $idDelete)
    {
        //validar si existe
        $facturas =  Facturas::find($idDelete);
        //VALIDAR SI EXISTE USUARIO
        if(!$facturas){
            return response([
                'message' =>'Error, no se encontro la factura con el id' . $idDelete
            ], 404);
        }
        //todo bien si existe el usuario
        $facturas->delete();
        return response([
            'message'=>'se elimino con exito la factura'
        ]);
    }
    public function show(Request $request, $id)
    {
        return $facturas =  Facturas::find($id);
        if(!$facturas){
            return response([
                'message' =>'xd' . $request['idFactura']
            ], 404);
        }
        //todo bien si existe el usuario
       // return response([
           // 'message'=>'Ya jalo'
       // ]);

    }

}
