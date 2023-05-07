<nav>
    <a href="index.php#"><img id="nav-image" src="images/cake-logo.jpg" alt="cake application" /></a>
    <ul>
        <li><a href="index.php#">Home</a></li>
        <li><a href="index.php#about">About</a></li>
        <li><a href="index.php#chefs">Chefs</a></li>
        <li><a href="index.php#cakes">Cakes</a></li>
        <li><a href="index.php#contact">Contact</a></li>
        <li><a href="index.php#contact">Testimonials</a></li>
    </ul>
    <i id="hamburger-button" class="fa fa-bars"></i>
</nav>

<ul class="hamburger-menu">
    <li class="hamburger-li"><a href="index.php#">Home</a></li>
    <li class="hamburger-li"><a href="index.php#about">About</a></li>
    <li class="hamburger-li"><a href="index.php#chefs">Chefs</a></li>
    <li class="hamburger-li"><a href="index.php#cakes">Cakes</a></li>
    <li class="hamburger-li"><a href="index.php#contact">Contact</a></li>
    <li class="hamburger-li"><a href="index.php#testimonials">Testimonials</a></li>
</ul>

<style>

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}

/* START NAVBAR */

nav{
    position: sticky;
    top: 0;
    z-index: 20;

    padding-top: 10px;
    padding-bottom: 10px;
    background-color: #fff;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    box-shadow: 0 0 2px 2px rgba(0,0,0,0.3);
}

nav > a > img{
    width: 100px;
    height: 70px;
}

nav > ul{
    list-style: none;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 15px;
}

nav > ul > li > a{
    color: #000;
    text-decoration: none;
    font-style: italic;
    font-weight: 700;
    font-size: 18px;
}

#hamburger-button{
    display: none;
    color: #000;
    font-size: 25px;
}

.hamburger-menu{
    position: fixed;
    top: 95px;
    right: 0;
    width: 200px;
    height: 200px;
    z-index: 10;
    opacity: 0;

    padding-top: 10px;
    padding-bottom: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: #fff;
    font-style: italic;
    font-weight: 700;
    box-shadow: 0 0 2px 2px rgba(0,0,0,0.3);
    border-radius: 5px;
    list-style: none;
    gap: 5px;
    transition: 0.5s;
}

.hamburger-menu > li > a{
    text-decoration: none;
    color: #000;
    font-size: 18px;
}

@media (max-width: 800px) {
    nav{
        justify-content: space-between;
        padding-left: 20px;
        padding-right: 20px;
    }

    nav > ul{
        display: none;
    }

    #hamburger-button{
        display: block;
    }
}

/* END NAVBAR */

</style>

<?php // THIS IS PHP ?>