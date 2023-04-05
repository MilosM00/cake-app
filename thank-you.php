<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c28c53cee.js" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="css/thank-you.css">
    <script src="js/hamburger.js" defer></script>
    <title>THANK YOU</title>
</head>
<body>
    
    <!-- START NAVBAR -->
    <?php include("navbar.php"); ?>
    <!-- END NAVBAR -->

    <?php 
    
        include("dbconnection.php");

        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $category = $_POST["category"];
        $cake = $_POST["cake"];

        $code = $connection->prepare("insert into orders(FirstName, LastName, EmailAddress, StreetAddress, PhoneNumber, Category, Cake) values(?, ?, ?, ?, ?, ?, ?);");
        $code->bind_param("sssssss", $firstName, $lastName, $email, $address, $phone, $category, $cake);
        $code->execute();

    ?>

    
    <div class="thank-you">

        <i class="fa fa-check"></i>

        <p>
            Thank you for order.
            <br />
            We will ship your cake as soon as possible.
        </p>

        <a href="index.php">HOME</a>

    </div>
        
    <!-- START FOOTER -->
    <?php include("footer.php"); ?>
    <!-- END FOOTER -->

</body>
</html>