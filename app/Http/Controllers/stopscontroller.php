<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Stops;
use App\Models\Student;
use App\Models\Studentstops;
class stopscontroller extends Controller
{
   
    public function index(){
        $stops= Stops::all();
        //return view('index', ['stops'=>$stops]);
        return redirect()->route('stops.showList');
        dd('here');
    }
    public function create()
    {
         return view('stops.createform');
         dd('here');
    }
    public function store(Request $request)
    {
    // Create a new instance of the Stops model
        $stop = new Stops();
        stop::create($request->all());
        // Fill the model with data from the request
        $stop->student_name = $request->input('studentName');
        $stop->contact = $request->input('contact');
        $stop->stop_name = $request->input('stopName');
        $stop->fee = $request->input('fee');
        $stop->time = $request->input('time');
        dd('here');


        // Save the stops data to the database
        $stop->save();

        // Redirect the user to a relevant page (e.g., index page of stops)

        return redirect()->route('stops.showList');
    }
    public function showList()
    {
        // Logic to fetch the list of students from the database
        //$stops= Stops::all();
       // $stops= Stops::with('Student')->get();
        //dd($stops);
        // Return the view with the list of students
        //return view('showlist', compact('stops'));
        // Retrieve data by manually joining the tables
        $stops = Stops::join('_studentstops', '_stops.id', '=', '_studentstops.stops_id')
        ->join('_student', '_studentstops.student_id', '=', '_student.id')
        ->select('_stops.*', '_student.studentname', '_student.contact')
        ->get();

// Return the view with the stops data
return view('showlist', compact('stops'));
     }


}
