<?php 

include_once("connections/connection.php");
include_once("addnewCard.php");


$con = connection();

$id = $_GET['ID'];

$pet_sql = "SELECT * FROM pet_reg WHERE id = $id";
$pets = $con->query($pet_sql) or die ($con->error);
$pet = $pets->fetch_assoc();


$healthcard_sql = "SELECT * FROM pet_healthcard WHERE pet_id = $id";
$healthcard_data = $con->query($healthcard_sql) or die ($con->error);
$row_item = $healthcard_data->fetch_assoc();

//Add new health card
if(isset($_POST['addnewcard'])){
  addnewCard();
}


//Update the content of health card
if(isset($_POST['updateCard'])){

  //Deworming Data Table

  $d_row1_date = $_POST['d_row1_date'];   
  $d_row1_weight = $_POST['d_row1_weight'];   
  $d_row1_against = $_POST['d_row1_against'];   
  $d_row1_manufacturer = $_POST['d_row1_manufacturer'];   
  $d_row1_ldtnumber = $_POST['d_row1_ldtnumber'];   
  $d_row1_vet = $_POST['d_row1_vet'];

  $d_row2_date = $_POST['d_row2_date'];   
  $d_row2_weight = $_POST['d_row2_weight'];   
  $d_row2_against = $_POST['d_row2_against'];   
  $d_row2_manufacturer = $_POST['d_row2_manufacturer'];   
  $d_row2_ldtnumber = $_POST['d_row2_ldtnumber'];   
  $d_row2_vet = $_POST['d_row2_vet'];  

  $d_row3_date = $_POST['d_row3_date'];   
  $d_row3_weight = $_POST['d_row3_weight'];   
  $d_row3_against = $_POST['d_row3_against'];   
  $d_row3_manufacturer = $_POST['d_row3_manufacturer'];   
  $d_row3_ldtnumber = $_POST['d_row3_ldtnumber'];   
  $d_row3_vet = $_POST['d_row3_vet']; 

  $d_row4_date = $_POST['d_row4_date'];   
  $d_row4_weight = $_POST['d_row4_weight'];   
  $d_row4_against = $_POST['d_row4_against'];   
  $d_row4_manufacturer = $_POST['d_row4_manufacturer'];   
  $d_row4_ldtnumber = $_POST['d_row4_ldtnumber'];   
  $d_row4_vet = $_POST['d_row4_vet']; 

  $d_row5_date = $_POST['d_row5_date'];   
  $d_row5_weight = $_POST['d_row5_weight'];   
  $d_row5_against = $_POST['d_row5_against'];   
  $d_row5_manufacturer = $_POST['d_row5_manufacturer'];   
  $d_row5_ldtnumber = $_POST['d_row5_ldtnumber'];   
  $d_row5_vet = $_POST['d_row5_vet']; 

  $d_row6_date = $_POST['d_row6_date'];   
  $d_row6_weight = $_POST['d_row6_weight'];   
  $d_row6_against = $_POST['d_row6_against'];   
  $d_row6_manufacturer = $_POST['d_row6_manufacturer'];   
  $d_row6_ldtnumber = $_POST['d_row6_ldtnumber'];   
  $d_row6_vet = $_POST['d_row6_vet']; 

  //Vaccine Data Table

  $v_row1_date = $_POST['v_row1_date'];   
  $v_row1_weight = $_POST['v_row1_weight'];   
  $v_row1_against = $_POST['v_row1_against'];   
  $v_row1_manufacturer = $_POST['v_row1_manufacturer'];   
  $v_row1_ldtnumber = $_POST['v_row1_ldtnumber'];   
  $v_row1_vet = $_POST['v_row1_vet'];

  $v_row2_date = $_POST['v_row2_date'];   
  $v_row2_weight = $_POST['v_row2_weight'];   
  $v_row2_against = $_POST['v_row2_against'];   
  $v_row2_manufacturer = $_POST['v_row2_manufacturer'];   
  $v_row2_ldtnumber = $_POST['v_row2_ldtnumber'];   
  $v_row2_vet = $_POST['v_row2_vet'];

  $v_row3_date = $_POST['v_row3_date'];   
  $v_row3_weight = $_POST['v_row3_weight'];   
  $v_row3_against = $_POST['v_row3_against'];   
  $v_row3_manufacturer = $_POST['v_row3_manufacturer'];   
  $v_row3_ldtnumber = $_POST['v_row3_ldtnumber'];   
  $v_row3_vet = $_POST['v_row3_vet'];

  $v_row4_date = $_POST['v_row4_date'];   
  $v_row4_weight = $_POST['v_row4_weight'];   
  $v_row4_against = $_POST['v_row4_against'];   
  $v_row4_manufacturer = $_POST['v_row4_manufacturer'];   
  $v_row4_ldtnumber = $_POST['v_row4_ldtnumber'];   
  $v_row4_vet = $_POST['v_row4_vet'];

  $v_row5_date = $_POST['v_row5_date'];   
  $v_row5_weight = $_POST['v_row5_weight'];   
  $v_row5_against = $_POST['v_row5_against'];   
  $v_row5_manufacturer = $_POST['v_row5_manufacturer'];   
  $v_row5_ldtnumber = $_POST['v_row5_ldtnumber'];   
  $v_row5_vet = $_POST['v_row5_vet'];

  $v_row6_date = $_POST['v_row6_date'];   
  $v_row6_weight = $_POST['v_row6_weight'];   
  $v_row6_against = $_POST['v_row6_against'];   
  $v_row6_manufacturer = $_POST['v_row6_manufacturer'];   
  $v_row6_ldtnumber = $_POST['v_row6_ldtnumber'];   
  $v_row6_vet = $_POST['v_row6_vet'];

  $healthcard_update = "UPDATE `pet_healthcard` SET `d_row1_date`= '$d_row1_date',`d_row1_weight`= '$d_row1_weight',`d_row1_against`= '$d_row1_against',`d_row1_manufacturer`= '$d_row1_manufacturer',`d_row1_ldtnumber`= '$d_row1_ldtnumber',`d_row1_vet`= '$d_row1_vet',`d_row2_date`= '$d_row2_date',`d_row2_weight`= '$d_row2_weight',`d_row2_against`= '$d_row2_against',`d_row2_manufacturer`= '$d_row2_manufacturer',`d_row2_ldtnumber`= '$d_row2_ldtnumber',`d_row2_vet`= '$d_row2_vet',`d_row3_date`='$d_row3_date',`d_row3_weight`= '$d_row3_weight',`d_row3_against`= '$d_row3_against',`d_row3_manufacturer`='$d_row3_manufacturer',`d_row3_ldtnumber`= '$d_row3_ldtnumber',`d_row3_vet`= '$d_row3_vet',`d_row4_date`= '$d_row4_date',`d_row4_weight`= '$d_row4_weight',`d_row4_against`='$d_row4_against',`d_row4_manufacturer`= '$d_row4_manufacturer',`d_row4_ldtnumber`= '$d_row4_ldtnumber',`d_row4_vet`='$d_row4_vet',`d_row5_date`= '$d_row5_date',`d_row5_weight`= '$d_row5_weight',`d_row5_against`= '$d_row5_against',`d_row5_manufacturer`= '$d_row5_manufacturer',`d_row5_ldtnumber`= '$d_row5_ldtnumber',`d_row5_vet`='$d_row5_vet',`d_row6_date`='$d_row6_date',`d_row6_weight`= '$d_row6_weight',`d_row6_against`= '$d_row6_against',`d_row6_manufacturer`= '$d_row5_manufacturer',`d_row6_ldtnumber`= '$d_row6_ldtnumber',`d_row6_vet`='$d_row6_vet',`v_row1_date`='$v_row1_date',`v_row1_weight`= '$v_row1_weight',`v_row1_against`='$v_row1_against',`v_row1_manufacturer`= '$v_row1_manufacturer',`v_row1_ldtnumber`='$v_row1_ldtnumber',`v_row1_vet`='$v_row1_vet',`v_row2_date`='$v_row2_date',`v_row2_weight`='$v_row2_weight',`v_row2_against`='$v_row2_against',`v_row2_manufacturer`='$v_row2_manufacturer',`v_row2_ldtnumber`='$v_row2_ldtnumber',`v_row2_vet`='$v_row2_vet',`v_row3_date`='$v_row3_date',`v_row3_weight`='$v_row3_weight',`v_row3_against`='$v_row3_against',`v_row3_manufacturer`='$v_row3_manufacturer',`v_row3_ldtnumber`='$v_row3_ldtnumber',`v_row3_vet`='$v_row3_vet',`v_row4_date`='$v_row4_date',`v_row4_weight`='$v_row4_weight',`v_row4_against`='$v_row4_against',`v_row4_manufacturer`='$v_row4_manufacturer',`v_row4_ldtnumber`='$v_row4_ldtnumber',`v_row4_vet`='$v_row4_vet',`v_row5_date`='$v_row5_date',`v_row5_weight`='$v_row5_weight',`v_row5_against`='$v_row5_against',`v_row5_manufacturer`='$v_row5_manufacturer',`v_row5_ldtnumber`='$v_row5_ldtnumber',`v_row5_vet`='$v_row5_vet',`v_row6_date`='$v_row6_date',`v_row6_weight`='$v_row6_weight',`v_row6_against`='$v_row5_against',`v_row6_manufacturer`='$v_row5_manufacturer',`v_row6_ldtnumber`='$v_row6_ldtnumber',`v_row6_vet`='$v_row6_vet' WHERE pet_id = '$id'";

  $con->query($healthcard_update) or die ($con->error);

  echo header("location: vetcardUpdate.php?ID=".$id);
  echo "<div class='alert alert-success' role='alert'> This is a success alert—check it out! </div>";
}

?>



<?php include 'header.php'; ?>


<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">pro sidebar</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">Jhon
            <strong>Smith</strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
              <span class="badge badge-pill badge-warning">New</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Dashboard 1
                    <span class="badge badge-pill badge-success">Pro</span>
                  </a>
                </li>
                <li>
                  <a href="#">Dashboard 2</a>
                </li>
                <li>
                  <a href="#">Dashboard 3</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-shopping-cart"></i>
              <span>E-commerce</span>
              <span class="badge badge-pill badge-danger">3</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Products

                  </a>
                </li>
                <li>
                  <a href="#">Orders</a>
                </li>
                <li>
                  <a href="#">Credit cart</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="far fa-gem"></i>
              <span>Components</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">General</a>
                </li>
                <li>
                  <a href="#">Panels</a>
                </li>
                <li>
                  <a href="#">Tables</a>
                </li>
                <li>
                  <a href="#">Icons</a>
                </li>
                <li>
                  <a href="#">Forms</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Charts</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Pie chart</a>
                </li>
                <li>
                  <a href="#">Line chart</a>
                </li>
                <li>
                  <a href="#">Bar chart</a>
                </li>
                <li>
                  <a href="#">Histogram</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Maps</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Google maps</a>
                </li>
                <li>
                  <a href="#">Open street map</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Documentation</span>
              <span class="badge badge-pill badge-primary">Beta</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Examples</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="#">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
      <div class="page-content">
        <div class="card">
              <h5 class="card-header">Breeder: <?php echo $pet['user_fname'] ?> <?php echo $pet['user_lname'] ?></h5>
              <div class="card-body">
                  <div class="card_record">
                      <div class="card_record-image">
                        <img src="" alt="">
                      </div>
                      <div class="card_record-details">
                        <h2><?php echo $pet['pet_name'] ?></h2>
                        <span><?php echo $pet['pet_breed'] ?></span><br>
                        <span><?php echo $pet['pet_birthday'] ?></span><br>
                        <span><?php echo $pet['special_marking'] ?></span>
                      </div>
                  </div>
                  <div class="record-vaccination pt-5">
                      <div class="container-fluid p-0">
                          <div class="row">
                              <div class="col-lg-6">
                                  <p>Recommended Vaccination Schedule From the Humane Society</p>
                              </div>
                              <div class="col-lg-6">
                                <form action="" method="post">
                                 

                                  <input class="btn btn-primary" type="submit" name="addnewcard" method="POST" value="create new card">


                                </form>
                              </div>
                                <!-- <form action="" method="post" onsubmit="alert('Thanks for Subscribing');"> -->
                                <form action="" method="post">

                                  <div class="table-wrapper">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col" colspan="6"><h2>Anti - Parasitics</h2></th>
                                            </tr>
                                          </thead>
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Date</th>
                                                <th scope="col">Weight</th>
                                                <th scope="col">Against</th>
                                                <th scope="col">Manufacturer</th>
                                                <th scope="col">LDT Number</th>
                                                <th scope="col">Veterinarian</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                              <tr>

                                                <td><input type="date" name="d_row1_date" value="<?php echo $row_item['d_row1_date']?>" <?php echo empty($row_item['d_row1_date']) ? "" : "readonly"; ?>></td>

                                                <?php if($row_item['d_row1_weight'] == "") {?>
                                                <td><input type="text" name="d_row1_weight" value="<?php echo $row_item['d_row1_weight']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row1_weight" value="<?php echo $row_item['d_row1_weight']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row1_against'] == "") {?>
                                                <td><input type="text" name="d_row1_against" value="<?php echo $row_item['d_row1_against']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row1_against" value="<?php echo $row_item['d_row1_against']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row1_manufacturer'] == "") {?>
                                                <td><input type="text" name="d_row1_manufacturer" value="<?php echo $row_item['d_row1_manufacturer']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row1_manufacturer" value="<?php echo $row_item['d_row1_manufacturer']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row1_ldtnumber'] == "") {?>
                                                <td><input type="text" name="d_row1_ldtnumber" value="<?php echo $row_item['d_row1_ldtnumber']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row1_ldtnumber"value="<?php echo $row_item['d_row1_ldtnumber']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row1_vet'] == "") {?>
                                                <td><input type="text" name="d_row1_vet" value="<?php echo $row_item['d_row1_vet']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row1_vet" value="<?php echo $row_item['d_row1_vet']?>" readonly></td>
                                                <?php } ?>
                                              </tr>
                                              <tr>
                                                <?php if($row_item['d_row2_date'] == "") {?>
                                                <td><input type="date" name="d_row2_date" value="<?php echo $row_item['d_row2_date']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="date" name="d_row2_date" value="<?php echo $row_item['d_row2_date']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row2_weight'] == "") {?>
                                                <td><input type="text" name="d_row2_weight" value="<?php echo $row_item['d_row2_weight']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row2_weight" value="<?php echo $row_item['d_row2_weight']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row2_against'] == "") {?>
                                                <td><input type="text" name="d_row2_against" value="<?php echo $row_item['d_row2_against']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row2_against" value="<?php echo $row_item['d_row2_against']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row2_manufacturer'] == "") {?>
                                                <td><input type="text" name="d_row2_manufacturer" value="<?php echo $row_item['d_row2_manufacturer']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row2_manufacturer" value="<?php echo $row_item['d_row2_manufacturer']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row2_ldtnumber'] == "") {?>
                                                <td><input type="text" name="d_row2_ldtnumber" value="<?php echo $row_item['d_row2_ldtnumber']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row2_ldtnumber" value="<?php echo $row_item['d_row2_ldtnumber']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row2_vet'] == "") {?>
                                                <td><input type="text" name="d_row2_vet" value="<?php echo $row_item['d_row2_vet']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row2_vet" value="<?php echo $row_item['d_row2_vet']?>" readonly></td>
                                                <?php } ?>
                                              </tr>
                                              <tr>
                                              <?php if($row_item['d_row3_date'] == "") {?>
                                                <td><input type="date" name="d_row3_date" value="<?php echo $row_item['d_row3_date']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="date" name="d_row3_date" value="<?php echo $row_item['d_row3_date']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row3_weight'] == "") {?>
                                                <td><input type="text" name="d_row3_weight" value="<?php echo $row_item['d_row3_weight']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row3_weight" value="<?php echo $row_item['d_row3_weight']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row3_against'] == "") {?>
                                                <td><input type="text" name="d_row3_against" value="<?php echo $row_item['d_row3_against']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row3_against" value="<?php echo $row_item['d_row3_against']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row3_manufacturer'] == "") {?>
                                                <td><input type="text" name="d_row3_manufacturer" value="<?php echo $row_item['d_row3_manufacturer']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row3_manufacturer" value="<?php echo $row_item['d_row3_manufacturer']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row3_ldtnumber'] == "") {?>
                                                <td><input type="text" name="d_row3_ldtnumber" value="<?php echo $row_item['d_row3_ldtnumber']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row3_ldtnumber" value="<?php echo $row_item['d_row3_ldtnumber']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row3_vet'] == "") {?>
                                                <td><input type="text" name="d_row3_vet" value="<?php echo $row_item['d_row3_vet']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row3_vet"  value="<?php echo $row_item['d_row3_vet']?>" readonly></td>
                                                <?php } ?>
                                              </tr>
                                              <tr>
                                              <?php if($row_item['d_row4_date'] == "") {?>
                                                <td><input type="date" name="d_row4_date" value="<?php echo $row_item['d_row4_date']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="date" name="d_row4_date" value="<?php echo $row_item['d_row4_date']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row4_weight'] == "") {?>
                                                <td><input type="text" name="d_row4_weight" value="<?php echo $row_item['d_row4_weight']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row4_weight" value="<?php echo $row_item['d_row4_weight']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row4_against'] == "") {?>
                                                <td><input type="text" name="d_row4_against" value="<?php echo $row_item['d_row4_against']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row4_against" value="<?php echo $row_item['d_row4_against']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row4_manufacturer'] == "") {?>
                                                <td><input type="text" name="d_row4_manufacturer" value="<?php echo $row_item['d_row4_manufacturer']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row4_manufacturer" value="<?php echo $row_item['d_row4_manufacturer']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row4_ldtnumber'] == "") {?>
                                                <td><input type="text" name="d_row4_ldtnumber" value="<?php echo $row_item['d_row4_ldtnumber']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row4_ldtnumber" value="<?php echo $row_item['d_row4_ldtnumber']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row4_vet'] == "") {?>
                                                <td><input type="text" name="d_row4_vet" value="<?php echo $row_item['d_row4_vet']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row4_vet" value="<?php echo $row_item['d_row4_vet']?>" readonly></td>
                                                <?php } ?>
                                              </tr>
                                              <tr>
                                              <?php if($row_item['d_row5_date'] == "") {?>
                                                <td><input type="date" name="d_row5_date" value="<?php echo $row_item['d_row5_date']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="date" name="d_row5_date" value="<?php echo $row_item['d_row5_date']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row5_weight'] == "") {?>
                                                <td><input type="text" name="d_row5_weight" value="<?php echo $row_item['d_row5_weight']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row5_weight" value="<?php echo $row_item['d_row5_weight']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row5_against'] == "") {?>
                                                <td><input type="text" name="d_row5_against" value="<?php echo $row_item['d_row5_against']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row5_against" value="<?php echo $row_item['d_row5_against']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row5_manufacturer'] == "") {?>
                                                <td><input type="text" name="d_row5_manufacturer" value="<?php echo $row_item['d_row5_manufacturer']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row5_manufacturer" value="<?php echo $row_item['d_row5_manufacturer']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row5_ldtnumber'] == "") {?>
                                                <td><input type="text" name="d_row5_ldtnumber" value="<?php echo $row_item['d_row5_ldtnumber']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row5_ldtnumber" value="<?php echo $row_item['d_row5_ldtnumber']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row5_vet'] == "") {?>
                                                <td><input type="text" name="d_row5_vet" value="<?php echo $row_item['d_row5_vet']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row5_vet" value="<?php echo $row_item['d_row5_vet']?>" readonly></td>
                                                <?php } ?>
                                              </tr>
                                              <tr>
                                              <?php if($row_item['d_row6_date'] == "") {?>
                                                <td><input type="date" name="d_row6_date" value="<?php echo $row_item['d_row6_date']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="date" name="d_row6_date" value="<?php echo $row_item['d_row6_date']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row6_weight'] == "") {?>
                                                <td><input type="text" name="d_row6_weight" value="<?php echo $row_item['d_row6_weight']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row6_weight" value="<?php echo $row_item['d_row6_weight']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row6_against'] == "") {?>
                                                <td><input type="text" name="d_row6_against" value="<?php echo $row_item['d_row6_against']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row6_against" value="<?php echo $row_item['d_row6_against']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row6_manufacturer'] == "") {?>
                                                <td><input type="text" name="d_row6_manufacturer" value="<?php echo $row_item['d_row6_manufacturer']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row6_manufacturer" value="<?php echo $row_item['d_row6_manufacturer']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row6_ldtnumber'] == "") {?>
                                                <td><input type="text" name="d_row6_ldtnumber" value="<?php echo $row_item['d_row6_ldtnumber']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row6_ldtnumber" value="<?php echo $row_item['d_row6_ldtnumber']?>" readonly></td>
                                                <?php } ?>

                                                <?php if($row_item['d_row6_vet'] == "") {?>
                                                <td><input type="text" name="d_row6_vet" value="<?php echo $row_item['d_row6_vet']?>"></td>
                                                <?php }else { ?>
                                                <td><input class="bg-light" type="text" name="d_row6_vet" value="<?php echo $row_item['d_row6_vet']?>" readonly></td>
                                                <?php } ?>
                                              </tr>
                                        </tbody>
                                    </table>
                                  </div>
                                  <div class="table-wrapper">
                                      <table class="table table-bordered text-center">
                                          <thead>
                                              <tr>
                                                  <th scope="col" colspan="6"><h2>Vaccine</h2></th>
                                              </tr>
                                            </thead>
                                          <thead class="thead-dark">
                                              <tr>
                                                  <th scope="col">Date</th>
                                                  <th scope="col">Weight</th>
                                                  <th scope="col">Against</th>
                                                  <th scope="col">Manufacturer</th>
                                                  <th scope="col">LDT Number</th>
                                                  <th scope="col">Veterinarian</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <?php if($row_item['v_row1_date'] == "") {?>
                                                  <td><input type="date" name="v_row1_date" value="<?php echo $row_item['v_row1_date']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="date" name="v_row1_date" value="<?php echo $row_item['v_row1_date']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row1_weight'] == "") {?>
                                                  <td><input type="text" name="v_row1_weight" value="<?php echo $row_item['v_row1_weight']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row1_weight" value="<?php echo $row_item['v_row1_weight']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row1_against'] == "") {?>
                                                  <td><input type="text" name="v_row1_against" value="<?php echo $row_item['v_row1_against']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row1_against" value="<?php echo $row_item['v_row1_against']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row1_manufacturer'] == "") {?>
                                                  <td><input type="text" name="v_row1_manufacturer" value="<?php echo $row_item['v_row1_manufacturer']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row1_manufacturer" value="<?php echo $row_item['v_row1_manufacturer']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row1_ldtnumber'] == "") {?>
                                                  <td><input type="text" name="v_row1_ldtnumber" value="<?php echo $row_item['v_row1_ldtnumber']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row1_ldtnumber"value="<?php echo $row_item['v_row1_ldtnumber']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row1_vet'] == "") {?>
                                                  <td><input type="text" name="v_row1_vet" value="<?php echo $row_item['v_row1_vet']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row1_vet" value="<?php echo $row_item['v_row1_vet']?>" readonly></td>
                                                  <?php } ?>
                                                </tr>
                                                <tr>
                                                  <?php if($row_item['v_row2_date'] == "") {?>
                                                  <td><input type="date" name="v_row2_date" value="<?php echo $row_item['v_row2_date']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="date" name="v_row2_date" value="<?php echo $row_item['v_row2_date']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row2_weight'] == "") {?>
                                                  <td><input type="text" name="v_row2_weight" value="<?php echo $row_item['v_row2_weight']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row2_weight" value="<?php echo $row_item['v_row2_weight']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row2_against'] == "") {?>
                                                  <td><input type="text" name="v_row2_against" value="<?php echo $row_item['v_row2_against']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row2_against" value="<?php echo $row_item['v_row2_against']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row2_manufacturer'] == "") {?>
                                                  <td><input type="text" name="v_row2_manufacturer" value="<?php echo $row_item['v_row2_manufacturer']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row2_manufacturer" value="<?php echo $row_item['v_row2_manufacturer']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row2_ldtnumber'] == "") {?>
                                                  <td><input type="text" name="v_row2_ldtnumber" value="<?php echo $row_item['v_row2_ldtnumber']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row2_ldtnumber" value="<?php echo $row_item['v_row2_ldtnumber']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row2_vet'] == "") {?>
                                                  <td><input type="text" name="v_row2_vet" value="<?php echo $row_item['v_row2_vet']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row2_vet" value="<?php echo $row_item['v_row2_vet']?>" readonly></td>
                                                  <?php } ?>
                                                </tr>
                                                <tr>
                                                <?php if($row_item['v_row3_date'] == "") {?>
                                                  <td><input type="date" name="v_row3_date" value="<?php echo $row_item['v_row3_date']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="date" name="v_row3_date" value="<?php echo $row_item['v_row3_date']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row3_weight'] == "") {?>
                                                  <td><input type="text" name="v_row3_weight" value="<?php echo $row_item['v_row3_weight']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row3_weight" value="<?php echo $row_item['v_row3_weight']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row3_against'] == "") {?>
                                                  <td><input type="text" name="v_row3_against" value="<?php echo $row_item['v_row3_against']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row3_against" value="<?php echo $row_item['v_row3_against']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row3_manufacturer'] == "") {?>
                                                  <td><input type="text" name="v_row3_manufacturer" value="<?php echo $row_item['v_row3_manufacturer']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row3_manufacturer" value="<?php echo $row_item['v_row3_manufacturer']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row3_ldtnumber'] == "") {?>
                                                  <td><input type="text" name="v_row3_ldtnumber" value="<?php echo $row_item['v_row3_ldtnumber']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row3_ldtnumber" value="<?php echo $row_item['v_row3_ldtnumber']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row3_vet'] == "") {?>
                                                  <td><input type="text" name="v_row3_vet" value="<?php echo $row_item['v_row3_vet']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row3_vet"  value="<?php echo $row_item['v_row3_vet']?>" readonly></td>
                                                  <?php } ?>
                                                </tr>
                                                <tr>
                                                <?php if($row_item['v_row4_date'] == "") {?>
                                                  <td><input type="date" name="v_row4_date" value="<?php echo $row_item['v_row4_date']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="date" name="v_row4_date" value="<?php echo $row_item['v_row4_date']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row4_weight'] == "") {?>
                                                  <td><input type="text" name="v_row4_weight" value="<?php echo $row_item['v_row4_weight']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row4_weight" value="<?php echo $row_item['v_row4_weight']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row4_against'] == "") {?>
                                                  <td><input type="text" name="v_row4_against" value="<?php echo $row_item['v_row4_against']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row4_against" value="<?php echo $row_item['v_row4_against']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row4_manufacturer'] == "") {?>
                                                  <td><input type="text" name="v_row4_manufacturer" value="<?php echo $row_item['v_row4_manufacturer']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row4_manufacturer" value="<?php echo $row_item['v_row4_manufacturer']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row4_ldtnumber'] == "") {?>
                                                  <td><input type="text" name="v_row4_ldtnumber" value="<?php echo $row_item['v_row4_ldtnumber']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row4_ldtnumber" value="<?php echo $row_item['v_row4_ldtnumber']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row4_vet'] == "") {?>
                                                  <td><input type="text" name="v_row4_vet" value="<?php echo $row_item['v_row4_vet']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row4_vet" value="<?php echo $row_item['v_row4_vet']?>" readonly></td>
                                                  <?php } ?>
                                                </tr>
                                                <tr>
                                                <?php if($row_item['v_row5_date'] == "") {?>
                                                  <td><input type="date" name="v_row5_date" value="<?php echo $row_item['v_row5_date']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="date" name="v_row5_date" value="<?php echo $row_item['v_row5_date']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row5_weight'] == "") {?>
                                                  <td><input type="text" name="v_row5_weight" value="<?php echo $row_item['v_row5_weight']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row5_weight" value="<?php echo $row_item['v_row5_weight']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row5_against'] == "") {?>
                                                  <td><input type="text" name="v_row5_against" value="<?php echo $row_item['v_row5_against']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row5_against" value="<?php echo $row_item['v_row5_against']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row5_manufacturer'] == "") {?>
                                                  <td><input type="text" name="v_row5_manufacturer" value="<?php echo $row_item['v_row5_manufacturer']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row5_manufacturer" value="<?php echo $row_item['v_row5_manufacturer']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row5_ldtnumber'] == "") {?>
                                                  <td><input  type="text" name="v_row5_ldtnumber" value="<?php echo $row_item['v_row5_ldtnumber']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row5_ldtnumber" value="<?php echo $row_item['v_row5_ldtnumber']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row5_vet'] == "") {?>
                                                  <td><input type="text" name="v_row5_vet" value="<?php echo $row_item['v_row5_vet']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row5_vet" value="<?php echo $row_item['v_row5_vet']?>" readonly></td>
                                                  <?php } ?>
                                                </tr>
                                                <tr>
                                                <?php if($row_item['v_row6_date'] == "") {?>
                                                  <td><input type="date" name="v_row6_date" value="<?php echo $row_item['v_row6_date']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="date" name="v_row6_date" value="<?php echo $row_item['v_row6_date']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row6_weight'] == "") {?>
                                                  <td><input type="text" name="v_row6_weight" value="<?php echo $row_item['v_row6_weight']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row6_weight" value="<?php echo $row_item['v_row6_weight']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row6_against'] == "") {?>
                                                  <td><input type="text" name="v_row6_against" value="<?php echo $row_item['v_row6_against']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row6_against" value="<?php echo $row_item['v_row6_against']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row6_manufacturer'] == "") {?>
                                                  <td><input type="text" name="v_row6_manufacturer" value="<?php echo $row_item['v_row6_manufacturer']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row6_manufacturer" value="<?php echo $row_item['v_row6_manufacturer']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row6_ldtnumber'] == "") {?>
                                                  <td><input type="text" name="v_row6_ldtnumber" value="<?php echo $row_item['v_row6_ldtnumber']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row6_ldtnumber" value="<?php echo $row_item['v_row6_ldtnumber']?>" readonly></td>
                                                  <?php } ?>

                                                  <?php if($row_item['v_row6_vet'] == "") {?>
                                                  <td><input type="text" name="v_row6_vet" value="<?php echo $row_item['v_row6_vet']?>"></td>
                                                  <?php }else { ?>
                                                  <td><input class="bg-light" type="text" name="v_row6_vet" value="<?php echo $row_item['v_row6_vet']?>" readonly></td>
                                                  <?php } ?>
                                                </tr>
                                          </tbody>
                                      </table>
                                  </div>
                                  
                                  <div class="text-right">
                                  <input class="btn btn-primary" type="submit" name="updateCard" value="Update">
                                  </div>
                                </form>
                          </div>
                          </div>
                      </div>
                  </div>
          </div>
      </div>
    </div>
    <hr>
</div>
  <!-- page-content" -->



<?php include 'footer.php'; ?>