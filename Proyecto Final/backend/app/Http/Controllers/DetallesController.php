<?php

namespace App\Http\Controllers;

use App\Models\Detalles;
use Illuminate\Http\Request;

class DetallesController extends Controller
{
    public function obtain(){
        $detalles = Detalles::all();
        return $detalles;
    }
    public function create(Request $request)
    {
      $data =  $request->validate([
            'Cantidad'  => 'required|numeric',
            'Descripcion' => 'required|string',
            'Precio' => 'required|numeric',
            'idFactura'=>'required|numeric'
        ]);

        $detalles = Detalles::create($data);
        return response([
            'message' => 'se creo con exito el usuario ',
            'id' => $detalles['id']
        ], 201);

    }
    public function modify(Request $request)
    {
        $detalles = Detalles::where('id','=',$request['id'])->first();
        //VALIDAR SI EXISTE USUARIO

        if(!$detalles){
            return response([
                'message' =>'Error, no se encontro el detalle con el id' . $request['idCliente']
            ], 404);
        }

        //TODO BIEN
        $data =  $request->validate($this->validacion());
        $detalles->update($data);
        return response([
            'message' => 'Se modifico con exito el detalle'
        ]);
    }

    public function validacion(){
        return[
            'Cantidad'  => 'required|numeric',
            'Descripcion' => 'required|string',
            'Precio' => 'required|numeric',
            'idFactura'=>'required|numeric'
        ];
    }


    public function delete(Request $request, $idDelete)
    {
        //validar si existe
        $detalles =  Detalles::find($idDelete);
        //VALIDAR SI EXISTE USUARIO
        if(!$detalles){
            return response([
                'message' =>'Error, no se encontro el detalle con el id' . $idDelete
            ], 404);
        }
        //todo bien si existe el usuario
        $detalles->delete();
        return response([
            'message'=>'se elimino con exito el detalle'
        ]);
    }
    public function show(Request $request, $id)
    {
        return $detalles =  Detalles::find($id);
        if(!$detalles){
            return response([
                'message' =>'xd' . $request['idDetalle']
            ], 404);
        }
        //todo bien si existe el usuario
       // return response([
           // 'message'=>'Ya jalo'
       // ]);

    }
}
