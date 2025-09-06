<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;
use Illuminate\Support\Facades\Auth;

class UseController extends Controller
{
    public function login(Request $request)
    {   
        $email = $request->input('email');
       
        $password = $request->input('password');
       // dd($request->input('password'));
        //dd(Hash::make($request->input('password')));
        
        $user = login::where('email', $email)
        ->where('password', $password)
        ->first();
        if (!$user ) {
            return response()->json([
                'message' => 'Invalid credentials'
            ], 401);
        }
        return response()->json([
            'message' => 'Login successful',
            'user' => $user,
            'poste' => $user->poste ,
            'id' => $user->id ,
        ], 200);
      //  dd($user);
    }
    public function logout()
    {
        // Clear the user's session manually
        session()->flush();
        session()->regenerate();
    
        // Return a JSON response indicating successful logout
        return response()->json(['message' => 'Logout successful']);
    }
    
    public function checkAuthentication(Request $request)
{
    if ($request->session()->has('user')) {
        return response()->json([
            'isAuthenticated' => true
        ], 200);
    }
    
    return response()->json([
        'isAuthenticated' => false
    ], 401);
}
public function affichuser()
{
    $Login = Login::all();
    return response()->json($Login);
} 
      
}
