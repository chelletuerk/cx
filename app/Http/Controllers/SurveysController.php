<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Survey;

class SurveysController extends Controller
{
    public function index()
    {
    	$user = Auth::user();
    	return view('welcome',compact('user'));
    }

    public function add()
    {
    	return view('add');
    }

    public function create(Request $request)
    {
    	$survey = new Survey();
    	$survey->description = $request->description;
    	$survey->user_id = Auth::id();
    	$survey->save();
    	return redirect('/'); 
    }

    public function edit(Survey $survey)
    {

    	if (Auth::check() && Auth::user()->id == $survey->user_id)
        {            
                return view('edit', compact('survey'));
        }           
        else {
             return redirect('/');
         }            	
    }

    public function update(Request $request, Survey $survey)
    {
    	if(isset($_POST['delete'])) {
    		$survey->delete();
    		return redirect('/');
    	}
    	else
    	{
    		$survey->description = $request->description;
	    	$survey->save();
	    	return redirect('/'); 
    	}    	
    }
}