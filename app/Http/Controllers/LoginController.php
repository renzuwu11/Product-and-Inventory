<?php

namespace App\Http\Controllers;

use App\Models\Employee; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session; 

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Extract 'EmpEmail' and 'password' from the request
        $credentials = $request->only('EmpEmail', 'password');

        // Retrieve an employee record from the database based on 'EmpEmail'
        $employee = Employee::where('EmpEmail', $credentials['EmpEmail'])->first();
        
        // Check if the retrieved employee exists and if the provided password matches
        if ($employee && Hash::check($credentials['password'], $employee->password)) {
            
            // If successful, log in the employee using Laravel's Auth::login()
            Session::put('logged_in', true);
            Auth::login($employee);
            
            // If successful, log in the employee using Laravel's Auth::login()
            return redirect()->intended('/loading');
        } else {
            // If credentials are invalid, redirect back to the login page with an error message
            return redirect('/')->with('error', 'Invalid credentials');
        }
    }
}
