<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Aula_M;
use App\Http\Requests\Validar_a;



class Aula_C extends Controller
{
 



 public function register(Validar_a $request){

            $data = [

                 'name' => request('name'),
                 'lastname' => request('lastname'),
                 'age' => request('age'),
                 
            ];
            
//var_dump($data);

                Aula_M::create($data);
               return response()->json(['message' => 'Usuario registrado con exito!'], 201);
        }



        public function mostrar_a(){

            $mostrar = Aula_M::all();
            return response()->json([$mostrar, 'Estos son los usuarios mostrados en la base de datos.']);

        }




        public function mostrar_id_a($id){

            $mostrar = Aula_M::find($id);
            return response()->json([$mostrar, 'Este es el usuario con el ID:',$id]);

        }

        public function actualizar_id(Request $request, $id){

			$data = [

				'name' => request('name'),
				'lastname' => request('lastname'),
				'age' => request('age'),
			];

			Aula_M::where('id', $id)->update($data);

			return response()->json([$data,'Se ha actualizado el campo:',$id]);

        }



		public function delete_a(Request $request, $id){

			$deleter = Aula_M::find($id);
			$deleter->delete();
			return response()->json('este usuario fue eliminado');
		}















}// Fin de la clase Aula_C
