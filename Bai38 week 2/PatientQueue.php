<?php
include "Patient.php";

class PatientQueue {
    private $firstPatient;
    private $lastPatient;
    private $count;
    private $cured;

    public function __construct()
    {
        $this->firstPatient;
        $this->lastPatient;
        $this->count = 0;
        $this->cured = [];
    }

    public function size()
    {
        return $this->count;
    }

    public function isEmpty()
    {
        return ($this->count == 0);
    }

    public function enqueue($name, $code)
    {
        $patient = new Patient($name, $code);
        if ($this->isEmpty())
        {
            $this->firstPatient = $patient;
        }
        else 
        {
            $this->lastPatient->next = $patient;
        }
        $this->lastPatient = $patient;
        $this->count++;
    }

    public function dequeue()
    {
        if ($this->isEmpty()) return NULL;
        if ($this->findPatient() == NULL) 
        {
            $curePatient = $this->firstPatient;
            $this->firstPatient = $this->firstPatient->next;
        }
        else
        {
            $curePatient = $this->findPatient()->next;
            $this->findPatient()->next = $curePatient->next;
        }
        $this->cured[] = $curePatient;
        $this->count--;
        return "</br>Cure for " . $curePatient->name . ", code: " . $curePatient->code . "</br>";
    }

    public function findPatient() 
    {   
        $previousPatient = NULL;
        $notedPatient = NULL;
        $currentPatient = $this->firstPatient;
        $minPatient = $this->firstPatient;
        while ($currentPatient != NULL)
        {
            if ($currentPatient->code < $minPatient->code)
            {
                $minPatient = $currentPatient;
                $notedPatient = $previousPatient;
            }
            $previousPatient = $currentPatient;
            $currentPatient = $currentPatient->next;
        }
        return $notedPatient;
    }

    public function __toString()
    {
        $text = "</br>Patient List: </br>";
        if ($this->isEmpty()) $text .= "No patient </br>";
        else
        {
            $currentPatient = $this->firstPatient;
            do {
                $text .= "Patient's name: " . $currentPatient->name . ", code: " . $currentPatient->code . "</br>";
                $currentPatient = $currentPatient->next;
            }
            while ($currentPatient != NULL);
        }
        return $text;
    }

    public function printCuredList()
    {
        echo "</br>Cured List: </br>";
        for ($i = 0; $i < count($this->cured); $i++)
        {
            echo "Name: " . $this->cured[$i]->name . ", code: " . $this->cured[$i]->code . "</br>";  
        }
    }
}