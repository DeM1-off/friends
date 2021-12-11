<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     
    public function index()
    {

        if (Auth::check()) {
            $users = User::where('id', '=', Auth::user()->id)->firstOrFail();
            $friends = 1;
    
            } else {
                $users ='';  
                $friends = 0;  
            }
    
         
    
            $alllists = User::all();
        
            
            return view('welcome', compact(['users', 'friends','alllists']));
        
    }
}
