<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Laravel\Sanctum\HasApiTokens;


class AuthController extends Controller
{
    use HasApiTokens;

    /**

     *
     * @param  \Illuminate\Http\Request   $request
     * @return JsonResponse
     */
    public function register(Request $request){
        try {
            $validator = Validator::make($request->all(),[
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
                'confirm_password' => 'required|same:password',
            ],[
                'password.regex' => "Le mot de passe doit contenir au moins une lettre majuscule, une lettre minuscule, un chiffre, un caractère spécial et doit comporter plus de 6 caractères."
            ]);
            if($validator->fails()){
                $response = [
                    'success' => false,
                    'message' => $validator->errors()
                ];

                return response()->json($response,400);
            }

            $input = $request->all();
            $input['password'] = bcrypt($input['password']);
            $user = User::create($input);

            $success['token'] = $user->createToken('Myapp')->plainTextToken;
            $success['name'] = $user->name;

            $response = [
                'success' => true,
                'data' => $success,
                'message' => ['message'=>['Inscription réussite']]
            ];

            return response()->json($response,200);
        } catch (\Exception $e) {
            $response = [
                'success' => false,
                'data' => $e->getMessage()
            ];

            return response()->json($response,500);
        }
    }

    /**
     *
     * @param  \Illuminate\Http\Request   $request
     * @return JsonResponse
     */

    public function login(Request $request){
        try {
            $validator = Validator::make($request->all(),[
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if($validator->fails()){
                $response = [
                    'success' => false,
                    'message' => $validator->errors()
                ];

                return response()->json($response, 400);
            }

            if(Auth::attempt(['email' => $request->email,'password' => $request->password])){
                $user = Auth::user();

                $success['token'] = $user->createToken('Myapp')->plainTextToken;
                $success['name'] = $user->name;

                $response = [
                    'success' => true,
                    'data' => $success
                ];

                return response()->json($response,200);
            }

            $response = [
                'success' => false,
                'message' => ['message'=>['Email ou mot de passe invalide']]
            ];

            return response()->json($response, 400);

        } catch (\Exception $e) {
            $response = [
                'success' => false,
                'data' => $e->getMessage()
            ];

            return response()->json($response,500);
        }
    }
}
