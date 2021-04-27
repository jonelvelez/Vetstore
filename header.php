<?php include 'signup.php'; ?>
<?php include 'login.php'; ?>


<?php

    //Pet Data Details
    if(isset($_SESSION['UserId'])) {

      $userId = $_SESSION['UserId'];
  
      $sqlPetData = "SELECT * FROM pet_reg WHERE user_id = '$userId'";
      $user = $con->query($sqlPetData) or die ($con->error);
  
        if($user->num_rows > 0) {
    
            $petId_array = array();
            $petnames_array = array();
            $petbreeds_array = array();
            $petbirthday_array = array();
            $specialMarkings = array();
    
            while($rows = $user->fetch_assoc()) {
    
                $petId = $rows["id"];
                $petName = $rows["pet_name"];
                $petBreed = $rows["pet_breed"];
                $petBirthday = $rows["pet_birthday"];
                $specialMarking = $rows["special_marking"];
              
                $petId_array[] = $petId;
                $petnames_array[] = $petName;
                $petbreeds_array[] = $petBreed;
                $petbirthday_array[] = $petBirthday;
                $specialMarkings[] = $specialMarking;
            
            } 
      
        } 

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cerulean/bootstrap.min.css" integrity="sha384-3fdgwJw17Bi87e1QQ4fsLn4rUFqWw//KU0g8TvV6quvahISRewev6/EocKNuJmEw" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
    <title>Homepage</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog.php">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="appointment.php">Appointment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <ul class="navbar-nav mr-auto">
          <?php if(!isset($_SESSION['UserLogin'])){?>

              <li class="nav-item" data-toggle="modal" data-target="#login">
                <span>Login</span> 
              </li>

              <?php } else{ ?>
                
              <li id="navlogin" class="nav-item" data-toggle="modal" data-target="#profileModal">
                <span>Welcome: </span>
                <span><?php echo $_SESSION['UserLogin']; ?></span>
                <span><?php echo $_SESSION['Userlname']; ?></span>
              </li>

          <?php } ?>
       
            &nbsp;
                
          <?php if(!isset($_SESSION['UserLogin'])){ ?>

            <li class="nav-item" data-toggle="modal" data-target="#signUp">
               <span>SignUp</span>
            </li>

          <?php } else{ ?>

            <li class="nav-item">
               <span><a href="logout.php"> Logout </a></span>
            </li>

          <?php } ?>
          
        </ul>
    </form>

  </div>

  
  <!-- SignUp Modal -->
  <div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="signUpLabel">Registration Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <div class="card" style="width: 100%;">

            <div class="card-body">

                <form action="" method="post">
                    <div class="form-outline mt-3">
                        <input class="form-control" type="text" name="firstname" id="firstname formControlDefault" required>
                        <label class="form-label" for="firstname">First Name</label>
                    </div>

                    <div class="form-outline mt-3">
                        <input class="form-control" type="text" name="lastname" id="lastname formControlDefault" required>
                        <label class="form-label" for="lastname">Last Name</label>
                    </div>

                    <label class="form-label mt-3" for="birthday">Birthday</label>
                    <div class="form-outline">
                        <input class="form-control" type="date" name="birthday" id="birthday formControlDefault" required>
                    </div>

                    <label class="mt-3" for="">Gender</label>
                        <select name="gender" id="gender" class="form-select" aria-label="Default select example">
                            <option value="Male" selected>Male</option>
                            <option value="Female">Female</option>
                        </select>

                    <div class="form-outline mt-3">
                        <input class="form-control" type="text" name="address" id="address formControlDefault" required>
                        <label class="form-label" for="address">Address</label>
                    </div>

                    <div class="form-outline mt-3">
                        <input class="form-control" type="number" name="phoneNum" id="phoneNum formControlDefault" required>
                        <label class="form-label" for="phoneNum">Phone Number</label>
                    </div>

                    <div class="form-outline mt-3">
                        <input class="form-control" type="email" name="email" id="signup-email formControlDefault" required>
                        <label class="form-label" for="email">E-mail</label>
                    </div>

                    <div class="form-outline mt-3">
                        <input class="form-control" type="password" name="password" id="signup-password formControlDefault" required>
                        <label class="form-label" for="password">Password</label>
                    </div>
                    
                    <input class="btn btn-primary mt-3" type="submit" name="submit" value="Submit Form">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
            
            </div>

        </div>

    </div>
  </div>
</div>

<!-- End of SignUp Modal -->

<!-- Login Modal -->

<div class="modal fade login-modal" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <form action="" method="post">
        <div class="modal-body">
            <div class="login_failed"></div>
            <div class="form-outline mt-3">
                <input class="form-control" type="email" name="email" id="login-email formControlDefault" required>
                <label class="form-label" for="email">E-mail</label>
            </div>
            <div class="form-outline mt-3">
                <input class="form-control" type="password" name="password" id="login-password formControlDefault" required>
                <label class="form-label" for="password">Password</label>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="login" class="btn btn-primary" id="btn-login">Login</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      
    </form>

    </div>
  </div>
</div>

<!-- End of Login Modal -->

<!-- Profile Modal -->

<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow-x: hidden;">
          <form >
            <div class="container d-flex justify-content-end">
              <div class="row">
                <div class="col-lg-12">
                      <select class="form-select form-select-sm" name="users" onchange="petData(this.value)" aria-label="Default select example">
                    
                          <?php foreach( $petnames_array as $index => $pet_name): ?>
             
                             <option value="<?php echo $petId_array[$index];?>"><?php echo $pet_name ?></option>

                          <?php endforeach ?>
                      </select>
                  </div>
              </div>
            </div>
             <div class='container d-flex justify-content-center'>
                <div class='row'>
                    <div class="col-lg-12">
                      <!-- Ajax Output Request  -->
                      <div class="record-details">
                      <div class='record-image'>
                          <img src='https://via.placeholder.com/150' alt=''>
                      </div>
                      <div class='info-record'>
                          <h2><?php echo empty($petnames_array) ? "Pet name": $petnames_array[0] ?></h2>
                          <span><?php echo empty($petbreeds_array) ? "Pet breed": $petbreeds_array[0] ?></span>
                          <span><?php echo empty($petbirthday_array) ? "Pet birthday": $petbirthday_array[0] ?></span>
                          <span><?php echo empty($specialMarkings) ? "Special Marking": $specialMarkings[0] ?></span>
                      </div>
                      </div>
                      <div class="record-vaccination pt-5">
                        <div class="container-fluid p-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>Recommended Vaccination Schedule From the Humane Society</p>
                                </div>
                                <div class="table-wrapper">
                                <table class="table table-bordered text-center">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Vaccine</th>
                                        <th scope="col" colspan="5">Immunization Dates</th>
                                        <th scope="col" colspan="2">Veterinarian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td >Mark</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">4</th>
                                        <td>Larry</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">5</th>
                                        <td>Larry</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td colspan="2"></td>
                                        </tr>
                                        <tr>
                                        <th scope="row">6</th>
                                        <td>Larry</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td colspan="2"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
                      <!-- End of Ajax Output Request -->
                    </div>
                  </div>  
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</nav>
