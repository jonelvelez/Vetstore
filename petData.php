<?php include 'signup.php'; ?>
<?php include 'login.php'; ?>

<?php

if(!isset($_SESSION)){
    session_start();
}

include_once("connections/connection.php");
$con = connection();

//Ajax Data Request
$petId = $_GET['q'];

    $sqlPetData = "SELECT * FROM pet_reg WHERE id = '$petId'";
    $user = $con->query($sqlPetData) or die ($con->error);

    if($user->num_rows > 0) {

            while($rows = $user->fetch_assoc()) {

            $petName = $rows["pet_name"];
            $petBreed = $rows["pet_breed"];
            $petBirthday = $rows["pet_birthday"];
            $specialMarking = $rows["special_marking"];

                echo "<div class='record-image'>
                            <img src='https://via.placeholder.com/150' alt=''>
                        </div>
                        <div class='info-record'>
                            <h2>". $petName ."</h2>
                            <span>". $petBreed ."</span>
                            <span>". $petBirthday ."</span>
                            <span>". $specialMarking ."</span>
                        </div>" ;  
                }
     
        }
    
?>

