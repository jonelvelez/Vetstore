
<?php include 'header.php'; ?>
<?php 

include_once("connections/connection.php");
$con = connection();



if(isset($_POST['regSubmit'])){

    if(isset($_SESSION['UserLogin'])){

        $pname = $_POST['pet-name'];
        $pbreed = $_POST['pet-breed'];
        $pbirthday = $_POST['pet-birthday'];
        $specialMarking = $_POST['pet-marking'];

        $userId = $_SESSION['UserId'];
        $userFname = $_SESSION['UserLogin'];
        $userLname = $_SESSION['Userlname'];
        $userEmail =  $_SESSION['UserEmail'];

      

        $sql = "INSERT INTO `pet_reg`(`pet_name`, `pet_breed`, `pet_birthday`, `special_marking`, `user_id`, `user_fname`, `user_lname`, `user_email`) VALUES ('$pname', '$pbreed', '$pbirthday' , '$specialMarking', '$userId', '$userFname', '$userLname', '$userEmail')";

        $con->query($sql) or die ($con->error);

        echo $userId;
        // echo header("Location: profile.php");
    } else {

        echo "<div class='alert alert-danger'>
        <strong>You need to login first.</strong>
        </div>";
     
    }

}


?>


<div class="banner">
    <div class="container-fluid">
        <div class="row">
            <h1>Header</h1>
        </div>
    </div>
</div>

<div class="appointment-form pt-5">
    <div class="container">
        <div class="row">
            <div class="card">
                <h2 class="card-header">Appointment Form</h2>
                <div class="card-body">
                  
                    <h5 class="card-title">Pet Registration</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <div class="pet-details">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form action="" method="post" id="reg-form">
                                        <div class="form-outline mt-3">
                                            <input class="form-control" type="text" name="pet-name" id="pet-name formControlDefault" required>
                                            <label class="form-label" for="pet-name">Name</label>
                                        </div>
                                        <div class="form-outline mt-3">
                                            <input class="form-control" type="text" name="pet-breed" id="pet-breed formControlDefault" required>
                                            <label class="form-label" for="pet-breed">Breed</label>
                                        </div>
                                        <label class="form-label mt-3" for="pet-birthday">Birthday</label>
                                        <div class="form-outline">
                                            <input class="form-control" type="date" name="pet-birthday" id="pet-birthday formControlDefault" required>
                                        </div>
                                        <div class="form-outline mt-3">
                                            <input class="form-control" type="text" name="pet-marking" id="pet-marking formControlDefault" required>
                                            <label class="form-label" for="pet-marking">Special Marking</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-4">
                                    <div class="pet-image">
                                        <img src="images/golden-retriever.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vaccination pt-5">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>Recommended Vaccination Schedule From the Humane Society</p>
                                </div>
                                <!-- <div class="col-lg-6 text-right">
                                    <p>Date: <input type="text" id="datepicker"></p>
                               </div> -->
                                <table class="table table-bordered text-center" style="table-layout: fixed; width: 100%;">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Vaccine</th>
                                        <th scope="col" colspan="5">Immunization Dates</th>
                                        <th scope="col">Veterinarian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">4</th>
                                        <td>Larry</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">5</th>
                                        <td>Larry</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">6</th>
                                        <td>Larry</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-btn">
                        <div class="container-fluid">
                     
                            <input class="btn btn-primary mt-3" type="submit" name="regSubmit" value="Submit Form" form="reg-form">
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>