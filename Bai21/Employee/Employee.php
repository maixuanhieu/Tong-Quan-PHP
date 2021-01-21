<?php
namespace employee;
class employee
{
    private $lastName;
    private $firstName;
    private $dateofBirth;
    private $address;
    private $jobs;

    public function __construct($lastName = NULL,$firstName = NULL, $dateofBirth=NULL,$address=NULL,$jobs=NULL)
    {
       $this->lastName = $lastName; 
       $this->firstName = $firstName;
       $this->dateofBirth = $dateofBirth;
       $this->address = $address;
       $this->jobs = $jobs;
    }

    public function setlastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getlastName()
    {
        return $this->lastName;
    }

    public function setfirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getfirstName()
    {
        return $this->firstName;
    }

    public function setdateofBirth($dateofBirth)
    {
        $this->dateofBirth = $dateofBirth;
    }

    public function getdateofBirth()
    {
        return $this->dateofBirth;
    }

    public function setaddress($address)
    {
        $this->address = $address;
    }

    public function getaddress()
    {
        return $this->address;
    }

    public function setjobs($jobs)
    {
        $this->jobs = $jobs;
    }

    public function getjobs()
    {
        return $this->jobs;
    }
}