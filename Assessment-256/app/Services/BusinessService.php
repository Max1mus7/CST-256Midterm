<?php
namespace App\Services;

use App\Models\AssessmentModel;

class BusinessService
{

    //no need to put anything inside of constructor, no DB layer
    public function __construct()
    {
        
    }
    
    //checks the input AssessmentModel object to see if any of the fields of the object match "CST-256"
    public function checkString(AssessmentModel $assessment)
    {
        //because name is the only field that could possibly match the string, only check the name field
        if($assessment->getName() == "CST-256")
        {
            return true;
        }
        else 
        {
            return false;
        }
    }
}

