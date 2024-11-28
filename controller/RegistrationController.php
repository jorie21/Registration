<?php
require dirname(__DIR__) . '/model/registrationModel.php';
use App\Models\RegistrationModel;

$regModel = new RegistrationModel();


if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $name = $_POST['name'];
    $age = $_POST['age'];
    $program = $_POST['program'];
    $yearSec = $_POST['yearSection'];

    $insertdata = $regModel->insertData($name, $age, $program, $yearSec);
   
    if($insertdata){
        echo '<script>alert(`Successfully inserted`);</script>';
    }
    else{
        echo '<script>alert(`Failed insert`);</script>';
    }
    
}
require __DIR__ . '/../views/registrationForm.php';

?>