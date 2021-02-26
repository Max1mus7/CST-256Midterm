<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssessmentModel;
use App\Services\BusinessService;

class AssessmentController extends Controller
{
    //field used to hold businessService object
    private $businessService;
    
    //method to handle information taken from a form on the assessment view
    public function index(Request $request)
    {
        //takes data from form
        $name = $request->input('name');
        $startDate = $request->input('startDate');
        $dueDate = $request->input('dueDate');
        $pointValue = $request->input('pointValue');
        //adds data into a model
        $assessment = new AssessmentModel($name, $startDate, $dueDate, $pointValue);
        $this->businessService = new BusinessService();
        //tests data in the model to see if the name matches "CST-256"
        $passed = $this->businessService->checkString($assessment);
        //passes the result of the check to the assessment page
        $data = ['passed' => $passed];
        return view('assessment')->with($data);
    }
}
