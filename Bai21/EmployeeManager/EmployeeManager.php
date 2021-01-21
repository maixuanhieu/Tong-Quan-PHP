<?php
namespace employeeManager;
class employeeManager
{
   protected  $list_employee = [];
   private $employee;
   public function __construct()
    {
        $this->employee = [];
    }

    public function add($lastName,$fisrtName,$bd,$address,$job) {
        $this->list_employee = [
            'lastName' => $lastName,
            'fisrtName' => $fisrtName,
            'bd' => $bd,
            'address' => $address,
            'job' => $job,
        ];
    }

    public function getEmployee()
    {
        return $this->list_employee;
       
   }
}
?>