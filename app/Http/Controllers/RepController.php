<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repaso;
use App\Http\Requests\Validar;

class RepController extends Controller
{
  
        public function signup(Validar $request){

            $data = [

                 'name' => request('name'),
                 'username' => request('username'),
                 'email' => request('email'),
                 'password' => request('password'),
            ];


                User::create($data);
               return response()->json(['message' => 'Usuario registrado con exito!'], 201);
        }

   
        public function mostrar(){

            $mostrar = User::all();
            return response()->json([$mostrar, 'Estos son los usuarios mostrados en la base de datos.']);

        }



        public function mostrar_id($id){

            $mostrar = User::find($id);
            return response()->json([$mostrar, 'Este es el usuario con el ID:',$id]);

        }



        public function actualizar(Request $request, $id){

          
            $data = [

                'name' => request('name'),
                'username' => request('username'),
                'email' => request('email'),
                'password' => request('password'),
      

            ];


                User::where('id', $id)->update($data);

               return response()->json([$data, 'Este es el usuario con el ID:',$id]);
      
        }
        
           
            public function delete(Request $request, $id){

                $deleter = User::find($id);
                $deleter->delete();
                return response()->json('este usuario fue eliminado');
            }




 


} // Fin de la clase RepController


