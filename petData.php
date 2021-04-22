<?php include 'signup.php'; ?>
<?php include 'login.php'; ?>

<?php

if(!isset($_SESSION)){
    session_start();
}

include_once("connections/connection.php");
$con = connection();

//Client User ID
$userId = $_SESSION['UserId'];

    $sqlPetData = "SELECT * FROM pet_reg WHERE user_id = '$userId'";
    $user = $con->query($sqlPetData) or die ($con->error);
 
    if($user->num_rows > 0) {

        while($rows = $user->fetch_assoc()) {

            $petName = $rows["pet_name"];
            $petBreed = $rows["pet_breed"];
            $petBirthday = $rows["pet_birthday"];
            $specialMarking = $rows["special_marking"];

            // $petsName = str_split($petName);
            // $_SESSION['petName'] = $petName;
            

            echo "<div class='pet-info'>
                        <div class='pet-details'>
                            <select name='' id=''>
                                
                                <option value='".$petName."'>$petName</option>
                            </select>
                        </div>
                     </div>";

        }

        
            
    }
    
?>

