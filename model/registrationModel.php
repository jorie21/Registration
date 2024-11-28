<?php
namespace App\Models;

    class RegistrationModel{
        private $registrationCollection;

        public function __construct()
        {
            $client = require dirname(__DIR__) .'/config/database.php';

            $this->registrationCollection = $client->RegistrationDb->RegistrationForm;
        }
        public function insertData($name, $age, $program, $yearSec) {
            try {
                $result = $this->registrationCollection->insertOne([
                    'Name' => $name,
                    'Age' => $age,
                    'Program' => $program,
                    'YearSec' => $yearSec
                ]);
        
                return $result->getInsertedId(); 
            } catch (\Throwable $th) {
                echo '<script>alert("Insert Error: ' . $th->getMessage() . '");</script>';
                error_log("Insert Error: " . $th->getMessage());
                return false;
            }
        }
        
        
    } 

?>