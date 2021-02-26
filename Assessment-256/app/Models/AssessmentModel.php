<?php
namespace App\Models;

class AssessmentModel
{

    //fields to hold information about an assessment
    private $name;
    private $startDate;
    private $dueDate;
    private $pointValue;
    
    //full-args constructor
    public function __construct($name, $startDate, $dueDate, float $pointValue)
    {
        $this->name = $name;
        $this->startDate = $startDate;
        $this->dueDate = $dueDate;
        $this->pointValue = $pointValue;
    }
    
    //getters(read-only model)
    public function getName()
    {
        return $this->name;
    }
    public function getStartDate()
    {
        return $this->startDate;
    }
    public function getDueDate()
    {
        return $this->dueDate;
    }
    public function getPointValue()
    {
        return $this->pointValue;
    }
}

