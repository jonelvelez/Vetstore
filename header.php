<?php include 'signup.php'; ?>
<?php include 'login.php'; ?>


<?php

    //Client User ID
    $userId = $_SESSION['UserId'];

    $sqlPetData = "SELECT * FROM pet_reg WHERE user_id = '$userId'";
    $user = $con->query($sqlPetData) or die ($con->error);

    if($user->num_rows > 0) {

        $array = array();

        while($rows = $user->fetch_assoc()) {

            $petname = $rows["pet_name"];

            $array[] = $petname;
         
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
                
          <?php if(!isset($_SESSION['UserLogin'])){?>

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
      <div class="modal-body">
          <form >
             <div class='container-fluid'>
                <div class='row '>
                      <div class="profilebody">
                   
                        <select id="">
                          <?php foreach($array as $data): ?>
                        
                             <option value="<?php echo $data ?>"><?php echo $data ?></option>
                     
                          <?php endforeach ?>
                        </select>
              
                      </div>
                  </div>  
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary closexx" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>







</nav>


