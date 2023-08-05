<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $number = $_POST['number'];
    $pplnumber = $_POST['pplnumber'];
    $sql = "INSERT INTO `db`.`db` (`name`, `number`, `pplnumber`) VALUES ('$name', '$number', '$pplnumber');";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Make a Reservation</title>


</head>

<body>


    <nav>
        <ul class="nav-flex-row">
            <li class="nav-item">
                <a href="about.html">About</a>
            </li>
            <li class="nav-item">
                <a href="#">Reservation</a>
            </li>
            <li class="nav-item">
                <a href="index.html">Home</a>
            </li>
            <li class="nav-item">
                <a href="menu.html">Menu</a>
            </li>
        </ul>
    </nav>

    <section class="section-intro">
        <header>
            <h1>Make a Reservation</h1>
        </header>
        <div class="link-to-book-wrapper">
            <a class="link-to-book" href="#">Book a table</a>
        </div>
    </section>




    <div class="container">
        <div class="row-flex">
            <div class="flex-column-form">
                <h3>
                    Make a booking
                </h3>
                <form class="media-centered" name="myform" action="reservation2.php" method="post">
                    <div class="form-group">
                        <p>
                            Please leave your number we will call to make a reservation
                        </p>
                        <input type="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" required
                            name="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="exampleInputphoneNumber1" name="number" required
                            placeholder="Enter your phone number">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="exampleInputpplnumber" name="pplnumber" required
                            placeholder="Enter number of people">
                    </div>
                    <button type="submit" class="btn btn-primary" onclick="validateform()">Submit</button>
                </form>
            </div>


        </div>
    </div>

    <?php
        if($insert == true){
        echo "<p class='successmessage'>Reservation Succesful!</p>";
        }
    ?>


    <div class="opening-time">


        <p>
            <span class="otc"><b> Opening times </b></span>
            <span>Monday—Thursday: 08:00 — 22:00</span>
            <span>Friday—Saturday: 09:00 — 23:00 </span>
            <span>Sunday: 10:00 — 17:00</span>
        </p>
    </div>


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/1.jpg" class="d-block w-100" alt="food">
            </div>
            <div class="carousel-item">
                <img src="img/2.jpg" class="d-block w-100" alt="food">
            </div>
            <div class="carousel-item">
                <img src="img/3.jpg" class="d-block w-100" alt="food">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>






    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <!-- <script>

        function validateform() {
            var name = document.myform.name.value;
            var number = document.myform.number.value;

            if (name == null || name == "") {
                alert("Name can't be blank");
                return false;
            } else if (number.length != 10 || number == null) {
                alert("Phone number must be 10 characters long.");
                return false;
            }
        }

    </script> -->

    <script src="main.js"></script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>