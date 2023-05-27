<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

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
    // public function index()
    // {
    //     $tickets = Ticket::all();

    //     return view('body', [
    //         'tickets' => $tickets
    //     ]);
    // }
    public function index()
    {
        
        return view('body');
    }
    public function search(Request $request)
{
    $from = $request->input('from');
    $to = $request->input('to');
    $date = $request->input('date');

    $tickets = Ticket::where('from', 'LIKE', "%{$from}%")
        ->where('to', 'LIKE', "%{$to}%")
        ->whereDate('date', $date)
        ->get();

    return view('home', [
        'tickets' => $tickets
    ]);
}
   
    
}
