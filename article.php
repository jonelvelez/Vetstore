<?php include 'header.php'; ?>

<?php 

//Db Connection
include_once("connections/connection.php");
$con = connection();

//Page ID
$id = $_GET['ID'];

$sql = "SELECT * FROM `blog_post` WHERE blog_id = $id";
$blog_post = $con->query($sql ) or die ($con->error);
$row = $blog_post->fetch_assoc();

?>

<div class="container p-5">
    <div class="row">
        <div class="col-lg-8 bg-light">
            <?php echo $row['blog_content'] ?>
        </div>

        <div class="col-lg-4">
            <p>lorem</p>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>