<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function obtain(){
        $clientes = Clientes::all();
        return $clientes;
    }
    public function create(Request $request)
    {
      $data =  $request->validate([
            'Name'  => 'required |string',
            'Ape1' => 'required |string',
            'Ape2' => 'required |string'
        ]);


        $clientes = Clientes::create($data);
        return response([
            'message' => 'se creo con exito el usuario ',
            'id' => $clientes['id']
        ], 201);

    }
    public function modify(Request $request, $idEdit)
    {
        $clientes = Clientes::where('id','=',$request['id'])->first();
        //VALIDAR SI EXISTE USUARIO

        if(!$clientes){
            return response([
                'message' =>'Error, no se encontro el usuario con el id' . $request['idCliente']
            ], 404);
        }

        //TODO BIEN
        $data =  $request->validate($this->validacion());
        $clientes->update($data);
        return response([
            'message' => 'Se modifico con exito el usuario'
        ]);
    }

    public function validacion(){
        return[
            'Name'=>'required|string',
            'Ape1'=>'required|string',
            'Ape2'=>'required|string'
        ];
    }

    public function delete(Request $request, $idDelete)
    {
        //validar si existe
        $clientes =  Clientes::find($idDelete);
        //VALIDAR SI EXISTE USUARIO
        if(!$clientes){
            return response([
                'message' =>'Error, no se encontro el usuario con el id' . $idDelete
            ], 404);
        }
        //todo bien si existe el usuario
        $clientes->delete();
        return response([
            'message'=>'se elimino con exito el usuario'
        ]);
    }

    public function show(Request $request, $id)
    {
        return $clientes =  Clientes::find($id);
        if(!$clientes){
            return response([
                'message' =>'xd' . $request['idCliente']
            ], 404);
        }
        //todo bien si existe el usuario
       // return response([
           // 'message'=>'Ya jalo'
       // ]);

    }


}
