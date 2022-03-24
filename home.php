<?php
session_start();
 if(!isset($_SESSION['login']) || !$_SESSION['login']==1){
   header('Location:login.php');
 }
 $id = $_SESSION['user_id']; 
 include('db/connect.php');
 $query = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($result);


$getNameQuery = "SELECT fullName FROM users WHERE id='$id'";
$getName = mysqli_query($conn,$getNameQuery);
$userName = mysqli_fetch_assoc($getName);










?>
<!DOCTYPE html>
<html>

<head>
    <title>Goals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style/thome.css">


</head>

<body>

    <div class="overlay"></div>
    <!-- this is navbar -->
    <?php include('include/nav.php');?>

    <h1 style="color:white; text-align:center; margin-top:100px">Welcome Back <b class="auto-type"
            style="color:cyan"></b></h1>
    <div class="blue-btn">
        <a class="first-link">
            Get Started
        </a>
        <a href="add-goal.php">
            Create a Goal Now
        </a>
    </div>
    <div class="blue-btn">
        <a class="first-link">
            See Goals
        </a>
        <a href="goal.php">
            Go to Goals
        </a>
    </div>


</body>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<!-- typed js cdn -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
var typed = new Typed(".auto-type", {
    strings: ["<?php echo implode("", $userName)  ?>"],
    typeSpeed: 150,
    loop: true
})
</script>


</html>