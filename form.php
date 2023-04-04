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
    <link rel="stylesheet" href="css/form.css">
    <script src="js/hamburger.js" defer></script>
    <script src="js/form.js" defer></script>
    <title>FORM</title>
</head>
<body>
    <!-- START NAVBAR -->
    <?php include("navbar.php") ?>
    <!-- END NAVBAR -->

    <!-- START FORM -->
    <div class="form-div">

        <p>Please, enter your data.</p>

        <form class="form" method="POST" action="thank-you.php">
            <label id="label-first-name">First Name</label>
            <input id="input-first-name" type="text" placeholder="Your First Name..." name="firstName" />

            <label id="label-last-name">Last Name</label>
            <input id="input-last-name" type="text" placeholder="Your Last Name..." name="lastName" />

            <label id="label-phone-number">Phone Number</label>
            <input id="input-phone-number" type="text" placeholder="Your Phone Number..." name="phone" />

            <label id="label-email-address">Email Address</label>
            <input id="input-email-address" type="text" placeholder="Your Email Address..." name="email" />

            <label id="label-street-address">Street Address</label>
            <input id="input-street-address" type="text" placeholder="Your Street Address..." name="address" />
            
            <input class="submit-button" type="submit" value="Submit" />
        </form>
    </div>
    <!-- END FORM -->

    <!-- START FOOTER -->
    <?php include("footer.php") ?>
    <!-- END FOOTER -->
</body>
</html>