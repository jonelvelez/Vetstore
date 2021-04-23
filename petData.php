<?php include 'signup.php'; ?>
<?php include 'login.php'; ?>

<?php

if(!isset($_SESSION)){
    session_start();
}

include_once("connections/connection.php");
$con = connection();

//Client User ID

// $userId = $_SESSION['UserId'];


$petId = $_GET['q'];

    $sqlPetData = "SELECT * FROM pet_reg WHERE id = '$petId'";
    $user = $con->query($sqlPetData) or die ($con->error);

    if($user->num_rows > 0) {

            while($rows = $user->fetch_assoc()) {

            $petName = $rows["pet_name"];
            $petBreed = $rows["pet_breed"];
            $petBirthday = $rows["pet_birthday"];
            $specialMarking = $rows["special_marking"];

            // $petsName = str_split($petName);
            // $_SESSION['petName'] = $petName;
            
            echo "<p>" . $petName ."</p>","<p>". $petBreed . "</p>";


        }
     
    }
    
    
?>

